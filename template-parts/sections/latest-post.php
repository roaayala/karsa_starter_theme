<?php
/**
 * Layout: Latest Posts / Blog Section
 * @package KarsaStart
 */

$limit = $args['limit'] ?? 3;
$section_title = $args['title'] ?? __('Artikel & Kabar Terbaru', 'karsa_start');
$eyebrow = $args['eyebrow'] ?? __('Informasi & Edukasi', 'karsa_start');

$archive_link = get_permalink(get_option('page_for_posts'));

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

<section class="py-16 bg-surface">
  <div class="container flex flex-col gap-8">

    <!-- Section Header Bar -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pb-4 border-b border-outline/40">
      <div class="flex flex-col gap-1">
        <?php if ($eyebrow): ?>
          <span class="badge badge--primary badge--ghost">
            <span class="badge-label">
              <?= esc_html($eyebrow); ?>
            </span>
          </span>
        <?php endif; ?>
        <h2 class="truncate">
          <?= esc_html($section_title); ?>
        </h2>
      </div>

      <a href="<?= esc_url($archive_link); ?>"
        class="group inline-flex items-center gap-2 text-sm font-semibold text-primary hover:underline self-start sm:self-auto">
        <span>Lihat Lebih Banyak</span>
        <i data-lucide="move-right" class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1"></i>
      </a>
    </div>

    <!-- Article Cards Grid -->
    <?php if ($the_query->have_posts()): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <?php while ($the_query->have_posts()):
          $the_query->the_post(); ?>
          <?php get_template_part('template-parts/components/card', 'article'); ?>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <?php get_template_part('template-parts/components/card', 'empty'); ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div>
</section>