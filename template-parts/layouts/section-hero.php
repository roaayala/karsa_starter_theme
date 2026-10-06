<?php


$hero_image_url = (!empty($args['hero_image_url'])) ? $args['hero_image_url']
  : get_template_directory_uri() . "/assets/images/hero-fallback-undraw.png";

?>

<section class="flex items-center justify-center">
  <div class="container py-16 grid md:grid-cols-12 items-center gap-8">
    <div class="col-span-12 md:col-span-5 lg:col-span-5 flex flex-col gap-6">
      <div class="flex flex-col gap-3">
        <div class="flex flex-col gap-1">
          <h1>
            <?php bloginfo('name') ?>
          </h1>
          <p>
            Rumah subsidi dengan fasilitas lengkap, nyaman dan strategis di Kota Samarinda.
          </p>
        </div>
        <div class="flex flex-col">
          <span class="">Mulai dari</span>
          <span class="flex gap-2 items-end">
            <span class="font-bold text-on-surface text-3xl xs:text-4xl sm:text-5xl">182</span> juta.
          </span>
        </div>
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

    <div class="min-w-0 col-span-12 md:col-span-7 lg:col-span-7 rounded-shape-lg overflow-hidden">
      <img src=" <?= esc_url($hero_image_url) ?>" alt="Hero Background"
        class="aspect-video md:aspect-square lg:aspect-4/3 w-full h-full object-center object-cover -z-10"
        fetchpriority="high" loading="eager">
    </div>
  </div>
</section>

<!-- <section class="relative overflow-hidden flex items-center justify-center">

  <img src="<?= esc_url($hero_image_url) ?>" alt="Hero Background"
    class="absolute inset-0 w-full h-full object-center object-cover -z-10" fetchpriority="high" loading="eager">

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
</section> -->