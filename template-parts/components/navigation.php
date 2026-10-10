<?php
/**
 * Component: Custom Pagination Structure
 * 
 * @package KarsaStart
 */

$links = paginate_links([
  'type' => 'array',
  'format' => '?paged=%#%',
  'prev_text' => sprintf(
    '<span class="inline-flex items-center gap-2 hover:underline"><i data-lucide="move-left" class="w-5 h-5 shrink-0"></i><span class="text-base hover:underline">%s</span></span>',
    __('Prev', 'karsa_start')
  ),
  'next_text' => sprintf(
    '<span class="inline-flex items-center gap-2 hover:underline"><span class="text-base">%s</span><i data-lucide="move-right" class="w-5 h-5 shrink-0"></i></span>',
    __('Next', 'karsa_start')
  ),
]);
?>

<?php if (!empty($links)): ?>

  <nav class="flex items-center justify-center gap-2">
    <?php foreach ($links as $link): ?>
      <?php
      if (str_contains($link, 'prev page-numbers')) {
        $styled_link = str_replace(
          'class="page-numbers prev"',
          'class=""',
          $link
        );
      } elseif (str_contains($link, 'next page-numbers')) {
        $styled_link = str_replace(
          'class="page-numbers next"',
          'class=""',
          $link
        );
      } elseif (str_contains($link, 'current')) {
        $styled_link = str_replace(
          'class="page-numbers current"',
          'class="inline-flex items-center justify-center rounded-shape-full h-8 w-8 bg-primary text-on-primary"',
          $link
        );
      } elseif (str_contains($link, 'dots')) {
        $styled_link = str_replace(
          'class="page-numbers dots"',
          'class="inline-flex items-center justify-center rounded-shape-full h-8 w-8 hover:bg-primary"',
          $link
        );
      } else {
        $styled_link = str_replace(
          'class="page-numbers"',
          'class="inline-flex items-center justify-center rounded-shape-full h-8 w-8 hover:bg-primary hover:text-on-primary"',
          $link
        );
      }
      ?>
      <?= $styled_link ?>
    <?php endforeach ?>
  </nav>

<?php endif ?>