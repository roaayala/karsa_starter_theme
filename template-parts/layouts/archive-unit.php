<?php
/**
 * Template: Archive for property-like
 * @package KarsaStart
 */

get_header();
?>

<div class="flex-1 py-8 bg-surface-bright">
  <div class="container flex flex-col gap-8">
    <div class="flex flex-col gap-4">
      <h1>Daftar Unit</h1>

      <?php if (have_posts()): ?>
        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
          <?php while (have_posts()) {
            the_post();

            $address_tax = karsa_build_tax_tree(get_the_terms(get_the_ID(), 'unit_address'), 'unit_address');
            $full_address = get_field('alamat') . ', ' . $address_tax;
            $property_info = [
              ['key' => 'floor', 'value' => get_field('lantai'), 'icon' => 'layers-2'],
              ['key' => 'land_area', 'value' => get_field('luas_tanah'), 'icon' => 'home'],
              ['key' => 'property_area', 'value' => get_field('luas_unit'), 'icon' => 'vector-polygon'],
              ['key' => 'bedroom', 'value' => get_field('kamar_tidur'), 'icon' => 'bed-double'],
              ['key' => 'bathroom', 'value' => get_field('kamar_mandi'), 'icon' => 'bath'],
            ];
            $price = format_rupiah(get_field('harga'));

            get_template_part('template-parts/components/card-property', null, [
              'full_address' => $full_address,
              'property_info' => $property_info,
              'price' => $price
            ]);

          } ?>
        </div>
      <?php endif ?>
    </div>

    <?php get_template_part('template-parts/components/pagination') ?>
  </div>
</div>




<?php
get_footer();