<?php
    session_start();
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
    if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in']) || 
        $_SESSION['user_role'] !== "admin") {
        header('Location: index.php');
    }
    $username = $_GET['username']; // Get username from URL
    foreach($users as $user) {
        if($user['username'] === $username) {
            $name1 = $user['name'];
            $email = $user['email'];
            $image1 = $user['image'];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <style>
        .button {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: rgb(20, 20, 20);
        border: none;
        font-weight: 600;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0px 0px 0px 4px rgba(180, 160, 255, 0.253);
        cursor: pointer;
        transition-duration: 0.3s;
        overflow: hidden;
        position: relative;
        }

        .svgIcon {
        width: 12px;
        transition-duration: 0.3s;
        }

        .svgIcon path {
        fill: white;
        }

        .button:hover {
        width: 140px;
        border-radius: 50px;
        transition-duration: 0.3s;
        background-color: rgb(181, 160, 255);
        align-items: center;
        }

        .button:hover .svgIcon {
        /* width: 20px; */
        transition-duration: 0.3s;
        transform: translateY(-200%);
        }

        .button::before {
        position: absolute;
        bottom: -20px;
        content: "Upload";
        color: white;
        /* transition-duration: .3s; */
        font-size: 0px;
        }

        .button:hover::before {
        font-size: 13px;
        opacity: 1;
        bottom: unset;
        /* transform: translateY(-30px); */
        transition-duration: 0.3s;
        }
    </style>
</head>
<body style="background: #e0e0e0">
    <div class="container d-flex justify-content-center h-100">
        <form action="update_profile.php" method="post" enctype="multipart/form-data" class="d-flex flex-column bg-light h-100 p-5">
            <h2 class="pb-2">Profile Information</h2>
            <div class="image text-center mx-auto" style="width: 120px; height: 120px">
                <img class="w-100 h-100 rounded-circle" src="<?php echo isset($_SESSION['image']) ? $_SESSION['image'] : $image1; ?>" alt="">                
            </div>
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo isset($_SESSION['name1']) ? $_SESSION['name'] : $name1; ?>"  required>
            <br>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : $email;?>" disabled>
            <br>
            <label for="image">Avatar:</label>
            <input type="file" name="avatar" accept="images/*">
            <br>
            <button class="button mx-auto" type="submit">
                <svg class="svgIcon" viewBox="0 0 384 512">
                    <path
                    d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
                    ></path>
                </svg>
            </button>
        </form>
    </div>
    <script src="https://unpkg.com/element-ui/lib/index.js"></script>
</body>
</html>