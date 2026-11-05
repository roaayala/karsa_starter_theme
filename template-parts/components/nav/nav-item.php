<?php

/**
 * Component: Navigation item
 * @package KarsaStart
 */

$label = $args['label'] ?? null;
$link = $args['link'] ?? null;

if (!$label || !$link)
  return;
?>

<div>
  <a href="<?= esc_url($link) ?>">
    <?= esc_html($label) ?>
  </a>
</div>