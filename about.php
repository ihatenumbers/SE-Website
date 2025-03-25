<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - NCMH Church</title>
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
    <h1>Our Story</h1>
    <h2>Discover Our Faith Journey</h2>
  </header>

  <section class="content-section">
    <div class="history-section">
      <h3>Our History</h3>
      <p>Founded in 1995, Chapel of Our Lady of Miraculous Medal at the National Center for Mental Health (NCMH) has been a beacon of faith in our community...</p>
      <img src="images/allofus.jpg" alt="Church History" class="history-img">
    </div>
  </section>

  <section class="content-section">
    <h3>Our Beliefs</h3>
    <div class="beliefs-container">
      <div class="belief-card">
        <i class="fas fa-bible"></i>
        <h4>Scripture</h4>
        <p>We believe in the divine inspiration of the Bible...</p>
      </div>
      <!-- More belief cards -->
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
