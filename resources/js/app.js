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
    },
  });
};

document.addEventListener("DOMContentLoaded", initLucideIcons);

window.addEventListener("load", function () {
  mobileMenuHandler();
  const primaryMenuToggle = document.getElementById("primary-menu-toggle");
  const primaryMenu = document.getElementById("primary-menu");

  if (primaryMenuToggle && primaryMenu) {
    const primaryMenuMenuIcon = document.getElementById(
      "primary-menu-menu-icon",
    );
    const primaryMenuCloseIcon = document.getElementById(
      "primary-menu-close-icon",
    );

    if (primaryMenuMenuIcon && primaryMenuCloseIcon) {
      primaryMenuToggle.addEventListener("click", () => {
        primaryMenu.classList.toggle("hidden");
        primaryMenuMenuIcon.classList.toggle("hidden");
        primaryMenuCloseIcon.classList.toggle("hidden");
      });
    }
  }
});
