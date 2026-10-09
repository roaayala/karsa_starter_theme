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

<div class="p-4 sm:p-6 
      bg-surface
      rounded-shape-lg 
      flex flex-col
      gap-3
      ">
  <div>
    <span class="inline-flex p-3 
          bg-surface-container-high
          text-on-surface
          rounded-shape-md">
      <i data-lucide="<?= esc_attr($icon) ?>"></i>
    </span>
  </div>

  <div class="flex flex-col gap-1">
    <h3 class="text-lg">
      <?= esc_html($title) ?>
    </h3>
    <p class="text-sm text-on-surface-subtle">
      <?= esc_html($description) ?>
    </p>
  </div>
</div>