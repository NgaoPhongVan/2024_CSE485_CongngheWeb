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
    // Add more users...
];

$username = $_POST['username'];
$password = $_POST['password'];

// Check if username exists
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user && password_verify($password, $user['password'])) {
    // Login successful
    $_SESSION['user_id'] = $user['username']; // Store user ID in session
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/"); // Set cookie for 30 days
    header('Location: profile.php'); // Redirect to profile page
} else {
    // Login failed
    echo "Invalid username or password.";
}
?>