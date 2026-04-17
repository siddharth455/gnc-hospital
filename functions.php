<?php
// functions.php (project root)
session_start();

define('ADMIN_DIR', __DIR__ . '/admin');
define('BLOG_JSON', ADMIN_DIR . '/blog.json');
define('UPLOAD_DIR', ADMIN_DIR . '/uploads/');

// make sure admin/uploads exists
if (!file_exists(UPLOAD_DIR)) {
    mkdir(UPLOAD_DIR, 0755, true);
}

/**
 * Load blogs (returns array)
 */
function load_blogs() {
    if (!file_exists(BLOG_JSON)) return [];
    $raw = file_get_contents(BLOG_JSON);
    $arr = json_decode($raw, true);
    return is_array($arr) ? $arr : [];
}

/**
 * Save blogs (array)
 */
function save_blogs($blogs) {
    file_put_contents(BLOG_JSON, json_encode(array_values($blogs), JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
}

/**
 * slugify: generate URL slug from title
 */
function slugify($str) {
    $s = preg_replace('/[^A-Za-z0-9]+/', '-', strtolower($str));
    return trim($s, '-');
}
