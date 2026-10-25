<?php
/**
 * Component: Card for property-like preview
 * @package KarsaStart
 */

$full_address = $args['full_address'] ?? null;
$property_info = $args['property_info'] ?? [];
$price = $args['price'] ?? format_rupiah(0);

?>

<div class="group border border-outline/10 shadow-sm hover:shadow-md rounded-2xl overflow-hidden">

  <img src="<?= has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large')
    : get_template_directory_uri() . "/public/images/fallback-2-undraw.png" ?>"
    alt="  <?= esc_attr(get_the_title()) ?>" class="w-full aspect-video object-cover object-center">

  <div class="p-6">
    <span class="block font-bold text-2xl mb-3 group-hover:underline text-on-surface group-hover:text-primary">
      <a href="<?= get_the_permalink() ?>">
        <?= esc_html(get_the_title()) ?>
      </a>
    </span>

    <?php if (isset($full_address)): ?>
        <div class="mb-6 flex items-center gap-2">
          <span class="text-on-surface-subtle">
            <i data-lucide="map-pin" class="w-5 h-5 text-on-surface-subtle"></i>
          </span>
          <span class="text-sm text-on-surface-subtle line-clamp-2">
            <?= esc_html($full_address) ?>
          </span>
        </div>
    <?php endif ?>

    <?php if (!empty($property_info)): ?>
        <ul class="mb-6 flex flex-row flex-wrap gap-3">
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

    <div class="pt-6 border-t border-t-outline/40 flex justify-between items-start">
      <span class="truncate text-on-surface-subtle">Harga</span>
      <span class="shrink-0 font-bold text-xl text-primary">
        <?= esc_html($price) ?>
      </span>
    </div>

  </div>
</div>