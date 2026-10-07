<?php

/**
 * Template Part/Layout: Section Unit
 * 
 * 
 */

$section_title = $args['title'] ?? __('Daftar Unit', 'karsa_start');
$limit = $args['limit'] ?? 6;

$args = [
  'post_type' => 'unit',
  'post_status' => 'publish',
  'posts_per_page' => $limit,
  'orderby' => 'date',
  'order' => 'DESC'
];

$unit_query = new WP_Query($args);
?>


<section class="py-16">
  <div class="container flex flex-col gap-8">
    <header>
      <h2 class="text-center"><?= esc_html($section_title) ?></h2>
    </header>

    <?php if ($unit_query->have_posts()): ?>
      <p>Ada</p>
    <?php else: ?>
      <?php get_template_part('template-parts/components/cards/card', 'empty') ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>

</section>