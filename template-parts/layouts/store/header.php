<?php
/**
 * Template: Header for store
 * @package KarsaStart
 */

use KarsaStart\Helpers;

$categories = Helpers::get_active_taxonomy_tree('product-category');
$brands = Helpers::get_active_taxonomy_tree('product-brand');


?>

<header id="header" class="sticky top-0 z-100 bg-surface border-b border-b-outline/40 shadow-sm py-4">
  <div class="container relative flex gap-4 items-center justify-between">
    <div>
      <a class="flex gap-2 items-center" href="<?= esc_url(home_url()) ?>">
        <span
          class="aspect-square p-2 font-semibold text-sm bg-primary text-on-primary rounded-lg flex items-center">MK</span>
        <!-- <span class="hidden md:flex font-semibold text-base"><?php bloginfo('name') ?></span> -->
      </a>
    </div>

    <div class="flex items-center">
      <button class="cursor-pointer">
        <i data-lucide="menu" class="w-6 h-6"></i>
      </button>

      <nav
        class="absolute bg-surface-bright left-4 right-4 top-full p-4 border border-outline/40 shadow-lg rounded-lg grid gap-4">

        <?php if (!empty($categories)): ?>
          <div>
            <?php foreach ($categories as $category): ?>
              <div>

                <a href="<?= esc_url(get_term_link($category)) ?>"><?= esc_html($category->name) ?></a>
                <!-- <?php dump($category) ?> -->

              </div>
            <?php endforeach ?>
          </div>
        <?php endif ?>

        <?php if (!empty($brands)): ?>
          <div>
            <?php foreach ($brands as $brand): ?>
              <div>

                <a href="<?= esc_url(get_term_link($brand)) ?>">
                  <?= esc_html($brand->name) ?>
                </a>

                <?php if (!empty($brand->children)): ?>

                  <div>
                    <?php foreach ($brand->children as $child): ?>
                      <a href="<?= esc_url(get_term_link($child)) ?>">
                        <?= esc_html($child->name) ?>
                      </a>
                    <?php endforeach ?>
                  </div>
                <?php endif ?>

              </div>
            <?php endforeach ?>
          </div>
        <?php endif ?>

        <?php Helpers::component('nav/nav-item', [
          'link' => get_post_type_archive_link('product'),
          'label' => __('Produk', 'karsa_start')
        ]) ?>

      </nav>
    </div>

  </div>
</header>