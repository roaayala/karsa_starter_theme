<?php
/**
 * Component: Card Feature
 * @package KarsaStart
 */

$icon = !empty($args['icon']) ? $args['icon'] : 'award';
$title = !empty($args['title']) ? $args['title'] : __('Judul Fitur', 'karsa_start');
$description = !empty($args['description']) && is_string($args['description']) ? $args['description'] : null;

$list_items = [];
if (!empty($args['list_items']) && is_array($args['list_items'])) {
  $list_items = $args['list_items'];
}

if (!empty($args['description']) && is_array($args['description'])) {
  $list_items = $args['description'];
}
?>

<div class="group p-6 bg-surface-bright shadow-sm hover:shadow-md transition-all rounded-2xl border border-outline/10">

  <!-- Icon Container -->
  <div
    class="rounded-xl w-12 h-12 bg-primary-container text-on-primary-container flex items-center justify-center group-hover:bg-primary group-hover:text-on-primary transition-colors duration-200 mb-4">
    <i data-lucide="<?= esc_attr($icon) ?>" class="w-6 h-6"></i>
  </div>

  <!-- Text Group -->
  <div class="flex flex-col gap-2">
    <span class="font-semibold text-lg text-on-surface group-hover:text-primary transition-colors duration-200">
      <?= esc_html($title) ?>
    </span>
    <?php if ($description): ?>
      <p class="text-base text-on-surface-subtle">
        <?= esc_html($description) ?>
      </p>
    <?php endif; ?>

    <?php if (!empty($list_items)): ?>
      <ul class="text-base text-on-surface-subtle flex flex-col gap-0">
        <?php foreach ($list_items as $item): ?>
          <li class="flex items-start ml-2 gap-4">
            <span class="w-1 h-1 rounded-full bg-current shrink-0 mt-2"></span>
            <span><?= esc_html($item) ?></span>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>


</div>