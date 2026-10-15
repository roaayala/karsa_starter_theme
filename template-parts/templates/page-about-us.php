<?php
/**
 * Template: Page About Us
 * @package KarsaStart
 */

?>

<div class="container">

  <?php
  if (have_posts()):
    while (have_posts()):
      the_post(); ?>

      <article class="py-16 flex flex-col gap-8">

        <div class="grid gap-8 md:grid-cols-12 items-center">
          <div class="md:col-span-6 lg:col-span-7 xl:col-span-8 flex flex-col gap-4">

            <div class=" flex flex-col gap-2">
              <span class="self-start py-1 px-3 normal-case font-normal text-xs bg-surface-container rounded-full">Tentang
                Kami</span>
              <h1>
                PT. Ingria Pratama Capitalindo
              </h1>
            </div>

            <div class=" text-on-surface-subtle">

              <p class="mb-4">PT. Ingria Pratama Capitalindo merupakan sebuah perseroan terbatas
                yang aktif dalam bidang jasa konstruksi
                dan perdagangan.</p>
              <p> Perusahaan telah memiliki beberapa portfolio konstruksi di berbagai lokasi
                strategis di
                Indonesia seperti di Bandung, Samarinda, Tangerang, Karawang, Bekasi, dan Sumedang. Sebagai perusahaan
                konstruksi yang berusaha menjadi Top of Mind untuk perumahan rakyat, PT Ingria Pratama Capitalindo terus
                mengedepankan prinsip kualitas, integritas, dan kolaborasi keseluruhan.</p>

            </div>

          </div>

          <img
            class="md:col-span-6 lg:col-span-5 xl:col-span-4 aspect-video md:aspect-3/4 lg:aspect-square object-center object-cover border border-outline/50 shadow-md rounded-2xl"
            src="<?= esc_url(get_template_directory_uri() . "/assets/images/fallback-1-undraw.png") ?>" alt="Section Image">
        </div>

      </article>

      <?php
    endwhile;
  endif; ?>

</div>