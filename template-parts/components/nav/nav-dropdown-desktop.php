<?php

/**
 * Component: Navigation dropdown for desktop
 * @package KarsaStart
 */

$items = $args['items'] ?? [];
$label = $args['label'] ?? __('Label', 'karsa_start');

if (empty($items))
  return;
?>

<div x-data="{ expanded: false }" @click.outside="expanded = false" class="relative flex flex-col gap-2">
  <button @click="expanded = !expanded" type="button"
    class="cursor-pointer flex items-center gap-1 text-sm text-on-surface hover:text-primary">
    <span>
      <?= esc_html($label) ?>
    </span>
    <i data-lucide="chevron-down" class="w-4 h-4 transition-transform" :class="{ 'rotate-180': expanded }"></i>
  </button>

  <div x-show="expanded"
    class="absolute top-full right-0 z-50 mt-2 min-w-[200px] bg-surface p-3 border border-outline/20 rounded-lg shadow-lg flex flex-col gap-2">
    <?php foreach ($items as $item): ?>
      <div class="flex flex-col gap-2">
        <a href="<?= esc_url(get_term_link($item)) ?>"
          class="flex text-xs font-medium text-on-surface-variant hover:text-on-surface transition-colors">
          <?= esc_html($item->name) ?>
        </a>
        <?php if (!empty($item->children)): ?>
          <div class="pl-3 flex flex-col gap-1 border-l border-outline/50">
            <?php foreach ($item->children as $child): ?>
              <a href="<?= esc_url(get_term_link($child)) ?>"
                class="text-2xs text-on-surface-subtle hover:text-on-surface transition-colors">
                <?= esc_html($child->name) ?>
              </a>
            <?php endforeach; ?>
          </div>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>
</div>