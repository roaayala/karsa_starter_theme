<?php
/**
 * Component: Card for property-like previed
 * @package KarsaStart
 */

?>

<div class="border border-outline/10 shadow-sm rounded-2xl p-6">
  <span class="font-bold text-3xl xs:text-4xl">
    <a href="<?= get_the_permalink() ?>">
      <?= esc_html(get_the_title()) ?>
    </a>
  </span>

  <ul>

  </ul>
  <span>
    <?= esc_html(format_rupiah(get_field('harga'))) ?>
  </span>
</div>