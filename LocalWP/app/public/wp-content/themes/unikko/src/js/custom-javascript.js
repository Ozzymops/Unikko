// nav-toggle
document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector(".nav-toggle");
    const menu = document.querySelector(".nav-menu");

    button.addEventListener("click", function() {
        menu.classList.toggle("active");
    });
});