<?php
/**
 * Layout: Latest Posts / Blog Section
 * @package KarsaStart
 */

$limit = $args['limit'] ?? 3;
$section_title = $args['title'] ?? __('Artikel & Kabar Terbaru', 'karsa_start');
$eyebrow = $args['eyebrow'] ?? __('Informasi & Edukasi', 'karsa_start');

$blog_page_id = get_option('page_for_posts');
$archive_link = $blog_page_id ? get_permalink($blog_page_id) : home_url('/artikel/');

$query_args = [
  'post_type' => 'post',
  'post_status' => 'publish',
  'posts_per_page' => $limit,
  'ignore_sticky_posts' => true,
  'orderby' => 'date',
  'order' => 'DESC'
];

$the_query = new WP_Query($query_args);
?>

<section class="py-12 md:py-20 bg-surface">
  <div class="container flex flex-col gap-8 md:gap-10">

    <!-- Section Header Bar -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pb-4 border-b border-outline-variant/60">
      <div class="flex flex-col gap-1">
        <?php if ($eyebrow): ?>
          <span class="text-xs font-semibold uppercase tracking-wider text-primary">
            <?= esc_html($eyebrow); ?>
          </span>
        <?php endif; ?>
        <h2 class="text-2xl md:text-3xl font-bold text-on-surface">
          <?= esc_html($section_title); ?>
        </h2>
      </div>

      <a href="<?= esc_url($archive_link); ?>"
        class="group inline-flex items-center gap-2 text-sm font-semibold text-primary hover:underline self-start sm:self-auto">
        <span>Baca Selengkapnya</span>
        <i data-lucide="move-right" class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1"></i>
      </a>
    </div>

    <!-- Article Cards Grid -->
    <?php if ($the_query->have_posts()): ?>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        <?php while ($the_query->have_posts()):
          $the_query->the_post(); ?>
          <?php get_template_part('template-parts/components/cards/card', 'article'); ?>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <?php get_template_part('template-parts/components/cards/card', 'empty', [
        'message' => __('Belum ada artikel yang diterbitkan.', 'karsa_start')
      ]); ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div>
</section>