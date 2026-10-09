<?php
/**
 * Template Part/Component: Empty Card
 */

$icon = $args['icon'] ?? 'circle-alert';
$message = $args['message'] ?? __('Nothing on this post!', 'karsa_start');

?>

<div class="p-8
bg-surface-container
rounded-shape-lg
flex flex-col gap-2
">
  <div class="flex justify-center">
    <i data-lucide="<?= esc_attr($icon) ?>" class="h-8 w-8 text-on-surface-variant"></i>
  </div>
  <p class="text-on-surface-subtle italic text-center text-sm"><?= esc_html($message) ?></p>
</div>