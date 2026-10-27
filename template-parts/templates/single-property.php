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

<div class="flex-1 py-8 bg-surface-bright">
  <?php if (have_posts()): ?>
    <?php while (have_posts()):
      the_post();

      $address_tax = karsa_build_tax_tree(get_the_terms(get_the_ID(), 'unit_address'), 'unit_address');
      $full_address = get_field('alamat') . ', ' . $address_tax;
      $status_tax = get_the_terms(get_the_ID(), 'unit_status');

      $price = format_rupiah(get_field('harga'));

      ?>

      <article class="container grid grid-cols-12 gap-8">


        <div class="col-span-12 md:col-span-7 lg:col-span-8">
          <?php get_template_part('template-parts/components/gallery-slider', null, [
            'images' => $images
          ]) ?>
        </div>

        <div class="col-span-12 md:col-span-5 lg:col-span-4">
          <div class="flex flex-col gap-4">
            <div>
              <?php if (!empty($status_tax) && !is_wp_error($status_tax)): ?>
                <div class="mb-2">
                  <span class="badge badge--primary">
                    <?= esc_html($status_tax[0]->name) ?>
                  </span>
                </div>
              <?php endif ?>

              <h1 class="mb-1">
                <?= esc_html(get_the_title()) ?>
              </h1>

              <?php if (isset($full_address)): ?>
                <div class="flex items-center gap-2">
                  <span class="text-on-surface-subtle">
                    <i data-lucide="map-pin" class="w-5 h-5 text-on-surface-subtle"></i>
                  </span>
                  <span class="text-sm text-on-surface-subtle line-clamp-2">
                    <?= esc_html($full_address) ?>
                  </span>
                </div>
              <?php endif ?>
            </div>

            <div class="flex justify-start items-start gap-2">
              <span class="truncate text-on-surface-subtle">Harga</span>
              <span class="shrink-0 font-bold text-xl text-primary">
                <?= esc_html($price) ?>
              </span>
            </div>

            <a href="#" target="_blank" class="btn btn--primary w-full">
              <i data-lucide="phone" class="btn-icon"></i>
              <span class="btn-label">Hubungi Kami</span>
            </a>
          </div>
        </div>


        <div class="col-span-12 md:col-span-7">
          <?php if (has_excerpt()): ?>
            <?php the_excerpt() ?>
          <?php endif ?>
        </div>


      </article>

    <?php endwhile; ?>
  <?php endif; ?>
</div>