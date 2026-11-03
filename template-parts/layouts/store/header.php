<?php

use KarsaStart\Helpers;

/**
 * Template: Header for store
 * @package KarsaStart
 */

$categories_tree = Helpers::get_active_taxonomy_tree('product-category');
$brands_tree = Helpers::get_active_taxonomy_tree('product-brand');
dump($categories_tree);
dump($brands_tree);

?>

<header id="header" class="sticky top-0 z-100 bg-surface border-b border-b-outline/40 shadow-sm py-4">
  <div class="container">
    <!-- LEFT -->
    <div>
      <a class="font-bold text-base text-on-surface" href="<?= esc_url(home_url()) ?>">
        MK
        <?php bloginfo('name') ?>
      </a>
    </div>
    <!-- Center -->

    <!-- Right -->
  </div>
</header>