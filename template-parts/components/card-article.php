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
  : get_template_directory_uri() . "/public/images/fallback-2-undraw.png";
$thumbnail_alt = $has_thumbnail ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)
  : __('Thumbnail Fallback by Undraw', 'karsa_start');

?>

<article
  class="group bg-surface-bright shadow-sm hover:shadow-md transition-all rounded-2xl overflow-hidden border border-outline/20">

  <a href="<?= esc_url(get_the_permalink()) ?>">
    <img class="aspect-4/3 object-cover object-center border border-outline/20 rounded-2xl"
      src="<?= esc_url($thumbnail_url) ?>" alt="<?= esc_attr($thumbnail_alt) ?>">
  </a>

  <div class="p-6 flex flex-col gap-2">
    <div class="text-xs flex gap-1 items-center">
      <?php if (!empty($category)): ?>
        <span class="font-medium text-primary">
          <?= esc_html($category->name) ?>
        </span>
        <span>|</span>
      <?php endif ?>
      <span class="truncate text-on-surface-subtle">
        <?= get_the_date() ?>,
        <?= get_the_time() ?>
      </span>
    </div>

    <div class="flex flex-col gap-2">

      <a href="<?= esc_url(get_the_permalink()) ?>"
        class="font-semibold text-xl text-on-surface group-hover:text-primary group-hover:underline line-clamp-2">
        <?= esc_html(get_the_title()) ?>
      </a>

      <?php if ($with_excerpt): ?>
        <p class="text-sm/[1.6] text-on-surface-subtle line-clamp-4">
          <?= esc_html(get_the_excerpt()) ?>
        </p>
      <?php endif ?>

    </div>


  </div>

</article>