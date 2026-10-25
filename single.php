<?php
/**
 * Template: Single
 * @package KarsaStart
 */

get_header();

if ($is_unit_context = is_singular('unit') || is_post_type_archive('unit')) {

} else {
    get_template_part('template-parts/templates/single-default');
}

get_footer();
