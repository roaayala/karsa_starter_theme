<?php
/**
 * Component: Card for property-like previed
 * @package KarsaStart
 */

$property_info = [
  ['key' => 'bedroom', 'value' => get_field('kamar_tidur'), 'icon' => 'bed-double'],
  ['key' => 'bathroom', 'value' => get_field('kamar_mandi'), 'icon' => 'bath'],
  ['key' => 'property_area', 'value' => get_field('luas_unit'), 'icon' => 'vector-polygon'],
  ['key' => 'land_area', 'value' => get_field('luas_tanah'), 'icon' => 'home'],
];

?>

<div class="border border-outline/10 shadow-sm rounded-2xl overflow-hidden">

  <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large')
    : get_template_directory_uri() . "/public/images/fallback-2-undraw.png" ?>"
    alt="  <?= esc_attr(get_the_title()) ?>" class="w-full aspect-video object-cover object-center">

  <div class="p-6 flex flex-col gap-4">
    <span class="font-semibold text-xl">
      <a href="<?= get_the_permalink() ?>">
        <?= esc_html(get_the_title()) ?>
      </a>
    </span>

    <ul class="flex flex-row flex-wrap gap-3">
      <?php foreach ($property_info as $info): ?>
        <li class="inline-flex items-center gap-2 bg-surface-container py-1.5 px-3 rounded-lg">
          <i data-lucide="<?= esc_attr($info['icon']) ?>" class="w-4.5 h-4.5"></i>
          <span class="text-sm leading-none">
            <?= esc_html($info['value'] === 0 ? '-' : $info['value']) ?>
            <span>
              <?php if ($info['key'] === 'bedroom') {
                echo esc_html('KT');
              } else if ($info['key'] === 'bathroom') {
                echo esc_html('KM');
              } else if ($info['key'] === 'property_area' || $info['key'] === 'land_area') {
                echo esc_html('M') . '<sup>2</sup>';
              }
              ?>
            </span>
          </span>

        </li>
      <?php endforeach ?>
    </ul>

    <div>
      <span>
        <?= esc_html(format_rupiah(get_field('harga'))) ?>
      </span>
    </div>

  </div>
</div>