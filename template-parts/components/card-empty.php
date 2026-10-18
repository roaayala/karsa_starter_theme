<?php
/**
 * Template Part/Component: Empty Card
 */

$icon = $args['icon'] ?? 'circle-alert';
$message = $args['message'] ?? __('Belum ada konten yang tersedia saat ini.', 'karsa_start');

?>

<div class="p-16
bg-surface-dim
rounded-3xl
flex flex-col items-center gap-4
">

  <i data-lucide="<?= esc_attr($icon) ?>" class="h-16 w-16 text-on-surface-subtle stroke-[1.5]"></i>

  <p class="italic text-center text-on-surface-subtle text-base leading-relaxed"><?= esc_html($message) ?></p>
</div>