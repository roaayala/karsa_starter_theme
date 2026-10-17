<?php
/**
 * Layout: Intro & Highlights Section
 * @package KarsaStart
 */

$intro_image_url = (!empty($args['intro_image_url']))
  ? $args['intro_image_url']
  : get_template_directory_uri() . "/assets/images/common-fallback-2-undraw.png";

$card_contents = $args['features'] ?? [
  [
    'icon' => 'award',
    'title' => 'Harga Terbaik',
    'description' => 'Rumah subsidi dengan harga kompetitif dan metode pembayaran yang sangat fleksibel.'
  ],
  [
    'icon' => 'map-pin',
    'title' => 'Lokasi Strategis',
    'description' => 'Dekat dengan berbagai fasilitas publik: seperti RS Hermina, Pasar Kedondong dan Big Mall Samarinda.'
  ],
  [
    'icon' => 'thumbs-up',
    'title' => 'Fasilitas Lengkap',
    'description' => 'Terintegrasi dengan berbagai sarana kebutuhan dasar, seperti: klinik & apotek, area niaga, dan sarana pendidikan.'
  ]
];
?>

<section class="py-16 bg-surface-dim">
  <div class="container flex flex-col gap-12 ">

    <!-- TOP: Image & Story Split -->
    <div class="grid md:grid-cols-12 md:items-center gap-8">

      <!-- Left: Image Wrapper -->
      <div class="relative aspect-video md:col-span-6 md:aspect-4/3 lg:aspect-video shadow-md">
        <img src="<?= esc_url($intro_image_url) ?>" alt="<?= esc_attr(get_bloginfo('name')); ?>"
          class="w-full h-full object-cover" fetchpriority="high" loading="eager">

        <div
          class="absolute bottom-4 left-4 bg-surface/80 backdrop-blur-md px-3 py-1.5 shadow-md flex items-center gap-2">
          <i data-lucide="building-2" class="w-4 h-4 text-primary"></i>
          <span class="text-xs text-on-surface">Karya Ingria Group</span>
        </div>
      </div>

      <!-- Right: Content Story -->
      <div class="md:col-span-6 flex flex-col gap-4">
        <div class="flex flex-col gap-2">
          <span class="text-xs text-primary font-medium uppercase ">Mengenal
            <?= esc_html(get_bloginfo('name')); ?></span>
          <h2>
            Hunian Modern & Terjangkau di Kota Samarinda
          </h2>
        </div>

        <p class="text-on-surface-subtle leading-relaxed">
          New Mahakam Grande adalah perumahan rakyat terjangkau karya Ingria Group di Samarinda yang menghadirkan
          bangunan berkualitas, aman, nyaman, dan berfasilitas lengkap untuk mendukung kehidupan keluarga Anda.
        </p>

        <div class="mt-2">
          <a href="<?= esc_url(home_url('/tentang-kami')) ?>" class="btn btn--primary group">
            <span class="btn-label">Selengkapnya Tentang Kami</span>
            <i data-lucide="move-right" class="w-4 h-4 transition-transform group-hover:translate-x-1"></i>
          </a>
        </div>
      </div>

    </div>

    <!-- Soft Horizontal Divider -->
    <!-- <hr class="border-t border-outline/40"> -->

    <!-- BOTTOM: Feature Cards Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <?php foreach ($card_contents as $content): ?>
        <?php get_template_part('template-parts/components/card', 'feature', [
          'icon' => $content['icon'],
          'title' => $content['title'],
          'description' => $content['description']
        ]); ?>
      <?php endforeach; ?>
    </div>

  </div>
</section>