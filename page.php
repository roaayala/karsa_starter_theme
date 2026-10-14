<?php
/**
 * Template: Page Template Container
 * 
 * @package KarsaStart
 */

get_header();

if (is_page('tentang-kami')) {
  get_template_part('template-parts/templates/page-about-us');
} else {
  get_template_part('template-parts/templates/page-default');
}

get_footer();