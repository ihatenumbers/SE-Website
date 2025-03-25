<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Events - NCMH Church</title>
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
    <h1>Upcoming Events</h1>
    <h2>Join Our Community Gatherings</h2>
  </header>

  <section class="content-section">
    <div class="calendar-container">
      <h3>Monthly Calendar</h3>
      <!-- Calendar content -->
    </div>
  </section>

  <section class="content-section">
    <h3>Special Events</h3>
    <div class="event-cards">
      <div class="event-card">
        <img src="images/event1.jpg" alt="Event">
        <h4>Christmas Celebration</h4>
        <p>December 24, 7:00 PM</p>
      </div>
      <!-- More event cards -->
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
