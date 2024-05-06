let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

// Function to validate the contact form before submission
function validateForm() {
  // Get values from input fields
  var name = document.getElementById('name').value;
  var phone = document.getElementById('phone').value;
  var email = document.getElementById('email').value;
  var message = document.getElementById('message').value;

  // Check if name is empty
  if (name.trim() == '') {
      alert('Please enter your name');
      return false;
  }

  // Check if phone number is empty
  if (phone.trim() == '') {
      alert('Please enter your phone number');
      return false;
  }

  // Check if email is empty
  if (email.trim() == '') {
      alert('Please enter your email');
      return false;
  }

  // Check if message is empty
  if (message.trim() == '') {
      alert('Please enter your message');
      return false;
  }

  // All fields are filled, return true for form submission
  return true;
}

// Smooth scroll to section when button is clicked
document.getElementById('loginButton').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior
    // Get the section to scroll to (you can replace 'about-section' with the section you want to scroll to)
    var section = document.getElementById('about-section');
    // Scroll to the section
    section.scrollIntoView({ behavior: 'smooth' });
    // After scrolling, transition to the login page after a delay (you can adjust the delay as needed)
    setTimeout(function() {
        window.location.href = 'login.php';
    }, 1000); // Transition after 1 second (1000 milliseconds)
});
