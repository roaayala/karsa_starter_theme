<?php
/**
 * Layout: Simple Statistics
 * @package KarsStart
 */

$stats = $args['stats'] ?? [
  ['label' => 'Label', 'value' => 'Value'],
  ['label' => 'Label', 'value' => 'Value'],
  ['label' => 'Label', 'value' => 'Value'],
  ['label' => 'Label', 'value' => 'Value']
];

?>

<section class="py-16 bg-surface">
  <div class="container">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
      <?php
      foreach ($stats as $stat): ?>
        <div class="flex flex-col gap-2 text-center">
          <span
            class="font-bold text-3xl xs:text-4xl lg:text-5xl leading-none text-primary"><?= esc_html($stat['value']) ?></span>
          <span class="text-xs sm:text-sm text-on-surface-subtle">
            <?= esc_html($stat['label']) ?>
          </span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>