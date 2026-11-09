<?php
/**
 * Module: Page header
 */

$title = $args['title'] ?? get_the_title();
$show_meta = $args['show_meta'] ?? true;

?>

<header>
  <h1>
    <?= esc_html($title) ?>
  </h1>

  <?php if ($show_meta): ?>
    <div>
      <span>
        <?= _e('Dipublikasikan', 'karsa_start') ?>: <?= get_the_date() ?>
      </span>
    </div>
  <?php endif ?>
</header>