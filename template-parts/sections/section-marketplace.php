<?php
/**
 * Section: List of marketplaces
 * @package KarsaStart
 */

use KarsaStart\Helpers;
$title = $args['title'] ?? __('Judul Section', 'karsa_start');

?>

<div class="container grid gap-6 grid-cols-12">

  <div class="col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-3">
    <h2><?= esc_html($title) ?></h2>
  </div>

  <?php
  $marketplaces = [
    [
      'name' => 'shopee',
      'url' => '#'
    ],
    [
      'name' => 'tokopedia',
      'url' => '#'
    ],
    [
      'name' => 'blibli',
      'url' => '#'
    ],
    [
      'name' => 'lazada',
      'url' => '#'
    ]
  ];
  ?>

  <div class="col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-9 grid gap-4 grid-cols-2">
    <?php foreach ($marketplaces as $marketplace): ?>

      <a href="<?= esc_url($marketplace['url']) ?>" class="group block" target="_blank">
        <div
          class="w-full h-20 sm:h-30 p-4 bg-surface-bright rounded-lg border border-outline/20 hover:border-outline/60 shadow-sm flex items-center justify-center transition-border duration-150">
          <?= Helpers::get_icon(
            $marketplace['name'],
            $marketplace['name'] == 'tokopedia'
            ? 'h-6 sm:h-8 mt-1'
            : ($marketplace ? 'h-7 sm:h-9' : 'h-8 sm:h-10')
          ) ?>
        </div>
      </a>

    <?php endforeach ?>
  </div>

</div>