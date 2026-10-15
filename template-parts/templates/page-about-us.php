<?php
/**
 * Template: Page About Us
 * @package KarsaStart
 */

?>

<div class="container">

  <?php
  if (have_posts()):
    while (have_posts()):
      the_post(); ?>

      <article class="py-8 flex flex-col gap-6">
        <?php get_template_part('template-parts/components/banner-header') ?>

        <div class="flex flex-col gap-2">
          <h2>Ingria Pratama Capitalindo</h2>
          <div class="flex flex-col gap-4 text-on-surface-subtle">
            <p>PT. Ingria Pratama Capitalindo merupakan sebuah perseroan terbatas yang aktif dalam bidang jasa konstruksi
              dan perdagangan. Perusahaan ini didirikan pada tanggal 8 Mei 2013 berdasarkan Akta No. 04. Pada tanggal 27
              Juni 2013, Perseroan resmi terdaftar dalam Daftar Perusahaan yang diwajibkan oleh Undang-Undang Wajib Daftar
              Perusahaan (UUWDP) dengan nomor induk berusaha (NIB) 8120110032825 dan diberi tanda Indonesia sesuai dengan
              Surat Keputusan No. AHU-3496. AH.01.01 Tahun 2013. Pada tanggal 22 Oktober 2018, Perseroan mendaftarkan diri
              dalam sistem OSS.</p>
            <p>Seiring dengan perkembangan Perseroan, Anggaran Dasarnya telah mengalami beberapa kali perubahan, dengan
              perubahan terakhir dicatat dalam Akta No. 04 pada tanggal 06 Juni 2018 yang dibuat di hadapan Yuli Kristi SH
              MKN, Notaris di Subang.</p>
            <p>PT. Ingria Pratama Capitalindo telah memiliki beberapa portfolio konstruksi di berbagai lokasi strategis di
              Indonesia seperti di Bandung, Samarinda, Tangerang, Karawang, Bekasi, dan Sumedang. Sebagai perusahaan
              konstruksi yang berusaha menjadi Top of Mind untuk perumahan rakyat, PT Ingria Pratama Capitalindo terus
              mengedepankan prinsip kualitas, integritas, dan kolaborasi keseluruhan.</p>
          </div>
        </div>
      </article>

      <?php
    endwhile;
  endif; ?>

</div>