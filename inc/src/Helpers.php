<?php

namespace KarsaStart;

class Helpers
{
  public static function format_rupiah($price): string
  {
    if (empty($price) || !is_numeric($price)) {
      return 'Hubungi Kami';
    }

    $price = (float) $price;

    return 'Rp' . number_format($price, 0, ',', '.');
  }

  public static function get_icon(string $name, string $class = ''): string
  {

    $path = get_theme_file_path("public/icons/{$name}.svg");


    if (!file_exists($path)) {
      return '';
    }

    $svg = file_get_contents($path);

    if (!empty($class)) {
      $svg = preg_replace('/<svg /', '<svg class="' . esc_attr($class) . '" ', $svg, 1);
    }

    return $svg;
  }

  private static function render(string $path, array $args = []): void
  {
    $clean_path = ltrim($path, '/');
    get_template_part("template-parts/{$clean_path}", null, $args);
  }

  public static function component(string $name, array $args = []): void
  {
    self::render("components/{$name}", $args);
  }

  public static function module(string $name, array $args = []): void
  {
    self::render("modules/{$name}", $args);
  }

  public static function view(string $name, array $args = []): void
  {
    self::render("views/{$name}", $args);
  }

  public static function get_active_taxonomy_tree(string $taxonomy): array
  {
    // get all taxonomy that already have posts
    $terms = get_terms([
      'taxonomy' => $taxonomy,
      'hide_empty' => true,
      'orderby' => 'name',
      'order' => 'ASC',
    ]);

    if (is_wp_error($terms) || empty($terms)) {
      return [];
    }

    $indexed = [];

    foreach ($terms as $term) {
      $term->children = []; // add blank children array
      $indexed[$term->term_id] = $term; // register each term to $indexed and use the term_id as key
    }

    $tree = [];

    foreach ($indexed as $term) {
      if ($term->parent != 0 && isset($indexed[$term->parent])) {
        $indexed[$term->parent]->children[] = $term; // add term to it respective parent
      } else {
        $tree[] = $term; // if parent, then set is as a root
      }
    }

    return $tree;

  }
}