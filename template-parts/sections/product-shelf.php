<?php

/**
 * Layout: Section for product listing
 * @package KarsaStarts
 */

$title = $args['title'] ?? __('Daftar Product', 'karsa_start');
$url_link = $args['url_link'] ?? null;
$url_label = $args['url_label'] ?? __('Selengkapnya', 'karsa_start');
$products = $args['products'] ?? [];

?>

<section class="py-8">
  <div class="container flex flex-col gap-4">
    <div class="flex flex-col xs:flex-row xs:justify-between">
      <h2>
        <?= esc_html($title) ?>
      </h2>

      <?php if ($url_link): ?>
        <a href="<?= esc_url($url_link ?: '#') ?>" class="text-sm flex items-center gap-2">
          <?= esc_html($url_label) ?>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
      <?php endif ?>
    </div>

    <div class="flex gap-4 overflow-x-auto">
      <?php
      if ($products->have_posts()) {
        while ($products->have_posts()) {
          $products->the_post();

          get_template_part('template-parts/components/cards/card', 'product', [
            'name' => get_the_title(),
            'url' => get_the_permalink(),
            'image_url' => get_the_post_thumbnail_url(get_the_ID(), 'medium'),
            'discount_rate' => get_field('discount_rate'),
            'price' => get_field('price'),
            'stock_status' => get_field('stock_status')
          ]);

        }
      }
      ?>
    </div>

  </div>
</section>