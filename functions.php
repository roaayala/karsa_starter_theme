<?php
/**
 * Main Theme Functions Loader
 *
 * @package KarsaStarterTheme
 */

if (!defined('ABSPATH')) {
    exit;
}

$autoloader = __DIR__ . '/vendor/autoload_packages.php';
if (is_file($autoloader)) {
    require_once $autoloader;
}

define('THEME_DIR', get_template_directory());
define('THEME_URI', get_template_directory_uri());
define('THEME_VERSION', '1.0.0');

$theme_includes = [
    'inc/setup.php',
    'inc/cpts.php',
    'inc/taxonomies.php',
    'inc/meta-fields.php',
    'inc/search-filters.php',
    'inc/helpers.php',
];

foreach ($theme_includes as $file) {
    $filepath = THEME_DIR . '/' . $file;
    if (file_exists($filepath)) {
        require_once $filepath;
    }
}