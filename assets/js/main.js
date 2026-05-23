const revealElements = document.querySelectorAll(
    ".experience, .signature-dishes, .menu-preview, .gallery, .testimonials, .reservation-cta"
);

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
            }
        });
    },
    {
        threshold: 0.15,
    }
);

revealElements.forEach((element) => {
    element.classList.add("reveal-section");
    observer.observe(element);
});