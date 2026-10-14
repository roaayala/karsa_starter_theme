<?php
/**
 * Template: Page Default
 * @package KarsaStart
 */

?>

<div class="container">
  <div class="content-container">
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post(); ?>

        <article class="py-16 entry-content">
          <h1><?php the_title() ?></h1>
          <div>
            <?php the_content() ?>
          </div>
        </article>

        <?php
      endwhile;
    endif; ?>
  </div>
</div>