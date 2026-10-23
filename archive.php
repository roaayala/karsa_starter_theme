<?php
/**
 * Template: Archive Root
 * @package KarsaStart
 */

get_header();
?>

<?php if (is_post_type_archive('unit')) {
  get_template_part('template-parts/templates/archive-unit');
} ?>

<?php
get_footer();