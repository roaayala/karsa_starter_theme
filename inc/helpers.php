<?php

if (!defined('ABSPATH')) {
  exit;
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

function karsa_build_tax_tree($terms, $taxonomy)
{

  if (empty($terms) || is_wp_error($terms)) {
    return '';
  }

  $term_ids = array_column($terms, 'term_id');
  $parent_ids = array_column($terms, 'parent');

  $leaf_term = null;
  foreach ($terms as $term) {
    if (!in_array($term->term_id, $parent_ids, true)) {
      $leaf_term = $term;
      break;
    }
  }

  if (!$leaf_term) {
    $leaf_term = $terms[0];
  }

  $stack = [];

  $stack[] = $leaf_term->name;

  $ancestor_ids = get_ancestors($leaf_term->term_id, $taxonomy, 'taxonomy');

  foreach ($ancestor_ids as $ancestor_id) {
    $ancestor_term = get_term($ancestor_id, $taxonomy);
    if ($ancestor_term && !is_wp_error($ancestor_term)) {
      $stack[] = $ancestor_term->name;
    }
  }

  return implode(', ', $stack);
}

