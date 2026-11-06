<?php
/**
 * Component: Navigation dropdown
 * @package KarsaStart
 */

$items = $args['items'] ?? [];
$label = $args['label'] ?? __('Label', 'karsa_start');

if (empty($items)) {
  return;
}
?>

<div x-data="{ expanded: false }" class="flex flex-col gap-2">
  <button @click="expanded = !expanded" type="button" :aria-expanded="expanded"
    class="cursor-pointer w-full flex items-center justify-between text-sm font-medium text-on-surface">
    <span><?= esc_html($label) ?></span>
    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform duration-200"
      :class="{ 'rotate-180': expanded }"></i>
  </button>

  <div x-show="expanded" x-cloak x-collapse class="flex flex-col gap-2 border-l border-outline/50">
    <?php foreach ($items as $item): ?>
      <?php
      $item_link = get_term_link($item);
      if (is_wp_error($item_link))
        continue;
      ?>
      <div class="pl-3 flex flex-col gap-2">
        <a href="<?= esc_url($item_link) ?>" class="flex font-medium text-xs text-on-surface-variant">
          <?= esc_html($item->name) ?>
        </a>

        <?php if (!empty($item->children)): ?>
          <div class="pl-3 flex flex-col gap-1 border-l border-outline/50">
            <?php foreach ($item->children as $child): ?>
              <?php
              $child_link = get_term_link($child);
              if (is_wp_error($child_link))
                continue;
              ?>
              <a href="<?= esc_url($child_link) ?>" class="font-medium text-2xs text-on-surface-subtle">
                <?= esc_html($child->name) ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>