<?php


$hero_image_url = (!empty($args['hero_image_url'])) ? $args['hero_image_url']
  : get_template_directory_uri() . "/assets/images/hero-fallback-undraw.png";

?>

<section>
  <div class="container py-16 grid md:grid-cols-12 items-center gap-8">
    <div class="min-w-0 md:col-span-5 lg:col-span-5 flex flex-col gap-6">
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

    <div class="min-w-0 md:col-span-7 lg:col-span-7 rounded-shape-lg overflow-hidden">
      <img src=" <?= esc_url($hero_image_url) ?>" alt="Hero Background"
        class="aspect-video md:aspect-square lg:aspect-4/3 w-full h-full object-center object-cover -z-10"
        fetchpriority="high" loading="eager">
    </div>
  </div>
</section>