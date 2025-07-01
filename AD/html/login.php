<?php

$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "sda"; // Database name changed to "login"

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process login form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    // Perform database query to check user credentials
    $sql = "SELECT * FROM sda WHERE username='$uname' AND password='$psw'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Redirect to index.html on successful login
        header("Location: help.html");
        exit; // Make sure to exit after redirection
    } else {
        echo'<script>alert("Invalid!");</script>';
        // header("Location: login.html");
    }
}

$conn->close();
?>