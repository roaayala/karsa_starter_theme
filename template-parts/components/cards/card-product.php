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
$brands = $args['brands'] ?? [];
$categories = $args['categories'] ?? [];

?>

<div
  class="group w-full max-w-52 shrink-0 flex flex-col bg-surface-bright border border-outline/20 hover:border-outline/60 shadow-sm rounded-lg overflow-hidden">

  <!-- thumbnail and floating badges -->
  <div class="relative aspect-square border border-outline/20 overflow-hidden">
    <!-- thumbnail -->
    <a href="<?= esc_url($url ?: '#') ?>" class="block w-full h-full">
      <img src="<?= esc_url($image_url) ?>" alt="<?= esc_attr($name) ?>"
        class="h-full w-full object-contain group-hover:scale-105 transition-transform duration-150" loading="lazy">
    </a>

    <?php if ($discount_rate > 0): ?>
      <div class="absolute z-10 top-2 right-2">
        <span class="badge badge--danger">
          <span class="badge-label">
            -<?= esc_html($discount_rate) ?>%
          </span>
        </span>
      </div>
    <?php endif ?>

    <!-- category list -->
    <?php if (!empty($categories)): ?>
      <div class="absolute top-2 left-2 flex flex-col gap-2">
        <?php foreach ($categories as $category): ?>
          <?php if ($category->parent == 0): ?>
            <span class="badge badge--default">
              <span class="badge-label">
                <?= esc_html($category->name) ?>
              </span>
            </span>
          <?php endif ?>
        <?php endforeach ?>
      </div>
    <?php endif ?>
  </div>

  <div class="p-4 flex-1 flex flex-col justify-between gap-2">

    <div class="flex flex-col gap-2">
      <div class="flex items-end">
        <!-- brand  -->
        <?php if (!empty($brands)): ?>
          <div class="flex gap-2">
            <?php foreach ($brands as $brand): ?>
              <?php if ($brand->parent == 0): ?>
                <span class="badge badge--primary">
                  <span class="badge-label">
                    <?= esc_html($brand->name) ?>
                  </span>
                </span>
              <?php endif ?>
            <?php endforeach ?>
          </div>
        <?php endif ?>

        <!-- stock status -->
        <?php if (!empty($stock_status)): ?>
          <span class="text-[.625rem] font-medium text-on-surface-subtle ml-auto">
            <?= esc_html(is_array($stock_status) ? ($stock_status['label'] ?? '') : $stock_status) ?>
          </span>
        <?php endif ?>
      </div>

      <!-- name -->
      <h3 class="text-base line-clamp-2">
        <a href="<?= esc_url($url ?: '#') ?>">
          <?= esc_html($name) ?>
        </a>
      </h3>

    </div>

    <!-- price area -->
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