const stars = document.querySelectorAll(".star");
const ratingValue = document.getElementById("rating-value");

stars.forEach((star) => {
  star.addEventListener("click", () => {
    const rating = parseInt(star.getAttribute("data-rating"));
    ratingValue.textContent = `Calificación: ${rating}`;
    stars.forEach((s) => s.classList.remove("active"));
    star.classList.add("active");
  });
});

const ujum = document.querySelectorAll(".ujum");
const ujumRatingValue = document.getElementById("ujum-rating-value");

ujum.forEach((star) => {
  star.addEventListener("click", () => {
    const rating = parseInt(star.getAttribute("data-rating"));
    ujumRatingValue.textContent = `Calificación: ${rating}`;
    ujum.forEach((s) => s.classList.remove("active"));
    star.classList.add("active");
  });
});

const ujam = document.querySelectorAll(".ujam");
const ujamRatingValue = document.getElementById("ujam-rating-value");

ujam.forEach((star) => {
  star.addEventListener("click", () => {
    const rating = parseInt(star.getAttribute("data-rating"));
    ujamRatingValue.textContent = `Calificación: ${rating}`;
    ujam.forEach((s) => s.classList.remove("active"));
    star.classList.add("active");
  });
});