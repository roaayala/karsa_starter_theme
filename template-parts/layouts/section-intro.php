<?php
$intro_image_url = (!empty($args['intro_image_url'])) ? $args['intro_image_url']
  : get_template_directory_uri() . "/assets/images/common-fallback-2-undraw.png";
?>

<section class="bg-surface">
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

    <div class="grid md:grid-cols-3 gap-4 md:gap-6">
      <?php foreach ($card_contents as $content): ?>
        <div class="p-4 sm:p-6 
      bg-surface-container 
      rounded-shape-lg 
      flex md:flex-col
      gap-3
      hover:shadow-elevation-1
      ">
          <div>
            <span class="inline-flex p-3 
          bg-primary-container 
          text-on-primary-container
          rounded-shape-md">
              <i data-lucide="<?= esc_attr($content['icon']) ?>"></i>
            </span>
          </div>

          <div class="flex flex-col gap-1">
            <h3 class="font-bold text-lg"><?= esc_html($content['title']) ?></h3>
            <p class="text-sm text-on-surface-variant/80 leading-[1.6]">
              <?= esc_html($content['description']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>



    </div>
  </div>
</section>