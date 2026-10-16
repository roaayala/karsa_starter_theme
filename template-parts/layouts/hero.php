<?php
/**
 * Layout: Hero Section
 * @package KarsaStart
 */

$hero_image_url = (!empty($args['hero_image_url']))
  ? $args['hero_image_url']
  : get_template_directory_uri() . "/assets/images/hero-fallback.jpg";

$site_name = get_bloginfo('name');
$tagline = get_bloginfo('description') ?: __('Perumahan Subsidi Modern', 'karsa_start');
$wa_number = $args['wa_number'] ?? '6281234567890';
?>

<section class="relative min-h-[60vh] flex items-center py-16 overflow-hidden">

  <!-- 1. Background Image -->
  <img src="<?= esc_url($hero_image_url) ?>" alt="<?= esc_attr($site_name); ?> Hero"
    class="absolute inset-0 w-full h-full object-cover object-center z-0" fetchpriority="high" loading="eager">

  <!-- 2. Dark Gradient Overlay -->
  <div class="absolute inset-0 bg-linear-to-r from-overlay/80 via-overlay/60  to-overlay/20 z-10"></div>

  <!-- 3. Hero Content Container -->
  <div class="container relative z-20">
    <div class="grid md:grid-cols-12 gap-12 items-center">

      <!-- Left Column -->
      <div class="md:col-span-7 text-on-primary">

        <!-- Headline -->
        <h1 class="text-on-primary lg:text-5xl mb-3 lg:mb-4">
          Hunian Asri & Terjangkau untuk Keluarga Anda
        </h1>

        <!-- Short description -->
        <p class="text-base lg:text-lg text-on-primary/80 leading-relaxed mb-6 lg:mb-8">
          <?= esc_html($site_name); ?> hadir menawarkan rumah subsidi dengan kualitas bangunan unggulan, fasilitas
          lengkap, dan akses strategis di Samarinda.
        </p>

        <!-- CTA Action Group -->
        <div class="flex flex-col xs:flex-row gap-4">
          <a href="#" target="_blank" class="btn btn--primary w-full xs:w-auto">
            <i data-lucide="phone" class="btn-icon"></i>
            <span class="btn-label">Hubungi Kami</span>
          </a>

          <a href="#" class="btn btn--primary btn--inverse w-full xs:w-auto">
            <i data-lucide="home" class="btn-icon"></i>
            <span class="btn-label">Lihat Pilihan Unit</span>
          </a>
        </div>

      </div>

      <!-- Right Column -->
      <div class="md:col-span-5 flex justify-start lg:justify-end">
        <div
          class="w-full sm:max-w-80 p-6  border border-white/20 shadow-2xl bg-surface-bright/90 backdrop-blur-md rounded-shape-lg text-on-surface transition-all duration-300">

          <div class="flex flex-col gap-5">
            <div class="flex flex-col gap-1 border-b border-outline-variant pb-4">
              <span class="text-xs font-semibold text-primary uppercase tracking-wider">Penawaran Spesial</span>
              <h2 class="text-h4 font-bold text-on-surface"><?= esc_html($site_name); ?></h2>
            </div>

            <div class="flex flex-col gap-1">
              <span class="text-xs text-on-surface-subtle uppercase tracking-wider font-medium">Harga
                Angsuran/Unit</span>
              <div class="flex items-baseline gap-1.5">
                <span class="text-xs text-on-surface-subtle">Mulai</span>
                <span class="font-bold text-4xl text-primary">182</span>
                <span class="font-semibold text-lg text-on-surface">Juta</span>
              </div>
            </div>

            <!-- Quick Specs List -->
            <ul class="flex flex-col gap-2 text-xs text-on-surface-subtle pt-1">
              <li class="flex items-center gap-2">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-primary"></i>
                <span>Angsuran Ringan & KPR Dibantu</span>
              </li>
              <li class="flex items-center gap-2">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-primary"></i>
                <span>Bebas Banjir & Bebas Biaya Kirim</span>
              </li>
            </ul>

            <a href="https://wa.me/<?= esc_attr($wa_number); ?>" class="btn btn--primary w-full justify-center mt-2">
              <span class="btn-label">Klaim Promo Unit</span>
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>

</section>