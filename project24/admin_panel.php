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
            // ... add more levels
    ];
    session_start();
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || 
        $_SESSION['user_role'] !== "admin") {
        header('Location: login.php');
    }
    // ... display admin panel content
    // List users (implement pagination or filtering if needed)
    echo "<h2>Users</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Username</th><th>Name</th><th>Email</th><th>Role</th><th>Actions</th></tr>";
    foreach ($users as $u) {
        echo "<tr>";
        echo "<td>" . $u['username'] . "</td>";
        echo "<td>" . $u['name'] . "</td>";
        echo "<td>" . $u['email'] . "</td>";
        echo "<td>" . $u['role'] . "</td>";
        echo "<td>";
        // Edit user link (consider using a separate page for editing)
        
        // if ($u['username'] !== $_SESSION['user_id']) { // Prevent self-editing
        //     echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
        // }
        echo "<a href='edit_user.php?username=" . $u['username'] . "'>Edit</a>";
        echo "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>