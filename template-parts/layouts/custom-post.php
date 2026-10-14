<?php
/**
 * Layouts: Post Query Section
 * @package KarsaStart
 */

$target_post_type = $args['target_post_type'] ?? 'post';
$limit = $args['limit'] ?? 6;
$section_title = $args['title'] ?? __('Daftar Unit', 'karsa_start');

$query_args = [
  'post_type' => $target_post_type,
  'post_status' => 'publish',
  'posts_per_page' => $limit,
  'orderby' => 'date',
  'order' => 'DESC'
];

$the_query = new WP_Query($query_args);
?>

<section class="py-16 bg-surface-bright">
  <div class="container flex flex-col">

    <div class="flex flex-col gap-8">
      <div class="flex justify-between items-end pb-4 border-b border-b-outline/50">
        <h2><?= esc_html($section_title); ?></h2>
        <a href="<?= esc_url(get_post_type_archive_link($target_post_type) ?: home_url('/unit/')); ?>"
          class="inline-flex items-center gap-2 text-sm font-semibold text-primary hover:underline">
          <span>Lihat Semua Unit</span>
          <i data-lucide="move-right" class="w-4 h-4"></i>
        </a>
      </div>

      <?php if ($the_query->have_posts()): ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          <?php while ($the_query->have_posts()):
            $the_query->the_post();
            $has_thumbnail = has_post_thumbnail();
            $thumbnail_id = $has_thumbnail ? get_post_thumbnail_id() : null;
            $thumbnail_url = $has_thumbnail
              ? get_the_post_thumbnail_url(get_the_ID(), 'large')
              : get_template_directory_uri() . "/assets/images/thumbnail-fallback-undraw.png";
            $thumbnail_alt = $has_thumbnail
              ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)
              : __('Thumbnail Fallback', 'karsa_start');
            ?>

            <article class="relative flex flex-col justify-end min-h-100 rounded-2xl overflow-hidden p-6 shadow-md">

              <img class="absolute inset-0 w-full h-full object-cover z-0 " src="<?= esc_url($thumbnail_url) ?>"
                alt="<?= esc_attr($thumbnail_alt) ?>">


              <div class="absolute inset-0 bg-linear-to-t from-primary/95 via-primary/50 to-surface-bright/0 z-10"></div>

              <!-- Card Content -->
              <div class="relative z-20 flex flex-col gap-4 text-center items-center">
                <div class="flex flex-col gap-2">
                  <h3 class="text-on-primary line-clamp-2">
                    <?= esc_html(get_the_title()); ?>
                  </h3>

                  <?php if (has_excerpt()): ?>
                    <p class="text-sm text-on-primary/80 line-clamp-2">
                      <?= esc_html(get_the_excerpt()); ?>
                    </p>
                  <?php endif; ?>
                </div>

                <div class="mt-2">
                  <a href="<?php the_permalink(); ?>" class="btn btn--primary btn--inverse">
                    <span class="btn-label">Detail Unit</span>
                  </a>
                </div>
              </div>

            </article>

          <?php endwhile; ?>
        </div>
      <?php else: ?>
        <?php get_template_part('template-parts/components/cards/card', 'empty', [
          'message' => __('Belum ada unit yang tersedia saat ini.', 'karsa_start')
        ]); ?>
      <?php endif; ?>

      <?php wp_reset_postdata(); ?>

    </div>
</section>