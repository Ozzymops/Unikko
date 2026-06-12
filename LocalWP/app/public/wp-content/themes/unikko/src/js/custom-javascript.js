console.log('custom-javascript.js loaded');

// nav-toggle
document.addEventListener("DOMContentLoaded", function() {
    const button = document.querySelector(".nav-toggle");
    const menu = document.querySelector(".nav-menu");

    button.addEventListener("click", function() {
        menu.classList.toggle("active");
    });
});

// nav active
document.addEventListener('DOMContentLoaded', () => {
    const currentPath = window.location.pathname.replace(/\/$/, '');
    let foundMatch = false;

    document.querySelectorAll('.nav-menu li a').forEach(link => {
        const linkPath = new URL(link.href).pathname.replace(/\/$/, '');

        if (linkPath === currentPath) {
            link.querySelector('img')?.classList.add('active');
            foundMatch = true;
        }
    });

    if (!foundMatch) {
        document.querySelector('.nav-menu li:first-child img')
            ?.classList.add('active');
    }
});