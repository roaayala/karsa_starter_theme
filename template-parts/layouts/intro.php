<?php
/**
 * Layout: Short Intro
 * @package KarsaStart
 */

$intro_image_url = (!empty($args['intro_image_url'])) ? $args['intro_image_url']
  : get_template_directory_uri() . "/assets/images/common-fallback-2-undraw.png";
?>

<section class="py-16 bg-surface-dim">
  <div class="container">
    <div class="bg-surface-bright 
    p-6 rounded-corner-xl
   flex flex-col gap-6
    ">
      <div class="grid md:grid-cols-12 md:items-center gap-4 md:gap-6">
        <div class="aspect-video md:aspect-5/4 lg:aspect-video md:col-span-6 rounded-corner-lg overflow-hidden">
          <img src="<?= esc_url($intro_image_url) ?>" alt="Intro Image" class="w-full h-full object-cover"
            fetchpriority="high" loading="eager">
        </div>

        <div class="md:col-span-6">
          <div class="mb-4">
            <h2 class="mb-2">
              <?php bloginfo('name') ?>
            </h2>
            <p class="text-on-surface-subtle">
              New Mahakam Grande adalah perumahan rakyat terjangkau karya Ingria Group di Samarinda yang menghadirkan
              bangunan berkualitas, aman, nyaman, dan berfasilitas lengkap.
            </p>

          </div>
          <div>
            <a href="<?= esc_url(home_url('/tentang-kami')) ?>" class="btn btn--primary">
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
      ];
      ?>

      <div class="grid md:grid-cols-3 gap-4 md:gap-6">
        <?php
        foreach ($card_contents as $content):
          get_template_part('template-parts/components/cards/card', 'feature', [
            'icon' => $content['icon'],
            'title' => $content['title'],
            'description' => $content['description']
          ]);
        endforeach;
        ?>
      </div>

    </div>
  </div>


</section>