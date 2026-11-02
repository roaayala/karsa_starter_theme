<?php



/**
 * Template: Front page for store
 * @package KarsaStart
 */

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
?>

<!-- category list -->
<section class="py-8 bg-surface-bright">
  <?php
  get_template_part('template-parts/sections/product-tax-list', null, [
    'tax' => $product_categories,
    'title' => __('Cari berdasarkan kategori!')
  ]);
  ?>
</section>

<section class="bg-surface py-8">
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

<!-- Newest products -->
<section class="bg-surface-bright py-8">
  <?php
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


<!-- brand list -->
<section class="py-8 bg-surface">
  <?php
  get_template_part('template-parts/sections/product-tax-list', null, [
    'tax' => $product_brands,
    'title' => __('Cari berdasarkan brand!', 'karsa_start')
  ]);
  ?>
</section>



<?php

foreach ($featured_categories as $index => $category):

  $product_in_category_args = $products_args;

  $product_in_category_args['tax_query'] = [
    [
      'taxonomy' => 'product-category',
      'field' => 'term_id',
      'terms' => $category->term_id,

    ]
  ];

  $product_in_category = new WP_Query($product_in_category_args);
  ?>
  <section class="py-8 <?= esc_attr(($index + 1) % 2 == 1 ? 'bg-surface-bright' : 'bg-surface') ?>">
    <?php
    get_template_part('template-parts/sections/product-shelf', null, [
      'title' => sprintf(__('Terbaru di %s', 'karsa_start'), $category->name),
      'url_link' => '#',
      'url_label' => __('Lebih Banyak', 'karsa_start'),
      'products' => $product_in_category
    ]);
    ?>
  </section>
  <?php wp_reset_postdata(); endforeach; ?>

<section class="py-8 bg-surface-bright">
  <?php get_template_part('template-parts/sections/section', 'marketplace', [
    'title' => __('Kami juga ada di marketplace favorit kamu!')
  ]); ?>
</section>