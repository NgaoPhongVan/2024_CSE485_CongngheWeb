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

$username = $_POST['username'];
$password = $_POST['password'];

$user_found = false;
foreach ($users as $u) {
    if ($u['username'] === $username && password_verify($password, $u['password'])) {
        $user_found = true;
        $_SESSION['user_id'] = $u['username'];
        $_SESSION['user_role'] = $u['role'];
        break;
    }
}

if ($user_found) {
    setcookie('logged_in', true, time() + 60 * 60 * 24 * 30, "/");
    header('Location: profile.php');
} else {
    echo "Invalid username or password.";
}
?>