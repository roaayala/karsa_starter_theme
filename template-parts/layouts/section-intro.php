<?php
$intro_image_url = (!empty($args['intro_image_url'])) ? $args['intro_image_url']
  : get_template_directory_uri() . "/assets/images/common-fallback-2-undraw.png";
?>

<section class="bg-primary">
  <div class="container py-16 flex flex-col gap-8">

    <div class="grid md:grid-cols-2 gap-6 items-center">
      <div class="overflow-hidden rounded-shape-lg h-60 md:h-120">
        <img src="<?= esc_url($intro_image_url) ?>" alt="Intro Image" class="w-full h-full object-cover"
          fetchpriority="high" loading="eager">
      </div>

      <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-1">
          <h2 class="text-on-primary">
            <?php bloginfo('name') ?>
          </h2>
          <p class="text-on-primary/80">
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

    <div class="grid md:grid-cols-3 gap-6">
      <div class="p-4 bg-primary-container rounded-shape-lg flex flex-col gap-2">
        <div>
          <span class="inline-flex p-2 bg-primary/80 rounded-shape-md text-on-primary">
            <i data-lucide="award"></i>
          </span>
        </div>

        <div class="flex flex-col gap-1">
          <h3 class="text-on-primary-container">Harga Terbaik</h3>
          <p class="text-sm text-on-primary-container/80">Rumah subsidi dengan harga kompetitif dan metode pembayaran
            yang
            sangat fleksibel.</p>
        </div>


      </div>
      <div>
        <i data-lucide="map-pin"></i>
        <h3>Lokasi Strategis</h3>
        <p>Dekat dengan berbagai fasilitas publik: seperti RS Hermina, Pasar Kedondong dan Big Mall Samarinda.</p>
      </div>
      <div>
        <i data-lucide="thumbs-up""></i>
      <h3>Fasilitas Lengkap</h3>
      <p>Terintegrasi dengan berbagai sarana kebutuhan dasar, seperti: klinik serta apotek, area niaga serta pertokoan dan sarana pendidikan.</p>
    </div></div>
  </div>
</section>