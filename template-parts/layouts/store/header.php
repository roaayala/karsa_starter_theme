<?php
/**
 * Template: Header for store
 * @package KarsaStart
 */

use KarsaStart\Helpers;
$categories = Helpers::get_active_taxonomy_tree('product-category');
$brands = Helpers::get_active_taxonomy_tree('product-brand');

?>

<header id="header" class="sticky top-0 z-40 bg-surface border-b border-outline/40 shadow-sm py-4">
  <div class="container relative flex items-center justify-between gap-4">

    <!-- LOGO AND SITE NAME -->
    <a href="<?= esc_url(home_url()) ?>" class="flex items-center gap-2">
      <span class="aspect-square p-2 font-bold text-xs/none bg-primary text-on-primary rounded-lg flex items-center">
        MK
      </span>
      <span class="hidden sm:inline font-bold text-base text-on-surface">
        <?php bloginfo('name'); ?>
      </span>
    </a>


    <nav x-show="open" @click.outside="open = false" class="hidden md:flex flex-row items-center gap-4">

      <?php Helpers::component('nav/nav-dropdown', [
        'items' => $categories,
        'label' => __('Kategori', 'karsa_start')
      ]) ?>

      <?php Helpers::component('nav/nav-dropdown', [
        'items' => $brands,
        'label' => __('Brand', 'karsa_start')
      ]) ?>

      <div>
        <?php Helpers::component('nav/nav-link', [
          'url' => get_post_type_archive_link('product'),
          'label' => __('Semua Produk', 'karsa_start')
        ]) ?>
      </div>

    </nav>


    <!-- MOBILE NAVIGATION AND HIDDEN ON DESKTOP -->
    <div x-data="{ open: false }" class="flex items-center md:hidden">

      <button @click="open = !open" type="button" class="cursor-pointer text-on-surface">
        <i x-show="!open" data-lucide="menu" class="w-6 h-6"></i>
        <i x-show="open" data-lucide="x" class="w-6 h-6" style="display: none;"></i>
      </button>

      <nav x-show="open" @click.outside="open = false"
        class="absolute top-full left-4 sm:left-8 right-4 sm:right-8 mt-2 bg-surface-bright p-4 border border-outline/40 rounded-lg shadow-lg z-50 flex flex-col gap-4 max-h-screen overflow-y-auto">

        <?php Helpers::component('nav/nav-dropdown', [
          'items' => $categories,
          'label' => __('Kategori', 'karsa_start')
        ]) ?>

        <?php Helpers::component('nav/nav-dropdown', [
          'items' => $brands,
          'label' => __('Brand', 'karsa_start')
        ]) ?>

        <div>
          <?php Helpers::component('nav/nav-link', [
            'url' => get_post_type_archive_link('product'),
            'label' => __('Semua Produk', 'karsa_start')
          ]) ?>
        </div>

      </nav>

    </div>

  </div>
</header>