import { Award, createIcons, MapPin, ThumbsUp } from "lucide";

const initLucideIcons = () => {
  createIcons({
    icons: { Award, MapPin, ThumbsUp },
  });
};

document.addEventListener("DOMContentLoaded", initLucideIcons);

window.addEventListener("load", function () {
  let mainNavigation = document.getElementById("primary-navigation");
  let mainNavigationToggle = document.getElementById("primary-menu-toggle");

  if (mainNavigation && mainNavigationToggle) {
    mainNavigationToggle.addEventListener("click", function (e) {
      e.preventDefault();
      mainNavigation.classList.toggle("hidden");
    });
  }
});
