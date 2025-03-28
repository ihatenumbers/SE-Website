<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - NCMH Church</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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

  <header>
    <div class="logo-container">
      <img src="images/ncmh_logo.png" alt="NCMH Church Logo" class="logo">
    </div>
    <h1>Get In Touch</h1>
    <h2>We'd Love to Hear From You</h2>
  </header>

  <section class="content-section">
    <div class="contact-info">
      <h3>Contact Information</h3>
      <div class="info-card">
        <p><i class="fas fa-map-marker-alt"></i>9 De Febrero st. Baranggay Mauway National Center for Mental Health, Mandaluyong, Philippines</p>
      </div>
      <div class="info-card">
        <p><i class="fas fa-phone"></i>+63 2 8531 9001</p>
      </div>
      <div class="info-card">
        <p><i class="fas fa-envelope"></i>olmmcncmh@gmail.com</p>
      </div>
      <!-- More contact info -->
    </div>
  </section>

  <!-- <section class="content-section">
    <h3>Send Us a Message</h3>
    <form class="contact-form">
      <!-- Form fields -->
    </form>
  </section> -->

  <!-- Team Section -->
  <section class="team-section">
    <h3 class="text-2.5xl font-bold text-center text-gray-800 mb-6">Meet Our Team</h3>
    <p class="text-center text-lg text-gray-600 mb-12">
      We're a passionate group dedicated to serving our church community. Get to know the people who make this ministry possible!
    </p>
    <div class="team-members">
      <!-- Team Member 1 -->
      <div class="team-member">
        <div class="team-card">
          <img src="images/Barbosa.jpg" alt="Larry Barbosa" class="team-img">
          <div class="team-info">
            <h4 class="team-name">Larry Barbosa</h4>
            <p class="team-role">Lead Developer</p>
            <p class="team-description">Larry was the mastermind behind the website's structure and functionality, ensuring smooth user experience.</p>
          </div>
        </div>
      </div>

      <!-- Team Member 2 -->
      <div class="team-member">
        <div class="team-card">
          <img src="images/Gallano.jpg" alt="Miguel Carlo Gallano" class="team-img">
          <div class="team-info">
            <h4 class="team-name">Miguel Carlo Gallano</h4>
            <p class="team-role">Designer</p>
            <p class="team-description">Gallano worked on the website's design, making it visually appealing and user-friendly with an eye for detail.</p>
          </div>
        </div>
      </div>

      <!-- Team Member 3 -->
      <div class="team-member">
        <div class="team-card">
          <img src="images/Jofer1.jpeg" alt="Jofer Francisco" class="team-img">
          <div class="team-info">
            <h4 class="team-name">Jofer Francisco</h4>
            <p class="team-role">Content Creator</p>
            <p class="team-description">Jofer contributed to creating engaging content that communicates our message clearly and effectively.</p>
          </div>
        </div>
      </div>

      <!-- Team Member 4 -->
      <div class="team-member">
        <div class="team-card">
          <img src="images/Guia.jpg" alt="John Vincent Guia" class="team-img">
          <div class="team-info">
            <h4 class="team-name">John Vincent Guia</h4>
            <p class="team-role">UI/UX Specialist</p>
            <p class="team-description">Guia designed intuitive user interfaces and optimized the user experience for smoother navigation.</p>
          </div>
        </div>
      </div>

      <!-- Team Member 5 -->
      <div class="team-member">
        <div class="team-card">
          <img src="images/Mayoya.jpg" alt="Joshua Mayoa" class="team-img">
          <div class="team-info">
            <h4 class="team-name">Joshua Mayoa</h4>
            <p class="team-role">Project Manager</p>
            <p class="team-description">Joshua managed the project, coordinated the team, and ensured everything ran smoothly from start to finish.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

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
