<?php
// apply_handler.php (PHPMailer + SMTP) - Reply-To = applicant's email (safe and recommended)
//
// Requirements:
// 1) composer require phpmailer/phpmailer
// 2) configure $ADMIN_EMAIL, $FROM_EMAIL and SMTP settings below
// 3) ensure uploads/resumes/ is writable (script will create it if missing)

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Composer autoload - fail early with clear message if missing
$autoload = __DIR__ . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    http_response_code(500);
    echo '<h2>Server configuration error</h2>';
    echo '<p>Composer autoload (vendor/autoload.php) not found. Please run <code>composer require phpmailer/phpmailer</code> in your project root, or include PHPMailer manually.</p>';
    exit;
}
require $autoload;

// --------- CONFIG (EDIT these) ----------------
$ADMIN_EMAIL = 'you@yourdomain.com';        // <-- where you receive applications
$FROM_EMAIL  = 'no-reply@yourdomain.com';  // <-- an email on your domain (recommended)
$FROM_NAME   = 'Career Application Form';

$UPLOAD_DIR = __DIR__ . '/uploads/resumes/'; // saved resumes
$LOG_FILE   = __DIR__ . '/uploads/applications.json'; // backup log

// SMTP config - replace with your SMTP provider credentials
$SMTP_HOST   = 'smtp.gmail.com';          // e.g. smtp.gmail.com
$SMTP_PORT   = 587;                       // 587 for TLS, 465 for SSL
$SMTP_USER   = 'your-smtp-username@gmail.com'; // SMTP username
$SMTP_PASS   = 'your-smtp-password-or-app-password'; // SMTP password (app password for Gmail)
$SMTP_SECURE = 'tls';                     // 'tls' or 'ssl'
// ------------------------------------------------

// Basic request method guard
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo 'Method not allowed';
    exit;
}

// Simple sanitizing helper
function clean($v) {
    return trim((string)$v);
}

// Collect & validate inputs
$name       = clean($_POST['name'] ?? '');
$email      = clean($_POST['email'] ?? '');
$phone      = clean($_POST['phone'] ?? '');
$position   = clean($_POST['position'] ?? ($_POST['job_id'] ?? ''));
$experience = clean($_POST['experience'] ?? '');
$about      = clean($_POST['about'] ?? '');
$job_id     = clean($_POST['job_id'] ?? '');

$errors = [];

// validate
if ($name === '') $errors[] = 'Name is required.';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
if ($phone === '') $errors[] = 'Phone is required.';
if ($position === '') $errors[] = 'Position is required.';

// file validation
if (!isset($_FILES['resume']) || $_FILES['resume']['error'] === UPLOAD_ERR_NO_FILE) {
    $errors[] = 'Resume file is required.';
} else {
    $file = $_FILES['resume'];
    if ($file['error'] !== UPLOAD_ERR_OK) {
        $errors[] = 'File upload error (code: ' . intval($file['error']) . ').';
    } else {
        $maxBytes = 4 * 1024 * 1024; // 4 MB
        if ($file['size'] > $maxBytes) $errors[] = 'Resume exceeds 4 MB limit.';
        $allowedExt = ['pdf','doc','docx'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        if (!in_array($ext, $allowedExt, true)) $errors[] = 'Resume must be PDF, DOC, or DOCX.';
        // optional mime check
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);
        $allowedMime = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];
        if (!in_array($mime, $allowedMime, true)) {
            // allow minor variations (some servers use different mime strings)
            $relaxedAllowed = [
                'application/zip', // sometimes docx reports as zip
                'application/x-zip-compressed',
                'binary/octet-stream'
            ];
            if (!in_array($mime, $relaxedAllowed, true)) {
                $errors[] = 'Unsupported resume MIME type: ' . htmlspecialchars($mime);
            }
        }
    }
}

if (!empty($errors)) {
    http_response_code(400);
    echo "<h3>There were errors with your submission:</h3><ul>";
    foreach ($errors as $e) echo '<li>' . htmlspecialchars($e) . '</li>';
    echo "</ul><p><a href='javascript:history.back()'>Go back</a></p>";
    exit;
}

// Ensure upload dir exists
if (!is_dir($UPLOAD_DIR) && !mkdir($UPLOAD_DIR, 0755, true)) {
    http_response_code(500);
    echo 'Failed to create upload directory.';
    exit;
}

