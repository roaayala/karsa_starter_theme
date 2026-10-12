<?php
/**
 * Component: Card for property preview
 * @package KarsaStart
 */

// TAXONOMY
$unit_type_terms = get_the_terms(get_the_ID(), 'unit_type');
$unit_status_terms = get_the_terms(get_the_ID(), 'unit_status');

$primary_type = (!empty($unit_type_terms) && !is_wp_error($unit_type_terms)) ? $unit_type_terms[0] : null;
$primary_status = (!empty($unit_status_terms) && !is_wp_error($unit_status_terms)) ? $unit_status_terms[0] : null;

// META FIELD
$price = get_field('harga_unit');
$bedroom = get_field('kamar_tidur');
$bathroom = get_field('kamar_mandi');
$unit_area = get_field('luas_unit');
$land_area = get_field('luas_tanah');

$has_thumbnail = has_post_thumbnail();
$thumbnail_id = $has_thumbnail ? get_post_thumbnail_id() : null;
$thumbnail_url = $has_thumbnail
  ? get_the_post_thumbnail_url(get_the_ID(), 'large')
  : get_template_directory_uri() . "/assets/images/thumbnail-fallback-undraw.png";
$thumbnail_alt = $has_thumbnail
  ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)
  : __('Thumbnail Fallback', 'karsa_start');
?>

<article
  class="group relative flex flex-col sm:grid sm:grid-cols-12 bg-surface border border-outline-variant overflow-hidden transition-all duration-300">

  <div class="relative sm:col-span-6  sm:aspect-auto overflow-hidden bg-surface-variant">
    <img
      class="h-full w-full aspect-video object-cover group-hover:scale-105 transition-transform duration-500 ease-out"
      src="<?= esc_url($thumbnail_url) ?>" alt="<?= esc_attr($thumbnail_alt) ?>">

    <div class="absolute top-3 left-3 flex flex-wrap gap-1.5 z-10 pointer-events-none">
      <?php if ($primary_status): ?>
        <span class="px-2.5 py-1 text-xs font-semibold   bg-primary text-on-primary shadow-sm">
          <?= esc_html($primary_status->name) ?>
        </span>
      <?php endif; ?>

      <?php if ($primary_type): ?>
        <span class="px-2.5 py-1 text-xs font-medium  bg-surface/90 backdrop-blur-md text-on-surface shadow-sm">
          <?= esc_html($primary_type->name) ?>
        </span>
      <?php endif; ?>
    </div>
  </div>

  <!-- Content Container -->
  <div class="sm:col-span-6 p-4 sm:p-5 flex flex-col justify-between gap-4">
    <div class="flex flex-col gap-2">
      <!-- Title -->
      <h3
        class="text-h5 font-bold text-on-surface group-hover:text-primary transition-colors duration-200 line-clamp-2">
        <a href="<?php the_permalink(); ?>" class="after:absolute after:inset-0">
          <?php the_title(); ?>
        </a>
      </h3>

      <!-- Property Specs / Badges -->
      <div class="flex flex-wrap items-center gap-2 pt-1">
        <?php if ($unit_area): ?>
          <div class="badge badge--ghost">
            <i data-lucide="home" class="badge-icon"></i>
            <span class="badge-label"><?= esc_html($unit_area) ?> m²</span>
          </div>
        <?php endif; ?>

        <?php if ($land_area): ?>
          <div class="badge badge--ghost">
            <i data-lucide="vector-polygon" class="badge-icon"></i>
            <span class="badge-label"><?= esc_html($land_area) ?> m²</span>
          </div>
        <?php endif; ?>

        <?php if ($bedroom): ?>
          <div class="badge badge--ghost">
            <i data-lucide="bed-double" class="badge-icon"></i>
            <span class="badge-label"><?= esc_html($bedroom) ?> KT</span>
          </div>
        <?php endif; ?>

        <?php if ($bathroom): ?>
          <div class="badge badge--ghost">
            <i data-lucide="bath" class="badge-icon"></i>
            <span class="badge-label"><?= esc_html($bathroom) ?> KM</span>
          </div>
        <?php endif; ?>
      </div>

    </div>

    <!-- Footer / Price -->
    <div class="pt-3 border-t border-outline-variant flex items-baseline justify-between gap-2">
      <span class="text-xs text-on-surface-subtle font-medium uppercase tracking-wider">Harga</span>
      <span class="font-bold text-primary text-xl xs:text-2xl sm:text-3xl">
        <?= esc_html(format_rupiah($price, true)) ?>
      </span>
    </div>

  </div>

</article>