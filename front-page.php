<?php
get_header();

// $hero_image_id = 22;
$hero_image_url = isset($hero_image_id)
  ? wp_get_attachment_image_url($hero_image_id, 'large')
  : get_template_directory_uri() . "/assets/images/common-fallback-undraw.png";

?>


<!-- HERO -->

<section class="relative overflow-hidden flex items-center justify-center">

  <img src="<?= esc_url($hero_image_url) ?>" alt="Hero Background"
    class="absolute inset-0 w-full h-full object-cover -z-10" fetchpriority="high" loading="eager">


  <div class="container py-16 grid grid-cols-12 gap-4 ">
    <div
      class="col-span-12 xs:col-start-2 xs:col-end-12 sm:col-span-8 md:col-span-6 lg:col-span-5 xl:col-span-4 p-8 rounded-shape-lg bg-white/80 backdrop-blur-sm flex flex-col gap-6  shadow-elevation-1">
      <div class="flex flex-col gap-3">
        <div class="flex flex-col gap-2">
          <h1>
            <?php bloginfo('name') ?>
          </h1>
          <p>
            Rumah subsidi dengan fasilitas lengkap, nyaman dan strategis di Kota Samarinda.
          </p>
        </div>
        <div class="flex flex-col gap-0">
          <span class="">Mulai dari</span>
          <span class="flex gap-2 items-end">
            <span class="font-bold text-on-surface text-3xl xs:text-4xl sm:text-5xl">182</span> juta.
          </span>
        </div>


      </div>

      <div class="">
        <a href="#" class="inline-flex bg-primary text-on-primary py-2 px-4 rounded-shape-xs">
          Hubungi kami
        </a>
      </div>
    </div>
  </div>
</section>

<!-- SHORT INTRO -->
<section>
  <div class="container">
    <div></div>
    <div>
      <h2>
        <span><?php bloginfo('name') ?></span>
        <span>Perumahan Subsidi Samarinda</span>
      </h2>
      <p>
        Perumahan komersil di Samarinda yang dikembangkan oleh Ingria Group, pengembang properti yang berfokus pada
        perumahan untuk rakyat. Sebagai perumahan untuk rakyat, New Mahakam Grande hadir dengan harga yang sangat
        terjangkau namun tanpa mengurangi kualitas bangunan yang mengutamakan kenyamanan dan keamanan bagi para
        penghuninya.New Mahakam Grande dilengkapi dengan beragam fasilitas yang memadai sehingga dapat memberikan
        kenyamanan tinggal bagi para penghuninya.
      </p>
      <div>
        <a href="#">Selengkapnya</a>
      </div>
    </div>
  </div>
</section>

<!-- UNIT LIST -->
<section></section>

<!-- FEATURED -->
<section>
  <div class="container">
    <div>
      <i data-lucide="award"></i>
      <h3>Harga Terbaik</h3>
      <p>Rumah subsidi dengan harga kompetitif dan metode pembayaran yang sangat fleksibel.</p>
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
    </div>
  </div>
</section>

<!-- LOCATION AND MAP -->
 <section>
  <div class=" container">
        <div>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.8576899326686!2d117.08680633322192!3d-0.4788196976413315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67f257e8b5745%3A0x87efd6005444551d!2sNew%20Mahakam%20Grande%20Ringroad!5e1!3m2!1sen!2sid!4v1791091738115!5m2!1sen!2sid"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="strict-origin-when-cross-origin"></iframe>
        </div>
        <div>
          <h2>Alamat</h2>
          <p>Jalan Ringroad, Nomor 2, Kelurahan Lok Bahu, Kecamatan Sungai Kunjang, Kota Samarinda, Provinsi Kalimatan
            Timur, 75243</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section>
  <h2>Tertarik dengan Properti Kami?</h2>
  <a href="#">Hubungi Kami</a>
</section>




<?php
get_footer();
