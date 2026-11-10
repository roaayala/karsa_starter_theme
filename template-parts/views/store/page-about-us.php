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
  ]) ?>

</div>