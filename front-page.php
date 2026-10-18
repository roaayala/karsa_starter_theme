<?php
/**
 * Template: Front Page
 * 
 * @package KarsaStart
 */

get_header();

$hero_image_url = wp_get_attachment_image_url(40, 'large');
get_template_part(
  'template-parts/layouts/hero',
  null,
  ['hero_image_url' => $hero_image_url]
);

$intro_image_url = wp_get_attachment_image_url(23, 'large');
get_template_part('template-parts/layouts/intro', null, ['intro_image_url' => $intro_image_url]);

get_template_part('template-parts/layouts/custom-post', null, [
  'title' => __('Daftar Unit', 'karsa_start'),
  'eyebrow' => __('Pilihan Properti', 'karsa_start'),
  'cta_label' => __('Lihat Semua Unit', 'karsa_start'),
  'target_post_type' => 'unit',
  'limit' => 3
]);

get_template_part('template-parts/layouts/latest-post', null);

get_template_part('template-parts/layouts/address');

$cta_image_url = wp_get_attachment_image_url(22, 'large');
get_template_part('template-parts/layouts/cta', null, ['cta_image_url' => $cta_image_url]);

get_footer();
