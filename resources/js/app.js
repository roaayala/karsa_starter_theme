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
    },
  });
};

document.addEventListener("DOMContentLoaded", initLucideIcons);

window.addEventListener("load", function () {
  const primaryMenuMobile = document.getElementById("primary-menu-mobile");
  const primaryMenuMobileToggle = document.getElementById(
    "primary-menu-mobile-toggle",
  );

  if (primaryMenuMobile && primaryMenuMobileToggle) {
    const primaryMenuMobileMenuIcon = primaryMenuMobileToggle.querySelector(
      "#primary-menu-menu-icon",
    );
    const primaryMenuMobileCloseIcon = primaryMenuMobileToggle.querySelector(
      "#primary-menu-close-icon",
    );
    primaryMenuMobileToggle.addEventListener("click", () => {
      primaryMenuMobile.classList.toggle("hidden");
      primaryMenuMobileMenuIcon.classList.toggle("hidden");
      primaryMenuMobileCloseIcon.classList.toggle("hidden");
    });
  }
});
