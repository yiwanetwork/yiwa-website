function toggleMenu() {
    var navbar = document.getElementById("navbar");
    var toggleButton = document.getElementById("navbar-toggle");

    if (!navbar) {
        return;
    }

    var isOpen = navbar.classList.toggle("menu-open");

    if (toggleButton) {
        toggleButton.setAttribute("aria-expanded", isOpen ? "true" : "false");
    }
}