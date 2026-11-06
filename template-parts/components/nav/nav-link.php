<?php
/**
 * Component: Navigation link
 * @package KarsaStart
 */

$url = $args['url'] ?? null;
$label = $args['label'] ?? null;
$link_classes = $args['link_classes'] ?? 'flex text-sm font-medium text-on-surface';

if (!$url || !$label)
  return;
?>

<a href="<?= esc_url($url) ?>" class="<?= esc_attr($link_classes) ?>">
  <?= esc_html($label) ?>
</a>