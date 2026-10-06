<?php


$cta_image_url = (!empty($args['cta_image_url'])) ? $args['cta_image_url']
  : get_template_directory_uri() . "/assets/images/common-fallback-undraw.png";

?>


<section class="container py-16">


  <div class="h-80 bg-primary/80 rounded-shape-lg overflow-hidden relative flex flex-col items-center justify-center">

    <img src="<?= esc_url($cta_image_url) ?>" alt="Cta Background"
      class="absolute w-full h-full object-top object-cover -z-10" fetchpriority="high" loading="eager">


    <div class="max-w-[20rem] sm:max-w-[24rem] md:max-w-[36rem] lg:max-w-[45rem] mx-auto flex flex-col gap-6">
      <h2 class="font-bold text-on-primary text-center text-3xl sm:text-4xl lg:text-5xl">Tertarik dengan Properti Kami?
      </h2>

      <div class="text-center">
        <a href="#" class="btn btn--primary btn--inverse">
          <span class="btn-icon">
            <i data-lucide="phone"></i>
          </span>
          <span class="btn-label">Hubungi Kami</span>
        </a>

      </div>

    </div>
  </div>





</section>