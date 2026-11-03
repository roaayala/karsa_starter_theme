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

  public static function section(string $name, array $args = []): void
  {
    self::render("sections/{$name}", $args);
  }

  public static function layout(string $name, array $args = []): void
  {
    self::render("layouts/{$name}", $args);
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

    $parents = [];
    $children = [];

    // separate parents and children
    foreach ($terms as $term) {
      if ($term->parent == 0) { // if parent, create children props and add to a parent and use term_id as key
        $term->children = [];
        $parents[$term->term_id] = $term;
      } else { // add to $children
        $children[] = $term;
      }
    }

    // add child to their parent
    foreach ($children as $child) {
      if (isset($parents[$child->parent])) {
        $parents[$child->parent]->children[] = $child; // add $child as children to the parent
      } else {
        $child->children = [];
        $parents[$child->term_id] = $child;
      }
    }

    return array_values($parents);

  }
}