<?php session_start(); ?>
<nav class="navbar">
  <div class="nav-container">
    <div class="logo-mobile">
      <img src="images/ncmh_logo.png" alt="NCMH Church Logo">
    </div>
    <div class="nav-links">
      <a href="index.php"><i class="fas fa-home"></i> <span>Home</span></a>
      <a href="about.php"><i class="fas fa-cross"></i> <span>About</span></a>
      <a href="events.php"><i class="fas fa-calendar-alt"></i> <span>Events</span></a>
      <a href="services.php"><i class="fas fa-pray"></i> <span>Services</span></a>
      <a href="join.php"><i class="fas fa-hands-praying"></i> <span>Join Us</span></a>
      <a href="contact.php"><i class="fas fa-envelope"></i> <span>Contact</span></a>
      <?php if(isset($_SESSION['logged_in'])): ?>
        <a href="logout.php" id="logoutBtn"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a>
      <?php else: ?>
        <a href="#" id="loginBtn"><i class="fas fa-sign-in-alt"></i> <span>Login</span></a>
      <?php endif; ?>
    </div>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
      <div class="modal-content" style="background: linear-gradient(135deg, rgba(107, 79, 61, 0.95) 0%, rgba(139, 69, 19, 0.95) 100%); color: white;">
        <span class="close" style="color: white;">&times;</span>
        <h2 style="color: var(--secondary); text-align: center; font-family: 'Playfair Display', serif;">Welcome Back</h2>
        <form id="loginForm" method="POST">
          <div class="form-group">
            <label for="login_user_id" style="color: white;">User ID</label>
            <input type="text" id="login_user_id" name="user_id" required style="background: rgba(255,255,255,0.1); border: 1px solid var(--secondary); color: white;">
          </div>
          <div class="form-group">
            <label for="login_password" style="color: white;">Password</label>
            <input type="password" id="login_password" name="password" required style="background: rgba(255,255,255,0.1); border: 1px solid var(--secondary); color: white;">
          </div>
          <button type="submit" class="save-btn" style="background-color: var(--secondary); color: #333; font-weight: bold; padding: 12px; margin-top: 20px;">Login</button>
        </form>
        <div id="loginError" class="error-message" style="display: none;"></div>
      </div>
    </div>
    <div class="hamburger">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </div>
  </div>
</nav>
<script src="navigation.js"></script>
