<?php
/**
 * Template: About Us
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
      ['label' => 'Tahun Pengalaman', 'value' => '10+'],
      ['label' => 'Unit Terbangun', 'value' => '5.000+'],
      ['label' => 'Lokasi Proyek', 'value' => '8+'],
      ['label' => 'Legalitas Aman', 'value' => '100%']
    ];
    get_template_part('template-parts/layouts/stats-simple', null, ['stats' => $stats]);

    // VISION AND MISSION
    get_template_part('template-parts/layouts/vision-mission');

    // CORE VALUES
    get_template_part('template-parts/layouts/core-value');
    ?>


    <!-- 5. CTA SECTION -->
    <section class="py-16 container">
      <div
        class="bg-primary text-on-primary rounded-shape-lg p-8 md:p-12 text-center flex flex-col items-center gap-6 shadow-lg">
        <h2 class="text-h2 font-bold max-w-2xl">Siap Temukan Hunian Impian Anda Bersama Kami?</h2>
        <p class="text-on-primary/80 max-w-xl text-sm md:text-base">
          Jelajahi berbagai pilihan tipe unit perumahan berlokasi strategis yang sedang dikembangkan saat ini.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
          <a href="<?= esc_url(home_url('/unit/')); ?>" class="btn btn--primary btn--inverse">
            Lihat Daftar Unit
          </a>
        </div>
      </div>
    </section>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>