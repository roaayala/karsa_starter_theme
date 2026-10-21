<?php
/**
 * Component: Primary Menu Navigation
 */
?>
<div class="relative">
  <div class="md:hidden flex items-center">
    <button id="primary-menu-toggle" class="inline-flex items-center cursor-pointer text-on-surface">
      <i id="primary-menu-menu-icon" data-lucide="menu"></i>
      <i id="primary-menu-close-icon" data-lucide="x" class="hidden"></i>
    </button>
  </div>

  <?php wp_nav_menu([
    'theme_location' => 'primary',
    'container_id' => 'primary-menu',
    'container_class' => 'primary-menu__container hidden md:block',
    'menu_class' => 'menu',
  ]);
  ?>

</div>