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
      bg-surface-bright
      rounded-2xl
      border border-outline/50 hover:border-outline
      shadow-md
      ">
  <div class="mb-4">
    <i data-lucide="<?= esc_attr($icon) ?>" class="h-12 w-12 stroke-2 p-3 bg-surface-container rounded-xl"></i>
    </span>
  </div>

  <div>
    <h3 class="font-semibold text-lg mb-2 text-on-surface">
      <?= esc_html($title) ?>
    </h3>
    <p class="text-sm text-on-surface-subtle">
      <?= esc_html($description) ?>
    </p>
  </div>
</div>