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

      $property_info = [
        ['key' => 'floor', 'value' => get_field('lantai'), 'icon' => 'layers-2'],
        ['key' => 'land_area', 'value' => get_field('luas_tanah'), 'icon' => 'home'],
        ['key' => 'property_area', 'value' => get_field('luas_unit'), 'icon' => 'vector-polygon'],
        ['key' => 'bedroom', 'value' => get_field('kamar_tidur'), 'icon' => 'bed-double'],
        ['key' => 'bathroom', 'value' => get_field('kamar_mandi'), 'icon' => 'bath'],
      ];

      $specs = get_field('spesifikasi_unit');
      ?>

      <article class="container flex flex-col md:grid md:grid-cols-12 gap-8">

        <div class="md:col-span-7 lg:col-span-8">
          <?php get_template_part('template-parts/components/gallery-slider', null, [
            'images' => $images
          ]) ?>
        </div>

        <div class="md:col-span-5 lg:col-span-4">
          <div class="flex flex-col gap-4 md:gap-6">
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

            <?php if (!empty($property_info)): ?>
              <ul class="flex flex-row flex-wrap gap-3">
                <?php foreach ($property_info as $info): ?>
                  <li class="inline-flex items-center gap-1.5 bg-surface-container py-1.5 px-3 rounded-lg text-on-surface">
                    <i data-lucide="<?= esc_attr($info['icon']) ?>" class="w-4 h-4"></i>
                    <span class="text-xs leading-none">
                      <?= esc_html($info['value'] === 0 ? '-' : $info['value']) ?>
                      <span>
                        <?php if ($info['key'] === 'bedroom') {
                          echo esc_html('Kamar Tidur');
                        } else if ($info['key'] === 'bathroom') {
                          echo esc_html('Kamar Mandi');
                        } else if ($info['key'] === 'property_area' || $info['key'] === 'land_area') {
                          echo esc_html('M') . '<sup>2</sup>';
                        } else if ($info['key'] === 'floor') {
                          echo esc_html('Lantai');
                        }
                        ?>
                      </span>
                    </span>

                  </li>
                <?php endforeach ?>
              </ul>
            <?php endif ?>

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

        <div class="md:col-span-7 lg:col-span-8 border-t border-t-outline/40 mt-2"></div>

        <div class="md:col-span-7 lg:col-span-8 flex flex-col gap-6">
          <div class="flex flex-col gap-3">
            <h2><?php the_title() ?></h2>
            <div>
              <?php the_excerpt() ?>
            </div>
          </div>

          <?php if (!empty($specs) && !is_wp_error($specs)): ?>
            <div class="flex flex-col gap-3">
              <h2>Spefikasi Unit</h2>

              <?php
              $li_style = 'list-disc flex gap-2';
              $li_label = 'w-20';
              $li_value = 'font-medium';
              ?>

              <ul class="flex flex-col gap-2">
                <li class="<?= esc_attr($li_style) ?>">
                  <span class="<?= esc_attr($li_label) ?>">Plafon</span>
                  :
                  <span class="<?= esc_attr($li_value) ?>"><?= esc_html($specs['plafon']) ?></span>
                </li>

                <li class="<?= esc_attr($li_style) ?>">
                  <span class="<?= esc_attr($li_label) ?>">Dinding</span>
                  :
                  <span class="<?= esc_attr($li_value) ?>"><?= esc_html($specs['dinding']) ?></span>
                </li>

                <li class="<?= esc_attr($li_style) ?>">
                  <span class="<?= esc_attr($li_label) ?>">Sanitari</span>
                  :
                  <span class="<?= esc_attr($li_value) ?>"><?= esc_html($specs['sanitari']) ?></span>
                </li>

                <li class="<?= esc_attr($li_style) ?>">
                  <span class="<?= esc_attr($li_label) ?>">Lantai</span>
                  :
                  <span class="<?= esc_attr($li_value) ?>"><?= esc_html($specs['lantai']) ?></span>
                </li>

                <li class="<?= esc_attr($li_style) ?>">
                  <span class="<?= esc_attr($li_label) ?>">Kusen</span>
                  :
                  <span class="<?= esc_attr($li_value) ?>"><?= esc_html($specs['kusen']) ?></span>
                </li>

                <li class="<?= esc_attr($li_style) ?>">
                  <span class="<?= esc_attr($li_label) ?>">Air</span>
                  :
                  <span class="<?= esc_attr($li_value) ?>"><?= esc_html($specs['instalasi_air']) ?></span>
                </li>

                <li class="<?= esc_attr($li_style) ?>">
                  <span class="<?= esc_attr($li_label) ?>">Listrik</span>
                  :
                  <span class="<?= esc_attr($li_value) ?>"><?= esc_html($specs['listrik']) ?> Watt</span>
                </li>
              </ul>

            </div>
          <?php endif ?>

        </div>


      </article>

    <?php endwhile; ?>
  <?php endif; ?>
</div>