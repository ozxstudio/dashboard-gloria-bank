import './bootstrap';
window.addEventListener("scroll", () => {
    const header = document.querySelector("header");
    const toTop = document.querySelector("#to-top");

    if (window.scrollY > header.offsetTop) {
        header.classList.add("navbar-fixed");
        toTop.classList.remove("hidden");
        toTop.classList.add("flex");
    } else {
        header.classList.remove("navbar-fixed");
        toTop.classList.remove("flex");
        toTop.classList.add("hidden");
    }
}, { passive: true }); // Pakai passive:true agar tidak memperlambat scrolling
