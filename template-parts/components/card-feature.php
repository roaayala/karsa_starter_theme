<?php
/**
 * Component: Card Feature
 * @package KarsaStart
 */

$icon = !empty($args['icon']) ? $args['icon'] : 'award';
$title = !empty($args['title']) ? $args['title'] : __('Judul Fitur', 'karsa_start');
$description = !empty($args['description']) ? $args['description'] : __('Deskripsi singkat keunggulan atau fitur utama.', 'karsa_start');
?>

<div
  class="group p-6 bg-surface-bright border border-outline/20 hover:border-primary/40 shadow-sm hover:shadow-md transition-all rounded-2xl hover:rounded-4xl">
  <div class="flex flex-col gap-4">

    <!-- Icon Container -->
    <div
      class="rounded-xl w-12 h-12 bg-primary-container text-on-primary-container flex items-center justify-center group-hover:bg-primary group-hover:text-on-primary transition-colors duration-200">
      <i data-lucide="<?= esc_attr($icon) ?>" class="w-6 h-6"></i>
    </div>

    <!-- Text Group -->
    <div class="flex flex-col gap-2">
      <h3 class="text-lg group-hover:text-primary transition-colors duration-200">
        <?= esc_html($title) ?>
      </h3>
      <p class="text-sm text-on-surface-subtle leading-relaxed">
        <?= esc_html($description) ?>
      </p>
    </div>

  </div>
</div>