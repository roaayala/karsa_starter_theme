<?php
$intro_image_url = (!empty($args['intro_image_url'])) ? $args['intro_image_url']
  : get_template_directory_uri() . "/assets/images/common-fallback-2-undraw.png";
?>

<section>
  <div class="container py-16 grid md:grid-cols-2 gap-6 items-center">
    <div class="overflow-hidden rounded-shape-lg h-60 md:h-120">
      <img src="<?= esc_url($intro_image_url) ?>" alt="Intro Image" class="w-full h-full object-cover"
        fetchpriority="high" loading="eager">
    </div>

    <div class="flex flex-col gap-4">
      <div class="flex flex-col gap-1">
        <h2>
          <?php bloginfo('name') ?>
        </h2>
        <p>
          Perumahan komersil di Samarinda yang dikembangkan oleh Ingria Group, pengembang properti yang berfokus pada
          perumahan untuk rakyat. Sebagai perumahan untuk rakyat, New Mahakam Grande hadir dengan harga yang sangat
          terjangkau namun tanpa mengurangi kualitas bangunan yang mengutamakan kenyamanan dan keamanan bagi para
          penghuninya.New Mahakam Grande dilengkapi dengan beragam fasilitas yang memadai sehingga dapat memberikan
          kenyamanan tinggal bagi para penghuninya.
        </p>

      </div>


      <div>
        <a href="#" class="btn btn--primary">

          <span class="btn-label">Selengkapnya</span>
        </a>
      </div>
    </div>
  </div>
</section>