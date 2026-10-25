<?php
/**
 * Template: Single for property-like 
 * @package KarsaStart
 */

dump(get_field('galeri_foto'));
?>

<div class="flex-1 py-8 md:py-16 bg-surface-bright">
  <?php if (have_posts()): ?>
    <?php while (have_posts()):
      the_post(); ?>

      <article class="container flex flex-col gap-8">
        <h1><?= esc_html(the_title()) ?></h1>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
</div>