<?php
get_header();


$hero_image_url = wp_get_attachment_image_url(40, 'large');
get_template_part(
  'template-parts/layouts/section',
  'hero',
  ['hero_image_url' => $hero_image_url]
);

$intro_image_url = wp_get_attachment_image_url(23, 'large');
get_template_part('template-parts/layouts/section', 'intro', ['intro_image_url' => $intro_image_url]);



get_template_part('template-parts/layouts/section', 'post', [
  'title' => __('Daftar Unit', 'karsa_start'),
  'target_post_type' => 'unit',
  'limit' => 1
]);

get_template_part('template-parts/layouts/section', 'address');

$cta_image_url = wp_get_attachment_image_url(22, 'large');
get_template_part('template-parts/layouts/section', 'cta', ['cta_image_url' => $cta_image_url]);

get_footer();
