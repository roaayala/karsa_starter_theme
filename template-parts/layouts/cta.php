<?php
/**
 * Layout: CTA
 * @package KarsaStart
 */

$cta_image_url = (!empty($args['cta_image_url'])) ? $args['cta_image_url']
  : get_template_directory_uri() . "/assets/images/fallback-1-undraw.png";
?>

<section class="py-16 bg-surface">

  <div class="container relative flex flex-col justify-center min-h-80 rounded-4xl overflow-hidden">

    <img src="<?= esc_url($cta_image_url) ?>" alt="Cta Background"
      class="absolute inset-0 w-full h-full object-cover z-0" fetchpriority="high" loading="eager">

    <div class="absolute inset-0 bg-primary/80 z-10"></div>

    <div class="p-6 sm:p-8 md:p-16 relative z-20 text-center items-center">

      <h2 class="font-bold text-2xl xs:text-4xl lg:text-5xl text-on-primary text-center leading-tight mb-6">Tertarik
        dengan Properti
        Kami?
      </h2>

      <div>
        <a href="#" class="btn btn--primary btn--inverse">
          <i data-lucide="phone" class="btn-icon"></i>
          <span class="btn-label">Hubungi Kami</span>
        </a>
      </div>
    </div>

    <!-- <div class="max-w-[20rem] sm:max-w-[24rem] md:max-w-[36rem] lg:max-w-[45rem] mx-auto flex flex-col gap-6">
      <h2 class="font-bold text-on-primary text-center text-4xl xs:text-5xl ">Tertarik dengan Properti Kami?
      </h2>

      <div class="text-center">
        <a href="#" class="btn btn--primary btn--inverse">
          <span class="btn-icon">
            <i data-lucide="phone"></i>
          </span>
          <span class="btn-label">Hubungi Kami</span>
        </a>

      </div>

    </div> -->
  </div>


</section>