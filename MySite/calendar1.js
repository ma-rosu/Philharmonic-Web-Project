// Fetch data from the PHP script
fetch('calendar1.php')
  .then(response => response.json())
  .then(data => {
    const tableBody = document.querySelector('#eventsTable tbody');
    data.forEach(event => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>${event.eventName}</td>
        <td>${event.eventDate}</td>
        <td>${event.eventMusic}</td>
      `;
      tableBody.appendChild(row);
    });
  })
  .catch(error => {
    console.error('Error:', error);
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