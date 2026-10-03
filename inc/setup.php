<?php
/**
 * Tailpress Framework Initialization & Theme Setup
 *
 * @package KarsaStarterTheme
 */

if (!defined('ABSPATH')) {
  exit;
}

function karsa_tailpress_setup(): TailPress\Framework\Theme
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
      ->add('primary', __('Primary Menu', 'karsa_starter_theme'))
      ->add('footer', __('Footer Menu', 'karsa_starter_theme')))
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

karsa_tailpress_setup();

// font

