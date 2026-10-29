<?php
/**
 * Template: Page About Us
 * @package KarsaStart
 */

get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post();

    // HERO
    get_template_part('template-parts/layouts/hero');

    // STATS
    $stats = [
      ['label' => __('Tahun Pengalaman', 'karsa_start'), 'value' => '10+'],
      ['label' => __('Unit Terbangun', 'karsa_start'), 'value' => '5.000+'],
      ['label' => __('Lokasi Proyek', 'karsa_start'), 'value' => '8+'],
      ['label' => __('Legalitas Aman', 'karsa_start'), 'value' => '100%'],
    ];
    get_template_part('template-parts/layouts/stats-simple', null, ['stats' => $stats]);

    // VISION AND MISSION
    get_template_part('template-parts/layouts/vision-mission');

    // CORE VALUES
    get_template_part('template-parts/layouts/core-value');

    // CTA
    get_template_part('template-parts/layouts/cta-default', null, [
      'title' => __('Siap Temukan Hunian Impian Anda Bersama Kami?', 'karsa_start'),
      'description' => __('Jelajahi berbagai pilihan tipe unit perumahan berlokasi strategis yang sedang dikembangkan saat ini.', 'karsa_start')
    ]);
    ?>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>