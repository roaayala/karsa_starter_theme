<?php

/**
 * Component: Card for marketplace link
 * @package KarsaStart
 */

use KarsaStart\Helpers;

$url = $args['url'] ?? '#';
$key = $args['key'] ?? 'Key';

?>

<a href="<?= esc_url($url) ?>" class="group block" target="_blank">
  <div
    class="w-full h-20 sm:h-30 p-4 bg-surface-bright rounded-lg border border-outline/20 hover:border-outline/60 shadow-sm flex items-center justify-center transition-border duration-150">
    <?= Helpers::get_icon(
      $key,
      $key == 'tokopedia'
      ? 'h-6 sm:h-8 mt-1'
      : ($key ? 'h-7 sm:h-9' : 'h-8 sm:h-10')
    ) ?>
  </div>
</a>