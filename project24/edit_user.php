<?php
    $users = [
        [
            "username" => "johndoe",
            "password" => password_hash("password123", PASSWORD_DEFAULT), // Store hashed password
            "name" => "John Doe",
            "email" => "johndoe@example.com",
            "role" => "user",
            "image" => "assets/images/1.jpeg"
        ],
        [
            "username" => "moimoimoi",
            "password" => password_hash("123", PASSWORD_DEFAULT), // Store hashed password
            "name" => "Moi Van Moi",
            "email" => "moimoi@example.com",
            "role" => "admin",
            "image" => "assets/images/2.jpg"
        ]
    ];
    $authorization_levels = [
        "user" => [
            "access_profile" => true,
            "edit_profile" => true,
            "access_admin_panel" => false,
        ],
        "admin" => [
            "access_profile" => true,
            "edit_profile" => true,
            "access_admin_panel" => true,
            "manage_users" => true,
        ],
    ];
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || 
        $_SESSION['user_role'] !== "admin") {
        header('Location: index.php');
    }
    $username = $_GET['username']; // Get username from URL
    echo "<h2>Edit User: " . $username . "</h2>";
?>