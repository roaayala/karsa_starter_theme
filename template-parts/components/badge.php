<?php

/**
 * Component: Badge
 */

$label = $args['label'] ?? '';
if (empty($label))
  return;

$url = $args['url'] ?? null;
$element = $url ? 'a' : 'span';

?>

<<?= $element ?>
  <?= $url ? 'href="' . esc_url($url) . '"' : '' ?>
  class=""
  >

  <span><?= esc_html($label) ?></span>
</<?= $element ?>>