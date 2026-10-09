<?php
/**
 * Template: Index
 * 
 * @package KarsaStart
 */

get_header();
?>

<div class="container">
	<?php if (is_front_page()): ?>
		<h1>Index</h1>
	<?php endif ?>

	<?php if (have_posts()): ?>
		<?php while (have_posts()):
			the_post(); ?>

			<?php if (is_front_page()): ?>
				<h2>Article List</h2>
			<?php else: ?>
				<h1>Index</h1>
			<?php endif ?>

			<article>
				<h1>
					<?php the_title() ?>
				</h1>
			</article>

		<?php endwhile; ?>
	<?php endif; ?>
</div>

<?php
get_footer();
