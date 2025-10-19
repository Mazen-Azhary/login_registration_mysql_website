<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = isset($_POST['signupemail']) ? $_POST['signupemail'] : '';
$pw = isset($_POST['pw1']) ? $_POST['pw1'] : '';
$name = isset($_POST['Name']) ? $_POST['Name'] : '';
$date = date('Y-m-d H:i:s');

$pw_md5 = md5($pw);

// Check if email already exists
$checkStmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
$checkStmt->bind_param("s", $email);
$checkStmt->execute();
$checkStmt->store_result();

if ($checkStmt->num_rows > 0) {
    // Email already exists, redirect with error
    header("Location: signup.php?error=2");
    $checkStmt->close();
    $conn->close();
    exit();
}
$checkStmt->close();

// Prepare and execute insert statement
$stmt = $conn->prepare("INSERT INTO users (email, name, password, registration_date) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $email, $name, $pw_md5, $date);

if ($stmt->execute()) {
    header("Location:index.php");
    $stmt->close();
    $conn->close();
    exit();
} else {
    header("Location: signup.php?error=1");
    $stmt->close();
    $conn->close();
    exit();
}
