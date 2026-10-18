<?php

/**
 * Layout: Hero
 * @package KarsStart
 */

?>

<section class="py-16 bg-surface-bright border-b border-outline/60">
  <div class="container grid md:grid-cols-12 gap-8 items-center">

    <div class="md:col-span-6">
      <span class="badge badge--primary badge--ghost mb-1">Profil Perusahaan</span>
      <h1 class="lg:text-5xl mb-2">PT. Ingria Pratama Capitalindo</h1>
      <p class="text-base lg:text-lg text-on-surface-subtle leading-relaxed">
        Perseroan terbatas yang aktif dalam bidang jasa konstruksi dan perdagangan. Kami berkomitmen menjadi pengembang
        terdepan dalam penyediaan perumahan rakyat yang berkualitas, berintegritas, dan terjangkau di berbagai lokasi
        strategis Indonesia.
      </p>
    </div>

    <div class="md:col-span-6">
      <div class="aspect-4/3 sm:aspect-video md:aspect-4/3 rounded-4xl overflow-hidden shadow-lg">
        <img src="<?= has_post_thumbnail()
          ? get_the_post_thumbnail_url(get_the_ID(), 'large')
          : esc_url(get_template_directory_uri() . '/assets/images/fallback-1-undraw.png'); ?>"
          alt="PT Ingria Pratama Capitalindo" class="w-full h-full object-cover">
      </div>
    </div>

  </div>
</section>