<?php

/**
 * Component: Card Feature
 * @package KarsaStart
 */

$icon = (!empty($args['icon']))
  ? $args["icon"]
  : 'award';

$title = (!empty($args['title']))
  ? $args["title"]
  : 'Lorem Ipsum';

$description = (!empty($args['description']))
  ? $args["description"]
  : 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam placeat fuga ut?';

?>

<div class="p-4 md:p-6
      bg-primary-container
      rounded-corner-lg
      ">
  <div class="mb-4">
    <span class="inline-flex p-3 
        bg-primary
        text-on-primary
        rounded-corner-md
         ">
      <i data-lucide="<?= esc_attr($icon) ?>" class="h-6 w-6"></i>
    </span>
  </div>

  <div>
    <h3 class="text-base mb-1 text-on-primary-container">
      <?= esc_html($title) ?>
    </h3>
    <p class="text-sm text-on-primary-container/60">
      <?= esc_html($description) ?>
    </p>
  </div>
</div>