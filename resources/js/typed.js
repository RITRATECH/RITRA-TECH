import Typed from "typed.js";

document.addEventListener("DOMContentLoaded", () => {
    const element = document.getElementById("typed-text");

    if (!element) {
        return;
    }

    new Typed(element, {
        strings: [
            "Cyber Security",
            "Digital Forensics",
            "Penetration Testing",
            "Artificial Intelligence",
            "Security Research",
        ],

        typeSpeed: 60,

        backSpeed: 35,

        backDelay: 1500,

        loop: true,

        showCursor: true,

        cursorChar: "_",
    });
});
