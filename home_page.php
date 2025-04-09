<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>E-Waste Management System</title>
  <link rel="stylesheet" href="home_page.css">
</head>
<body>
  <header>
    <nav>
      <ul>
	  <li><a href="registeration.php">Register</a></li>
	  <li><a href="login.php">Login</a></li>
        <li><a href="home_page.php">Home</a></li>
        <li><a href="login.php">Services</a></li>
        <li><a href="home_page.php">About Us</a></li>
        <li><a href="#">Contact US</a></li>
      </ul>
    </nav>
    <h1>E-Waste Management System</h1>
  </header>
  <section id="hero-section">
    <h2>Dispose of Your E-Waste Responsibly</h2>
    <p>We offer safe and convenient e-waste disposal services to protect the environment and your personal data.</p>
   <a href="https://en.wikipedia.org/wiki/Electronic_waste"button>Learn More</button></a>
  </section>
  <section id="services-section">
    <h2>Our Services</h2>
    <ul>
      <li>
        <img src="https://www.kabadixpress.com/uploaded_files/thumb_cache/thumb_153_153_iron.jpg" alt="Service 1">
        <h3>E-Waste Pickup</h3>
        <p>We pick up your e-waste for free at your convenience.</p>
      </li>
      <li>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwxuYiuiUY4brwAGHxEEqFdTWD3R3l0Et3o1HZakxBiQ&s" alt="Service 2">
        <h3>Data Destruction</h3>
        <p>We securely erase your personal data to protect your privacy.</p>
      </li>
      <li>
        <img src="https://www.kabadixpress.com/assets/designer/themes/default/images/hw_wrks_img2.jpg" alt="Service 3">
        <h3>Recycling</h3>
        <p>We recycle your e-waste to minimize its impact on the environment.</p>
      </li>
    </ul>
  </section>
  <section id="about-section">
    <h2>About Us</h2>
    <p>We are a team of experts in e-waste management with a mission to make the world a cleaner and safer place.</p>
    <button>Meet Our Team</button>
  </section>
  <div class="container">
  <section id="contact-section">
    <h2>Contact Us</h2>
    <form method="post" action="contact_form.php">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      <label for="message">Message:</label>
      <textarea id="message" name="message" required></textarea>
      <button type="submit">Send</button>
	  </div>
    </form>
  </section>
  <footer>
    <p>&copy; 2023 E-Waste Management System</p>
  </footer>
</body>
</html>
