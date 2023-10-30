const menuToggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu");

menuToggle.addEventListener("change", function () {
    if (menuToggle.checked) {
        menu.classList.add("menu-visible");
    } else {
        menu.classList.remove("menu-visible");
    }
});


