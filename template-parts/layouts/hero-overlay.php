<?php
/**
 * Layout: Hero with Overlay Background
 * @package KarsaStart
 */

$hero_image_url = (!empty($args['hero_image_url']))
  ? $args['hero_image_url']
  : get_template_directory_uri() . "/assets/images/fallback-1-undraw.png";

?>

<section class="relative min-h-[70vh] flex items-center py-16 overflow-hidden">

  <!-- 1. Background Image -->
  <img src="<?= esc_url($hero_image_url) ?>" alt="<?= esc_attr($site_name); ?> Hero"
    class="absolute inset-0 w-full h-full object-cover object-center z-0" fetchpriority="high" loading="eager">

  <!-- 2. Dark Gradient Overlay -->
  <div class="absolute inset-0 bg-linear-to-r from-overlay/80 via-overlay/60  to-overlay/20 z-10"></div>

  <!-- 3. Hero Content Container -->
  <div class="container relative z-20">
    <div class="grid md:grid-cols-12 gap-12 items-center">

      <!-- Left Column -->
      <div class="min-w-0 md:col-span-6 lg:col-span-7 text-on-primary">

        <!-- Headline -->
        <h1 class="text-on-primary mb-3">
          Hunian Asri dan Terjangkau untuk Keluarga Anda
        </h1>

        <!-- Short description -->
        <p class="text-base text-on-primary/80 mb-6">
          <?= esc_html(get_bloginfo('name')); ?> hadir menawarkan rumah subsidi dengan kualitas bangunan unggulan,
          fasilitas
          lengkap, dan akses strategis di Samarinda.
        </p>

        <!-- CTA Action Group -->
        <div class="flex flex-col sm:flex-row gap-4">
          <a href="#" target="_blank" class="btn btn--primary w-full sm:w-auto">
            <i data-lucide="phone" class="btn-icon"></i>
            <span class="btn-label">Hubungi Kami</span>
          </a>

          <a href="#" class="btn btn--primary btn--inverse w-full sm:w-auto">
            <i data-lucide="home" class="btn-icon"></i>
            <span class="btn-label">Lihat Pilihan Unit</span>
          </a>
        </div>

      </div>

      <!-- Right Column -->
      <div class="min-w-0 md:col-span-6 lg:col-span-5 flex justify-center ">
        <?php get_template_part('template-parts/components/card-highlight') ?>
      </div>

    </div>
  </div>

</section>