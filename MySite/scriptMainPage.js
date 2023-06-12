document.addEventListener("DOMContentLoaded", function(event) {
  const images = document.querySelectorAll('.image-slider img');
  let currentIndex = 0;

  function showNextImage() {
    images[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % images.length;
    images[currentIndex].classList.add('active');
  }

  setInterval(showNextImage, 3000); // Change image every 3 seconds
  images[0].classList.add('active');
});

document.addEventListener("DOMContentLoaded", function(event) {
  const images = document.querySelectorAll('.image-slider2 img');
  let currentIndex = 0;

  function showNextImage() {
    images[currentIndex].classList.remove('active');
    currentIndex = (currentIndex + 1) % images.length;
    images[currentIndex].classList.add('active');
  }
  
  setInterval(showNextImage, 3000); // Change image every 3 seconds
  images[0].classList.add('active');
});

var prevScrollPos = window.pageYOffset;

window.addEventListener('scroll', function() {
  var currentScrollPos = window.pageYOffset;
  var topBar = document.querySelector('.top-bar');

  if (prevScrollPos > currentScrollPos) {
    // Scrolling up
    topBar.classList.remove('hide-top-bar');
  } else {
    // Scrolling down
    if (currentScrollPos > 0) {
      topBar.classList.add('hide-top-bar');
    }
  }

  prevScrollPos = currentScrollPos;
});
