<?php
session_start();

$users = [
    [
        "username" => "boocigrose",
        "password" => password_hash("14092003", PASSWORD_DEFAULT), // Store hashed password
        "name" => "Nguyễn Thị Huyền",
        "email" => "padopado@gmail.com"
    ],

    // ... add more users
];

$authorization_levels = [
    "user" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => false
    ],
    "admin" => [
        "access_profile" => true,
        "edit_profile" => true,
        "access_admin_panel" => true,
        "manage_users" => true
    ]
    // ... add more levels
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
    $user_role = $_SESSION['user_role'];

    if ($user_role !== "admin" || !$authorization_levels[$user_role]['access_admin_panel']) {
        echo "You do not have permission to access the admin panel.";
        exit;
    }

    echo "Welcome to the Admin Panel, " . $user['name'] . "!<br>";
    echo "Here, you can manage users and perform administrative tasks.<br>";
    // ... add admin panel functionality
} else {
    echo "Error: User not found.";
}
?>