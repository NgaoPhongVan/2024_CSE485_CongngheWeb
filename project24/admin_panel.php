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
    echo<<<EOT
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
        <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container d-flex justify-content-center">
            <table class="table table-striped table-hover w-75">
                <thead>
                    <tr>
                        <th scope="col">User</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
EOT;
    foreach ($users as $u) {
        echo "<tr>";
        echo "<th scope=\"row\">" . $u['username'] . "</th>";
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
    echo<<<EOT
    </tbody>
            </table>
        </div>
    </body>
    </html>
EOT;            
?>