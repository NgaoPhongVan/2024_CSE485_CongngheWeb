<?php
$users = [
    [
        "username" => "harin",
        "password" => password_hash("123", PASSWORD_DEFAULT),
        "name" => "Ha Linh",
        "email" => "harin@example.com"
    ],
    [
        "username" => "linhmy",
        "password" => password_hash("456", PASSWORD_DEFAULT),
        "name" => "Linh My",
        "email" => "linhmy@example.com"
    ]
];

session_start();

if (!isset($_SESSION['user_id']) || !isset($_COOKIE['logged_in'])){
    header('Location: login.php');
}
$username = $_SESSION['user_id'];
$user = null;

foreach ($users as $u){
    if ($u['username'] === $username){
        $users = $u;
        break;
    }
}

if ($user){
    echo "Welcome, ".$user['name']. "!";
    echo "<br>Email: ".$user['email'];
}else{
    echo "Error";
}

echo "<a href='logout.php'> <br> Logout</a>";
?>