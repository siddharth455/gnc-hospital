<?php
require_once "../functions.php";
if (empty($_SESSION['logged_in'])) { header("Location: login.php"); exit; }

$blogs = load_blogs();
$slug = $_GET["slug"] ?? "";

// Find blog
$blogIndex = -1;
foreach ($blogs as $i => $b) {
    if (($b["slug"] ?? '') === $slug) {
        $blogIndex = $i;
        break;
    }
}
if ($blogIndex === -1) {
    die("Blog not found.");
}

$blog = $blogs[$blogIndex];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $blogs[$blogIndex]["title"] = $_POST["title"];
    $blogs[$blogIndex]["author"] = $_POST["author"];
    $blogs[$blogIndex]["date"] = $_POST["date"];
    $blogs[$blogIndex]["category"] = $_POST["category"];
    $blogs[$blogIndex]["toc"] = isset($_POST["toc"]);
    $blogs[$blogIndex]["content"] = $_POST["content"];

    // If new image uploaded
    if (!empty($_FILES["image"]["name"])) {
        $uplName = time() . "_" . basename($_FILES["image"]["name"]);
        $imgPath = "uploads/" . $uplName;
        // Store uploaded file inside admin/uploads/...
        move_uploaded_file($_FILES["image"]["tmp_name"], "../admin/" . $imgPath);
        $blogs[$blogIndex]["image"] = $imgPath;
    }

    save_blogs($blogs);
    header("Location: dashboard.php");
    exit;
}

// compute preview src for current image (handles stored "uploads/..." paths)
$imgPreview = '';
if (!empty($blog['image'])) {
    // if it's already a URL (http/https) use as-is
    if (stripos($blog['image'], 'http://') === 0 || stripos($blog['image'], 'https://') === 0) {
        $imgPreview = $blog['image'];
    } else {
        // check if file exists in admin folder
        $candidate = __DIR__ . '/' . $blog['image']; // current file is /admin/edit-blog.php so __DIR__ is admin
        if (file_exists($candidate)) {
            $imgPreview = $blog['image']; // relative to admin, OK
        } else {
            // maybe stored relative to project root 'uploads/..' -> try ../admin/uploads/...
            $candidate2 = dirname(__DIR__) . '/admin/' . ltrim($blog['image'], '/');
            if (file_exists($candidate2)) {
                $imgPreview = 'admin/' . ltrim($blog['image'], '/'); // may be used from public side
                // but in admin we want relative path from current file: ../admin/uploads/...
                $imgPreview = '../admin/' . ltrim($blog['image'], '/');
            } else {
                // fallback: try relative one level up
                $imgPreview = '../' . ltrim($blog['image'], '/');
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Edit Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<style>
    body { background: #f5f7fb; font-family: Arial, sans-serif; }
    .card-custom { border-radius: 12px; box-shadow: 0 8px 25px rgba(0,0,0,0.08); padding: 25px; background:#fff; }
    .page-title { font-size: 28px; font-weight: 700; margin-bottom: 20px; }
    .img-preview { width: 180px; height: auto; border-radius: 8px; border: 1px solid #eee; }
    .form-label { font-weight:600; }
</style>
</head>
<body>

<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="page-title">Edit Blog</h3>
        <a href="dashboard.php" class="btn btn-secondary">⬅ Back to Dashboard</a>
    </div>

    <div class="card card-custom">
        <form method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input name="title" class="form-control" required value="<?= htmlspecialchars($blog['title'] ?? '') ?>">
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Author</label>
                    <input name="author" class="form-control" required value="<?= htmlspecialchars($blog['author'] ?? '') ?>">
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Date</label>
                    <input name="date" type="date" class="form-control" required value="<?= htmlspecialchars($blog['date'] ?? '') ?>">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Category</label>
                <input name="category" class="form-control" value="<?= htmlspecialchars($blog['category'] ?? '') ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Current Image</label><br>
                <?php if (!empty($imgPreview)): ?>
                    <img src="<?= htmlspecialchars($imgPreview) ?>" alt="current image" class="img-preview mb-2"><br>
                <?php else: ?>
                    <div class="text-muted mb-2">No image uploaded</div>
                <?php endif; ?>
                <label class="form-label mt-2">Upload New Image (optional)</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="toc" id="tocCheck" class="form-check-input" <?= !empty($blog['toc']) ? 'checked' : '' ?>>
                <label for="tocCheck" class="form-check-label">Enable TOC (Table of Contents)</label>
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <!-- Note: content is HTML; output raw so editor loads the HTML -->
                <textarea id="content" name="content"><?= $blog['content'] ?? '' ?></textarea>
            </div>

            <script>
                ClassicEditor
                    .create(document.querySelector('#content'))
                    .catch(error => console.error(error));
            </script>

            <button type="submit" class="btn btn-primary w-100 py-2">Update Blog</button>
        </form>
    </div>
</div>

</body>
</html>
