<?php
// admin/dashboard.php - cards-only, links to ../index.php for viewing posts
require_once __DIR__ . '/../functions.php';
if (empty($_SESSION['logged_in'])) { header('Location: login.php'); exit; }

// debug mode toggle ?debug=1
$debug = !empty($_GET['debug']);

/**
 * Determine where the public single-post page is.
 * Prefer index.php (which in your project serves single posts via ?slug=...).
 * Then check other common filenames.
 */
function detect_post_page() {
    $root = dirname(__DIR__); // project root (one level above admin)
    $candidates = ['index.php', 'post.php', 'blog.php', 'blog-single-post.php'];
    foreach ($candidates as $f) {
        if (file_exists($root . DIRECTORY_SEPARATOR . $f)) return '../' . $f;
    }
    // fallback
    return '../index.php';
}

/**
 * Resolve a thumbnail URL for display in admin.
 */
function resolve_thumb_url($imgStored) {
    $root = dirname(__DIR__); // project root
    if (empty($imgStored)) return '../assets/images/blog/grid/default.jpg';
    if (stripos($imgStored, 'http://') === 0 || stripos($imgStored, 'https://') === 0) return $imgStored;
    $s = ltrim($imgStored, '/');
    $candidates = [
        $root . DIRECTORY_SEPARATOR . $s,
        $root . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . $s,
    ];
    foreach ($candidates as $p) {
        if (file_exists($p)) {
            $rel = substr($p, strlen($root) + 1);
            return '../' . str_replace(DIRECTORY_SEPARATOR, '/', $rel);
        }
    }
    return '../' . str_replace('\\','/',$s);
}

// Handle delete (POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_slug'])) {
    $delSlug = $_POST['delete_slug'];
    $posts = load_blogs();
    $posts = array_values(array_filter($posts, fn($p) => ($p['slug'] ?? '') !== $delSlug));
    save_blogs($posts);
    header('Location: dashboard.php');
    exit;
}

// Load posts sorted newest-first
$posts = load_blogs();
usort($posts, function($a,$b){
    $da = strtotime($a['date'] ?? '1970-01-01');
    $db = strtotime($b['date'] ?? '1970-01-01');
    return $db <=> $da;
});

// detect public post page (prefers index.php)
$POST_PAGE = detect_post_page();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Admin — Dashboard</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background:#f6f7fb; }
    .card-post { border-radius:10px; box-shadow:0 6px 18px rgba(0,0,0,0.06); transition:transform .12s; }
    .card-post:hover { transform: translateY(-6px); }
    .post-thumb { width:160px; height:110px; background:#eee; display:flex; align-items:center; justify-content:center; overflow:hidden; border-radius:8px; }
    .post-thumb img { width:auto; height:100%; object-fit:contain; display:block; }
    .excerpt { color:#444; font-size:.95rem; }
    .topbar { display:flex; gap:12px; align-items:center; justify-content:space-between; margin:18px 0; }
    .small-muted { color:#6c757d; font-size:.9rem; }
    .actions .btn { margin-left:6px; }
    .card-post .stretched-link { z-index:2; }
  </style>
</head>
<body>
  <div class="container py-4">
    <div class="topbar">
      <h2 class="mb-0">Admin Dashboard</h2>
      <div class="d-flex align-items-center">
        <a href="add_blog.php" class="btn btn-primary me-2">+ Add Blog</a>
        <a href="logout.php" class="btn btn-outline-secondary">Logout</a>
      </div>
    </div>

    <?php if (empty($posts)): ?>
      <div class="alert alert-info">No blog posts found. <a href="add_blog.php">Create your first post</a>.</div>
    <?php else: ?>

      <div class="row g-3">
        <?php foreach ($posts as $p):
            $title = htmlspecialchars($p['title'] ?? '');
            $date = htmlspecialchars($p['date'] ?? '');
            $slug = $p['slug'] ?? '';
            $author = htmlspecialchars($p['author'] ?? '');
            $category = htmlspecialchars($p['category'] ?? '');
            $thumb = resolve_thumb_url($p['image'] ?? '');
            $excerpt = strip_tags($p['content'] ?? '');
            if (mb_strlen($excerpt) > 120) $excerpt = mb_substr($excerpt,0,120) . '...';

            // URLs
            $editUrl = 'edit-blog.php?slug=' . urlencode($slug);      // stays inside /admin/
            //$viewUrl = $PUBLIC_PRETTY_BASE . '/' . urlencode($slug);  // removed per request
        ?>
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card card-post p-3 h-100 position-relative">
            <div class="d-flex gap-3">
              <div class="post-thumb flex-shrink-0">
                <img src="<?= htmlspecialchars($thumb) ?>" alt="<?= $title ?>">
              </div>
              <div class="flex-grow-1">
                <!-- removed stretched-link so buttons are clickable -->
                <h5 class="mb-1"><a href="<?= $editUrl ?>" class="text-decoration-none text-dark"><?= $title ?></a></h5>
                <div class="small-muted mb-2"><?= $date ?> — <?= $author ?></div>
                <p class="mb-2 excerpt"><?= htmlspecialchars($excerpt) ?></p>

                <div class="d-flex align-items-center justify-content-between">
                  <div class="small-muted">Category: <?= $category ?: '—' ?></div>
                  <div class="actions">
                    <!-- EDIT (admin file is edit-blog.php) -->
                    <a href="<?= $editUrl ?>" class="btn btn-sm btn-outline-primary">Edit</a>

                    <!-- DELETE (POST to this page, only deletes the blog) -->
                    <form method="post" action="dashboard.php" style="display:inline;" onsubmit="return confirm('Delete this post permanently?');">
                      <input type="hidden" name="delete_slug" value="<?= htmlspecialchars($slug) ?>">
                      <button class="btn btn-sm btn-outline-danger" type="submit">Delete</button>
                    </form>

                    <!-- VIEW removed as requested -->

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

    <?php endif; ?>

    <?php if ($debug): ?>
      <div class="mt-4">
        <h5>Debug info</h5>
        <pre><?php
            echo "POST_PAGE resolved to: " . htmlspecialchars($POST_PAGE) . PHP_EOL . PHP_EOL;
            foreach ($posts as $i => $p) {
                $s = $p['slug'] ?? '';
                $img = $p['image'] ?? '';
                $thumb = resolve_thumb_url($img);
                echo "#$i slug={$s}\n";
                echo "  stored image: {$img}\n";
                echo "  thumb url: {$thumb}\n";
                echo "  edit url: admin/edit-blog.php?slug=" . urlencode($s) . "\n";
                echo "  view url: " . $POST_PAGE . "?slug=" . urlencode($s) . "\n\n";
            }
        ?></pre>
      </div>
    <?php endif; ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
