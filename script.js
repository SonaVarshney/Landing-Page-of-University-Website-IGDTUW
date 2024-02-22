let currentSlide = 0;
const slides = document.getElementById("carousel-slide");
const totalSlides = slides.children.length;

function changeSlide(direction) {
  currentSlide += direction;

  if (currentSlide < 0) {
    currentSlide = totalSlides - 1;
  } else if (currentSlide >= totalSlides) {
    currentSlide = 0;
  }

  const translateValue = -currentSlide * 100 + "%";
  slides.style.transform = "translateX(" + translateValue + ")";
}

function startCarousel() {
  setInterval(() => {
    changeSlide(1);
  }, 2000);
}

// Start the carousel automatically
startCarousel();

const getNews = async () => {
  const url =
    "https://newsapi.org/v2/top-headlines?q=igdtuw&apiKey=process.env['news_Key']";

  try {
    const res = await axios.get(url);
    console.log(res.data);
  } catch (error) {
    console.log(error);
  }
};

function showModal() {
  document.querySelector(".overlay").classList.add("showoverlay");
  document.querySelector(".contact-form").classList.add("show-contact-form");
}

function closeModal() {
  document.querySelector(".overlay").classList.remove("showoverlay");
  document.querySelector(".contact-form").classList.remove("show-contact-form");
}
