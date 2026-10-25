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
        <?php if (!empty($images)): ?>
          <div class="grid lg:grid-cols-[1fr_20rem] gap-4" id="gallery-slider"
            data-images="<?= esc_attr(wp_json_encode($images)); ?>">
            <div class="relative aspect-video rounded-2xl overflow-hidden">
              <img id="gallery-main-image" src="<?= esc_url($images[0]['url']); ?>" alt="<?= esc_attr($images[0]['alt']); ?>"
                class="h-full w-full object-cover" loading="eager" />

              <?php if (count($images) > 1): ?>
                <button type="button" id="gallery-prev" class="absolute left-4 top-1/2 -translate-y-1/2 btn btn--primary"
                  aria-label="Foto Sebelumnya">
                  <i data-lucide="chevron-left" class="btn-icon"></i>
                </button>

                <button type="button" id="gallery-next" class="absolute right-4 top-1/2 -translate-y-1/2 btn btn--primary"
                  aria-label="Foto Selanjutnya">
                  <i data-lucide="chevron-right" class="btn-icon"></i>
                </button>
              <?php endif; ?>
            </div>

            <?php if (count($images) > 1): ?>
              <div id="galery-thumbnails" class="hidden sm:flex gap-4 overflow-x-auto scrollbar-none">

                <?php foreach ($images as $index => $image): ?>
                  <button class="galery-image aspect-square w-40 rounded-lg overflow-hidden " data-index="<?= $index; ?>"
                    data-url="<?= esc_url($image['url']); ?>" data-alt="<?= esc_attr($image['alt']); ?>">
                    <img class="h-full w-full object-cover" src="<?= esc_url($image['url']); ?>"
                      alt="<?= esc_attr($image['alt']); ?>" loading="lazy" />
                  </button>
                <?php endforeach; ?>

              </div>
            <?php endif ?>

          </div>
        <?php endif ?>
        <h1><?= esc_html(get_the_title()) ?></h1>
      </article>
    <?php endwhile; ?>
  <?php endif; ?>
</div>