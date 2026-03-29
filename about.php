<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About GrowMint</title>

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
/* GENERAL STYLES */
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}

body {
    background: linear-gradient(135deg, #f5f7fa, #e4efe9);
    color: #111;
}

section {
    max-width: 1200px;
    margin: auto;
}

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

/* ABOUT SECTION */
.about {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 80px 20px;
    gap: 60px;
    flex-wrap: wrap;
}

.about-text {
    flex: 1;
    min-width: 300px;
}

.about-text h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.about-text p {
    font-size: 16px;
    color: #555;
    margin-bottom: 15px;
}

.about-image {
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
    min-width: 300px;
}

.about-image img {
    width: 100%;
    max-width: 400px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    object-fit: cover;
}

/* STATS */
.stats {
    display: flex;
    justify-content: space-around;
    padding: 60px 20px;
    flex-wrap: wrap;
}

.stat h3 {
    font-size: 36px;
    color: #111;
    margin-bottom: 10px;
}

.stat p {
    color: #555;
}

/* TEAM */
.team {
    padding: 60px 20px;
}

.team h2 {
    font-size: 36px;
    margin-bottom: 30px;
}

.team-grid {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.member {
    flex: 1 1 250px;
    text-align: center;
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    padding: 20px;
    border-radius: 20px;
    transition: 0.3s;
}

.member:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

.member img {
    width: 100%;
    max-width: 200px;
    border-radius: 50%;
    margin-bottom: 15px;
}

/* WHY CHOOSE US */
.why {
    padding: 60px 20px;
}

.why h2 {
    font-size: 36px;
    margin-bottom: 30px;
}

.why-grid {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
}

.why-card {
    flex: 1 1 250px;
    background: rgba(255, 255, 255, 0.7);
    backdrop-filter: blur(10px);
    padding: 20px;
    border-radius: 20px;
    transition: 0.3s;
}

.why-card:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 15px 40px rgba(0,0,0,0.2);
}

/* CTA */
.cta {
    text-align: center;
    padding: 60px 20px;
}

.cta .new {
    background: linear-gradient(135deg, #baf351, #8ce000);
    color: black;
    padding: 12px 28px;
    border-radius: 30px;
    font-weight: 600;
    border: none;
    transition: 0.3s ease;
    cursor: pointer;
}

.cta .new:hover {
    transform: translateY(-4px) scale(1.02);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}

/* FADE-IN */
.fade-in {
    opacity: 0;
    transform: translateY(40px);
    transition: all 0.8s ease;
}

.fade-in.show {
    opacity: 1;
    transform: translateY(0);
}

/* FOOTER */
footer {
    text-align: center;
    padding: 30px 20px;
    background: #1a1a1a;
    color: #fff;
    margin-top: 60px;
    border-radius: 10px;
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

body.dark-mode h1, body.dark-mode h2, body.dark-mode h3, body.dark-mode p {
    color: #e0e0e0;
}

body.dark-mode .about, body.dark-mode .stats, body.dark-mode .team-grid .member, body.dark-mode .why-card, body.dark-mode .cta {
    background: #1f1f1f;
    color: #e0e0e0;
}

body.dark-mode img {
    filter: brightness(0.9);
}
</style>

</head>

<body>

<!-- NAVBAR -->
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

<!-- ABOUT SECTION -->
<section class="about fade-in">
    <div class="about-text">
        <h1>About GrowMint</h1>
        <p>GrowMint is a forward-thinking digital marketing agency helping businesses thrive online. We focus on performance-driven strategies including SEO, social media marketing, and paid ad campaigns.</p>
        <p>Our team combines creativity, analytics, and technology to turn online traffic into measurable business growth.</p>
    </div>

    <div class="about-image">
        <img src="logo.png" alt="About GrowMint">
    </div>
</section>

<!-- STATS -->
<section class="stats fade-in">
    <div class="stat">
        <h3>500+</h3>
        <p>Clients Served</p>
    </div>
    <div class="stat">
        <h3>1200+</h3>
        <p>Projects Completed</p>
    </div>
    <div class="stat">
        <h3>98%</h3>
        <p>Client Satisfaction</p>
    </div>
</section>

<!-- TEAM -->
<section class="team fade-in">
    <h2>Our Team</h2>
    <div class="team-grid">
        <div class="member">
            <img src="team1.jpg" alt="Team Member">
            <h3>Jane Doe</h3>
            <p>CEO & Founder</p>
        </div>
        <div class="member">
            <img src="team2.jpg" alt="Team Member">
            <h3>John Smith</h3>
            <p>Head of Marketing</p>
        </div>
        <div class="member">
            <img src="team3.jpg" alt="Team Member">
            <h3>Mary Johnson</h3>
            <p>SEO Specialist</p>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="why fade-in">
    <h2>Why Choose GrowMint?</h2>
    <div class="why-grid">
        <div class="why-card">
            <h3>Expert Team</h3>
            <p>Our experienced professionals use cutting-edge tools and techniques.</p>
        </div>
        <div class="why-card">
            <h3>Proven Results</h3>
            <p>We focus on measurable outcomes to grow your business efficiently.</p>
        </div>
        <div class="why-card">
            <h3>Custom Strategies</h3>
            <p>Each business is unique, so we tailor solutions for maximum impact.</p>
        </div>
        <div class="why-card">
            <h3>Transparent Reporting</h3>
            <p>Clear analytics and reporting help you track progress every step of the way.</p>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta fade-in">
    <h2>Ready to Grow Your Business?</h2>
    <button class="btn new">Get Started</button>
</section>

<footer>
    <p>&copy; 2026 GrowMint. All rights reserved.</p>
</footer>

<script>
// Fade-in Observer
const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add("show");
        }
    });
});
document.querySelectorAll(".fade-in").forEach(el => observer.observe(el));

// Dark/Light mode toggle
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