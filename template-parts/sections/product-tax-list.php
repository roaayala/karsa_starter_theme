<?php

/**
 * Section: List of targeted taxonomy
 * @package KarsaStart
 */

$tax = $args['tax'] ?? [];

$title = $args['title'] ?? __('Judul Section', 'karsa_start');
?>

<?php if (!empty($tax)): ?>

  <div class="container flex flex-col gap-6">
    <div class="">
      <h2><?= esc_html($title) ?></h2>
    </div>

    <div class="flex gap-4 overflow-x-auto snap-x snap-mandatory pb-4 no-scrollbar">

      <?php foreach ($tax as $item): ?>

        <a href="<?= esc_url(get_term_link($item)) ?>">

          <div
            class="aspect-video w-40 p-4 bg-surface-bright border border-outline/20 hover:border-outline/60 shadow-sm rounded-lg flex flex-col gap-4 justify-between">
            <h3 class="text-base">
              <?= esc_html($item->name) ?>
            </h3>
            <i data-lucide="move-right" class="text-on-surface self-end"></i>
          </div>

        </a>

      <?php endforeach ?>
    </div>

  </div>

<?php endif ?>