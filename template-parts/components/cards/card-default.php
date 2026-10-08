<?php
/**
 * Template Part: Card Default Component
 */

$has_thumbnail = has_post_thumbnail();
$thumbnail_id = $has_thumbnail ? get_post_thumbnail_id() : null;
$thumbnail_url = $has_thumbnail
  ? get_the_post_thumbnail_url(get_the_ID(), 'large')
  : get_template_directory_uri() . "/assets/images/thumbnail-fallback-undraw.png";
$thumbnail_alt = $has_thumbnail ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)
  : __('Thumbnail Fallback by Undraw', 'karsa_start');
?>

<article class="
grid grid-cols-12
gap-4 sm:gap-6 lg:gap-8
items-center
">
  <div class="col-span-full md:col-span-6 
  rounded-shape-lg overflow-hidden">
    <img class="w-full h-full aspect-video md:aspect-4/3 lg:aspect-video object-cover"
      src="<?= esc_url($thumbnail_url) ?>" alt="<?= esc_attr($thumbnail_alt) ?>">
  </div>


  <div class="col-span-full md:col-span-6">
    <div class="flex flex-col gap-4">
      <div class="flex flex-col gap-2">
        <h3 class="font-semibold xl:text-3xl">
          <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
          </a>
        </h3>

        <div class="text-on-surface-variant/80 text-base leading-normal">
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