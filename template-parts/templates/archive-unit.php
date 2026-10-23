<?php
/**
 * Template: Archive Unit
 * @package KarsaStart
 */

get_header();
?>

<div class="flex-1 py-8 bg-surface-bright">
  <div class="container flex flex-col gap-8">
    <h1>Daftar Unit</h1>

    <?php if (have_posts()): ?>
      <?php while (have_posts()):
        the_post(); ?>

        <?php dump(get_post()); ?>

        <?php get_template_part('template-parts/components/card-property') ?>

      <?php endwhile ?>
    <?php endif ?>
  </div>
</div>




<?php
get_footer();