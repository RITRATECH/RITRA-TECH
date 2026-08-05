window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");

    if (window.scrollY > 50) {
        navbar.classList.add(
            "bg-black/70",

            "backdrop-blur-xl",

            "shadow-xl",
        );
    } else {
        navbar.classList.remove(
            "bg-black/70",

            "backdrop-blur-xl",

            "shadow-xl",
        );
    }
});
