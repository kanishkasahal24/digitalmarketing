<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $phone = $_POST['phone'] ?? '';

    if (empty($name) || empty($email) || empty($password)) {
        die("Please fill all required fields.");
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare statement for security
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $hashed_password, $phone);

    if ($stmt->execute()) {
        // Redirect to login page
        header("Location: login.html");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>