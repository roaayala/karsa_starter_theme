<?php

/**
 * Layout: Core Value Section
 * @package KarsaStart
 */

?>

<section class="py-16 bg-surface">
  <div class="container flex flex-col gap-8">
    <?php get_template_part('template-parts/layouts/section-header', null, [
      'title_text' => __('Komitmen & Nilai Utama', 'karsa_start'),
      'eyebrow_text' => __('Prinsip Kami', 'karsa_start'),
      'alignment' => 'center'
    ]) ?>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <?php
      $core_values = [
        [
          'icon' => 'shield-check',
          'title' => 'Integritas',
          'description' => 'Menjamin transparansi surat-surat, izin, dan legalitas bangunan di setiap proyek.'
        ],
        [
          'icon' => 'award',
          'title' => 'Kualitas Konstruksi',
          'description' => 'Menggunakan material terpilih dan pengawasan ketat demi ketahanan bangunan jangka panjang.'
        ],
        [
          'icon' => 'users',
          'title' => 'Kolaborasi',
          'description' => 'Bekerja sama dengan perbankan dan mitra terpercaya untuk mempermudah proses KPR konsumen.'
        ],
      ];

      foreach ($core_values as $value) {
        get_template_part('template-parts/components/card-feature', null, [
          'title' => $value['title'],
          'description' => $value['description'],
          'icon' => $value['icon']
        ]);
      }
      ?>
    </div>
  </div>
</section>