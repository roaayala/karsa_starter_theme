<?php

/**
 * Layout: Header Menu Mobile
 * @package KarsaStart
 */

?>


<div class="relative flex items-center md:hidden">

  <nav id="header-menu-mobile" class="absolute z-12 top-12 right-0 
  min-w-60
  p-6
  bg-surface-bright 
  rounded-2xl
  border border-outline/40
  shadow-lg
  hidden">
    <?php wp_nav_menu([
      'theme_location' => 'header',
      'container' => false,
      'menu_class' => 'menu',
      'fallback_cb' => false,
    ]);
    ?>
  </nav>

  <button id="mobile-menu-handler"
    class="cursor-pointer bg-transparent hover:bg-primary/5 text-on-surface hover:text-primary border border-outline/40 rounded-lg p-2">
    <i id="mobile-menu-drawer" data-lucide="menu" class="w-4.5 h-4.5"></i>
    <i id="mobile-menu-close" data-lucide="x" class="w-4.5 h-4.5 hidden"></i>
  </button>

</div>