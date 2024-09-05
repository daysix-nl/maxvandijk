

try {
    document.getElementById('nav-icon').addEventListener('click', function () {
        document.body.classList.toggle('hamburger-nonactive');
        document.body.classList.toggle('hamburger-active');
    });
} catch (error) { }


try {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("show");
            }
        });
    });

    const hiddenElements = document.querySelectorAll(".element-fade-in");
    hiddenElements.forEach((el) => observer.observe(el));
} catch (error) { }

try {
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 'auto',
        spaceBetween: 10,
        freeMode: true,
        breakpoints: {
            640: {
                spaceBetween: 30,
            },
            768: {
                spaceBetween: 30,
            },
            1200: {
                spaceBetween: 25,
            },
        },
    });
} catch (error) { }


try {
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');

    function showNextSlide() {
        slides[currentSlide].style.opacity = '0';
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].style.opacity = '1';
    }

    setInterval(showNextSlide, 5000);  // Verandert elke 5 seconden

} catch (error) { }