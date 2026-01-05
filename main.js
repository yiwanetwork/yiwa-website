function toggleMenu() {
    var navbar = document.getElementById("navbar");
    var navbarContent = document.getElementById("navbar-Content");

    if (navbarContent.style.display == "none") {
        navbarContent.style.display = "block";
    } else {
        navbarContent.style.display = "none"
    }
}