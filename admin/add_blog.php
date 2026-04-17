<?php
require_once "../functions.php";
if (empty($_SESSION['logged_in'])) { header("Location: login.php"); exit; }

$blogs = load_blogs();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $slug = slugify($title);

    $img = "";
    if (!empty($_FILES['image']['name'])) {
        $name = time() . "_" . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], UPLOAD_DIR . $name);
        $img = "uploads/" . $name;
    }

    $blogs[] = [
        "title" => $title,
        "slug" => $slug,
        "author" => $_POST['author'],
        "date" => $_POST['date'],
        "category" => $_POST['category'],
        "toc" => isset($_POST['toc']),
        "image" => $img,
        "content" => $_POST['content']
    ];

    save_blogs($blogs);
    header("Location: dashboard.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Blog</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<style>
    body {
        background: #f5f7fb;
        font-family: Arial, sans-serif;
    }
    .card-custom {
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        padding: 25px;
        background: #fff;
        animation: fadeIn .3s ease-out;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .page-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
    }
</style>
</head>

<body>

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="page-title">Add New Blog</h3>
        <a href="dashboard.php" class="btn btn-secondary">⬅ Back to Dashboard</a>
    </div>

    <div class="card card-custom">

        <form method="POST" enctype="multipart/form-data">

            <div class="mb-3">
                <label class="form-label fw-bold">Title</label>
                <input name="title" class="form-control" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Author</label>
                    <input name="author" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Date</label>
                    <input name="date" type="date" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Category</label>
                <input name="category" class="form-control" placeholder="e.g. Health, Nutrition">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Blog Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="form-check mb-3">
                <input type="checkbox" name="toc" class="form-check-input" id="tocCheck">
                <label class="form-check-label" for="tocCheck">Enable TOC (Table of Contents)</label>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Content</label>
                <textarea id="content" name="content"></textarea>
            </div>

            <script>
                ClassicEditor.create(document.querySelector('#content'));
            </script>

            <button class="btn btn-primary w-100 py-2">Add Blog</button>

        </form>

    </div>

</div>

</body>
</html>
