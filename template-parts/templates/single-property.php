<?php
/**
 * Template: Single for property-like 
 * @package KarsaStart
 */

function karsa_get_field_images($the_field)
{
  $result = [];
  foreach ($the_field as $field) {
    $image_url = wp_get_attachment_image_url($field['attachment']->ID, 'large');
    $image_alt = get_post_meta($field['attachment']->ID, '_wp_attachment_image_alt', true) ?: $field['attachment']->post_title;

    $result[] = [
      'url' => $image_url,
      'alt' => $image_alt
    ];
  }

  return $result;
}

$images = karsa_get_field_images(get_field('galeri_foto'));
?>

<div class="flex-1 py-8 md:py-16 bg-surface-bright">
  <?php if (have_posts()): ?>
    <?php while (have_posts()):
      the_post();
      ?>

      <article class="container flex flex-col gap-8">

        <?php get_template_part('template-parts/components/gallery-slider', null, [
          'images' => $images
        ]) ?>

        <h1>
          <?= esc_html(get_the_title()) ?>
        </h1>
      </article>

    <?php endwhile; ?>
  <?php endif; ?>
</div>