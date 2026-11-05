<?php
/**
 * Template: Header for store
 * @package KarsaStart
 */

use KarsaStart\Helpers;
$categories = Helpers::get_active_taxonomy_tree('product-category');
$brands = Helpers::get_active_taxonomy_tree('product-brand');

?>
<header id="header" class="sticky top-0 z-40 bg-surface border-b border-b-outline/40 shadow-sm py-4">
  <div class="container flex items-center justify-between gap-4">

    <!-- 1. LEFT: LOGO (Mobile & Desktop) -->
    <div class="flex-1 flex justify-start">
      <a class="flex gap-2 items-center" href="<?= esc_url(home_url()) ?>">
        <span class="aspect-square p-2 font-semibold text-xs bg-primary text-on-primary rounded-lg flex items-center">
          MK
        </span>
      </a>
    </div>

    <!-- 2. DESKTOP DEAD CENTER NAV -->
    <nav class="hidden md:flex md:flex-1 md:justify-center">
      Nav
    </nav>

    <!-- 3. MOBILE DEAD CENTER, DESKTOP RIGHT -->
    <div class="flex-1 flex justify-center md:justify-end">
      Search
    </div>

    <!-- 4. MOBILE RIGHT (HAMBURGER TRIGGER) -->
    <div x-data="{ open: false }" class="relative flex-1 flex justify-end items-center md:hidden">
      <button @click="open = !open" type="button" class="p-2 cursor-pointer text-on-surface">
        <i x-show="!open" data-lucide="menu" class="w-6 h-6"></i>
        <i x-show="open" data-lucide="x" class="w-6 h-6" style="display: none;"></i>
      </button>

      <nav x-show="open" @click.outside="open = false"
        class="absolute top-full right-0 bg-surface-bright p-4 border border-outline/40 shadow-sm rounded-lg min-w-64"
        style="display: none;">
        <?php
        wp_nav_menu([
          'theme_location' => 'header',
          'menu_class' => 'main-menu flex flex-col gap-2',
          'container' => false,
        ]);
        ?>
      </nav>
    </div>

  </div>
</header>