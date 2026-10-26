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

  if (gallerySliderElement && galleryThumbnails) {
    const mainImage = document.getElementById("gallery-main-image");
    const prevImage = document.getElementById("gallery-prev");
    const nextImage = document.getElementById("gallery-next");

    let currentMainImage = {
      index: 0,
      url: mainImage.src,
      alt: mainImage.alt,
    };

    let images = [];
    galleryThumbnails.querySelectorAll(".gallery-image").forEach((image) => {
      const currentImage = {
        index: Number(image.dataset.index),
        url: image.dataset.url,
        alt: image.dataset.alt,
      };

      images.push(currentImage);
    });

    function setMainImage() {
      if (currentMainImage.index >= images.length - 1) {
        currentMainImage.index = 0;

        currentMainImage = {
          ...images.find((image) => image.index === currentMainImage.index),
        };
      } else {
        currentMainImage.index++;

        currentMainImage = {
          ...images.find((image) => image.index === currentMainImage.index),
        };
      }

      mainImage.src = currentMainImage.url;
      mainImage.alt = currentMainImage.alt;
    }

    nextImage.addEventListener("click", () => {
      setMainImage();
    });
    prevImage.addEventListener("click", () => {
      setMainImage();
    });
  }
}
