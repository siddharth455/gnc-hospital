<?php
// blog-single-post.php
// load functions (starts session) BEFORE output to avoid session_start() warning
require_once __DIR__ . "/functions.php";
require "common/header.php";

// Get slug from query string
$slug = $_GET['slug'] ?? null;
if (!$slug) {
    // Optionally redirect to blog listing
    header('Location: blog.php');
    exit;
}

// Helper: normalize image path for browser src (returns either full URL or relative 'admin/uploads/...' path)
function normalize_image_src($stored) {
    if (empty($stored)) return '';
    $s = trim($stored);
    if (stripos($s, 'http://') === 0 || stripos($s, 'https://') === 0) return $s;
    if ($s[0] === '/') $s = ltrim($s, '/');
    // map old 'uploads/...' to 'admin/uploads/...'
    if (stripos($s, 'uploads/') === 0 && stripos($s, 'admin/uploads/') !== 0) {
        return 'admin/' . $s;
    }
    return $s;
}

// Load blogs and find requested post
$blogs = load_blogs();
$post = null;
$index = null;
foreach ($blogs as $i => $b) {
    if (($b['slug'] ?? '') === $slug) { $post = $b; $index = $i; break; }
}
if (!$post) {
    http_response_code(404);
    echo "<section class='container'><h1>Post not found</h1><p>The post you requested doesn't exist.</p></section>";
    require "common/footer.php";
    exit;
}

// Sort blogs by date for prev/next/recent (make a copy sorted)
$sorted = $blogs;
usort($sorted, function($a,$b){
    $da = strtotime($a['date'] ?? '1970-01-01');
    $db = strtotime($b['date'] ?? '1970-01-01');
    return $db <=> $da;
});

// Find previous & next in sorted list
$prev = $next = null;
for ($i=0;$i<count($sorted);$i++){
    if (($sorted[$i]['slug'] ?? '') === $slug) {
        if (isset($sorted[$i+1])) $prev = $sorted[$i+1];
        if (isset($sorted[$i-1])) $next = $sorted[$i-1];
        break;
    }
}

// Recent posts: take first 3 from $sorted excluding current
$recent = [];
foreach ($sorted as $s) {
    if (($s['slug'] ?? '') === $slug) continue;
    $recent[] = $s;
    if (count($recent) >= 3) break;
}

// Prepare display values
$imgSrc = normalize_image_src($post['image'] ?? '');
$imgForOutput = $imgSrc ? htmlspecialchars($imgSrc) : '';
$title = htmlspecialchars($post['title'] ?? '');
$author = htmlspecialchars($post['author'] ?? '');
$dateRaw = $post['date'] ?? '';
$dateDisp = $dateRaw;
if ($dateRaw !== '') {
    $ts = strtotime($dateRaw);
    if ($ts !== false) $dateDisp = date('M d, Y', $ts);
}
$category = $post['category'] ?? '';
$categoryList = [];
if (!empty($category)) {
    if (is_array($category)) $categoryList = $category;
    else $categoryList = array_map('trim', explode(',', $category));
}
// Content is HTML saved by editor — output as-is
$contentHtml = $post['content'] ?? '';
?>

<!-- inline CSS tweaks -->
<style>
/* Card wrapper for main content */
.single-blog-card {
  background: #fff;
  padding: 28px;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
  margin-bottom: 30px;
}

/* Reduce content font size and improve spacing */
.post__desc {
  font-size: 15px;         /* reduced size */
  line-height: 1.78;
  color: #333;
}

/* Hero image box (smaller height) */
.single-post-hero {
  width: 100%;
  height: 350px;           /* smaller than before */
  margin-bottom: 18px;
  background: #f5f5f5;
  border-radius: 6px;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}
.single-post-hero img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
}

/* Make main column a bit wider on large screens while keeping sidebar */
@media (min-width: 992px) {
  .col-lg-8 { max-width: 65%; flex: 0 0 65%; } /* widen main column */
  .col-lg-4 { max-width: 32%; flex: 0 0 32%; }
}

/* Post meta spacing — ensure a gap between date and author */
.post__meta { display:flex; align-items:center; gap:12px; margin-bottom:10px; }
.post__meta-date { color: #6c757d; font-size: 14px; }
.post__meta-author { color: #333; font-weight: 600; }

/* TOC */
#post-toc { margin-bottom: 18px; }
#post-toc ul {
  list-style: none;
  padding-left: 0;
  background: #fafafa;
  border-radius: 8px;
  padding: 12px;
  box-shadow: 0 6px 18px rgba(0,0,0,0.04);
}
#post-toc li { margin-bottom: 6px; }
#post-toc a {
  color: #0d6efd;
  text-decoration: none;
  font-size: 14px;
}
#post-toc a:hover { text-decoration: underline; }

/* ensure headings inside content have some top spacing so scroll lands nicely */
.post__desc h1, .post__desc h2, .post__desc h3 {
  scroll-margin-top: 120px; /* modern browsers will respect this */
  margin-top: 1.2em;
  margin-bottom: 0.5em;
}

