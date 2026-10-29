<?php
/**
 * Layout: Section Header
 * @package KarsaStart
 */

$title_text = $args['title_text'] ?? __('Judul Section', 'karsa_start');
$eyebrow_text = $args['eyebrow_text'] ?? null;

$alignment = $args['alignment'] ?? 'left';
$header_constraint = $alignment !== 'center' ? '' : 'max-w-100 mx-auto';
$rainbow_alignment;
$title_alignment;

if ($alignment === 'left') {
  $rainbow_alignment = 'self-start';
  $title_alignment = 'text-left';

} else if ($alignment === 'right') {
  $rainbow_alignment = 'self-end';
  $title_alignment = 'text-right';

} else if ($alignment === 'center') {
  $rainbow_alignment = 'self-center';
  $title_alignment = 'text-center';
}

?>

<header class="<?= esc_attr($header_constraint) ?> flex flex-col gap-1">

  <?php if ($eyebrow_text): ?>
    <span class="badge badge--primary badge--ghost <?= esc_attr($rainbow_alignment) ?>">
      <span class="badge-label">
        <?= esc_html($eyebrow_text); ?>
      </span>
    </span>
  <?php endif; ?>

  <h2 class="<?= esc_attr($title_alignment) ?>">
    <?= esc_html($title_text) ?>
  </h2>

</header>