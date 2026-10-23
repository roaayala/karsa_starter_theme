<?php
/**
 * Template: Archive Unit
 * @package KarsaStart
 */

get_header();
?>

<div class="flex-1 py-8 bg-surface-bright">
  <div class="container flex flex-col gap-8">
    <div class="flex flex-col gap-4">
      <h1>Daftar Unit</h1>

      <?php if (have_posts()): ?>
        <?php while (have_posts()):
          the_post(); ?>

          <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            <?php get_template_part('template-parts/components/card-property') ?>
          </div>
        <?php endwhile ?>
      <?php endif ?>
    </div>

    <?php get_template_part('template-parts/components/pagination') ?>
  </div>
</div>




<?php
get_footer();