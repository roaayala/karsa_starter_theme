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

      <?php foreach ($tax as $term): ?>

        <?php get_template_part('template-parts/components/cards/card', 'term', [
          'term' => $term
        ]) ?>

      <?php endforeach ?>
    </div>

  </div>

<?php endif ?>