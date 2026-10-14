<?php
/**
 * Layout: Hero
 * @package KarsaStart
 */

$hero_image_url = (!empty($args['hero_image_url'])) ? $args['hero_image_url']
  : get_template_directory_uri() . "/assets/images/fallback-1-undraw.png";

?>

<section class="relative py-16 min-h-[40vh] flex items-center justify-center">
  <div class="absolute -z-10 h-full w-full">
    <img src=" <?= esc_url($hero_image_url) ?>" alt="Hero Background"
      class="aspect-video h-full w-full object-center object-cover " fetchpriority="high" loading="eager">
  </div>

  <div class="container">
    <div class="w-full sm:max-w-80
      p-6 sm:p-8
      border border-outline/50 hover:border-outline
      shadow-md
      bg-surface-bright/95
      rounded-2xl
      ">
      <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-2">
          <h1>
            <?php bloginfo('name') ?>
          </h1>
          <p class="text-on-surface-subtle">
            Rumah subsidi dengan fasilitas lengkap, nyaman dan strategis di Kota Samarinda.
          </p>
        </div>

        <div class="flex flex-col gap-1 text-on-surface leading-none">
          <span>Mulai dari</span>
          <span>
            <span class="font-bold text-4xl xs:text-5xl">182</span> juta
          </span>
        </div>
        <div>
          <a href="#" class="btn btn--primary">
            <i data-lucide="phone" class="btn-icon"></i>
            <span class="btn-label">Hubungi Kami</span>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>