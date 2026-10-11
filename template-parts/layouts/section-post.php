<?php
/**
 * Layouts: Post Query
 * @package KarsaStart
 */

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

<section class="py-16 bg-primary-container">
  <div class="container flex flex-col gap-6">


    <?php if ($the_query->have_posts()): ?>

      <div>
        <?php while ($the_query->have_posts()):
          $the_query->the_post();

          $terms = get_the_terms(get_the_ID(), 'tipe_unit');
          // $terms = get_the_terms(get_the_ID(), 'status_unit');
          dump($terms);

          $has_thumbnail = has_post_thumbnail();
          $thumbnail_id = $has_thumbnail ? get_post_thumbnail_id() : null;
          $thumbnail_url = $has_thumbnail
            ? get_the_post_thumbnail_url(get_the_ID(), 'large')
            : get_template_directory_uri() . "/assets/images/thumbnail-fallback-undraw.png";
          $thumbnail_alt = $has_thumbnail ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)
            : __('Thumbnail Fallback by Undraw', 'karsa_start');
          ?>
          <article class="bg-surface border border-outline-variant">
            <div class="aspect-4/3">
              <img class="h-full w-full object-cover" src="<?= esc_url($thumbnail_url) ?>"
                alt="<?= esc_attr($thumbnail_alt) ?>">
            </div>


            <div class="p-6">
              <div class="flex flex-col gap-4">
                <div class="flex flex-col gap-2">
                  <h3>
                    <a href="<?php the_permalink() ?>">
                      <?php the_title(); ?>
                    </a>
                  </h3>

                  <div class="text-on-surface-subtle [&>p]:text-base">
                    <?php the_excerpt(); ?>
                  </div>
                </div>
                <div>
                  <a href="<?php the_permalink() ?>" class="btn btn--primary">
                    <span class="btn-label">
                      <?php _e('Baca Selengkapnya', 'karsa_start') ?>
                    </span>
                  </a>
                </div>
              </div>

            </div>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else: ?>
      <?php get_template_part('template-parts/components/cards/card', 'empty', [
        'message' => __('Belum ada unit yang tersedia saat ini.', 'karsa_start')
      ]) ?>
    <?php endif; ?>

    <?php wp_reset_postdata(); ?>
  </div>

</section>