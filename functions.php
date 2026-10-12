<?php
/**
 * Function Loader
 *
 * @package KarsaStart
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

function format_rupiah($price, $compact = false)
{
    if (empty($price) || !is_numeric($price)) {
        return 'Hubungi Kami';
    }

    $price = (float) $price;

    if ($compact) {
        if ($price >= 1000000000) {
            $formatted = ($price % 1000000000 === 0)
                ? ($price / 1000000000)
                : number_format($price / 1000000000, 1, ',', '.');
            return 'Rp ' . $formatted . ' Milyar';
        }

        if ($price >= 1000000) {
            $formatted = ($price % 1000000 === 0)
                ? ($price / 1000000)
                : number_format($price / 1000000, 1, ',', '.');
            return 'Rp ' . $formatted . ' Juta';
        }
    }

    return 'Rp ' . number_format($price, 0, ',', '.');
}