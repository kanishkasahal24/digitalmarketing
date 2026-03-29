<?php
// process_company.php

// 1. Connect to MySQL
$servername = "localhost";
$username = "root";
$password = ""; // your DB password
$dbname = "digital_marketing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get form data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$company = $_POST['company'] ?? '';
$industry = $_POST['industry'] ?? '';
$service = $_POST['service'] ?? '';
$budget = $_POST['budget'] ?? '';
$goals = $_POST['goals'] ?? '';
$location = $_POST['location'] ?? '';
$years = $_POST['years'] ?? '';
$teamSize = $_POST['teamSize'] ?? '';
$audience = $_POST['audience'] ?? '';
$marketing = $_POST['marketing'] ?? '';
$timeline = $_POST['timeline'] ?? '';

// 3. Basic validation
if(empty($name) || empty($email) || empty($phone) || empty($company)){
    die("Please fill all required fields.");
}

// 4. Insert into DB
$sql = "INSERT INTO clients 
(name,email,phone,company,industry,service,budget,goals,location,years,teamSize,audience,marketing,timeline) 
VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssiisss", 
    $name, $email, $phone, $company, $industry, $service, $budget, $goals, $location, $years, $teamSize, $audience, $marketing, $timeline
);

if($stmt->execute()){
    // Redirect to homepage after successful submission
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>