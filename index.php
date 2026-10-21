<?php

/**
 * Template: Index
 * 
 * @package KarsaStart
 */

get_header();
?>

<div class="container py-8
flex flex-col gap-8
">

	<?php if (is_front_page()): ?>
		<h1>Index</h1>
	<?php endif ?>

	<?php get_template_part('template-parts/templates/index-default') ?>
	<?php get_template_part('template-parts/components/navigation') ?>

</div>

<?php
get_footer();
