<?php

/**
 * Component: Navigation dropdown for mobile
 * @package KarsaStart
 */

$raw_items = $args['items'] ?? [];
$label = $args['label'] ?? __('Label', 'karsa_start');

if (empty($raw_items)) {
  return;
}

$normalize_item = function ($item) use (&$normalize_item) {
  if (is_object($item)) {
    if ($item instanceof WP_Term) {
      $link = get_term_link($item);
      $url = !is_wp_error($link) ? $link : '#';
      $label = $item->name;
    } else {
      $url = $item->url ?? get_permalink($item) ?? '#';
      $label = $item->title ?? $item->name ?? $item->post_title ?? '';
    }
    $children = $item->children ?? [];
  } else {
    $label = $item['label'] ?? $item['name'] ?? $item['title'] ?? '';
    $url = $item['url'] ?? $item['link'] ?? '#';
    $children = $item['children'] ?? [];
  }

  return [
    'label' => $label,
    'url' => $url,
    'children' => array_map($normalize_item, $children),
  ];
};

$items = array_map($normalize_item, $raw_items);

?>

<div x-data="{ expanded: false }" @click.outside="expanded = false" class="flex flex-col gap-3">
  <button @click="expanded = !expanded" type="button"
    class="cursor-pointer w-full flex items-center justify-between text-sm text-on-surface hover:underline">
    <span :class="{ 'underline': expanded }">
      <?= esc_html($label) ?>
    </span>
    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="{ 'rotate-180': expanded }"></i>
  </button>

  <div x-show="expanded" class="flex flex-col gap-2">
    <?php foreach ($items as $item): ?>
      <div class="flex flex-col gap-2">
        <a href="<?= esc_url($item['url']) ?>" class="flex text-sm text-on-surface-variant hover:underline">
          <?= esc_html($item['label']) ?>
        </a>
        <?php if (!empty($item['children'])): ?>
          <div class="pl-4 flex flex-col gap-1">
            <?php foreach ($item['children'] as $child): ?>
              <a href="<?= esc_url($child['url']) ?>" class="text-sm text-on-surface-subtle hover:underline">
                <?= esc_html($child['label']) ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>