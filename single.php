<?php
/**
 * Template: Single
 *
 * @package KarsaStart
 */

get_header();
?>

<div class="container">
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>

            <article>
                <h1><?php the_title() ?></h1>
            </article>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php
get_footer();
