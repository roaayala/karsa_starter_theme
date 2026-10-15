<header class="relative rounded-2xl overflow-hidden min-h-40 flex items-center justify-center">
  <img class="absolute inset-0 z-0 h-full w-full object-cover object-center"
    src="<?= esc_url(get_template_directory_uri() . '/assets/images/fallback-1-undraw.png') ?>" alt="Page Thumbnail">

  <div class="absolute inset-0 z-5 bg-primary/80"></div>

  <div class="relative z-10">
    <h1 class="text-center text-on-primary">
      <?php single_post_title(); ?>
    </h1>
  </div>

</header>