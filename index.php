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
<title>DigiMarketing</title>

<link rel="stylesheet" href="index_style.css">

<!-- FONT -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<nav class="nav">
    <div class="left">
         <img src="logo.png" alt="Logo">
         <span class="company-name">
        <span class="grow">GROW</span><span class="mint">MINT</span>
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

<!-- HERO -->
<section class="hero fade-in">

    <div class="hero-left">
        <h1>Stay ahead of the<br>curve with our<br>forward-thinking</h1>

        <div class="intro">
            <h4>
                We are a performance-focused digital marketing agency offering SEO,
                social media, and paid ads strategies designed to turn online traffic
                into real business
            </h4>
        </div>

        <button class="btn new" onclick="location.href='companies.php'">Get Started</button>
    </div>

    <div class="hero-right">
        <img src="image4.jpg" alt="marketing">
    </div>

</section>

<!-- BODY -->
<section class="body fade-in">

    <div class="body-left">
        <h1>Strategic SEO:<br>Drive organic growth</h1>
    </div>

    <div class="body-right">
        <p>
            Stand out in search engines and attract more visitors with our
            comprehensive SEO services.
        </p>
    </div>

</section>

<!-- FEATURES -->
<section class="features fade-in">

    <div class="box">
        <h3>KEYWORD<br>RESEARCH & STRATEGY</h3>
        <p>Identifying the most valuable keywords for your business.</p>
    </div>

    <div class="box">
        <h3>ON-PAGE<br>OPTIMIZATION</h3>
        <p>Improving your site’s content and structure for maximum visibility.</p>
    </div>

    <div class="box">
        <h3>TECHNICAL<br>SEO AUDITS</h3>
        <p>Ensuring your site is technically sound to perform well in search engines.</p>
    </div>

    <div class="box">
        <h3>OFF-PAGE SEO<br>OPTIMIZATION</h3>
        <p>Enhancing your site’s relevance through link building and brand mentions.</p>
    </div>

</section>

<!-- FAQ -->
<section class="faqs fade-in">

    <div class="faq-data">

        <div class="faq-left">
            <h1>FAQs</h1>
            <p>Common questions answered.</p>

            <!-- ✅ ADDED IMAGE HERE -->
            <img src="image5.jpg" alt="Marketing visual" class="faq-image">
        </div>

        <div class="faq-right">

            <div class="questions">
                <div class="question-header">
                    <h3>What is digital marketing?</h3>
                    <span class="arrow">▼</span>
                </div>
                <p class="answer">Digital marketing uses online channels like search engines, social media, email, and websites to promote products or services and connect with target audiences.</p>
            </div>

            <div class="questions">
                <div class="question-header">
                    <h3>How do you measure success in digital marketing campaigns?</h3>
                    <span class="arrow">▼</span>
                </div>
                <p class="answer">We track key metrics such as website traffic, conversion rates, engagement levels, and ROI to ensure campaigns deliver measurable results.</p>
            </div>

            <div class="questions">
                <div class="question-header">
                    <h3>Why is digital marketing important for my business?</h3>
                    <span class="arrow">▼</span>
                </div>
                <p class="answer">It helps increase visibility, attract qualified leads, and build stronger customer relationships, all while being cost-effective compared to traditional marketing.</p>
            </div>

            <div class="questions">
                <div class="question-header">
                    <h3>Can digital marketing work for small businesses?</h3>
                    <span class="arrow">▼</span>
                </div>
                <p class="answer">Absolutely. Digital marketing levels the playing field, allowing small businesses to reach and engage their ideal customers effectively.</p>
            </div>

            <div class="questions">
                <div class="question-header">
                    <h3> How quickly can I see results from digital marketing?</h3>
                    <span class="arrow">▼</span>
                </div>
                <p class="answer">Some strategies like paid ads show immediate impact, while SEO and content marketing typically take a few months to build sustainable growth.</p>
            </div>

        </div>

    </div>

</section>

<script src="script.js"></script>

</body>
</html>