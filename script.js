const menuButton = document.getElementsByClassName('checkbtn')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

menuButton.addEventListener('click', () => {
    navbarLinks.classList.toggle('active')
})

let slideIndex = 1;
let slideInterval;

document.addEventListener("DOMContentLoaded", () => {
  showSlides(slideIndex);
  startAutoSlide();
});

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
  resetAutoSlide();
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
  resetAutoSlide();
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");

  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
    slides[i].classList.remove("fade-in");
    slides[i].classList.add("fade-out");
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";
  slides[slideIndex-1].classList.remove("fade-out");
  slides[slideIndex-1].classList.add("fade-in");
  
  if (dots.length > 0) {
    dots[slideIndex-1].className += " active";
  }
}

function startAutoSlide() {
  slideInterval = setInterval(() => {
    showSlides(slideIndex += 1);
  }, 8000); // Change image every 2 seconds
}

function resetAutoSlide() {
  clearInterval(slideInterval);
  startAutoSlide();
}

