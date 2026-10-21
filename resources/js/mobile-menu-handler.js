export default function mobileMenuHandler() {
  const mobileMenu = document.getElementById("header-menu-mobile");
  const mobileMenuHandler = document.getElementById("mobile-menu-handler");

  if (mobileMenu && mobileMenuHandler) {
    mobileMenuHandler.addEventListener("click", () => {
      const mobileMenuDrawer = document.getElementById("mobile-menu-drawer");
      const mobileMenuClose = document.getElementById("mobile-menu-close");

      mobileMenu.classList.toggle("hidden");
      mobileMenuDrawer.classList.toggle("hidden");
      mobileMenuClose.classList.toggle("hidden");
    });
  }
}
