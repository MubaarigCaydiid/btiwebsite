<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "registration_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = trim($_POST["Name"]);
    $Email = trim($_POST["Email"]);
    $Password = password_hash($_POST["Password"], PASSWORD_DEFAULT);

    $checkEmail = "SELECT * FROM users WHERE Email = ?";
    $stmt = $conn->prepare($checkEmail);
    $stmt->bind_param("s", $Email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Email already registered!✅";
    } else {
        $sql = "INSERT INTO users (Name, Email, Password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $Name, $Email, $Password);

        if ($stmt->execute()) {
            echo "<script>alert('Data successfully inserted!');</script>";
        }
    }
}
?>
