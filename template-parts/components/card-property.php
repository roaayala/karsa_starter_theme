<?php
/**
 * Component: Card for property-like previed
 * @package KarsaStart
 */

$property_info = [
  ['key' => 'property_area', 'value' => get_field('luas_unit'), 'icon' => 'vector-polygon'],
  ['key' => 'land_area', 'value' => get_field('luas_tanah'), 'icon' => 'home'],
  ['key' => 'floor', 'value' => get_field('lantai'), 'icon' => 'layers-2'],
  ['key' => 'bedroom', 'value' => get_field('kamar_tidur'), 'icon' => 'bed-double'],
  ['key' => 'bathroom', 'value' => get_field('kamar_mandi'), 'icon' => 'bath'],
];

$address_tax = karsa_build_tax_tree(get_the_terms(get_the_ID(), 'unit_address'), 'unit_address');
$full_address = get_field('alamat') . ', ' . $address_tax;

?>

<div class="group border border-outline/10 shadow-sm hover:shadow-md rounded-2xl overflow-hidden">

  <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large')
    : get_template_directory_uri() . "/public/images/fallback-2-undraw.png" ?>"
    alt="  <?= esc_attr(get_the_title()) ?>" class="w-full aspect-video object-cover object-center">

  <div class="p-6">
    <span class="block font-bold text-2xl mb-2 group-hover:underline text-on-surface group-hover:text-primary">
      <a href="<?= get_the_permalink() ?>">
        <?= esc_html(get_the_title()) ?>
      </a>
    </span>

    <div class="mb-6">
      <i data-lucide="map-pin"></i>
      <span><?= esc_html($full_address) ?>
      </span>
    </div>


    <ul class="mb-8 flex flex-row flex-wrap gap-3">
      <?php foreach ($property_info as $info): ?>
        <li class="inline-flex items-center gap-1.5 bg-surface-container py-1.5 px-3 rounded-lg">
          <i data-lucide="<?= esc_attr($info['icon']) ?>" class="w-4 h-4"></i>
          <span class="text-xs leading-none">
            <?= esc_html($info['value'] === 0 ? '-' : $info['value']) ?>
            <span>
              <?php if ($info['key'] === 'bedroom') {
                echo esc_html('KT');
              } else if ($info['key'] === 'bathroom') {
                echo esc_html('KM');
              } else if ($info['key'] === 'property_area' || $info['key'] === 'land_area') {
                echo esc_html('M') . '<sup>2</sup>';
              } else if ($info['key'] === 'floor') {
                echo esc_html('LT');
              }
              ?>
            </span>
          </span>

        </li>
      <?php endforeach ?>
    </ul>

    <div class="pt-6 border-t border-t-outline/20 flex justify-between items-start">
      <span class="truncate text-on-surface-subtle">Harga</span>
      <span class="shrink-0 font-bold text-xl text-primary">
        <?= esc_html(format_rupiah(get_field('harga'))) ?>
      </span>
    </div>

  </div>
</div>