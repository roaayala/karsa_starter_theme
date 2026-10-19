<?php
/**
 * Template: About Us
 * @package KarsaStart
 */

get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post();

    // HERO
    get_template_part('template-parts/layouts/hero');

    // STATS
    $stats = [
      ['label' => 'Tahun Pengalaman', 'value' => '10+'],
      ['label' => 'Unit Terbangun', 'value' => '5.000+'],
      ['label' => 'Lokasi Proyek', 'value' => '8+'],
      ['label' => 'Legalitas Aman', 'value' => '100%']
    ];
    get_template_part('template-parts/layouts/stats-simple', null, ['stats' => $stats]); ?>


    <!-- 3. VISION AND MISSION -->
    <section class="py-16 bg-surface-bright">
      <div class="container flex flex-col gap-12">
        <div class="max-w-100 mx-auto flex flex-col gap-1">
          <span class="badge badge--primary badge--ghost self-center">Arah & Tujuan</span>
          <h2 class="text-center">Visi & Misi Perusahaan</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-6">

          <!-- VISION -->
          <?php get_template_part('template-parts/components/card', 'feature', [
            'icon' => 'eye',
            'title' => __('Visi', 'karsa_start'),
            'description' => __('Menjadi pengembang hunian terdepan dan pilihan utama masyarakat Indonesia dalam penyediaan perumahan rakyat yang aman, nyaman, dan bernilai investasi tinggi.', 'karsa_start')
          ]); ?>

          <!-- MISSION -->
          <?php get_template_part('template-parts/components/card', 'feature', [
            'icon' => 'target',
            'title' => __('Misi', 'karsa_start'),
            'list_items' => [
              __('Membangun hunian berkualitas dengan standar konstruksi terbaik.', 'karsa_start'),
              __('Mengembangkan kawasan perumahan di lokasi strategis & berkembang.', 'karsa_start'),
              __('Mengedepankan transparansi legalitas dan kemudahan proses kepemilikan.', 'karsa_start')
            ]
          ]); ?>

        </div>

      </div>
    </section>

    <!-- 4. CORE VALUES / KEUNGGULAN -->
    <section class="py-16 md:py-24 bg-surface">
      <div class="container flex flex-col gap-12">

        <div class="text-center max-w-2xl mx-auto flex flex-col gap-2">
          <span class="text-xs font-semibold text-primary uppercase tracking-wider">Prinsip Kami</span>
          <h2 class="text-h2 font-bold text-on-surface">Komitmen & Nilai Utama</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

          <!-- Card 1 -->
          <div
            class="p-6 rounded-shape-lg border border-outline-variant flex flex-col gap-3 hover:border-primary transition duration-200">
            <i data-lucide="shield-check" class="w-8 h-8 text-primary stroke-[1.75]"></i>
            <h3 class="text-h4 font-bold text-on-surface">Integritas</h3>
            <p class="text-sm text-on-surface-subtle leading-relaxed">
              Menjamin transparansi surat-surat, izin, dan legalitas bangunan di setiap proyek.
            </p>
          </div>

          <!-- Card 2 -->
          <div
            class="p-6 rounded-shape-lg border border-outline-variant flex flex-col gap-3 hover:border-primary transition duration-200">
            <i data-lucide="award" class="w-8 h-8 text-primary stroke-[1.75]"></i>
            <h3 class="text-h4 font-bold text-on-surface">Kualitas Konstruksi</h3>
            <p class="text-sm text-on-surface-subtle leading-relaxed">
              Menggunakan material terpilih dan pengawasan ketat demi ketahanan bangunan jangka panjang.
            </p>
          </div>

          <!-- Card 3 -->
          <div
            class="p-6 rounded-shape-lg border border-outline-variant flex flex-col gap-3 hover:border-primary transition duration-200">
            <i data-lucide="users" class="w-8 h-8 text-primary stroke-[1.75]"></i>
            <h3 class="text-h4 font-bold text-on-surface">Kolaborasi</h3>
            <p class="text-sm text-on-surface-subtle leading-relaxed">
              Bekerja sama dengan perbankan dan mitra terpercaya untuk mempermudah proses KPR konsumen.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- 5. CTA SECTION -->
    <section class="py-16 container">
      <div
        class="bg-primary text-on-primary rounded-shape-lg p-8 md:p-12 text-center flex flex-col items-center gap-6 shadow-lg">
        <h2 class="text-h2 font-bold max-w-2xl">Siap Temukan Hunian Impian Anda Bersama Kami?</h2>
        <p class="text-on-primary/80 max-w-xl text-sm md:text-base">
          Jelajahi berbagai pilihan tipe unit perumahan berlokasi strategis yang sedang dikembangkan saat ini.
        </p>
        <div class="flex flex-wrap gap-4 justify-center">
          <a href="<?= esc_url(home_url('/unit/')); ?>" class="btn btn--primary btn--inverse">
            Lihat Daftar Unit
          </a>
        </div>
      </div>
    </section>

  <?php endwhile; endif; ?>

<?php get_footer(); ?>