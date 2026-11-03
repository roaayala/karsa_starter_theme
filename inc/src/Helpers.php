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
}