// Save resume with safe unique name
$origName = basename($file['name']);
$ext = strtolower(pathinfo($origName, PATHINFO_EXTENSION));
$unique = time() . '-' . bin2hex(random_bytes(6));
$targetName = $unique . '.' . $ext;
$targetPath = rtrim($UPLOAD_DIR, '/') . '/' . $targetName;

if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
    http_response_code(500);
    echo 'Failed to save uploaded resume.';
    exit;
}

// Build payload for logging/backup
$payload = [
    'timestamp'   => date('c'),
    'name'        => $name,
    'email'       => $email,
    'phone'       => $phone,
    'job_id'      => $job_id,
    'position'    => $position,
    'experience'  => $experience,
    'about'       => $about,
    'resume_file' => $targetName,
];

// Append to JSON log (create parent folder if needed)
$logDir = dirname($LOG_FILE);
if (!is_dir($logDir)) @mkdir($logDir, 0755, true);
$existing = [];
if (file_exists($LOG_FILE)) {
    $s = file_get_contents($LOG_FILE);
    $existing = json_decode($s, true) ?: [];
}
$existing[] = $payload;
@file_put_contents($LOG_FILE, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

// ----------------- Send email via PHPMailer SMTP -----------------
// Create PHPMailer instance
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = $SMTP_HOST;
    $mail->SMTPAuth   = true;
    $mail->Username   = $SMTP_USER;
    $mail->Password   = $SMTP_PASS;
    $mail->SMTPSecure = $SMTP_SECURE;
    $mail->Port       = $SMTP_PORT;

    // From = your domain; Reply-To = applicant (so replies go to user)
    $mail->setFrom($FROM_EMAIL, $FROM_NAME);
    $mail->addAddress($ADMIN_EMAIL);
    $mail->addReplyTo($email, $name);

    $mail->Subject = "Job application: {$position} - {$name}";

    // Build HTML body
    $bodyHtml = "<h2>New Job Application</h2>";
    $bodyHtml .= "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>";
    $bodyHtml .= "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
    $bodyHtml .= "<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>";
    if ($job_id !== '') $bodyHtml .= "<p><strong>Job ID:</strong> " . htmlspecialchars($job_id) . "</p>";
    $bodyHtml .= "<p><strong>Position:</strong> " . htmlspecialchars($position) . "</p>";
    if ($experience !== '') $bodyHtml .= "<p><strong>Experience:</strong> " . htmlspecialchars($experience) . "</p>";
    if ($about !== '') $bodyHtml .= "<p><strong>About:</strong><br>" . nl2br(htmlspecialchars($about)) . "</p>";
    $bodyHtml .= "<p>Resume attached.</p>";

    $mail->isHTML(true);
    $mail->Body    = $bodyHtml;
    $mail->AltBody = "New job application\n\n"
                   . "Name: $name\nEmail: $email\nPhone: $phone\n"
                   . ($job_id ? "Job ID: $job_id\n" : "")
                   . "Position: $position\nExperience: $experience\n\nAbout:\n$about\n\nResume: $targetName\n";

    // Attach resume
    $mail->addAttachment($targetPath, $origName);

    // Send
    $mail->send();

    // Success: show friendly page or redirect
    echo "<!doctype html><html><head><meta charset='utf-8'><title>Application Sent</title></head><body>";
    echo "<h2>Thank you — your application was submitted.</h2>";
    echo "<p>We have received your application for <strong>" . htmlspecialchars($position) . "</strong>.</p>";
    echo "<p><a href='career.php'>Return to careers</a></p>";
    echo "</body></html>";
    exit;

} catch (\Exception $e) {
    // PHPMailer failed — log & show fallback message (we have saved the resume & JSON backup)
    error_log("PHPMailer error (mail->ErrorInfo): " . ($mail->ErrorInfo ?? 'N/A') . " Exception: " . $e->getMessage());

    echo "<!doctype html><html><head><meta charset='utf-8'><title>Application Received</title></head><body>";
    echo "<h2>Application received</h2>";
    echo "<p>Your resume was uploaded successfully and your application is saved on the server, but we couldn't send the notification email right now.</p>";
    echo "<p>We will process your application manually. If you'd like, you can also email your resume to: " . htmlspecialchars($ADMIN_EMAIL) . ".</p>";
    echo "<p><a href='career.php'>Return to careers</a></p>";
    echo "</body></html>";
    exit;
}
