<?php
/**
 * Layout: Vision and Mission
 * @package KarsaStart
 */

?>

<section class="py-16 bg-surface-bright">
  <div class="container flex flex-col gap-8">

    <?php get_template_part('template-parts/layouts/section-header', null, [
      'title_text' => __('Visi & Misi Perusahaan', 'karsa_start'),
      'eyebrow_text' => __('Arah & Tujuan', 'karsa_start'),
      'alignment' => 'center'
    ]); ?>

    <div class="grid md:grid-cols-2 gap-4">
      <!-- VISION -->
      <?php get_template_part('template-parts/components/card', 'feature', [
        'icon' => 'eye',
        'title' => __('Visi', 'karsa_start'),
        'description' => __('Menjadi pengembang hunian terdepan dan pilihan utama masyarakat Indonesia dalam penyediaan perumahan rakyat yang aman, nyaman, dan bernilai investasi tinggi.', 'karsa_start')
      ]); ?>

      <!-- MISSION -->
      <?php get_template_part('template-parts/components/card', 'feature', [
        'icon' => 'target',
        'title' => __('Misi', 'karsa_start'),
        'list_items' => [
          __('Membangun hunian berkualitas dengan standar konstruksi terbaik.', 'karsa_start'),
          __('Mengembangkan kawasan perumahan di lokasi strategis & berkembang.', 'karsa_start'),
          __('Mengedepankan transparansi legalitas dan kemudahan proses kepemilikan.', 'karsa_start')
        ]
      ]); ?>
    </div>
  </div>
</section>