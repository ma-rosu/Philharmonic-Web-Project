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