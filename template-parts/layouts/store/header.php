<?php
/**
 * Template: Header for store
 * @package KarsaStart
 */

use KarsaStart\Helpers;
$categories = Helpers::get_active_taxonomy_tree('product-category');
$brands = Helpers::get_active_taxonomy_tree('product-brand');

?>

<header id="header" class="sticky top-0 z-40 bg-surface border-b border-b-outline/40 shadow-sm py-2">
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

<header id="header" class="sticky top-0 z-40 bg-surface border-b border-outline/40 shadow-sm py-4">
  <div class="container relative flex items-center justify-between gap-4">

    <!-- 1. LOGO -->
    <a href="<?= esc_url(home_url()) ?>" class="flex items-center gap-2">
      <span class="aspect-square p-2 font-bold text-xs bg-primary text-on-primary rounded-lg">MK</span>
      <span class="hidden sm:inline font-bold text-base text-on-surface">
        <?php bloginfo('name'); ?>
      </span>
    </a>

    <!-- ========================================== -->
    <!-- 2. DESKTOP NAVIGATION (Hidden di Mobile)   -->
    <!-- ========================================== -->
    <nav class="hidden md:flex items-center gap-6">

      <!-- Dropdown Kategori -->
      <?php if (!empty($categories)): ?>
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" type="button"
            class="flex items-center gap-1.5 text-xs font-semibold text-on-surface hover:text-primary">
            <span>
              <?= __('Kategori', 'karsa_start') ?>
            </span>
            <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform" :class="{ 'rotate-180': open }"></i>
          </button>

          <!-- Panel Dropdown Desktop -->
          <div x-show="open" @click.outside="open = false"
            class="absolute left-0 top-full mt-2 w-64 bg-surface-bright p-3 border border-outline/20 rounded-xl shadow-xl z-50 flex flex-col gap-2"
            style="display: none;">
            <?php foreach ($categories as $cat): ?>
              <div>
                <a href="<?= esc_url(get_term_link($cat)) ?>"
                  class="block px-2 py-1 text-xs font-bold text-on-surface hover:text-primary">
                  <?= esc_html($cat->name) ?>
                </a>
                <?php if (!empty($cat->children)): ?>
                  <div class="ml-2 pl-2 border-l border-outline/20 flex flex-col gap-1">
                    <?php foreach ($cat->children as $child): ?>
                      <a href="<?= esc_url(get_term_link($child)) ?>"
                        class="text-[11px] text-on-surface-variant hover:text-primary">
                        <?= esc_html($child->name) ?>
                      </a>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Dropdown Brand -->
      <?php if (!empty($brands)): ?>
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" type="button"
            class="flex items-center gap-1.5 text-xs font-semibold text-on-surface hover:text-primary">
            <span>
              <?= __('Brand', 'karsa_start') ?>
            </span>
            <i data-lucide="chevron-down" class="w-3.5 h-3.5 transition-transform" :class="{ 'rotate-180': open }"></i>
          </button>

          <!-- Panel Dropdown Desktop -->
          <div x-show="open" @click.outside="open = false"
            class="absolute left-0 top-full mt-2 w-56 bg-surface-bright p-3 border border-outline/20 rounded-xl shadow-xl z-50 flex flex-col gap-1"
            style="display: none;">
            <?php foreach ($brands as $brand): ?>
              <a href="<?= esc_url(get_term_link($brand)) ?>"
                class="px-2 py-1.5 text-xs font-medium rounded-md hover:bg-surface-container text-on-surface">
                <?= esc_html($brand->name) ?>
              </a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Link Katalog Semua Produk -->
      <a href="<?= esc_url(get_post_type_archive_link('product')) ?>"
        class="text-xs font-semibold text-on-surface hover:text-primary">
        <?= __('Semua Produk', 'karsa_start') ?>
      </a>

    </nav>


    <!-- ========================================== -->
    <!-- 3. MOBILE NAVIGATION (Hidden di Desktop)   -->
    <!-- ========================================== -->
    <div x-data="{ open: false }" class="flex items-center md:hidden">

      <!-- Button Trigger Hamburger -->
      <button @click="open = !open" type="button" class="p-2 text-on-surface">
        <i x-show="!open" data-lucide="menu" class="w-6 h-6"></i>
        <i x-show="open" data-lucide="x" class="w-6 h-6" style="display: none;"></i>
      </button>

      <!-- Panel Vertical Accordion Mobile -->
      <nav x-show="open" @click.outside="open = false"
        class="absolute top-full left-4 right-4 mt-2 bg-surface-bright p-4 border border-outline/30 rounded-xl shadow-xl z-50 flex flex-col gap-4 max-h-[75vh] overflow-y-auto"
        style="display: none;">

        <!-- Accordion Section: Kategori -->
        <?php if (!empty($categories)): ?>
          <div x-data="{ expanded: false }" class="border-b border-outline/10 pb-3">
            <button @click="expanded = !expanded" type="button"
              class="w-full flex items-center justify-between text-xs font-bold text-primary">
              <span>
                <?= __('Kategori Produk', 'karsa_start') ?>
              </span>
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="{ 'rotate-180': expanded }"></i>
            </button>

            <div x-show="expanded" class="mt-2 pl-2 flex flex-col gap-2" style="display: none;">
              <?php foreach ($categories as $cat): ?>
                <div>
                  <a href="<?= esc_url(get_term_link($cat)) ?>" class="text-xs font-semibold text-on-surface block py-0.5">
                    <?= esc_html($cat->name) ?>
                  </a>
                  <?php if (!empty($cat->children)): ?>
                    <div class="ml-2 pl-2 border-l border-outline/20 flex flex-col gap-1 mt-1">
                      <?php foreach ($cat->children as $child): ?>
                        <a href="<?= esc_url(get_term_link($child)) ?>" class="text-[11px] text-on-surface-variant py-0.5">
                          <?= esc_html($child->name) ?>
                        </a>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Accordion Section: Brand -->
        <?php if (!empty($brands)): ?>
          <div x-data="{ expanded: false }" class="border-b border-outline/10 pb-3">
            <button @click="expanded = !expanded" type="button"
              class="w-full flex items-center justify-between text-xs font-bold text-primary">
              <span>
                <?= __('Brand Terpilih', 'karsa_start') ?>
              </span>
              <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="{ 'rotate-180': expanded }"></i>
            </button>

            <div x-show="expanded" class="mt-2 pl-2 flex flex-col gap-1.5" style="display: none;">
              <?php foreach ($brands as $brand): ?>
                <a href="<?= esc_url(get_term_link($brand)) ?>" class="text-xs text-on-surface py-0.5">
                  <?= esc_html($brand->name) ?>
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endif; ?>

        <!-- Direct Link -->
        <a href="<?= esc_url(get_post_type_archive_link('product')) ?>" class="text-xs font-bold text-on-surface py-1">
          <?= __('Semua Produk', 'karsa_start') ?>
        </a>

      </nav>

    </div>

  </div>
</header>