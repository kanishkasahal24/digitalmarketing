<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
    exit();
}

$email = $_SESSION['email'];

/* GET CLIENT DATA */
$stmt = $conn->prepare("SELECT name,email,company,industry,service,budget,location FROM clients WHERE email=?");
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

/* If company form not filled yet */
if(!$user){
    $user = [
        "name" => $_SESSION['name'],
        "email" => $_SESSION['email'],
        "company" => "Not added yet",
        "industry" => "Not added yet",
        "service" => "Not added yet",
        "budget" => "Not added yet",
        "location" => "Not added yet"
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>My Profile</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins',sans-serif;
}

body{
background:#f5f7f6;
transition:0.3s;
}

/* NAVBAR */

.nav{
height:70px;
display:flex;
justify-content:space-between;
align-items:center;
padding:18px 40px;
margin:20px auto;
max-width:1200px;
background:rgba(3,0,0,0.938);
border-radius:15px;
border:1px solid rgba(186,243,81,0.4);
}

.left img{
height:55px;
}

.company-name{
font-size:22px;
font-weight:600;
position:relative;
top:-15px;
}

.grow{
color:white;
}

.mint{
color:#baf351;
}

.right ul{
display:flex;
gap:30px;
list-style:none;
}

.right ul li a{
text-decoration:none;
color:#ddd;
}

.right ul li a:hover{
color:#baf351;
}

.btn{
padding:6px 14px;
border-radius:25px;
border:1px solid #baf351;
background:transparent;
color:white;
cursor:pointer;
transition:0.3s;
}

.btn:hover{
background:#baf351;
color:black;
}

.auth-buttons{
display:flex;
gap:10px;
align-items:center;
}

/* PROFILE SECTION */

.profile-section{
padding:120px 10%;
}

.profile-card{
max-width:600px;
margin:auto;
padding:40px;
border-radius:12px;
background:white;
box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

.profile-card h2{
margin-bottom:30px;
text-align:center;
}

.profile-row{
margin:15px 0;
font-size:17px;
display:flex;
justify-content:space-between;
border-bottom:1px solid #eee;
padding-bottom:8px;
}

.profile-label{
font-weight:600;
color:#333;
}

/* DARK MODE */

body.dark-mode{
background:#121212;
color:white;
}

body.dark-mode .profile-card{
background:#1f1f1f;
color:white;
}

body.dark-mode .profile-label{
color:#ddd;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="nav">

<div class="left">
<img src="logo.png">
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

<?php if(isset($_SESSION['name'])): ?>
<a href="profile.php" style="color:white;text-decoration:none;">
Hello <?php echo htmlspecialchars($_SESSION['name']); ?> 👋
</a>
<?php endif; ?>

<a href="logout.php">
<button class="btn">LOGOUT</button>
</a>

<button id="theme-toggle" class="btn">🌙</button>

</div>

</nav>

<!-- PROFILE -->

<section class="profile-section">

<div class="profile-card">

<h2>My Profile</h2>

<div class="profile-row">
<span class="profile-label">Name</span>
<span><?php echo htmlspecialchars($user['name']); ?></span>
</div>

<div class="profile-row">
<span class="profile-label">Email</span>
<span><?php echo htmlspecialchars($user['email']); ?></span>
</div>

<div class="profile-row">
<span class="profile-label">Company</span>
<span><?php echo htmlspecialchars($user['company']); ?></span>
</div>

<div class="profile-row">
<span class="profile-label">Industry</span>
<span><?php echo htmlspecialchars($user['industry']); ?></span>
</div>

<div class="profile-row">
<span class="profile-label">Service</span>
<span><?php echo htmlspecialchars($user['service']); ?></span>
</div>

<div class="profile-row">
<span class="profile-label">Budget</span>
<span><?php echo htmlspecialchars($user['budget']); ?></span>
</div>

<div class="profile-row">
<span class="profile-label">Location</span>
<span><?php echo htmlspecialchars($user['location']); ?></span>
</div>

<div class="profile-row">
<span class="profile-label">User ID</span>
<span><?php echo htmlspecialchars($_SESSION['user_id']); ?></span>
</div>

<br>

<a href="companies.php">
<button class="btn" style="color:black;background:#baf351;">Edit Company Details</button>
</a>

</div>

</section>

<script>

/* DARK MODE TOGGLE */

const toggleBtn = document.getElementById("theme-toggle");

toggleBtn.addEventListener("click",function(){
document.body.classList.toggle("dark-mode");

if(document.body.classList.contains("dark-mode")){
toggleBtn.textContent="☀️";
localStorage.setItem("theme","dark");
}else{
toggleBtn.textContent="🌙";
localStorage.setItem("theme","light");
}
});

if(localStorage.getItem("theme")==="dark"){
document.body.classList.add("dark-mode");
toggleBtn.textContent="☀️";
}

</script>

</body>
</html>