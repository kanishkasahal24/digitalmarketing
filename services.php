<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GrowMint Services</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #f5f7f6;
      color: #111;
      transition: all 0.3s ease;
    }

    /* NAVBAR from about.php */
    .nav{
        height: 70px; 
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 18px 40px;
        margin: 20px auto;
        max-width: 1200px;
        background: rgba(3, 0, 0, 0.938);
        backdrop-filter: blur(12px);
        border-radius: 15px;
        border: 1px solid rgba(186, 243, 81, 0.4);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
    }

    .left img{
        height: 55px;
        width: auto;
        object-fit: contain;
    }

    .company-name{
        font-size: 22px;
        font-weight: 600;
        font-family: Arial, sans-serif;
        letter-spacing: 1px;
        position: relative;
        top: -15px;   
    }

    .grow{
        color: white;
    }

    .mint{
        color: #baf351;
    }

    .right ul {
        display: flex;
        gap: 30px;
        list-style: none;
    }

    .right ul li a {
        text-decoration: none;
        font-size: 16px;
        color: #ddd;
        transition: 0.3s;
    }

    .right ul li a:hover {
        color: #baf351;
    }

    .btn{
        padding: 6px 14px;
        border-radius: 25px;
        border: 1px solid #baf351;
        background: transparent;
        color: white;
        transition: 0.3s;
        cursor: pointer;
    }

    .btn:hover {
        background: #baf351;
        color: black;
    }

    /* HERO SECTION */
    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 80px 60px;
      gap: 60px;
    }

    .hero-text {
      display: flex;
      flex-direction: column;
      gap: 25px;
      align-items: flex-start;
    }

    .hero h1 {
      font-size: 48px;
    }

    .hero p {
      color: #666;
      max-width: 500px;
      line-height: 1.6;
    }

    .hero img {
      width: 420px;
      border-radius: 20px;
      transition: 0.4s ease;
    }

    .hero img:hover {
      transform: scale(1.05);
    }

    /* SERVICES SECTION */
    .services {
      padding: 60px;
    }

    .services h2 {
      text-align: center;
      margin-bottom: 40px;
      font-size: 32px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 25px;
    }

    .card {
      background: #fff;
      padding: 30px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.05);
      transition: 0.4s ease;
      opacity: 0;
      transform: translateY(40px);
    }

    .card:hover {
      transform: translateY(-8px) scale(1.04);
      box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .card h3 {
      margin-bottom: 10px;
    }

    .card p {
      color: #666;
      font-size: 14px;
    }

    /* CTA */
    .cta {
      text-align: center;
      padding: 60px;
      background: #0c0c0c;
      color: #fff;
      margin: 40px;
      border-radius: 20px;
    }

    .cta button {
      margin-top: 25px;
    }

    footer {
      text-align: center;
      padding: 20px;
      color: #777;
    }

    @media(max-width: 768px) {
      .hero {
        flex-direction: column;
        text-align: center;
      }

      .hero-text {
        align-items: center;
      }
    }

    /* DARK MODE */
    body.dark-mode {
      background: #121212;
      color: #e0e0e0;
    }

    body.dark-mode .nav {
      background: #1a1a1a;
    }

    body.dark-mode .nav a,
    body.dark-mode .btn {
      color: #e0e0e0;
    }

    body.dark-mode .btn {
      background: #333;
      box-shadow: 0 8px 20px rgba(0,0,0,0.5);
    }

    body.dark-mode .hero p,
    body.dark-mode .card p {
      color: #ccc;
    }

    body.dark-mode .card {
      background: #1f1f1f;
    }

    body.dark-mode .cta {
      background: #1a1a1a;
    }
  </style>
</head>

<body>

<!-- NAVBAR from about.php -->
<nav class="nav">
    <div class="left">
         <img src="logo.png" alt="Logo">
         <span class="company-name">
            <span class="grow">GROW</span><span class="mint">MINT</span>
         </span>
    </div>

    <div class="right">
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="services.php">SERVICES</a></li>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>

    <div class="auth-buttons">
        <a href="login.html"><button class="btn">LOGIN</button></a>
        <a href="signup.html"><button class="btn">SIGN UP</button></a>
        <button id="theme-toggle" class="btn">🌙</button>
    </div>
</nav>

<!-- HERO SECTION -->
<section class="hero">
    <div class="hero-text">
        <h1>Our Digital Marketing Services</h1>
        <p>
            We help brands grow with data-driven marketing strategies designed 
            for performance and scalability.
        </p>
        <a href="companies.php"><button class="btn">Get Started</button></a>
    </div>
    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f">
</section>

<!-- SERVICES -->
<section class="services">
    <h2>What We Offer</h2>
    <div class="grid">
      <div class="card">
        <h3>SEO Optimization</h3>
        <p>Improve rankings and drive organic traffic.</p>
      </div>

      <div class="card">
        <h3>Social Media Marketing</h3>
        <p>Engage your audience across platforms.</p>
      </div>

      <div class="card">
        <h3>Paid Advertising</h3>
        <p>Maximize ROI with ad campaigns.</p>
      </div>

      <div class="card">
        <h3>Content Marketing</h3>
        <p>Create content that converts users.</p>
      </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2>Ready to Grow Your Business?</h2>
    <a href="companies.php"><button class="btn">Contact Us</button></a>
</section>

<footer>
    © 2026 GrowMint. All rights reserved.
</footer>

<script>
    // Cards fade-in on scroll
    const cards = document.querySelectorAll('.card');
    window.addEventListener('scroll', () => {
      cards.forEach(card => {
        const top = card.getBoundingClientRect().top;
        if (top < window.innerHeight - 80) {
          card.style.opacity = "1";
          card.style.transform = "translateY(0)";
        }
      });
    });

    // Dark/light mode toggle
    const toggleBtn = document.getElementById("theme-toggle");
    toggleBtn.addEventListener("click", function() {
      document.body.classList.toggle("dark-mode");
      toggleBtn.textContent = document.body.classList.contains("dark-mode") ? "☀️" : "🌙";
      localStorage.setItem("theme", document.body.classList.contains("dark-mode") ? "dark" : "light");
    });

    if(localStorage.getItem("theme") === "dark"){
      document.body.classList.add("dark-mode");
      toggleBtn.textContent = "☀️";
    }
</script>

</body>
</html>