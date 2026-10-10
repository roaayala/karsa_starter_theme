<?php

/**
 * Component: Card for Article Preview
 * @package KarsaStart
 */

$with_excerpt = $args['with_excerpt'] ?? false;

$category = get_the_category()[0];


$has_thumbnail = has_post_thumbnail();
$thumbnail_id = $has_thumbnail ? get_post_thumbnail_id() : null;
$thumbnail_url = $has_thumbnail
  ? get_the_post_thumbnail_url(get_the_ID(), 'large')
  : get_template_directory_uri() . "/assets/images/thumbnail-fallback-undraw.png";
$thumbnail_alt = $has_thumbnail ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)
  : __('Thumbnail Fallback by Undraw', 'karsa_start');

?>

<article class="flex flex-col
          border border-outline-variant
          rounded-shape-lg
          overflow-hidden
          bg-surface hover:bg-surface-container-low
          p-2
          ">

  <a href="<?= esc_url(get_the_permalink()) ?>">
    <img class="aspect-video object-cover object-center rounded-shape-md" src="<?= esc_url($thumbnail_url) ?>"
      alt="<?= esc_attr($thumbnail_alt) ?>">
  </a>

  <div class="p-4 flex flex-col gap-2">
    <div class=" text-xs text-on-surface-subtle flex gap-1 items-center w-full">
      <?php if (!empty($category)): ?>
        <a class="font-medium hover:underline" href="<?= esc_url(get_category_link($category->term_id)) ?>">
          <?= esc_html($category->name) ?>
        </a>
        <span>|</span>
      <?php endif ?>
      <span class="truncate">
        <?= get_the_date() ?>,
        <?= get_the_time() ?>
      </span>
    </div>

    <div class="flex flex-col gap-1">
      <h3 class="font-semibold text-lg hover:underline line-clamp-3">
        <a href="<?= esc_url(get_the_permalink()) ?>">
          <?= esc_html(get_the_title()) ?>
        </a>
      </h3>

      <?php if ($with_excerpt): ?>
        <p class="text-sm text-on-surface-subtle">
          <?= esc_html(get_the_excerpt()) ?>
        </p>
      <?php endif ?>

    </div>


  </div>

</article>