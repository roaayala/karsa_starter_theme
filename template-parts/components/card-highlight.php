<?php
/**
 * Component: Card Highlight
 * @package KarsaStart
 */


?>

<div class="w-full max-w-80 p-6 shadow-lg bg-surface-bright rounded-2xl text-on-surface">

  <div class="flex flex-col gap-4">
    <div class="flex flex-col gap-2 border-b border-outline/40 pb-4 mb-1">
      <span class="badge badge--primary badge--ghost">Penawaran Spesial</span>
      <span class="font-bold text-4xl text-on-surface">
        <?= esc_html(get_bloginfo('name')); ?>
      </span>
    </div>

    <div>
      <span class="text-xs text-on-surface-subtle uppercase">Harga
        unit mulai dari</span>
      <div class="flex items-baseline gap-1">
        <span class="font-bold text-primary text-4xl">182</span>
        <span class="font-semibold text-on-surface">Juta.</span>
      </div>
    </div>

    <!-- Quick Specs List -->
    <ul class="flex flex-col gap-2 text-xs text-on-surface-subtle">
      <li class="flex items-center gap-2">
        <i data-lucide="check-circle-2" class="w-4 h-4 text-primary"></i>
        <span>Angsuran Ringan & KPR Dibantu</span>
      </li>
      <li class="flex items-center gap-2">
        <i data-lucide="check-circle-2" class="w-4 h-4 text-primary"></i>
        <span>Bebas Banjir & Dekat Dengan Pusat Kota</span>
      </li>
    </ul>

    <a href="#" class="btn btn--primary w-full justify-center mt-2">
      <span class="btn-label">Klaim Promo Unit</span>
    </a>
  </div>

</div>