<?php 
require_once __DIR__ . "/functions.php";
require "common/header.php"; 


// debug flag (use ?debug=1 in the URL)
$debug = !empty($_GET['debug']);

/**
 * Normalize stored image path for use in <img src="">
 * - absolute URLs are returned as-is
 * - 'uploads/xxx' -> 'admin/uploads/xxx' (relative path, no leading slash)
 * - 'admin/uploads/xxx' -> 'admin/uploads/xxx' (relative path, no leading slash)
 * - '/admin/uploads/xxx' -> 'admin/uploads/xxx' (strip leading slash)
 *
 * We intentionally return a relative path (no leading slash) so the browser
 * resolves it relative to the current site folder (works for subfolders).
 */
function normalize_image_url_for_browser($stored) {
    if (empty($stored)) return '';
    $s = trim($stored);

    // absolute external URL -> use as-is
    if (stripos($s, 'http://') === 0 || stripos($s, 'https://') === 0) return $s;

    // strip leading slash if present
    if ($s[0] === '/') $s = ltrim($s, '/');

    // If it starts with "uploads/" -> make "admin/uploads/..."
    if (stripos($s, 'uploads/') === 0) {
        return 'admin/' . ltrim($s, '/');
    }

    // If it already starts with "admin/uploads/" keep it
    if (stripos($s, 'admin/uploads/') === 0) {
        return ltrim($s, '/');
    }

    // fallback: assume under admin/uploads
    return 'admin/' . ltrim($s, '/');
}

/**
 * Build filesystem path to check if the file exists.
 * Uses project root (__DIR__) so it works inside subfolders of document root.
 * Accepts the browser-relative path returned by normalize_image_url_for_browser().
 */
function filesystem_path_for_image($browserPath) {
    if (empty($browserPath)) return '';
    // If it's an external URL we can't check local file
    if (stripos($browserPath, 'http://') === 0 || stripos($browserPath, 'https://') === 0) return '(external URL)';
    // Build path relative to project root
    $projectRoot = __DIR__; // this file is in project root
    // Ensure browserPath has no leading slash
    $p = ltrim($browserPath, '/');
    return $projectRoot . DIRECTORY_SEPARATOR . str_replace(['/', '\\'], DIRECTORY_SEPARATOR, $p);
}

// Load blogs from JSON
$blogs = load_blogs();

// Sort newest first by date if possible (tries strtotime)
usort($blogs, function($a, $b){
    $da = strtotime($a['date'] ?? '1970-01-01');
    $db = strtotime($b['date'] ?? '1970-01-01');
    return $db <=> $da;
});
?>

<section class="page-title page-title-layout5 bg-overlay">
  <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pagetitle__heading">Health Essentials</h1>
        <nav>
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<!-- ======================
  Blog Grid
