import {
  createIcons,
  Award,
  MapPin,
  Phone,
  SquareArrowOutUpRight,
  ThumbsUp,
  CircleAlert,
  X,
  Menu,
  MoveLeft,
  MoveRight,
  VectorPolygon,
  Home,
  BedDouble,
  Bath,
  CheckCircle2,
  Building2,
  Eye,
  Target,
  Users,
  ShieldCheck,
  Layers2,
  ChevronRight,
  ChevronLeft,
} from "lucide";
import mobileMenuHandler from "./mobile-menu-handler";

const initLucideIcons = () => {
  createIcons({
    icons: {
      Award,
      MapPin,
      ThumbsUp,
      Phone,
      SquareArrowOutUpRight,
      CircleAlert,
      Menu,
      X,
      MoveLeft,
      MoveRight,
      VectorPolygon,
      Home,
      BedDouble,
      Bath,
      CheckCircle2,
      Building2,
      Eye,
      Target,
      Users,
      ShieldCheck,
      Layers2,
      ChevronRight,
      ChevronLeft,
    },
  });
};

document.addEventListener("DOMContentLoaded", () => {
  initLucideIcons();
  mobileMenuHandler();
  galerySlider();
});

function galerySlider() {
  const gallerySliderElement = document.getElementById("gallery-slider");
  const galleryThumbnails = document.getElementById("gallery-thumbnails");

  if (!gallerySliderElement || !galleryThumbnails) return;

  const mainImage = document.getElementById("gallery-main-image");
  const prevImage = document.getElementById("gallery-prev");
  const nextImage = document.getElementById("gallery-next");
  const thumbs = Array.from(
    galleryThumbnails.querySelectorAll(".gallery-image"),
  );

  if (!mainImage || thumbs.length === 0) return;

  let currentIndex = 0;
  const totalImages = thumbs.length;

  function updateSlider(index) {
    currentIndex = (totalImages + index) % totalImages;

    const activeThumb = thumbs[currentIndex];
    const newUrl = activeThumb.dataset.url;
    const newAlt = activeThumb.dataset.alt;

    mainImage.src = newUrl;
    mainImage.alt = newAlt;
  }

  if (nextImage) {
    nextImage.addEventListener("click", () => {
      updateSlider(currentIndex + 1);
    });
  }

  if (prevImage) {
    prevImage.addEventListener("click", () => {
      updateSlider(currentIndex - 1);
    });
  }

  thumbs.forEach((thumb) => {
    thumb.addEventListener("click", () => {
      updateSlider(Number(thumb.dataset.index));
    });
  });
}
