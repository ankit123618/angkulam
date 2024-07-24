<?php
require_once '../db/db.php';
require_once '../proccess/security.php';

header('Content-Type: application/json');
$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case 'GET':
        if (isset($_GET['type'])) {
            switch ($_GET['type']) {
                case 'users':
                    get_users();
                    break;
                case 'books':
                    get_books();
                    break;
                case 'articles':
                    get_articles();
                    break;
                case 'user':
                    if (isset($_GET['id'])) {
                        get_user($_GET['id']);
                    }
                    break;
                case 'book':
                    if (isset($_GET['id'])) {
                        get_book($_GET['id']);
                    }
                    break;
                case 'article':
                    if (isset($_GET['id'])) {
                        get_article($_GET['id']);
                    }
                    break;
            }
        }
        break;

    case 'POST':
        $data = json_decode(file_get_contents("php://input"), true);
        if (isset($data['type'])) {
            switch ($data['type']) {
                case 'user':
                    save_user($data);
                    break;
                case 'book':
                    save_book($data);
                    break;
                case 'article':
                    save_article($data);
                    break;
            }
        }
        break;

    case 'DELETE':
        $data = json_decode(file_get_contents("php://input"), true);
        if (isset($data['type'])) {
            switch ($data['type']) {
                case 'user':
                    delete_user($data['id']);
                    break;
                case 'book':
                    delete_book($data['id']);
                    break;
                case 'article':
                    delete_article($data['id']);
                    break;
            }
        }
        break;

    default:
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}

function get_users() {
    global $conn;
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $users = array();
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    echo json_encode($users);
}

function get_books() {
    global $conn;
    $sql = "SELECT * FROM books";
    $result = $conn->query($sql);
    $books = array();
    while ($row = $result->fetch_assoc()) {
        $books[] = $row;
    }
    echo json_encode($books);
}

function get_articles() {
    global $conn;
    $sql = "SELECT * FROM articles";
    $result = $conn->query($sql);
    $articles = array();
    while ($row = $result->fetch_assoc()) {
        $articles[] = $row;
    }
    echo json_encode($articles);
}

function get_user($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    echo json_encode($result->fetch_assoc());
}

function get_book($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    echo json_encode($result->fetch_assoc());
}

function get_article($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    echo json_encode($result->fetch_assoc());
}

function save_user($data) {
    global $conn;
    if (isset($data['id']) && !empty($data['id'])) {
        // Update user
        $stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?");
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $stmt->bind_param("sssi", $data['username'], $data['email'], $password, $data['id']);
    } else {
        // Insert user
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $password = password_hash($data['password'], PASSWORD_DEFAULT);
        $stmt->bind_param("sss", $data['username'], $data['email'], $password);
    }
    if ($stmt->execute()) {
        echo json_encode(["message" => "User saved successfully"]);
    } else {
        echo json_encode(["error" => "Error saving user"]);
    }
}

function save_book($data) {
    global $conn;
    if (isset($data['id']) && !empty($data['id'])) {
        // Update book
        $stmt = $conn->prepare("UPDATE books SET title = ?, subtitle = ?, price = ?, image = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $data['title'], $data['subtitle'], $data['price'], $data['image'], $data['id']);
    } else {
        // Insert book
        $stmt = $conn->prepare("INSERT INTO books (title, subtitle, price, image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $data['title'], $data['subtitle'], $data['price'], $data['image']);
    }
    if ($stmt->execute()) {
        echo json_encode(["message" => "Book saved successfully"]);
    } else {
        echo json_encode(["error" => "Error saving book"]);
    }
}

function save_article($data) {
    global $conn;
    if (isset($data['id']) && !empty($data['id'])) {
        // Update article
        $stmt = $conn->prepare("UPDATE articles SET title = ?, content = ?, image = ? WHERE id = ?");
        $stmt->bind_param("sssi", $data['title'], $data['content'], $data['image'], $data['id']);
    } else {
        // Insert article
        $stmt = $conn->prepare("INSERT INTO articles (title, content, image) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $data['title'], $data['content'], $data['image']);
    }
    if ($stmt->execute()) {
        echo json_encode(["message" => "Article saved successfully"]);
    } else {
        echo json_encode(["error" => "Error saving article"]);
    }
}

function delete_user($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo json_encode(["message" => "User deleted successfully"]);
    } else {
        echo json_encode(["error" => "Error deleting user"]);
    }
}

function delete_book($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo json_encode(["message" => "Book deleted successfully"]);
    } else {
        echo json_encode(["error" => "Error deleting book"]);
    }
}

function delete_article($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM articles WHERE id = ?");
    $stmt->bind_param("i", $id);
    if ($stmt->execute()) {
        echo json_encode(["message" => "Article deleted successfully"]);
    } else {
        echo json_encode(["error" => "Error deleting article"]);
    }
}
?>
