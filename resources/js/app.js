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
} from "lucide";

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
    },
  });
};

document.addEventListener("DOMContentLoaded", initLucideIcons);

window.addEventListener("load", function () {
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
