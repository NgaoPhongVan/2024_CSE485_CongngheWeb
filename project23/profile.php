<?php
    $users = [
        [
            "username" => "johndoe",
            "password" => password_hash("password123", PASSWORD_DEFAULT), // Store hashed password
            "name" => "John Doe",
            "email" => "johndoe@example.com",
            "image" => "assets/images/1.jpeg"
        ],
        [
            "username" => "moimoimoi",
            "password" => password_hash("123", PASSWORD_DEFAULT), // Store hashed password
            "name" => "Moi Van Moi",
            "email" => "moimoi@example.com",
            "image" => "assets/images/2.jpg"
        ],
    ];
    session_start();
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
        // ... display other user details
        echo "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
            <title>Document</title>
            <link rel=\"stylesheet\" href=\"https://unpkg.com/element-ui/lib/theme-chalk/index.css\">
            <link rel=\"stylesheet\" href=\"./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css\">
            <link rel=\"stylesheet\" href=\"./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css\">
            <style>
                .Btn {
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                    width: 45px;
                    height: 45px;
                    border: none;
                    border-radius: 50%;
                    cursor: pointer;
                    position: relative;
                    overflow: hidden;
                    transition-duration: .3s;
                    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
                    background-color: rgb(255, 65, 65);
                }
                
                /* plus sign */
                .sign {
                    width: 100%;
                    transition-duration: .3s;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                
                .sign svg {
                    width: 17px;
                }
                
                .sign svg path {
                    fill: white;
                }
                /* text */
                .text {
                    position: absolute;
                    right: 0%;
                    width: 0%;
                    opacity: 0;
                    color: white;
                    font-size: 1.2em;
                    font-weight: 600;
                    transition-duration: .3s;
                }
                /* hover effect on button width */
                .Btn:hover {
                    width: 125px;
                    border-radius: 40px;
                    transition-duration: .3s;
                }
                
                .Btn:hover .sign {
                    width: 30%;
                    transition-duration: .3s;
                    padding-left: 20px;
                }
                /* hover effect button's text */
                .Btn:hover .text {
                    opacity: 1;
                    width: 70%;
                    transition-duration: .3s;
                    padding-right: 10px;
                }
                /* button click effect*/
                .Btn:active {
                    transform: translate(2px ,2px);
                }
            </style> 
        </head>
        <body style=\"background: #e0e0e0\">
            <div class=\"container d-flex justify-content-center h-100\">
                <form action=\"logout.php\" method=\"post\" enctype=\"multipart/form-data\" class=\"d-flex flex-column bg-light h-100 p-5\">
                    <h2 class=\"pb-2\">Profile Information</h2>
                    <div class=\"image text-center mx-auto\" style=\"width: 120px; height: 120px\">
                        <img class=\"w-100 h-100 rounded-circle\" src='".$user['image']."' alt=\"\">                
                    </div>
                    <label for=\"name\">Name:</label>
                    <input type=\"text\" name=\"name\" value=\"". $user['name']."\"  required>
                    <br>
                    <label for=\"email\">Email:</label>
                    <input type=\"email\" name=\"email\" value=\"".$user['email']."\" disabled>
                    <br>
                    <button class=\"Btn mx-auto\" type=\"submit\">
                        <div class=\"sign\"><svg viewBox=\"0 0 512 512\"><path d=\"M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z\"></path></svg></div>
                        <div class=\"text\">Logout</div>
                    </button>
                </form>
            </div>
            <script src=\"https://unpkg.com/element-ui/lib/index.js\"></script>
        </body>
        </html>";
    } else {
        echo "Error: User not found.";
    }
?>