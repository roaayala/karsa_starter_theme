<?php
/**
 * Layout: Hero
 * @package KarsaStart
 */

$hero_image_url = (!empty($args['hero_image_url'])) ? $args['hero_image_url']
  : get_template_directory_uri() . "/assets/images/fallback-1-undraw.png";

?>

<section class="relative py-16 min-h-[50vh] flex items-center justify-center">
  <div class="absolute -z-10 h-full w-full">
    <img src=" <?= esc_url($hero_image_url) ?>" alt="Hero Background"
      class="aspect-video h-full w-full object-center object-cover " fetchpriority="high" loading="eager">
  </div>

  <div class="container grid grid-cols-12 gap-4 xs:gap-6 sm:gap-8">
    <div class="min-w-0 col-span-12 sm:col-span-6 md:col-span-5 lg:col-span-4 bg-surface/90  p-6 sm:p-8
      border border-outline-variant
      ">
      <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-2">
          <h1 class="text-6xl lg:text-7xl">
            <?php bloginfo('name') ?>
          </h1>
          <p class="text-on-surface-variant">
            Rumah subsidi dengan fasilitas lengkap, nyaman dan strategis di Kota Samarinda.
          </p>
        </div>

        <div class="flex flex-col gap-2 text-on-surface leading-none">
          <span class="">Mulai dari</span>
          <span class="">
            <span class="font-bold text-6xl lg:text-7xl">182</span> juta
          </span>
        </div>
        <div>
          <a href="#" class="btn btn--primary">
            <span class="btn-icon">
              <i data-lucide="phone"></i>
            </span>
            <span class="btn-label">Hubungi Kami</span>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>