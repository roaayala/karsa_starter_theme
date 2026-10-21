<?php

/**
 * Layout: Header Menu Desktop
 * @package KarsaStart
 */

?>

<nav id="header-menu-desktop" class="hidden md:block">
  <?php wp_nav_menu([
    'theme_location' => 'header',
    'container' => false,
    'menu_class' => 'menu',
    'fallback_cb' => false,
  ]);
  ?>
</nav>