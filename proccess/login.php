<?php
include '../db/db.php';
include 'security.php';

$username = clean_input($_POST['username']);
$password = clean_input($_POST['password']);

$sql = "SELECT id, password FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $hashed_password);
    $stmt->fetch();
    if (password_verify($password, $hashed_password)) {
        echo json_encode(["message" => "Login successful", "userId" => $id]);
    } else {
        echo json_encode(["error" => "Invalid password"]);
    }
} else {
    echo json_encode(["error" => "No user found"]);
}

$stmt->close();
$conn->close();
?>
