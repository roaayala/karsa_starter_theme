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

        <header id="header" class="shadow-elevation-1">
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
                            <a class="font-bold text-lg text-on-surface-variant hover:text-on-surface"
                                href="<?= esc_url(home_url()) ?>">
                                <?php bloginfo('name') ?>
                            </a>
                        <?php endif ?>
                    </div>

                    <div class="md:hidden flex items-center">
                        <button id="primary-menu-mobile-toggle"
                            class="inline-flex items-center cursor-pointer text-on-surface-variant/80 hover:text-on-surface">
                            <i id="primary-menu-menu-icon" data-lucide="menu"></i>
                            <i id="primary-menu-close-icon" data-lucide="x" class="hidden"></i>
                        </button>
                    </div>
                </div>
                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => 'nav',
                    'container_id' => 'primary-menu-mobile',
                    'container_class' => 'primary-menu-mobile__container hidden'
                ]) ?>
            </div>
        </header>


        <main id="content" class="flex-1 flex flex-col">