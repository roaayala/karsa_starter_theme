<?php

/**
 * Template: Front page for store
 * @package KarsaStart
 */

// Hero for promo, discount, events and new product


// Common products
$products_args = [
  'post_type' => 'product',
  'posts_per_page' => '6',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC'
];

// Products on discount
$discount_products_args = $products_args;
$discount_products_args['meta_query'] = [
  [
    'key' => 'discount_rate',
    'type' => 'NUMERIC',
    'value' => 0,
    'compare' => '>'
  ]
];

$discount_products = new WP_Query($discount_products_args);
wp_reset_postdata();

// Newest products
$newest_products = new WP_Query($products_args);
wp_reset_postdata();

// Category list
$product_categories = get_terms([
  'taxonomy' => 'product-category',
  'hide_empty' => true,
  'parent' => 0,
  'orderby' => 'name',
  'order' => 'ASC',
]);
wp_reset_postdata();

// Brand list
$product_brands = get_terms([
  'taxonomy' => 'product-brand',
  'hide_empty' => true,
  'parent' => 0,
  'orderby' => 'name',
  'order' => 'ASC',
]);
wp_reset_postdata();
