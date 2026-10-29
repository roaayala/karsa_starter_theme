<?php
/**
 * Template: Single Default
 * @package KarsaStart
 */

$category = get_the_category()[0];
?>

<div class="flex-1 py-8 md:py-16 bg-surface-bright">
  <?php if (have_posts()): ?>
    <?php while (have_posts()):
      the_post(); ?>

      <article class="container content-container flex flex-col gap-8">
        <div class="flex flex-col gap-8 pb-4 border-b border-b-outline/40">
          <h1>
            <?php the_title() ?>
          </h1>
          <div class="text-sm flex gap-1 items-center">
            <?php if (!empty($category) || is_wp_error($category)): ?>
              <span class="font-medium text-primary">
                <?= esc_html($category->name) ?>
              </span>
              <span>|</span>
            <?php endif ?>
            <span class="truncate text-on-surface-subtle">
              <?= get_the_date() ?>,
              <?= get_the_time() ?>
            </span>
          </div>
        </div>

        <div class="entry-content">
          <?php the_content() ?>
        </div>

      </article>

    <?php endwhile; ?>
  <?php endif; ?>
</div>