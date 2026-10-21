<?php

/**
 * Template: Index Default
 * @package KarsaStart
 */

?>

<?php if (is_home() && !is_front_page()): ?>
  <div class="relative rounded-2xl overflow-hidden flex items-center justify-center">
    <img class="absolute inset-0 -z-10 h-full w-full object-cover object-center"
      src="<?= esc_url(get_template_directory_uri() . '/public/images/fallback-1-undraw.png') ?>" alt="Index Thumbnail">

    <div class="absolute inset-0 -z-5 bg-primary/75"></div>

    <h1 class="text-center text-on-primary py-16">
      <?php single_post_title(); ?>
    </h1>
  </div>

  <section class="flex flex-col gap-4">
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

<?php endif; ?>