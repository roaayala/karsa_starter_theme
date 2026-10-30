<?php

/**
 * Component: Card for product
 * @package KarsaStart
 */

$product_url = $args['product_url'] ?? null;
$product_name = $args['product_name'] ?? __('Nama Produk', 'karsa_start');
$product_image_url = $args['product_image_url']
  ?? get_template_directory_uri() . '/public/images/fallback-2-undraw.png';
$product_price = $args['product_price'] ?? __('Hubungi Kami', 'karsa_start');

?>

<div class="bg-surface-bright border border-outline/20 rounded-lg overflow-hidden">
  <div class="aspect-4/3">
    <a href="<?= esc_url($product_url ?: '#') ?>">
      <img src="<?= esc_url($product_image_url) ?>" alt="<?= esc_attr($product_name) ?>"
        class="h-full w-full object-contain">
    </a>
  </div>

  <div class="p-6">
    <h3 class="text-lg">
      <a href="<?= esc_url($product_url ?: '#') ?>">
        <?= esc_html($product_name) ?>
      </a>
    </h3>

    <div>
      <span><?php _e('Harga', 'karsa_start') ?></span>
      <span><?= esc_html($product_price) ?></span>
    </div>
  </div>
</div>