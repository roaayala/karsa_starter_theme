<?php
/**
 * Tailpress Framework Initialization & Theme Setup
 *
 * @package KarsaStart
 */

if (!defined('ABSPATH')) {
  exit;
}

function karsa_register_required_plugins()
{
  $plugins = [
    [
      'name' => 'Advanced Custom Fields',
      'slug' => 'advanced-custom-fields',
      'required' => true,
    ],
    [
      'name' => 'ACF Galerie 4',
      'slug' => 'acf-galerie-4',
      'required' => true,
    ],
  ];

  $config = [
    'id' => 'karsa-start-tgmpa',
    'has_notices' => true,
    'dismissable' => true,
    'is_automatic' => true,
  ];

  tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'karsa_register_required_plugins');

function tailpress_setup(): TailPress\Framework\Theme
{
  return TailPress\Framework\Theme::instance()
    ->assets(
      fn($manager) => $manager
        ->withCompiler(
          new TailPress\Framework\Assets\ViteCompiler,
          fn($compiler) => $compiler
            ->registerAsset('resources/css/app.css')
            ->registerAsset('resources/js/app.js')
            ->editorStyleFile('resources/css/editor-style.css')
        )
        ->enqueueAssets()
    )
    ->features(fn($manager) => $manager->add(TailPress\Framework\Features\MenuOptions::class))
    ->menus(fn($manager) => $manager
      ->add('header', __('Header Menu', 'karsa_start'))
      ->add('footer', __('Footer Menu', 'karsa_start')))
    ->themeSupport(fn($manager) => $manager->add([
      'title-tag',
      'custom-logo',
      'post-thumbnails',
      'align-wide',
      'wp-block-styles',
      'responsive-embeds',
      'editor-styles',
      'html5' => [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
      ]
    ]));
}
tailpress_setup();

function karsa_nav_menu_classes($classes, $item, $args)
{
  if (isset($args->theme_location) && $args->theme_location === 'header') {

    // for each defined CPT

    // for all
    $is_active_parent = !empty(array_intersect([
      'current-menu-parent',
      'current-menu-ancestor',
      'current_page_parent'
    ], $classes));

    if ($is_active_parent) {
      $classes[] = 'current-menu-item-parent';
    }
  }
  return array_unique($classes);
}
add_filter('nav_menu_css_class', 'karsa_nav_menu_classes', 10, 3);

function karsa_nav_menu_link_attributes($atts, $item, $args)
{
  $has_class = $atts['class'] ?? '';
  $atts['class'] = trim($has_class . ' menu-link');

  return $atts;
}
add_filter('nav_menu_link_attributes', 'karsa_nav_menu_link_attributes', 10, 3);

function karsa_nav_menu_item_title($title, $menu_item, $args, $depth)
{
  $title = "<span class='menu-link__label'>{$title}</span>";

  return $title;
}
add_filter('nav_menu_item_title', 'karsa_nav_menu_item_title', 10, 4);