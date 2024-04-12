document.addEventListener("DOMContentLoaded", function() {
    const images = ["images/download.jpg", "images/bcp.jpg", "images/drp.jpg"]; // List of image file paths
    const hero = document.querySelector(".hero");
    let index = 0;

    function changeBackground() {
    hero.style.backgroundImage = `url('${images[index]}')`;
    index = (index + 1) % images.length;
    }

    setInterval(changeBackground, 4000); // Change image every 4 seconds 4000 milliseconds)
});


let currentSlide = 0;
const slides = document.querySelectorAll('.carousel-section');

function showSlide(n) {
    slides[currentSlide].classList.remove('active');
    currentSlide = (n + slides.length) % slides.length;
    slides[currentSlide].classList.add('active');
}

function nextSlide() {
    showSlide(currentSlide + 1);
}

function prevSlide() {
    showSlide(currentSlide - 1);
}

setInterval(nextSlide, 7000); // Auto-switch slides every 7 seconds
