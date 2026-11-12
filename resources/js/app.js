import { createIcons } from "lucide";
import Alpine from "alpinejs";

const initLucideIcons = () => {
  createIcons({
    icons: {},
  });
};

window.initLucideIcons = initLucideIcons;

document.addEventListener("DOMContentLoaded", () => {
  initLucideIcons();
});

window.Alpine = Alpine;
Alpine.start();
