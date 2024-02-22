let currentIndex = 0;

function prevSlide() {
  showSlide(currentIndex - 1);
}

function nextSlide() {
  showSlide(currentIndex + 1);
}

function showSlide(index) {
  const slides = document.getElementById("imageCarousel");
  const totalSlides = slides.children.length;

  // Ensure the index is within the valid range
  index = (index + totalSlides) % totalSlides;

  slides.style.transform = `translateX(-${index * 100}%)`;
  currentIndex = index;
}
