<?php
/**
 * Section: List of marketplaces
 * @package KarsaStart
 */

$title = $args['title'] ?? __('Judul Section', 'karsa_start');

$marketplaces = [
  [
    'key' => 'shopee',
    'url' => '#'
  ],
  [
    'key' => 'tokopedia',
    'url' => '#'
  ],
  [
    'key' => 'blibli',
    'url' => '#'
  ],
  [
    'key' => 'lazada',
    'url' => '#'
  ]
];
?>

<div class="container flex flex-col items-center text-center gap-6">

  <div class="max-w-md">
    <h2>
      <?= esc_html($title) ?>
    </h2>
  </div>

  <div class="w-full grid grid-cols-2 sm:grid-cols-4 gap-4">
    <?php foreach ($marketplaces as $marketplace) {
      get_template_part('template-parts/components/cards/card', 'marketplace', [
        'url' => $marketplace['url'],
        'key' => $marketplace['key']
      ]);
    } ?>
  </div>

</div>