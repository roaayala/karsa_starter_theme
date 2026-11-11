<?php
/**
 * View: Page about us for store
 */

use KarsaStart\Helpers;

?>

<div class="flex-1">
  <!-- HERO -->
  <?php Helpers::module('hero-default', [
    'title' => __('Tentang Kami', 'karsa_start'),
    'leading_text' => __(
      'Selamat datang di MasukKomputer. Kami adalah platform penyedia informasi, katalog komponen komputer, dan simulasi perakitan PC yang dirancang untuk membantu antusias teknologi, gamer, creator, hingga profesional dalam menemukan perangkat keras terbaik sesuai kebutuhan.',
      'karsa_start'
    ),
  ]); ?>

  <!--  -->
  <?php
  $vision_mission_contents = [
    [
      'icon' => 'eye',
      'title' => __('Kemudahan Akses Informasi', 'karsa_start'),
      'description' => __(
        'Menyajikan katalog komponen komputer yang lengkap, transparan, dan mudah dinavigasi.',
        'karsa_start'
      )
    ],
    [
      'icon' => 'component',
      'title' => __('Simulasi Perakitan PC', 'karsa_start'),
      'description' => __(
        'Memberikan pengalaman simulasi rakit PC yang presisi untuk memudahkan pengguna mengukur estimasi biaya dan kompatibilitas antar-komponen.',
        'karsa_start'
      )
    ],
    [
      'icon' => 'lightbulb',
      'title' => __('Edukasi Teknologi', 'karsa_start'),
      'description' => __(
        'Membantu pengguna dari berbagai tingkat pemahaman hardware untuk membuat keputusan pembelian secara bijak.',
        'karsa_start'
      )
    ]
  ];

  Helpers::module('feature-default', [
    'title' => __('Visi dan Misi Kami', 'karsa_start'),
    'title_classes' => 'text-center',
    'items' => $vision_mission_contents
  ]);
  ?>
  <!--  -->

</div>