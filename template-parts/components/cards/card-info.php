<?php

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
      border border-outline/25
      rounded-shape-lg 
      flex flex-col
      gap-3
      hover:shadow-elevation-1
      ">
  <div>
    <span class="inline-flex p-3 
          bg-surface-container 
          text-on-surface-container
          rounded-shape-md">
      <i data-lucide="<?= esc_attr($icon) ?>"></i>
    </span>
  </div>

  <div class="flex flex-col gap-1">
    <h3 class="font-semibold text-lg">
      <?= esc_html($title) ?>
    </h3>
    <p class="text-sm text-on-surface-variant/80 leading-normal">
      <?= esc_html($description) ?>
    </p>
  </div>
</div>