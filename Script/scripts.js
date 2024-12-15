document.addEventListener("DOMContentLoaded", () => {
    const toTopBtn = document.getElementById("toTopBtn");

    window.onscroll = () => {
        if (window.scrollY > 100) {
            toTopBtn.style.display = "block";
        } else {
            toTopBtn.style.display = "none";
        }
    };

    toTopBtn.onclick = () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
    };
});
