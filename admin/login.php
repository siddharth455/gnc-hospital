<?php
session_start();

define('ADMIN_USER', 'SJS');
define('ADMIN_PASS', 'hospital');

$err = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'];
    $p = $_POST['password'];

    if ($u === ADMIN_USER && $p === ADMIN_PASS) {
        $_SESSION['logged_in'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $err = "Invalid credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    body {
        background: #f0f2f5;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Arial, sans-serif;
    }
    .login-card {
        width: 100%;
        max-width: 420px;
        padding: 30px;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0px 8px 25px rgba(0,0,0,0.10);
        animation: fadeIn .3s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .login-title {
        font-weight: 700;
        margin-bottom: 15px;
        text-align: center;
    }
</style>
</head>
<body>

<div class="login-card">
    <h3 class="login-title">Admin Login</h3>

    <?php if ($err): ?>
        <div class="alert alert-danger py-2"><?= $err ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Username</label>
            <input name="username" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input name="password" type="password" class="form-control" required>
        </div>

        <button class="btn btn-primary w-100 py-2">Login</button>
    </form>
</div>

</body>
</html>
