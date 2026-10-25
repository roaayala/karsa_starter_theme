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

  // const sliderElement = document.getElementById("gallery-slider");
  // if (sliderElement && sliderElement.dataset.images) {
  //   const images = JSON.parse(sliderElement.dataset.images);

  //   console.log(images);
  // }
});
