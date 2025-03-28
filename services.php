<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services - NCMH Church</title>
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
    <h1>Worship Services</h1>
    <h2>Experience God's Presence</h2>
  </header>

  <section class="content-section">
    <div class="service-schedule">
      <h3>Weekly Services</h3>
      <div class="service-card">
        <h4>Sunday Worship</h4>
        <p>9:00 AM - 11:00 AM</p>
      </div>
      <!-- More service cards -->
    </div>
  </section>

  <section class="content-section">
    <h3>Live Stream</h3>
    <div class="stream-container">
      <!-- Streaming embed -->
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
