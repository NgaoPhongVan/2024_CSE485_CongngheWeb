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

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])) {
    header('Location: login.php'); // Redirect to login if not authenticated
}

$username = $_SESSION['user_id'];

// Retrieve user data from array using the username
$user = null;
foreach ($users as $u) {
    if ($u['username'] === $username) {
        $user = $u;
        break;
    }
}

if ($user) {
    // Display user information
    echo "Welcome, " . $user['name'] . "!";
    echo "<br>Email: " . $user['email'];
    // ... display other user details
} else {
    echo "Error: User not found.";
}

?>
<form action="logout.php" method="post">
    <button type="submit">Logout</button>
</form>
