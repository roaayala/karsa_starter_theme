<?php
/**
 * Template: Global Header
 * @package KarsaStart
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>

    <div id="page" class="min-h-screen flex flex-col">

        <header id="header" class="sticky top-0 z-100 bg-surface border-b border-b-outline-variant">
            <div class="container py-2 flex flex-col gap-2">
                <div class="flex justify-between items-center">
                    <div class="flex gap-2 items-center">
                        <?php if (has_site_icon()): ?>
                            <div class="h-12 w-20">
                                <a href="<?= esc_url(home_url()) ?>">
                                    <img class="h-full w-full object-cover" src="<?= esc_url(get_site_icon_url()) ?>"
                                        alt="Site Icon">
                                </a>
                            </div>
                        <?php else: ?>
                            <a class="hidden font-bold text-lg text-on-surface-variant hover:text-on-surface"
                                href="<?= esc_url(home_url()) ?>">
                                <?php bloginfo('name') ?>
                            </a>
                        <?php endif ?>
                    </div>

                    <?php get_template_part('template-parts/components/navigation', 'primary-menu'); ?>

                </div>
            </div>
        </header>


        <main id="content" class="flex-1 flex flex-col">