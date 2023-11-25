const slider = document.querySelector('.slider');
let isTransitioning = false;

function nextSlide() {
  if (!isTransitioning) {
    isTransitioning = true;
    slider.style.transform = 'translateX(-100%)';
    setTimeout(() => {
      const firstSlide = slider.firstElementChild;
      slider.appendChild(firstSlide);
      slider.style.transform = 'translateX(0)';
      isTransitioning = false;
    }, 500);
  }
}

setInterval(nextSlide, 3000);  // Cambia de slide cada 3 segundos
