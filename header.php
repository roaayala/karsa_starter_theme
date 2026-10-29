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

<body <?php body_class(); ?>>
    <div id="page" class="min-h-screen flex flex-col">
        <header id="header" class="sticky top-0 z-100 bg-surface border-b border-b-outline/40 shadow-md py-4">
            <div class="container">
                <!-- LEFT -->
                <a class="font-bold text-lg text-on-surface-variant hover:text-on-surface"
                    href="<?= esc_url(home_url()) ?>">
                    <?php bloginfo('name') ?>
                </a>
            </div>
        </header>
        <main id="content" class="flex-1 flex flex-col">