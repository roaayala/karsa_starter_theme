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

<div class="container grid gap-6 grid-cols-12">

  <div class="col-span-12 sm:col-span-5 md:col-span-4 lg:col-span-3">
    <h2><?= esc_html($title) ?></h2>
  </div>

  <div class="col-span-12 sm:col-span-7 md:col-span-8 lg:col-span-9 grid gap-4 grid-cols-2">
    <?php foreach ($marketplaces as $marketplace) {
      get_template_part('template-parts/components/cards/card', 'marketplace', [
        'url' => $marketplace['url'],
        'key' => $marketplace['key']
      ]);
    } ?>
  </div>

</div>