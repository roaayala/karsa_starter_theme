<?php

use TailPress\Pagination;
$hero_image_url = (!empty($args['hero_image_url'])) ? $args['hero_image_url']
  : get_template_directory_uri() . "/assets/images/common-fallback-undraw.png";


?>

<section class="relative overflow-hidden flex items-center justify-center">

  <img src="<?= esc_url($hero_image_url) ?>" alt="Hero Background"
    class="absolute inset-0 w-full h-full object-cover -z-10" fetchpriority="high" loading="eager">

  <div class="container py-16 flex justify-center xs:justify-start">
    <div class=" 
      p-6 sm:p-8
      rounded-shape-lg 
      bg-white/80 
      max-w-[20rem] md:max-w-[24rem]
      flex flex-col 
      gap-6 
      hover:shadow-elevation-1
      ">
      <div class="flex flex-col gap-3">
        <div class="flex flex-col gap-2">
          <h1>
            <?php bloginfo('name') ?>
          </h1>
          <p>
            Rumah subsidi dengan fasilitas lengkap, nyaman dan strategis di Kota Samarinda.
          </p>
        </div>
        <div class="flex flex-col gap-0">
          <span class="">Mulai dari</span>
          <span class="flex gap-2 items-end">
            <span class="font-bold text-on-surface text-3xl xs:text-4xl sm:text-5xl">182</span> juta.
          </span>
        </div>
      </div>

      <div class="">
        <a href="#" class="btn btn--primary">
          <span class="btn-icon">
            <i data-lucide="phone"></i>
          </span>
          <span class="btn-label">Hubungi Kami</span>
        </a>
      </div>
    </div>
  </div>
</section>