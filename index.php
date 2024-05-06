<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agro App - Government Aided Schemes for Farmers</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="icon" type="image/x-icon" href="assets/icons/favicon.png" />
    <style>
    /* Add smooth scrolling behavior */
    html {
        scroll-behavior: smooth;
    }
</style>
  </head>
  <body>
    <nav>
      <img class="logo" src="assets/image/logo.png" alt=""/>
      <ul class="nav__links">
        <li class="nav__item">
          <a href="#hero-section">Home</a>
        </li>
        <li class="nav__item">
          <a href="#about-section">About Us</a>
        </li>
        <li class="nav__item">
          <a href="fetch_crop.php">CropInfo</a>
        </li>
        <li class="nav__item">
          <a href="#contact-section">Contact Me</a>
        </li>
      </ul>
      <a 
        href="
            <?php 
                include_once("includes/session_start.php");
                if (isset($_SESSION["active"])){
                    echo "../logout.php";
                }
                else{
                    echo "../login.php";
                }
            ?>"
        class="cta">
            <button>
            <?php 
                if (isset($_SESSION["active"]))
                    echo "Logout";
                else
                    echo "Login";
            ?>
            </button>
        </a>
    </nav>
    <section class="slideshow-header">
      <div class="header-container">
        <h2>AGRO APP</h2>
        <p>Discover Government Aided Schemes supporting farmers</p>
      </div>
    </section>
    <section id="hero-section">
      <div class="overlay"></div>
      <div class="slideshow-container">
        <!-- Slideshow images and controls -->
        <div class="mySlides fade">
          <img src="assets/image/hero-image.png" style="width: 100%" />
        </div>
        <div class="mySlides fade">
          <img src="assets/image/hero-image2.png" style="width: 100%" />
        </div>
        <div class="mySlides fade">
          <img src="assets/image/hero-image3.png" style="width: 100%" />
        </div>
        <!-- Next and previous buttons -->
        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
      </div>
    </section>

    <section id="scheme-section">
      <div class="text-wrapper">
        <div class="title-text">
          <h1>Namaskar Dosto!</h1>
          <p class="subheading">
            Welcome to Agroapp a platform which help you find the best
            <br />Government Aided Schemes for Farmers
          </p>
        </div>
        <div class="btn-wrapper">
          <a href="user/schemes.php"><button class="find-btn">Find schemes for you ➜</button></a>
        </div>
      </div>
      <section class="scheme-section">
        <div class="scheme-container">
          <!-- Scheme items -->
          <div class="scheme-item">
            <span class="scheme-count">2010+</span>
            <div class="scheme-info">
              <span class="scheme-title">Total Schemes →</span>
            </div>
          </div>
          <div class="scheme-item">
            <span class="scheme-count">520+</span>
            <div class="scheme-info">
              <span class="scheme-title">Central Schemes →</span>
            </div>
          </div>
          <div class="scheme-item">
            <span class="scheme-count">1490+</span>
            <div class="scheme-info">
              <span class="scheme-title">States/UTs Schemes →</span>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section id="about-section">
      <div class="about-container">
        <div class="content">
          <h3>About Project</h3>
          <p>
            Welcome to Agro App, a pioneering National Platform developed as
            part of our college project for the subject of Web-Based
            Programming. Implemented using PHP, our platform serves as a
            comprehensive solution, offering a single point of access for
            citizens to explore and discover various Government schemes related
            to agriculture.
          </p>
          <p>
            Agro App empowers users to effortlessly navigate through a myriad of
            scheme information, tailored to their specific eligibility criteria.
          </p>
          <p>
            With Agro App, users can easily identify and apply for the schemes
            that best suit their agricultural needs. Furthermore, our platform
            provides step-by-step guidance on the application process.
          </p>
          <a href="/about" class="view-more">View More →</a>
        </div>
        <div class="image-container">
          <img
            src="assets/image/digital-farmer.png"
            alt="Video about myScheme"
          />
        </div>
      </div>
    </section>

    <section id="team-section">
      <div class="title-text">
        <h1>Meet the Team</h1>
        <p class="subheading">Learn about their roles and contributions.</p>
      </div>
      <div class="team-row">
        <div class="column">
          <div class="team-member">
            <img
              src="assets/image/saurav.jpeg"
              alt="Saurav Chaturvedi"
              style="width: 100%"
            />
            <div class="team-container">
              <h2>Saurav Chaturvedi</h2>
              <p class="title">Design & Front End</p>
              <p>Course - BCA</p>
              <p>inquery.saurav@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="team-member">
            <img
              src="assets/image/sachin.png"
              alt="Sachin Sharma"
              style="width: 100%"
            />
            <div class="team-container">
              <h2>Sachin Sharma</h2>
              <p class="title">Backend</p>
              <p>Course - BCA</p>
              <p>testingmoat@gmail.com</p>
            </div>
          </div>
        </div>

        <div class="column">
          <div class="team-member">
            <img
              src="assets/image/abhishek.jpeg"
              alt="Abhishek"
              style="width: 100%"
            />
            <div class="team-container">
              <h2>Abhishek Kumar</h2>
              <p class="title">Backend</p>
              <p>Course - BCA</p>
              <p>08114akv@gmail.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact-section">
      <div class="title-text">
        <h1>Get in Touch</h1>
        <p class="subheading">Fill up the form to get in touch with us.</p>
      </div>
      <div class="contact-container">
        <!-- Contact form section -->
        <div class="contact-box">
          <!-- Left side of the form -->
          <div class="container-left">
            <h3>Fill the Form*</h3>
            <!-- Form -->
            <form id="contactForm" onsubmit="return validateForm()">
              <div class="input-row">
                <div class="input-group">
                  <label>Name*</label>
                  <input
                    type="text"
                    id="name"
                    placeholder="Enter your Name"
                    required
                  />
                </div>

                <div class="input-group">
                  <label>Phone*</label>
                  <input
                    type="text"
                    id="phone"
                    placeholder="+91 1234567890"
                    required
                  />
                </div>
              </div>

              <!-- Input row for Email and Subject -->
              <div class="input-row">
                <div class="input-group">
                  <label>Email*</label>
                  <input
                    type="email"
                    id="email"
                    placeholder="youremail@gmail.com"
                    required
                  />
                </div>

                <div class="input-group">
                  <label>Subject</label>
                  <input type="text" id="subject" placeholder="Inquiry" />
                </div>
              </div>

              <!-- Label for Message textarea -->
              <label>Message*</label>
              <textarea
                rows="10"
                id="message"
                placeholder="Enter your Message"
                required
              ></textarea>
              <button type="submit" class="submit-btn">Send Message ➜</button>
            </form>
          </div>
          <!-- Right side with contact information -->
          <div class="container-right">
            <h3>Reach Us</h3>
            <!-- Table for contact information -->
            <table>
              <tr>
                <td>Email:</td>
                <td>contact@msijanakpuri.com</td>
              </tr>

              <tr>
                <td>Phone:</td>
                <td>+91 011-45656183</td>
              </tr>

              <tr>
                <td>Address:</td>
                <td>
                  Maharaja Surajmail Institute <br />
                  C-4, Janakpuri, <br />
                  Delhi - 110058, India
                </td>
              </tr>
            </table>

            <!-- Map section -->
            <div class="map">
              <!-- Google Map iframe -->
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2888210618585!2d77.09131724016883!3d28.621104670527558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d04afb8dbcfe1%3A0xaff19e718be2136b!2sMaharaja%20Surajmal%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1711214006526!5m2!1sen!2sin"
                width="800"
                height="275"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="footer-section">
        <footer class="footer">
            <div class="footer-left">
                <img src="assets/image/logo_black.png" alt="Company Logo">
            </div>
            <div class="footer-right">
                <ul class="social-links">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                </ul>
            </div>
        </footer>
    </section>
    <script src="assets/js/script.js"></script>
  </body>
</html>
