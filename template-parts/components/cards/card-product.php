<?php

use KarsaStart\Helpers;

/**
 * Component: Card for product
 * @package KarsaStart
 */

$url = $args['url'] ?? null;

$name = $args['name'] ?? __('Nama Produk', 'karsa_start');

$image_url = $args['image_url']
  ?? get_template_directory_uri() . '/public/images/fallback-2-undraw.png';

$discount_rate = $args['discount_rate'] ?? 0;
$price = $args['price'] ?? 0;
$discounted_price = ($price > 0 && $discount_rate > 0)
  ? $price - ($price * ($discount_rate / 100))
  : $price;

$stock_status = $args['stock_status'] ?? [];


?>

<div
  class="w-full max-w-60 shrink-0 p-4 flex flex-col gap-4 bg-surface-bright border border-outline/20 shadow-sm rounded-lg overflow-hidden">
  <div class="">
    <a href="<?= esc_url($url ?: '#') ?>">
      <img src="<?= esc_url($image_url) ?>" alt="<?= esc_attr($name) ?>"
        class="aspect-video h-full w-full object-center object-contain">
    </a>
  </div>

  <div class=" flex flex-col gap-2">
    <div class="flex-1">
      <div class="flex flex-col gap-1">
        <?php if (!empty($stock_status)): ?>
          <span class="text-xs">
            <?= esc_html($stock_status['label']) ?>
          </span>
        <?php endif ?>

        <h3 class="text-base">
          <a href="<?= esc_url($url ?: '#') ?>">
            <?= esc_html($name) ?>
          </a>
          </h>
      </div>
    </div>

    <div class="flex flex-col">
      <?php if ($discount_rate > 0): ?>
        <span class="font-normal text-xs text-on-surface-variant line-through">
          <?= esc_html(Helpers::format_rupiah($price)) ?>
        </span>
        <span class="font-semibold text-base text-primary">
          <?= esc_html(Helpers::format_rupiah($discounted_price)) ?>
        </span>
      <?php else: ?>
        <span class="font-semibold text-base text-primary">
          <?= esc_html(Helpers::format_rupiah($price)) ?>
        </span>
      <?php endif ?>
    </div>
  </div>
</div>