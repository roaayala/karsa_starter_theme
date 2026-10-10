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

	<?php if (is_home() && !is_front_page()): ?>
		<div class="relative rounded-shape-lg overflow-hidden flex items-center justify-center">
			<img class="absolute inset-0 -z-10 h-full w-full object-cover object-center"
				src="<?= esc_url(get_template_directory_uri() . '/assets/images/common-fallback-undraw.png') ?>"
				alt="Index Thumbnail">

			<div class="absolute inset-0 -z-5 bg-primary/75"></div>

			<h1 class="text-center text-on-primary py-8 md:py-16">
				<?php single_post_title(); ?>
			</h1>
		</div>
	<?php endif; ?>

	<section class="flex flex-col gap-4">
		<h2><?php single_post_title() ?></h2>

		<div class="grid xs:grid-cols-2 md:grid-cols-3 gap-4">
			<?php if (have_posts()): ?>

				<?php while (have_posts()):
					the_post(); ?>

					<?php get_template_part('template-parts/components/cards/card', 'article', ['with_excerpt' => true]) ?>



				<?php endwhile; ?>

			<?php else: ?>
				<?php get_template_part('template-parts/components/cards/card', 'empty', [
					'message' => 'Belum ada artikel baru untuk saat ini!'
				]) ?>
			<?php endif; ?>
		</div>


		<nav class="flex justify-center" aria-label="Pagination">
			<?= paginate_links(); ?>
		</nav>
	</section>

</div>

<?php
get_footer();
