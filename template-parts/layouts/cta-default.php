<?php

/**
 * Layout: CTA Default
 * @package KarsaStart
 */

$title = $args['title'] ?? __('CTA Title', 'karsa_start');
$description = $args['description'] ?? null;

?>

<section class="py-16 bg-surface-bright">
  <div class="container">
    <div
      class="bg-primary flex flex-col justify-center min-h-80 rounded-2xl shadow-lg overflow-hidden text-center p-6 sm:p-8 md:p-16 gap-6 ">
      <div class="flex flex-col gap-3">
        <h2 class="text-3xl sm:text-4xl text-on-primary max-w-lg m-auto">
          <?= esc_html($title) ?>
        </h2>

        <?php if ($description): ?>
          <p class="text-on-primary/80 max-w-lg m-auto">
            <?= esc_html($description) ?>
          </p>
        <?php endif; ?>

      </div>

      <div>
        <a href="#" class="btn btn--primary btn--inverse">
          <span class="btn-label">Lihat Daftar Unit</span>
        </a>
      </div>
    </div>
  </div>
</section>