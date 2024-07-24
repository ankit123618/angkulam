<?php
include '../db/db.php';
include 'security.php';

header('Content-Type: application/json');
$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case 'GET':
        // Retrieve data
        if (isset($_GET['type']) && $_GET['type'] == 'books') {
            get_books();
        } else if (isset($_GET['type']) && $_GET['type'] == 'articles') {
            get_articles();
        } else {
            header("HTTP/1.0 400 Bad Request");
            echo json_encode(["error" => "Invalid request"]);
        }
        break;
    case 'POST':
        // Handle data submission
        if (isset($_POST['action']) && $_POST['action'] == 'purchase') {
            purchase_book();
        } else {
            header("HTTP/1.0 400 Bad Request");
            echo json_encode(["error" => "Invalid request"]);
        }
        break;
    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

function get_books() {
    global $conn;
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);

    $books = array();
    while($row = $result->fetch_assoc()) {
        $books[] = $row;
    }

    echo json_encode($books);
}

function get_articles() {
    global $conn;
    $sql = "SELECT * FROM articles";
    $result = $conn->query($sql);

    $articles = array();
    while($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }

    echo json_encode($articles);
}

function purchase_book() {
    global $conn;

    $user_id = clean_input($_POST['user_id']);
    $book_id = clean_input($_POST['book_id']);
    $payment_method = clean_input($_POST['payment_method']);
    $amount = clean_input($_POST['amount']);

    $sql = "INSERT INTO purchases (user_id, book_id, payment_method, amount) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisd", $user_id, $book_id, $payment_method, $amount);

    if ($stmt->execute()) {
        echo json_encode(["message" => "Purchase successful"]);
    } else {
        echo json_encode(["error" => "Error processing purchase"]);
    }

    $stmt->close();
    $conn->close();
}
?>
