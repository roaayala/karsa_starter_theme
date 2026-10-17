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
      bg-primary-container
      shadow-md
      ">
  <div class="mb-4">
    <i data-lucide="<?= esc_attr($icon) ?>" class="h-12 w-12 stroke-2 p-3 bg-primary text-on-primary "></i>
    </span>
  </div>

  <div class="flex flex-col gap-2">
    <span class="font-semibold text-lg text-on-primary-container">
      <?= esc_html($title) ?>
    </span>
    <p class="text-sm text-on-primary-container/60">
      <?= esc_html($description) ?>
    </p>
  </div>
</div>