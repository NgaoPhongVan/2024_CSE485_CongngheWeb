<?php
session_start();
$users = [
    [
        "username" => "boocigrose",
        "password" => password_hash("14092003", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Nguyễn Thị Huyền",
        "email" => "padopado1409@gmail.com"
    ],
    [
        "username" => "mck",
        "password" => password_hash("14092003", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Long nger",
        "email" => "longnnger@gmail.com"
    ],
    // Add more users...
];
?>

<form action="process_login.php" method="post">
    Username: <input type="text" name="username" required><br>
    Password: <input type="password" name="password" required><br>
    <button type="submit">Login</button>
</form>