/* small visual tweaks */
.post__meta-cat a { margin-right: 8px; color: #6c757d; }
.post__title { font-size: 28px; margin-bottom: 12px; }
.widget-post-item .widget-post__img img { width: 70px; height: 50px; object-fit:cover; border-radius:4px; }
</style>
<section class="page-title pt-30 pb-30 text-center">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12">
        <nav>
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a href="blog.php">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title ?></li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</section>

<!-- ======================
  Blog Single
========================= -->
<section class="blog blog-single pt-0 pb-80">
  <div class="container-blog" style="max-width: 1200px; margin:10px auto">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-9"> <!-- main column -->
        <div class="single-blog-card"> <!-- replaced post-item with card -->

          <div class="post__img single-post-hero">
            <?php if ($imgForOutput): ?>
              <img src="<?= $imgForOutput ?>" alt="<?= $title ?>" loading="lazy">
            <?php else: ?>
              <img src="assets/images/blog/single/default.jpg" alt="<?= $title ?>" loading="lazy">
            <?php endif; ?>
          </div><!-- /.post-img -->

          <div class="post__body pb-0">
            <div class="post__meta-cat mb-2">
              <?php foreach ($categoryList as $c): ?>
                <a href="#"><?= htmlspecialchars($c) ?></a>
              <?php endforeach; ?>
            </div><!-- /.blog-meta-cat -->
            <div class="post__meta d-flex align-items-center mb-12">
              <span class="post__meta-date"><?= htmlspecialchars($dateDisp) ?></span>
              <a class="post__meta-author ms-3" href="#"><?= $author ?></a>
            </div><!-- /.blog-meta -->
            <h1 class="post__title"><?= $title ?></h1>

            <?php if (!empty($post['toc'])): ?>
              <nav id="post-toc" class="mb-3" aria-label="Table of contents"></nav>
            <?php endif; ?>

            <div class="post__desc">
              <?php
                // Output saved HTML content (editor content)
                echo $contentHtml;
              ?>
            </div><!-- /.blog-desc -->

          </div>
        </div><!-- /.single-blog-card -->

        <div class="widget-nav d-flex justify-content-between mb-40">
          <?php if ($prev): ?>
          <a href="post.php?slug=<?= urlencode($prev['slug']) ?>" class="widget-nav__prev d-flex flex-wrap">
            <div class="widget-nav__img">
              <?php $pimg = normalize_image_src($prev['image'] ?? ''); ?>
              <img src="<?= $pimg ? htmlspecialchars($pimg) : 'assets/images/blog/grid/2.jpg' ?>" alt="blog thumb">
            </div>
            <div class="widget-nav__content">
              <span>Previous Post</span>
              <h5 class="widget-nav__ttile mb-0"><?= htmlspecialchars($prev['title']) ?></h5>
            </div>
          </a>
          <?php else: ?>
            <div></div>
          <?php endif; ?>

          <?php if ($next): ?>
          <a href="post.php?slug=<?= urlencode($next['slug']) ?>" class="widget-nav__next d-flex flex-wrap">
            <div class="widget-nav__img">
              <?php $nimg = normalize_image_src($next['image'] ?? ''); ?>
              <img src="<?= $nimg ? htmlspecialchars($nimg) : 'assets/images/blog/grid/3.jpg' ?>" alt="blog thumb">
            </div>
            <div class="widget-nav__content">
              <span>Next Post</span>
              <h5 class="widget-nav__ttile mb-0"><?= htmlspecialchars($next['title']) ?></h5>
            </div>
          </a>
          <?php else: ?>
            <div></div>
          <?php endif; ?>
        </div>

      </div><!-- /.col-lg-8 -->

      <div class="col-sm-12 col-md-12 col-lg-3"> <!-- sidebar preserved -->
        <aside class="sidebar">
          <div class="widget widget-search">
            <h5 class="widget__title">Search</h5>
            <div class="widget__content">
              <form class="widget__form-search" method="get" action="blog.php">
                <input type="text" class="form-control" name="q" placeholder="Search...">
                <button class="btn" type="submit"><i class="icon-search"></i></button>
              </form>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-search -->

          <div class="widget widget-posts">
            <h5 class="widget__title">Recent Posts</h5>
            <div class="widget__content">
              <?php foreach ($recent as $r): ?>
                <div class="widget-post-item d-flex align-items-center">
                  <div class="widget-post__img">
                    <?php $rim = normalize_image_src($r['image'] ?? ''); ?>
                    <a href="post.php?slug=<?= urlencode($r['slug']) ?>"><img src="<?= $rim ? htmlspecialchars($rim) : 'assets/images/blog/grid/2.jpg' ?>" alt="thumb"></a>
                  </div>
                  <div class="widget-post__content">
                    <span class="widget-post__date"><?= htmlspecialchars($r['date'] ?? '') ?></span>
                    <h4 class="widget-post__title"><a href="post.php?slug=<?= urlencode($r['slug']) ?>"><?= htmlspecialchars($r['title']) ?></a></h4>
                  </div>
                </div>
              <?php endforeach; ?>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-posts -->

          <div class="widget widget-categories">
            <h5 class="widget__title">Categories</h5>
            <div class="widget-content">
              <ul class="list-unstyled mb-0">
                <?php
                  // Build category counts
                  $catCounts = [];
                  foreach ($blogs as $bb) {
                      $cats = $bb['category'] ?? '';
                      if (is_array($cats)) $list = $cats;
                      else $list = array_map('trim', explode(',', $cats));
                      foreach ($list as $c) {
                          if ($c === '' ) continue;
                          $catCounts[$c] = ($catCounts[$c] ?? 0) + 1;
                      }
                  }
                  foreach ($catCounts as $name => $count):
                ?>
                  <li><a href="#"><span class="cat-count"><?= (int)$count ?></span><span><?= htmlspecialchars($name) ?></span></a></li>
                <?php endforeach; ?>
              </ul>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-categories -->

          <div class="widget widget-tags">
            <h5 class="widget__title">Tags</h5>
            <div class="widget-content">
              <ul class="list-unstyled mb-0">
                <?php
                  // sample tags from categories (you can change to your tag logic)
                  $tags = array_keys($catCounts);
                  foreach ($tags as $t): ?>
                    <li><a href="#"><?= htmlspecialchars($t) ?></a></li>
                <?php endforeach; ?>
              </ul>
            </div><!-- /.widget-content -->
          </div><!-- /.widget-tags -->
        </aside><!-- /.sidebar -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.blog Single -->

<script>
(function(){
  var tocContainer = document.getElementById('post-toc');
  if (!tocContainer) return;
  var content = document.querySelector('.post__desc');
  if (!content) return;

  // Try to find headings: prefer native h1-h3; also detect CKEditor heading classes as fallback
  var headings = Array.from(content.querySelectorAll('h1,h2,h3'));

  // Add elements that have CKEditor heading classes (defensive)
  if (headings.length === 0) {
    var ckHeadingElems = Array.from(content.querySelectorAll('[class*="ck-heading"], [class*="heading"]'));
    ckHeadingElems.forEach(function(el){
      // include only those that look like heading (not empty)
      if (/h[1-6]/i.test(el.tagName) === false) {
        // accept if text content is present
        if ((el.textContent || '').trim()) headings.push(el);
      }
    });
  }

  if (!headings.length) return;

  // Build UL
  var ul = document.createElement('ul');

  // Ensure unique ids
  var idCount = {};

  headings.forEach(function(h){
    // skip if not visible or has no text
    var text = (h.textContent || h.innerText || '').trim();
    if (!text) return;

    // generate base id
    var base = text.toLowerCase().replace(/[^a-z0-9]+/g,'-').replace(/(^-|-$)/g,'') || 'heading';
    var count = idCount[base] || 0;
    idCount[base] = count + 1;
    var id = base + (count ? '-' + count : '');

    // set id on the element (only if not already set)
    if (!h.id) h.id = id;
    else id = h.id; // preserve existing id

    // detect level: if tag is h1/h2/h3 use that; otherwise try to infer from class names
    var lvl = 3; // default
    var tag = (h.tagName || '').toLowerCase();
    if (/^h([1-6])$/.test(tag)) {
      lvl = parseInt(tag.replace('h',''), 10);
    } else {
      // check for 'level' in class (ck-heading_level-2 or level-3)
      var cls = h.className || '';
      var m = cls.match(/level[_-]?(\d)/i) || cls.match(/heading[_-]?(\d)/i) || cls.match(/ck-heading_level_(\d)/i);
      if (m) lvl = parseInt(m[1],10);
    }
    if (lvl < 1) lvl = 1;
    if (lvl > 6) lvl = 6;

    var li = document.createElement('li');
    li.style.marginLeft = (Math.max(0, lvl - 1) * 12) + 'px';

    var a = document.createElement('a');
    a.href = '#' + encodeURIComponent(id);
    a.textContent = text;

    // click behavior: compute exact scroll top so the heading sits just below the page-title
    a.addEventListener('click', function(e){
      e.preventDefault();
      var target = document.getElementById(id);
      if (!target) return;

      // Try to use scroll-margin-top if supported by CSS (we set it), otherwise compute offset
      var headerEl = document.querySelector('.page-title');
      var headerOffset = headerEl ? headerEl.offsetHeight + 20 : 120;

      var rect = target.getBoundingClientRect();
      var absoluteTop = rect.top + window.pageYOffset;
      var scrollTo = Math.max(absoluteTop - headerOffset, 0);

      window.scrollTo({ top: scrollTo, behavior: 'smooth' });

      // Update location hash without jump
      try {
        history.replaceState(null, '', '#' + id);
      } catch (err) { /* ignore */ }
    });

    li.appendChild(a);
    ul.appendChild(li);
  });

  tocContainer.appendChild(ul);
})();
</script>
<?php require "common/footer.php"; ?>
