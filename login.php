<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "IMTOBE";
/*
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username-email"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username-email='$user' AND password='$pass'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "Login successful!<br>";
        echo "<a href='overview.html'>Go to Overview</a>";
    } else {
        echo "incorrect password or email!";
		
    }
}*/
;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username-email"];
    $pass = $_POST["password"];

    // Check if the user entered a username or email
    if (filter_var($user, FILTER_VALIDATE_EMAIL)) {
        // The input is an email
        $sql = "SELECT * FROM users WHERE email='$user' AND password='$pass'";
    } else {
        // The input is a username
        $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
    }
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Redirect to overview.html after successful login
        header("Location: overview.html");
        exit();
    } else {
        echo "incorrect login!";
    }
}

$conn->close();
?>
