<?php
/**
 * Template: Header for store
 * @package KarsaStart
 */

?>

<header id="header" class="sticky top-0 z-100 bg-surface border-b border-b-outline/40 shadow-sm py-4">
  <div class="container relative flex flex-col gap-4 items-center justify-between">
    <!-- LEFT -->
    <div>
      <a class="font-bold text-on-surface flex gap-2 items-center" href="<?= esc_url(home_url()) ?>">
        <span class="p-2 font-semibold text-sm bg-primary text-on-primary rounded-lg">MK</span>
        <span><?php bloginfo('name') ?></span>
      </a>
    </div>

    <div class="w-full flex gap-4">
      <!-- Center -->
      <div class="flex-1 bg-surface-container py-2 px-4">
        Search
      </div>

      <!-- Right -->
      <div class="bg-primary p-4 aspect-square"></div>

    </div>
  </div>
</header>