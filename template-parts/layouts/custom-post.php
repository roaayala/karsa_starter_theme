<?php
/**
 * Layout: Post Query Section
 * @package KarsaStart
 */

$target_post_type = $args['target_post_type'] ?? 'post';
$limit = $args['limit'] ?? 6;
$section_title = $args['title'] ?? __('Judul Section', 'karsa_start');
$eyebrow = $args['eyebrow'] ?? __('CAPTION', 'karsa_start');
$card_variant = $args['card_variant'] ?? 'preview-overlay';

$query_args = [
  'post_type' => $target_post_type,
  'post_status' => 'publish',
  'posts_per_page' => $limit,
  'orderby' => 'date',
  'order' => 'DESC'
];

$the_query = new WP_Query($query_args);

// Dynamic Archive Link & CTA Label
$archive_link = get_post_type_archive_link($target_post_type) ?: home_url('/' . $target_post_type . '/');
$cta_label = $args['cta_label'] ?? ($target_post_type === 'unit' ? __('Lihat Semua Unit', 'karsa_start') : __('Lihat Semua Artikel', 'karsa_start'));
?>

<section class="py-16 bg-surface-bright">
  <div class="container flex flex-col gap-8 md:gap-10">

    <!-- Section Header Bar -->
    <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 pb-4 border-b border-outline/40">
      <div class="flex flex-col gap-1">
        <?php if ($eyebrow): ?>
          <span class="text-xs font-medium uppercase text-primary">
            <?= esc_html($eyebrow); ?>
          </span>
        <?php endif; ?>
        <h2>
          <?= esc_html($section_title); ?>
        </h2>
      </div>

      <a href="<?= esc_url($archive_link); ?>"
        class="group inline-flex items-center gap-2 text-sm font-semibold text-primary hover:underline self-start sm:self-auto">
        <span><?= esc_html($cta_label); ?></span>
        <i data-lucide="move-right" class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1"></i>
      </a>
    </div>

    <!-- Content Grid -->
    <?php if ($the_query->have_posts()): ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php while ($the_query->have_posts()):
          $the_query->the_post(); ?>
          <?php get_template_part('template-parts/components/card', $card_variant); ?>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <?php get_template_part('template-parts/components/cards/card', 'empty'); ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>

  </div>
</section>