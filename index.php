<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHAPEL OF NCMH - Join Us!</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

</head>
<body>

  <!-- Include Navigation -->
  <div id="nav-placeholder"></div>
  <script>
    fetch('navigation.php')
      .then(response => response.text())
      .then(data => {
        document.getElementById('nav-placeholder').innerHTML = data;
        // Load and execute navigation.js after HTML is inserted
        const script = document.createElement('script');
        script.src = 'navigation.js';
        document.body.appendChild(script);
      });
  </script>
  
  <!-- Header Section -->
  <header>
    <div class="logo-container">
      <img src="images/ncmh_logo.png" alt="Chapel of NCMH Logo" class="logo">
    </div>
    <h1>Welcome to Chapel of NCMH</h1>
    <h2>Our Lady of Miraculous Medal</h2>
    <p>Join us in worship, community, and growth!</p>
  </header>

  <!-- Hero Section (Main Banner) -->
  <section class="hero-section">
    <div class="hero-content">
      <h2>Discover Faith and Fellowship</h2>
      <p class="hero-text">Be part of a growing and welcoming community. Join us for our upcoming events and services.</p>
      <div class="hero-buttons">
        <a href="join.php" class="cta-btn">Join Our Church</a>
        <a href="services.php" class="cta-btn secondary">View Services</a>
      </div>
    </div>
    <div class="scroll-down">
      <i class="fas fa-chevron-down"></i>
    </div>
  </section>

  <!-- About Us Section -->
  <section class="about-section">
    <div class="about-content">
      <h2>About Our Church</h2>
      <p>NCMH Church has been serving the community since 1995. We are dedicated to spreading faith, hope, and love through our various ministries and outreach programs.</p>
      <div class="about-features">
        <div class="feature">
          <h3>Our Mission</h3>
          <p>To bring people closer to God through worship, service, and community.</p>
        </div>
        <div class="feature">
          <h3>Our Vision</h3>
          <p>A thriving spiritual community that transforms lives through Christ's love.</p>
        </div>
        <div class="feature">
          <h3>Our Values</h3>
          <p>Faith, Compassion, Integrity, Service, and Community.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Main Content Section -->
  <section class="content-section">
    <h3>Upcoming Events</h3>
    <p>We have something for everyone! Whether you are new or a long-time member, there are plenty of events to participate in!</p>
    <div class="button-container">
      <a href="#">View Calendar</a>
      <a href="#">Join Small Groups</a>
    </div>
  </section>

  <section class="content-section">
    <h3>Join Our Online Services</h3>
    <p>Can't attend in person? Don't worry, we have live-streamed services available. Stay connected wherever you are!</p>
    <div class="button-container">
      <a href="#">Watch Live</a>
      <a href="#">Archived Services</a>
    </div>
  </section>
  
 <style>
	body
     .hero-section {
      background: linear-gradient(rgba(139, 69, 19, 0.7), rgba(139, 69, 19, 0.7)), 
                  url('images/Churchpic.jpg') center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 8rem 2rem;
      position: relative;
    }

    .hero-section h2 {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
      margin-bottom: 1.5rem;
    }

    .hero-section p {
      font-size: 1.3rem;
      max-width: 800px;
      margin: 0 auto 2rem;
    }
 </style>


<!-- Include Footer -->
<div id="footer-placeholder"></div>
<script>
  fetch('footer.php')
    .then(response => response.text())
    .then(data => {
      document.getElementById('footer-placeholder').innerHTML = data;
    });
</script>

</body>
</html>
