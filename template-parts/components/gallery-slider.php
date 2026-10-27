<?php
/**
 * Component: Gallery slider
 * @package KarsaStart
 */

$images = $args['images'] ?? [];
?>

<?php if (!empty($images)): ?>
  <div class="bg-surface-bright rounded-2xl overflow-hidden shadow-lg border border-outline/20" id="gallery-slider">

    <div
      class="bg-surface-container relative aspect-4/3 sm:aspect-video md:aspect-16/7 lg:aspect-16/6 xl:aspect-16/5 overflow-hidden">
      <img id="gallery-main-image" src="<?= esc_url($images[0]['url']); ?>" alt="<?= esc_attr($images[0]['alt']); ?>"
        class="h-full w-full object-contain" loading="eager" />

      <?php if (count($images) > 1): ?>
        <button type="button" id="gallery-prev" class="absolute left-4 sm:left-6 top-1/2 -translate-y-1/2 btn btn--primary"
          aria-label="Foto Sebelumnya">
          <i data-lucide="chevron-left" class="btn-icon"></i>
        </button>

        <button type="button" id="gallery-next"
          class="absolute right-4 sm:right-6 top-1/2 -translate-y-1/2 btn btn--primary" aria-label="Foto Selanjutnya">
          <i data-lucide="chevron-right" class="btn-icon"></i>
        </button>
      <?php endif; ?>
    </div>

    <?php if (count($images) > 1): ?>
      <div id="gallery-thumbnails" class="p-4 sm:p-6 flex gap-4 sm:gap-6 overflow-x-auto scrollbar-none">
        <?php foreach ($images as $index => $image): ?>
          <button class="gallery-image cursor-pointer aspect-square w-16 shrink-0 rounded-2xl overflow-hidden"
            data-index="<?= $index; ?>" data-url="<?= esc_url($image['url']); ?>" data-alt="<?= esc_attr($image['alt']); ?>">
            <img class="h-full w-full object-cover" src="<?= esc_url($image['url']); ?>" alt="<?= esc_attr($image['alt']); ?>"
              loading="lazy" />
          </button>
        <?php endforeach; ?>
      </div>
    <?php endif ?>

  </div>
<?php endif ?>