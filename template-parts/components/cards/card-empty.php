<?php
/**
 * Template Part/Component: Empty Card
 */

$icon = $args['icon'] ?? 'circle-alert';
$message = $args['message'] ?? __('Nothing on this post!', 'karsa_start');

?>

<div class="flex flex-col gap-4 
w-full max-w-80
mx-auto">
  <div class="flex justify-center">
    <i data-lucide="<?= esc_attr($icon) ?>" class="h-12 w-12 text-on-surface-variant/80"></i>
  </div>
  <p class="text-on-surface-variant/60 italic text-center"><?= esc_html($message) ?></p>
</div>