<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = isset($_POST['email']) ? $_POST['email'] : '';
$pw = isset($_POST['password']) ? $_POST['password'] : '';

$pw_md5 = md5($pw);

$stmt = $conn->prepare("SELECT name FROM users WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $pw_md5);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    
    echo "<form id='redirectForm' method='post' action='welcome.php'>
            <input type='hidden' name='name' value='" . htmlspecialchars($name, ENT_QUOTES) . "'>
          </form>
          <script>document.getElementById('redirectForm').submit();</script>";
    
    $stmt->close();
    $conn->close();
    exit();
} else {
    header("Location: index.php?error=1");
    $stmt->close();
    $conn->close();
    exit();
}
