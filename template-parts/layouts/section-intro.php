<?php
$intro_image_url = (!empty($args['intro_image_url'])) ? $args['intro_image_url']
  : get_template_directory_uri() . "/assets/images/common-fallback-2-undraw.png";
?>

<section class="bg-surface-container-low">
  <div class="container py-16 flex flex-col gap-8">

    <div class="grid md:grid-cols-2 gap-8 items-center">
      <div class="overflow-hidden rounded-shape-lg h-60 md:h-80 hover:shadow-elevation-1">
        <img src="<?= esc_url($intro_image_url) ?>" alt="Intro Image" class="w-full h-full object-cover"
          fetchpriority="high" loading="eager">
      </div>

      <div class="flex flex-col gap-4">
        <div class="flex flex-col gap-2">
          <h2>
            <?php bloginfo('name') ?>
          </h2>
          <p class="text-on-surface-variant/80">
            New Mahakam Grande adalah perumahan rakyat terjangkau karya Ingria Group di Samarinda yang menghadirkan
            bangunan berkualitas, aman, nyaman, dan berfasilitas lengkap.
          </p>

        </div>


        <div>
          <a href="#" class="btn btn--primary">

            <span class="btn-label">Selengkapnya</span>
          </a>
        </div>
      </div>
    </div>

    <?php $card_contents = [
      [
        'icon' => 'award',
        'title' => 'Harga Terbaik',
        'description' => 'Rumah subsidi dengan harga kompetitif dan metode pembayaran yang sangat fleksibel.'
      ],
      [
        'icon' => 'map-pin',
        'title' => 'Lokasi Strategis',
        'description' => 'Dekat dengan berbagai fasilitas publik: seperti RS Hermina, Pasar Kedondong dan Big Mall Samarinda.'
      ],
      [
        'icon' => 'thumbs-up',
        'title' => 'Fasilitas Lengkap',
        'description' => 'Terintegrasi dengan berbagai sarana kebutuhan dasar, seperti: klinik serta apotek, area niaga serta pertokoan dan sarana pendidikan.'
      ]
    ] ?>

    <div class="grid md:grid-cols-3 gap-4 sm:gap-6">

      <?php
      foreach ($card_contents as $content):
        get_template_part('template-parts/components/cards/card', 'info', [
          'icon' => $content['icon'],
          'title' => $content['title'],
          'description' => $content['description']
        ]);
      endforeach;
      ?>



    </div>
  </div>
</section>