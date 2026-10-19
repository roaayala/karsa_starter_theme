<?php
/**
 * Component: Card Preview with Overlay
 * @package KarsaStart
 */

$has_thumbnail = has_post_thumbnail();
$thumbnail_id = $has_thumbnail ? get_post_thumbnail_id() : null;
$thumbnail_url = $has_thumbnail
  ? get_the_post_thumbnail_url(get_the_ID(), 'large')
  : get_template_directory_uri() . "/assets/images/fallback-2-undraw.png";
$thumbnail_alt = $has_thumbnail
  ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)
  : __('Thumbnail Fallback', 'karsa_start');
?>

<article
  class="relative flex flex-col justify-end min-h-100 w-full rounded-2xl overflow-hidden p-6 shadow-sm hover:shadow-md border border-outline/10 transition-all">

  <img class="absolute inset-0 w-full h-full object-cover z-0" src="<?= esc_url($thumbnail_url) ?>"
    alt="<?= esc_attr($thumbnail_alt) ?>">

  <div class="absolute inset-0 bg-linear-to-t from-primary/95 to-primary/0 z-10"></div>

  <!-- Card Content -->
  <div class="relative z-20 flex flex-col gap-6 text-center items-center">
    <div class="flex flex-col gap-1">
      <h3 class="text-on-primary line-clamp-2">
        <?= esc_html(get_the_title()); ?>
      </h3>

      <?php if (has_excerpt()): ?>
        <p class="text-sm/[1.6] text-on-primary/80 line-clamp-2">
          <?= esc_html(get_the_excerpt()); ?>
        </p>
      <?php endif; ?>
    </div>

    <div>
      <a href=" <?php the_permalink(); ?>" class="btn btn--primary btn--inverse">
        <span class="btn-label">Detail Unit</span>
      </a>
    </div>
  </div>

</article>