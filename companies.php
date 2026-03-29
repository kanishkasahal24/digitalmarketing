<?php
// Start session and protect page
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: login.html"); // redirect if not logged in
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Client Onboarding Form</title>
<link rel="stylesheet" href="company2.css">
<script src="company.js" defer></script>

<style>
/* NAVBAR from about.php/services.php */
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
</style>
</head>

<body>

<!-- UPDATED NAVBAR -->
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
            <li><a href="#">CONTACT</a></li>
        </ul>
    </div>

    <div class="auth-buttons">
        <a href="login.html"><button class="btn">LOGIN</button></a>
        <a href="signup.html"><button class="btn">SIGN UP</button></a>
        <button id="theme-toggle" class="btn">🌙</button>
    </div>
</nav>

<div class="container">

<h2 style="text-align:center;">Digital Marketing Client Form</h2>

<form id="mainForm" action="process_company.php" method="POST">

<!-- PERSONAL -->
<div class="form-section">
<div class="section-title"> Personal Details</div>

<div class="field">
<input type="text" id="name" name="name" placeholder="Full Name">
<div class="error" id="nameError"></div>
</div>

<div class="field">
<input type="email" id="email" name="email" placeholder="Email">
<div class="error" id="emailError"></div>
</div>

<div class="field">
<input type="text" id="phone" name="phone" placeholder="Phone Number">
<div class="error" id="phoneError"></div>
</div>
</div>

<!-- COMPANY -->
<div class="form-section">
<div class="section-title"> Company Details</div>

<div class="field">
<input type="text" id="company" name="company" placeholder="Company Name">
<div class="error" id="companyError"></div>
</div>

<div class="field">
<input type="text" name="website" placeholder="Website">
</div>

<div class="field">
<select id="industry" name="industry">
<option value="">Select Industry</option>
<option>E-commerce</option>
<option>Education</option>
<option>Real Estate</option>
<option>Healthcare</option>
<option>Other</option>
</select>
<div class="error" id="industryError"></div>
</div>
</div>

<!-- MARKETING -->
<div class="form-section">
<div class="section-title"> Marketing Requirements</div>

<div class="field">
<select id="service" name="service">
<option value="">Select Service</option>
<option>SEO</option>
<option>Social Media Marketing</option>
<option>Google Ads</option>
<option>Full Package</option>
</select>
<div class="error" id="serviceError"></div>
</div>

<div class="field">
<input type="text" id="budget" name="budget" placeholder="Monthly Budget (₹)">
<div class="error" id="budgetError"></div>
</div>

<div class="field full">
<textarea id="goals" name="goals" placeholder="Describe your goals"></textarea>
<div class="error" id="goalsError"></div>
</div>
</div>

<!-- BUSINESS INFO -->
<div class="form-section">
<div class="section-title"> Business Information</div>

<div class="field">
<input type="text" id="location" name="location" placeholder="Business Location">
<div class="error" id="locationError"></div>
</div>

<div class="field">
<input type="text" id="years" name="years" placeholder="Years in Business">
<div class="error" id="yearsError"></div>
</div>

<div class="field">
<input type="text" id="teamSize" name="teamSize" placeholder="Team Size">
<div class="error" id="teamError"></div>
</div>
</div>

<!-- TARGET AUDIENCE -->
<div class="form-section">
<div class="section-title"> Target Audience</div>

<div class="field full">
<textarea id="audience" name="audience" placeholder="Who is your target audience?"></textarea>
<div class="error" id="audienceError"></div>
</div>
</div>

<!-- MARKETING TYPE -->
<div class="form-section">
<div class="section-title"> Marketing Type</div>

<div class="field">
<select id="marketing" name="marketing">
<option value="">Select Marketing Type</option>
<option>Online</option>
<option>Offline</option>
</select>
<div class="error" id="marketingError"></div>
</div>
</div>

<!-- TIMELINE -->
<div class="form-section">
<div class="section-title"> Project Timeline</div>

<div class="field">
<select id="timeline" name="timeline">
<option value="">Select timeline</option>
<option>Immediately</option>
<option>1 Month</option>
<option>3 Months</option>
<option>Flexible</option>
</select>
<div class="error" id="timelineError"></div>
</div>
</div>

<!-- REQUIREMENTS -->
<div class="form-section">
<div class="section-title"> Client Requirements</div>

<div class="field full">
<textarea name="requirements" placeholder="Describe exactly what you need"></textarea>
</div>
</div>

<!-- BUTTONS -->
<div class="form-section">
<div class="btn-group">
<button type="submit">Submit</button>
<button type="button" id="clearBtn" onclick="document.getElementById('mainForm').reset()">Clear</button>
</div>
</div>

</form>

<script>
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