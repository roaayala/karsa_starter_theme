<?php

/**
 * Template Part/Layout: Section Targeted Post
 * 
 * 
 */

$section_title = $args['title'] ?? __('Post List', 'karsa_start');

$target_post_type = $args['target_post_type'] ?? 'post';
$limit = $args['limit'] ?? 6;

$query_args = [
  'post_type' => $target_post_type,
  'post_status' => 'publish',
  'posts_per_page' => $limit,
  'orderby' => 'date',
  'order' => 'DESC'
];

$the_query = new WP_Query($query_args);
?>

<section class="py-16">
  <div class="container flex flex-col gap-8">
    <header>
      <h2 class="text-center"><?= esc_html($section_title) ?></h2>
    </header>

    <?php if ($the_query->have_posts()): ?>

      <div>
        <?php
        while ($the_query->have_posts()):
          $the_query->the_post();
          get_template_part('template-parts/components/cards/card', 'default');
        endwhile; ?>
      </div>
    <?php else: ?>
      <?php get_template_part('template-parts/components/cards/card', 'empty', [
        'message' => __('Belum ada unit yang tersedia saat ini.', 'karsa_start')
      ]) ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>

</section>