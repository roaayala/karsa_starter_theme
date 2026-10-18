<?php
/**
 * Template: About Us
 * @package KarsaStart
 */

get_header(); ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

    <?php get_template_part('template-parts/layouts/hero') ?>


    <!-- 2. STATS & MILESTONES SECTION -->
    <section class="py-12 bg-surface border-b border-outline-variant/60">
      <div class="container">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

          <div class="flex flex-col gap-1 p-4">
            <span class="text-3xl md:text-4xl font-bold text-primary">10+</span>
            <span class="text-xs md:text-sm text-on-surface-subtle font-medium">Tahun Pengalaman</span>
          </div>

          <div class="flex flex-col gap-1 p-4">
            <span class="text-3xl md:text-4xl font-bold text-primary">5.000+</span>
            <span class="text-xs md:text-sm text-on-surface-subtle font-medium">Unit Terbangun</span>
          </div>

          <div class="flex flex-col gap-1 p-4">
            <span class="text-3xl md:text-4xl font-bold text-primary">8+</span>
            <span class="text-xs md:text-sm text-on-surface-subtle font-medium">Lokasi Proyek</span>
          </div>

          <div class="flex flex-col gap-1 p-4">
            <span class="text-3xl md:text-4xl font-bold text-primary">100%</span>
            <span class="text-xs md:text-sm text-on-surface-subtle font-medium">Legalitas Aman</span>
          </div>

        </div>
      </div>
    </section>

    <!-- 3. VISI & MISI SECTION -->
    <section class="py-16 md:py-24 bg-surface-bright">
      <div class="container flex flex-col gap-12">

        <div class="text-center max-w-2xl mx-auto flex flex-col gap-2">
          <span class="text-xs font-semibold text-primary uppercase tracking-wider">Arah & Tujuan</span>
          <h2 class="text-h2 font-bold text-on-surface">Visi & Misi Perusahaan</h2>
        </div>

        <div class="grid md:grid-cols-2 gap-8">

          <!-- Visi Card -->
          <div class="bg-surface p-8 rounded-shape-lg border border-outline-variant flex flex-col gap-4 shadow-sm">
            <div class="w-12 h-12 rounded-shape-md bg-primary/10 text-primary flex items-center justify-center">
              <i data-lucide="eye" class="w-6 h-6 stroke-[1.75]"></i>
            </div>
            <h3 class="text-h3 font-bold text-on-surface">Visi</h3>
            <p class="text-on-surface-subtle leading-relaxed">
              Menjadi pengembang hunian terdepan dan pilihan utama (*Top of Mind*) masyarakat Indonesia dalam penyediaan
              perumahan rakyat yang aman, nyaman, dan bernilai investasi tinggi.
            </p>
          </div>

          <!-- Misi Card -->
          <div class="bg-surface p-8 rounded-shape-lg border border-outline-variant flex flex-col gap-4 shadow-sm">
            <div class="w-12 h-12 rounded-shape-md bg-primary/10 text-primary flex items-center justify-center">
              <i data-lucide="target" class="w-6 h-6 stroke-[1.75]"></i>
            </div>
            <h3 class="text-h3 font-bold text-on-surface">Misi</h3>
            <ul class="flex flex-col gap-3 text-on-surface-subtle list-disc list-inside leading-relaxed">
              <li>Membangun hunian berkualitas dengan standar konstruksi terbaik.</li>
              <li>Mengembangkan kawasan perumahan di lokasi strategis & berkembang.</li>
              <li>Mengedepankan transparansi legalitas dan kemudahan proses kepemilikan.</li>
            </ul>
          </div>

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