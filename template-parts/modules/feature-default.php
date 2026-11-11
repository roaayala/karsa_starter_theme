<?php
/**
 * Module: Default feature
 */

$wrapper_classes = $args['wrapper_classes'] ?? 'py-8 bg-surface';

$title = $args['title'] ?? __('Judul', 'karsa_start');
$title_classes = $args['title_classes'] ?? 'text-left';
$items = $args['items'] ?? [];

?>

<section class="<?= esc_attr($wrapper_classes) ?>">
  <div class="container">
    <h2 class="<?= esc_attr($title_classes) ?>"><?= esc_html($title) ?></h2>

    <?php if (!empty(!$items)): ?>
      <?php foreach ($items as $item): ?>
        <div></div>
      <?php endforeach ?>
    <?php endif ?>
  </div>
</section>