<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us - DigiMarketing</title>

<style>
/* BODY */
body {
    font-family: Arial, sans-serif;
    background: rgb(230, 247, 184);
    margin: 0;
    transition: background 0.3s, color 0.3s;
}

/* NAVBAR */
.nav {
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

.left {
    display: flex;
    align-items: center;
}
.left img {
    height: 55px;
    width: auto;
    object-fit: contain;
    margin-right: 10px;
}
.company-name{
    font-size: 22px;
    font-weight: 600;
}
.grow { color: white; }
.mint { color: #baf351; }

/* RIGHT NAV LINKS */
.right ul { display: flex; gap: 30px; list-style: none; margin: 0; padding: 0; }
.right ul li a { text-decoration: none; color: white; font-size: 14px; transition: 0.3s; }
.right ul li a:hover { color: rgb(186, 243, 81); }

/* AUTH BUTTONS */
.auth-buttons {
    display: flex;
    gap: 10px;
    align-items: center;
}
.auth-buttons .btn {
    padding: 8px 16px;
    border-radius: 15px;
    border: 2px solid rgb(186,243,81);
    background: black;
    color: white;
    cursor: pointer;
    font-size: 13px;
    text-decoration: none;
    display: inline-block;
    transition: 0.3s;
}
.auth-buttons .btn:hover {
    background: rgb(186,243,81);
    color: black;
}

#theme-toggle {
    padding: 6px 12px;
    font-size: 16px;
}

/* CONTAINER */
.container {
    background: white;
    padding: 30px;
    width: 85%;
    max-width: 600px;
    border-radius: 15px;
    border: 4px solid rgb(186, 243, 81);
    margin: 40px auto;
    animation: fadeUp 0.9s ease;
    display: flex;
    flex-direction: column;
    gap: 15px;
    transition: background 0.3s, border-color 0.3s;
}

/* HEADINGS & INFO */
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: black;
}

.contact-info h3 {
    margin-bottom: 5px;
    color: black;
}

.contact-info p, .contact-info a {
    margin: 0;
    color: rgb(52, 52, 52);
    text-decoration: none;
    transition: color 0.3s;
}

.contact-info a:hover {
    color: rgb(0, 128, 0);
}

/* DARK MODE STYLES */
body.dark-mode {
    background: rgb(20, 25, 10);
}

body.dark-mode .container {
    background: rgb(30, 30, 30);
    border-color: rgb(150, 200, 60);
}

body.dark-mode h2, 
body.dark-mode .contact-info h3 {
    color: rgb(186, 243, 81);
}

body.dark-mode .contact-info p, 
body.dark-mode .contact-info a {
    color: #cccccc;
}

body.dark-mode .contact-info a:hover {
    color: rgb(186, 243, 81);
}

/* ANIMATION */
@keyframes fadeUp {
    from { transform: translateY(60px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

/* RESPONSIVE */
@media(max-width:768px){
    .nav { flex-direction: column; gap: 15px; height: auto; padding: 20px; }
    .auth-buttons { justify-content: center; width: 100%; }
    .container { width: 90%; padding: 20px; }
    .right ul { flex-wrap: wrap; justify-content: center; gap: 15px; }
}
</style>
</head>
<body>

<nav class="nav">
    <div class="left">
         <img src="logo.png" alt="Logo">
         <span class="company-name"><span class="grow">GROW</span><span class="mint">MINT</span></span>
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
        <a href="login.html" class="btn">LOGIN</a>
        <a href="signup.html" class="btn">SIGN UP</a>
        <button id="theme-toggle" class="btn">🌙</button>
    </div>
</nav>

<div class="container contact-info">
    <h2>Contact Us</h2>

    <h3>📞 Phone</h3>
    <p>+91 98765 43210</p>

    <h3>✉ Email</h3>
    <p><a href="mailto:info@digimarketing.com">info@digimarketing.com</a></p>

    <h3>📍 Address</h3>
    <p>123 Marketing Street, Suite 456, Mumbai, Maharashtra</p>

    <h3>🌐 Social Media</h3>
    <p><a href="#">Facebook</a> | <a href="#">Instagram</a> | <a href="#">LinkedIn</a></p>
</div>

<script>
// Dark/Light mode toggle
const toggleBtn = document.getElementById("theme-toggle");

toggleBtn.addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");
    const isDark = document.body.classList.contains("dark-mode");
    toggleBtn.textContent = isDark ? "☀️" : "🌙";
    localStorage.setItem("theme", isDark ? "dark" : "light");
});

// Check local storage on load
if(localStorage.getItem("theme") === "dark"){
    document.body.classList.add("dark-mode");
    toggleBtn.textContent = "☀️";
}
</script>

</body>
</html>
