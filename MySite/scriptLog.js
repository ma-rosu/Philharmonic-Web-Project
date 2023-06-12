document.getElementsByName("logInForm")[0].addEventListener("submit", function(event) {
  event.preventDefault(); 

  var formData = new FormData(this);

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "log.php", true);

  xhr.onreadystatechange = function() {
    if (xhr.readyState == XMLHttpRequest.DONE) {
      if (xhr.status == 200) {
        var response = xhr.responseText;
        if (response == "admin") {
          window.location.href = "mainPage1.html";
        } else if (response == "user") {
          window.location.href = "mainPage.html";
        } else {
          alert("Invalid email or password.");
        }
      } else {
        alert("An error occurred.");
      }
    }
  };

  xhr.send(formData);
});