========================= -->
<section class="blog-grid">
  <div class="container">
    <div class="row">

      <?php if (!empty($blogs)): ?>
        <?php foreach ($blogs as $bIndex => $b): ?>

          <?php
            // Normalize the stored path into a browser-friendly value (relative or absolute)
            $imgStored = $b['image'] ?? '';
            $imgBrowser = normalize_image_url_for_browser($imgStored);

            // Build server filesystem path that we will actually check
            $serverPath = filesystem_path_for_image($imgBrowser);
            $exists = '(unknown)';
            if ($serverPath === '(external URL)') {
                $exists = 'external';
            } elseif ($serverPath === '') {
                $exists = 'no-image';
            } else {
                $exists = file_exists($serverPath) ? 'yes' : 'no';
            }

            // Categories (support array or comma-separated)
            $cats = [];
            if (!empty($b['category'])) {
                if (is_array($b['category'])) $cats = $b['category'];
                else $cats = array_map('trim', explode(',', $b['category']));
            }

            // Date formatting
            $dateRaw = $b['date'] ?? '';
            $dateDisp = $dateRaw;
            if ($dateRaw) {
                $ts = strtotime($dateRaw);
                if ($ts !== false) $dateDisp = date('M d, Y', $ts);
            }

            $author = htmlspecialchars($b['author'] ?? '');
            $title = htmlspecialchars($b['title'] ?? '');
            $excerpt = strip_tags($b['content'] ?? '');
            if (mb_strlen($excerpt) > 140) $excerpt = mb_substr($excerpt, 0, 140) . '...';
            $slug = $b['slug'] ?? '';

            // --- CHANGED PERMALINK TARGET: point to the single-post page (post.php)
            $permalink = 'blog-single-post.php?slug=' . urlencode($slug);

            // For <img src> use:
            // - if external URL -> $imgBrowser (full URL)
            // - else use relative path (no leading slash) so it resolves under project root
            //   e.g. 'admin/uploads/1763...png' which becomes 'yourproject/admin/uploads/...' in browser
            $imgForSrc = $imgBrowser;
          ?>

          <div class="col-sm-12 col-md-6 col-lg-4 blog-main-card">
            <div class="post-item">
              <div class="post__img">
                <a href="<?= $permalink ?>">
                  <?php if ($imgForSrc): ?>
                    <img src="<?= htmlspecialchars($imgForSrc) ?>" alt="post image" loading="lazy">
                  <?php else: ?>
                    <img src="assets/images/blog/grid/default.jpg" alt="post image" loading="lazy">
                  <?php endif; ?>
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <?php foreach ($cats as $c): ?>
                    <a href="#"><?= htmlspecialchars($c) ?></a>
                  <?php endforeach; ?>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date"><?= htmlspecialchars($dateDisp) ?></span>
                  <a class="post__meta-author" href="#"><?= $author ?></a>
                </div>
                <h4 class="post__title"><a href="<?= $permalink ?>"><?= $title ?></a></h4>

                <p class="post__desc"><?= htmlspecialchars($excerpt) ?></p>
                <a href="<?= $permalink ?>" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->

              <?php if ($debug): ?>
                <div style="background:#fff7; padding:10px; margin:10px 0; font-family:monospace; font-size:12px;">
                  <strong>DEBUG (post #<?= $bIndex ?>)</strong><br>
                  stored image value: <code><?= htmlspecialchars($imgStored) ?></code><br>
                  img value used in src: <code><?= htmlspecialchars($imgForSrc) ?></code><br>
                  server path checked: <code><?= htmlspecialchars($serverPath) ?></code><br>
                  file exists on server? <strong><?= $exists ?></strong>
                </div>
              <?php endif; ?>

            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->

        <?php endforeach; ?>
      <?php else: ?>
        <div class="col-12">
          <p>No blog posts found.</p>
        </div>
      <?php endif; ?>

    </div><!-- /.row -->
    <div class="row">
      <div class="col-12 text-center">
        <nav class="pagination-area">
          <ul class="pagination justify-content-center">
            <li><a class="current" href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#"><i class="icon-arrow-right"></i></a></li>
          </ul>
        </nav><!-- .pagination-area -->
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.blog Grid -->

<?php require "common/footer.php"; ?>
<style>
  /* Fix blog grid images to 250x200 */
/* Container for fixed-size image box */
.blog-grid .post-item .post__img {
    width: 100%;
    height: 250px;
    background: #f5f5f5; /* light gray background */
    border-radius: 6px;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Make the entire image visible */
.blog-grid .post-item .post__img img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;   /* FULL IMAGE VISIBLE */
    border-radius: 6px;
}
/* FORCE FULL IMAGE TO SHOW — OVERRIDES THE THEME */
.post-item .post__img {
    width: 100%;
    height: 250px !important;         /* fixed container height */
    background: #f5f5f5;
    border-radius: 6px;
    overflow: hidden;                 /* prevents weird overflow */
    display: flex;
    justify-content: center;
    align-items: center;
}
.blog-grid .post-item{
  border: 1px solid grey;
}
.post-item .post__img img {
    width: auto !important;
    height: 100% !important;          /* fit height */
    object-fit: contain !important;   /* show full image */
    object-position: center !important;
}

/* Hover effect */
.blog-grid .post-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 18px rgba(0,0,0,0.12);
}

</style>