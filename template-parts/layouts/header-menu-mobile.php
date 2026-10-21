<?php

/**
 * Layout: Header Menu Mobile
 * @package KarsaStart
 */

?>


<div class="relative">

  <nav id="header-menu-mobile" class="absolute z-10 top-8 right-0 
  min-w-60
  p-6
  bg-surface-bright 
  rounded-2xl
  border border-outline/40
  shadow-lg">
    <?php wp_nav_menu([
      'theme_location' => 'header',
      'container' => false,
      'menu_class' => 'menu',
      'fallback_cb' => false,
    ]);
    ?>
  </nav>

  <button>
    <i data-lucide="menu"></i>
    <i data-lucide="x" class="hidden"></i>
  </button>

</div>