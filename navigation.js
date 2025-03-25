// Mobile menu toggle
function initNavigation() {
  const hamburger = document.querySelector('.hamburger');
  const navLinks = document.querySelector('.nav-links');
  
  if (hamburger && navLinks) {
    hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('active');
      navLinks.classList.toggle('active');
    });
    
    // Close menu when clicking a link
    document.querySelectorAll('.nav-links a').forEach(link => {
      link.addEventListener('click', () => {
        hamburger.classList.remove('active');
        navLinks.classList.remove('active');
      });
    });
  }
  
  // Set active link
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  document.querySelectorAll('.nav-links a').forEach(link => {
    if (link.getAttribute('href') === currentPage) {
      link.classList.add('active');
    }
  });
}

// Login modal functionality
function initLoginModal() {
  const modal = document.getElementById('loginModal');
  const btn = document.getElementById('loginBtn');
  const span = document.querySelector('.close');
  
  if (btn && modal && span) {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      modal.style.display = 'block';
    });

    span.addEventListener('click', () => {
      modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
      if (e.target === modal) {
        modal.style.display = 'none';
      }
    });

    // Handle login form submission
    const loginForm = document.getElementById('loginForm');
    if (loginForm) {
      loginForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        const formData = new FormData(loginForm);
        try {
          const response = await fetch('login.php', {
            method: 'POST',
            body: formData,
            headers: {
              'Accept': 'application/json'
            }
          });
          
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          
          const result = await response.json();
          
          if (result.success) {
            handleSuccessfulLogin(result);
          } else {
            const errorDiv = document.getElementById('loginError');
            errorDiv.textContent = result.message || 'Login failed';
            errorDiv.style.display = 'block';
          }
        } catch (error) {
          const errorDiv = document.getElementById('loginError');
          errorDiv.textContent = 'An error occurred during login. Please try again.';
          errorDiv.style.display = 'block';
          console.error('Login error:', error);
        }
      });
    }
  }
}

// Initialize navigation immediately
initNavigation();

// Only initialize login modal if not logged in
if (!document.getElementById('logoutBtn')) {
  initLoginModal();
}

// Handle successful login
function handleSuccessfulLogin(result) {
  // Update the navigation immediately
  const loginBtn = document.getElementById('loginBtn');
  if (loginBtn) {
    loginBtn.innerHTML = '<i class="fas fa-sign-out-alt"></i> <span>Logout</span>';
    loginBtn.id = 'logoutBtn';
    loginBtn.href = 'logout.php';
    
    // Remove click handler since it's now a direct link
    loginBtn.removeEventListener('click', initLoginModal);
  }
  
  // Close the modal
  const modal = document.getElementById('loginModal');
  if (modal) {
    modal.style.display = 'none';
  }
  
  // Redirect if specified in the result
  if (result && result.redirect) {
    window.location.href = result.redirect;
  }
}
