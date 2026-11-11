<?php
/**
 * Template: Front page for store
 * @package KarsaStart
 */

use KarsaStart\Helpers;

// Hero for promo, discount, events and new product

// ARGS
// Products
$products_args = [
  'post_type' => 'product',
  'posts_per_page' => '6',
  'post_status' => 'publish',
  'orderby' => 'date',
  'order' => 'DESC',
  'meta_query' => [
    [
      'key' => 'stock_status',
      'value' => 'ready',
      'compare' => '='
    ]
  ]
];

// Products on discount
$discount_products_args = $products_args;
$discount_products_args['meta_query'] = [
  'relation' => 'AND',
  [
    'key' => 'discount_rate',
    'type' => 'NUMERIC',
    'value' => 0,
    'compare' => '>'
  ],
  [
    'key' => 'stock_status',
    'value' => 'ready',
    'compare' => '='
  ]
];

// TAX TERMS
$product_categories = get_terms([
  'taxonomy' => 'product-category',
  'hide_empty' => true,
  'parent' => 0,
  'orderby' => 'name',
  'order' => 'ASC',
]);

$product_brands = get_terms([
  'taxonomy' => 'product-brand',
  'hide_empty' => true,
  'parent' => 0,
  'orderby' => 'name',
  'order' => 'ASC',
]);

$featured_categories = !is_wp_error($product_categories) ? array_slice($product_categories, 0, 3) : [];

// Categories tax
Helpers::module('store/product-tax-slider', [
  'tax' => $product_categories,
  'title' => __('Cari berdasarkan kategori!', 'karsa_start')
]);

// Discounted products
$discount_products = new WP_Query($discount_products_args);
Helpers::module('store/product-slider', [
  'section_classes' => 'bg-surface-bright',
  'title' => __('Lagi discount!', 'karsa_start'),
  'url_link' => get_post_type_archive_link('product') ?: '#',
  'url_label' => __('Lebih Banyak', 'karsa_start'),
  'products' => $discount_products
]);
wp_reset_postdata();

// Newest products
$newest_products = new WP_Query($products_args);
Helpers::module('store/product-slider', [
  'title' => __('Baru banget di toko!', 'karsa_start'),
  'url_link' => get_post_type_archive_link('product') ?: '#',
  'url_label' => __('Lebih Banyak', 'karsa_start'),
  'products' => $newest_products
]);
wp_reset_postdata();

// Brands tax
Helpers::module('store/product-tax-slider', [
  'section_classes' => 'bg-surface-bright',
  'tax' => $product_brands,
  'title' => __('Cari berdasarkan brand!', 'karsa_start')
]);

// Featured Categories Loop 
foreach ($featured_categories as $index => $category) {
  $product_in_category_args = $products_args;
  $product_in_category_args['tax_query'] = [
    [
      'taxonomy' => 'product-category',
      'field' => 'term_id',
      'terms' => $category->term_id,

    ]
  ];
  $product_in_category = new WP_Query($product_in_category_args);

  $bg_class = ($index % 2 == 0) ? 'bg-surface' : 'bg-surface-bright';

  Helpers::module('store/product-slider', [
    'section_classes' => $bg_class,
    'title' => sprintf(__('Terbaru di %s', 'karsa_start'), $category->name),
    'url_link' => get_term_link($category),
    'url_label' => __('Lebih Banyak', 'karsa_start'),
    'products' => $product_in_category
  ]);

  wp_reset_postdata();
}
// CTA marketplaces
Helpers::module('store/marketplace-cta', [
  'title' => __('Kami juga ada di marketplace favorit kamu!', 'karsa_start'),
  'section_classes' => 'bg-surface-bright'
]);