<?php
include '../db/db.php';
include 'security.php';

$username = clean_input($_POST['username']);
$password = password_hash(clean_input($_POST['password']), PASSWORD_BCRYPT);
$email = clean_input($_POST['email']);

$sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $password, $email);

if ($stmt->execute()) {
    echo json_encode(["message" => "User registered successfully"]);
} else {
    echo json_encode(["error" => "Error registering user"]);
}

$stmt->close();
$conn->close();
?>
