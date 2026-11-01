<?php

use KarsaStart\Helpers;

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
?>

<section class="bg-surface-bright py-8">
  <a href="#">
    <?= Helpers::get_icon('tokopedia', 'h-4 w-auto shrink-0') ?>
  </a>
  <a href="#" class="">
    <?= Helpers::get_icon('shopee', 'h-4 w-auto shrink-0') ?>
  </a>
  <a href="#">
    <?= Helpers::get_icon('lazada', 'h-4 w-auto shrink-0') ?>
  </a>
  <a href="#">
    <?= Helpers::get_icon('blibli', 'h-4 w-auto shrink-0') ?>
  </a>
  <?php
  // Newest products
  $newest_products = new WP_Query($products_args);
  get_template_part('template-parts/sections/product-shelf', null, [
    'title' => __('Baru banget di toko!', 'karsa_start'),
    'url_link' => '#',
    'url_label' => __('Lebih Banyak', 'karsa_start'),
    'products' => $newest_products
  ]);
  wp_reset_postdata();
  ?>
</section>

<section class="py-8 bg-surface">
  <?php
  // Category list
  $product_categories = get_terms([
    'taxonomy' => 'product-category',
    'hide_empty' => true,
    'parent' => 0,
    'orderby' => 'name',
    'order' => 'ASC',
  ]);
  get_template_part('template-parts/sections/product-tax-list', null, [
    'tax' => $product_categories,
    'title' => __('Cari berdasarkan kategori!')
  ]);
  wp_reset_postdata();
  ?>
</section>

<section class="bg-surface-bright py-8">
  <?php
  $discount_products = new WP_Query($discount_products_args);
  get_template_part('template-parts/sections/product-shelf', null, [
    'title' => __('Lagi discount!', 'karsa_start'),
    'url_link' => '#',
    'url_label' => __('Lebih Banyak', 'karsa_start'),
    'products' => $discount_products
  ]);
  wp_reset_postdata();
  ?>
</section>

<section class="py-8 bg-surface">
  <?php
  // Brand list
  $product_brands = get_terms([
    'taxonomy' => 'product-brand',
    'hide_empty' => true,
    'parent' => 0,
    'orderby' => 'name',
    'order' => 'ASC',
  ]);
  get_template_part('template-parts/sections/product-tax-list', null, [
    'tax' => $product_brands,
    'title' => __('Cari berdasarkan brand!')
  ]);
  wp_reset_postdata();
  ?>
</section>

<section class="py-8 bg-surface-bright">
  <div class="container grid gap-6 grid-cols-12">

    <div class="col-span-12">
      <h2>Kami juga ada di marketplace favorit kamu!</h2>
    </div>

    <?php
    $marketplaces = ['Tokopedia', 'Shopee', 'Lazada', 'Blibli'];
    ?>

    <div class="col-span-12 grid gap-4 grid-cols-2">
      <?php foreach ($marketplaces as $marketplace): ?>
        <div
          class="aspect-video bg-primary-container rounded-lg text-base font-semibold text-on-primary-container text-center flex items-center justify-center">
          <?= $marketplace ?>
        </div>
      <?php endforeach ?>
    </div>

  </div>
</section>