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

$args = [
  'post_type' => 'unit',
  'posts_per_page' => '5',
  'orderby' => 'date',
  'order' => 'DESC'
];

$unit_query = new WP_Query($args);

if ($unit_query->have_posts()) {
  while ($unit_query->have_posts()) {
    $unit_query->the_post();

    dump(get_post());
  }
} else {
  echo 'Not unit found!';
}
wp_reset_postdata();

get_template_part('template-parts/layouts/section', 'unit');




get_template_part('template-parts/layouts/section', 'address');

$cta_image_url = wp_get_attachment_image_url(22, 'large');
get_template_part('template-parts/layouts/section', 'cta', ['cta_image_url' => $cta_image_url]);

get_footer();
