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

        <header id="header" class="sticky top-0 z-100 bg-surface-bright border-b border-b-outline/40 shadow-sm">
            <div class="container flex flex-col gap-2">
                <div class="flex justify-between items-center">
                    <!-- LEFT -->
                    <div class="flex gap-2 items-center">
                        <?php if (has_site_icon()): ?>
                            <div class="flex items-center gap-2">
                                <a href="<?= esc_url(home_url()) ?>">
                                    <img class="h-16 object-cover" src="<?= esc_url(get_site_icon_url()) ?>"
                                        alt="Site Icon">
                                </a>
                            </div>
                        <?php else: ?>
                            <a class="font-bold text-lg text-on-surface-variant hover:text-on-surface"
                                href="<?= esc_url(home_url()) ?>">
                                <?php bloginfo('name') ?>
                            </a>
                        <?php endif ?>
                    </div>

                    <!-- CENTER -->
                    <?php get_template_part('template-parts/layouts/header-menu-desktop') ?>

                    <!-- RIGHT -->
                    <div>right</div>


                </div>
            </div>
        </header>


        <main id="content" class="flex-1 flex flex-col">