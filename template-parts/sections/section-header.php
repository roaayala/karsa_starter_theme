<?php
/**
 * Layout: Section Header
 * @package KarsaStart
 */

$title = $args['title'] ?? __('Judul Section', 'karsa_start');
$eyebrow = $args['eyebrow'] ?? null;

$alignment = $args['alignment'] ?? 'left';
$header_constraint = $alignment !== 'center' ? '' : 'max-w-100 mx-auto';
$eyebrow_alignment;
$title_alignment;

if ($alignment === 'left') {
  $eyebrow_alignment = 'self-start';
  $title_alignment = 'text-left';

} else if ($alignment === 'right') {
  $eyebrow_alignment = 'self-end';
  $title_alignment = 'text-right';

} else if ($alignment === 'center') {
  $eyebrow_alignment = 'self-center';
  $title_alignment = 'text-center';
}

?>

<header class="<?= esc_attr($header_constraint) ?> flex flex-col gap-1">

  <?php if ($eyebrow): ?>
    <span class="badge badge--primary badge--ghost <?= esc_attr($eyebrow_alignment) ?>">
      <span class="badge-label">
        <?= esc_html($eyebrow); ?>
      </span>
    </span>
  <?php endif; ?>

  <h2 class="<?= esc_attr($title_alignment) ?>">
    <?= esc_html($title) ?>
  </h2>

</header>