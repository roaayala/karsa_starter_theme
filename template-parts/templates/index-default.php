<?php

/**
 * Template: Index Default
 * @package KarsaStart
 */

?>

<div class="bg-surface-bright ">
  <div class="container py-8 flex flex-col gap-8">
    <?php if (is_front_page()): ?>
      <h1>Index</h1>
    <?php endif ?>

    <?php if (is_home() && !is_front_page()): ?>
      <div class="relative rounded-2xl overflow-hidden flex items-center justify-center h-30 sm:h-40 p-8">

        <img class="absolute inset-0 z-0 h-full w-full object-cover object-center"
          src="<?= esc_url(get_template_directory_uri() . '/public/images/fallback-1-undraw.png') ?>" alt=""
          aria-hidden="true">

        <div class="absolute inset-0 z-10 bg-primary/80"></div>

        <h1 class="relative z-20 text-center text-on-primary ">
          <?php single_post_title(); ?>
        </h1>
      </div>
    <?php endif; ?>

    <section class="flex flex-col gap-6">
      <h2>
        <?php single_post_title() ?> Terbaru
      </h2>

      <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php if (have_posts()): ?>
          <?php while (have_posts()):
            the_post(); ?>
            <?php get_template_part('template-parts/components/card', 'article', ['with_excerpt' => true]) ?>
          <?php endwhile; ?>

        <?php else: ?>
          <?php get_template_part('template-parts/components/cards/card', 'empty', [
            'message' => 'Belum ada artikel baru untuk saat ini!'
          ]) ?>
        <?php endif; ?>
      </div>
    </section>

    <?php get_template_part('template-parts/components/pagination') ?>

  </div>
</div>