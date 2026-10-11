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

<div class="p-6
      bg-surface
      border border-outline-variant
      ">
  <div class="mb-3">
    <span class="inline-flex p-3 
          bg-surface-container-high
          text-on-surface
         ">
      <i data-lucide="<?= esc_attr($icon) ?>" class="h-6 w-6"></i>
    </span>
  </div>

  <div>
    <h3 class="text-base mb-1">
      <?= esc_html($title) ?>
    </h3>
    <p class="text-sm text-on-surface-subtle">
      <?= esc_html($description) ?>
    </p>
  </div>
</div>