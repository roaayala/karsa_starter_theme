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
					the_post();

					$category = get_the_category()[0];

					$has_thumbnail = has_post_thumbnail();
					$thumbnail_id = $has_thumbnail ? get_post_thumbnail_id() : null;
					$thumbnail_url = $has_thumbnail
						? get_the_post_thumbnail_url(get_the_ID(), 'large')
						: get_template_directory_uri() . "/assets/images/thumbnail-fallback-undraw.png";
					$thumbnail_alt = $has_thumbnail ? get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true)
						: __('Thumbnail Fallback by Undraw', 'karsa_start');

					?>

					<article class="flex flex-col
					border border-outline-variant
					overflow-hidden
					hover:bg-surface-container-high
					">

						<img class="aspect-video object-cover object-center" src="<?= esc_url($thumbnail_url) ?>"
							alt="<?= esc_attr($thumbnail_alt) ?>">

						<div class="p-4 flex flex-col gap-1">
							<div class=" text-xs text-on-surface-subtle flex gap-1 items-center w-full">
								<?php if (!empty($category)): ?>
									<a class="font-medium hover:underline" href="<?= esc_url(get_category_link($category->term_id)) ?>">
										<?= esc_html($category->name) ?>
									</a>
									<span>|</span>
								<?php endif ?>
								<span class="truncate">
									<?= get_the_date() ?>,
									<?= get_the_time() ?>
								</span>
							</div>

							<h3 class="font-semibold text-lg hover:underline">
								<a href="<?= esc_url(get_the_permalink()) ?>">
									<?= esc_html(get_the_title()) ?>
								</a>
							</h3>
						</div>

					</article>

				<?php endwhile; ?>

			<?php else: ?>
				<?php get_template_part('template-parts/components/cards/card', 'empty', [
					'message' => 'Belum ada artikel baru untuk saat ini!'
				]) ?>
			<?php endif; ?>
		</div>
	</section>
</div>

<?php
get_footer();
