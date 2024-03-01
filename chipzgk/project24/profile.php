<?php
session_start();

$users = [
    [
        "username" => "boocigrose",
        "password" => password_hash("14092003", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Nguyễn Thị Huyền",
        "email" => "padopado@gmail.com"
    ],
    [
        "username" => "mck",
        "password" => password_hash("14092003", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Long nger",
        "email" => "longnnger@gmail.com"
    ],
    // ... add more users
];

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php');
    exit;
}

$username = $_SESSION['user_id'];
$user = null;

foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user) {
    echo "Welcome, " . $user['name'] . "!<br>";
    echo "Username: " . $user['username'] . "<br>";
    echo "Email: " . $user['email'] . "<br>";
    // ... add more profile information
} else {
    echo "Error: User not found.";
}
?>