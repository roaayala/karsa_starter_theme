<?php
/**
 * Template: Index
 * @package KarsaStart
 */

get_header();
?>

<?php get_template_part('template-parts/templates/index-default') ?>

<?php if (is_post_type_archive('unit')): ?>
	<div class="container">
		<h1>Daftar Unit</h1>
	</div>
<?php endif ?>

<?php
get_footer();
