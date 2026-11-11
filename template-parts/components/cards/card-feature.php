<?php
/**
 * Component: Card feature
 */

$icon = $args['icon'] ?? null;
$title = $args['title'] ?? __('Judul', 'karsa_start');
$description = $args['description'] ?? __(
  'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores ullam harum omnis.',
  'karsa_start'
);

?>

<div
  class="p-4 sm:p-6 flex flex-col gap-4 bg-surface-bright border border-outline/20 hover:border-outline/60 shadow-sm rounded-lg">
  <?php if ($icon): ?>
    <div>
      <i data-lucide="<?= esc_attr($icon) ?>" class="w-8 h-8 text-primary"></i>
    </div>
  <?php endif ?>

  <div class="flex flex-col gap-2">
    <h3 class="text-lg"><?= esc_html($title) ?></h3>
    <p class="text-sm text-on-surface-subtle"><?= esc_html($description) ?></p>
  </div>

</div>