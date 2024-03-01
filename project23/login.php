<?php
$users = [
    [
        "username" => "harin",
        "password" => password_hash("123456", PASSWORD_DEFAULT),
        "name" => "Ha Linh",
        "email" => "harin@example.com"
    ],
    [
        "username" => "linhmy",
        "password" => password_hash("123123", PASSWORD_DEFAULT),
        "name" => "Linh My",
        "email" => "linhmy@example.com"
    ]
];

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $username = isset($_POST['username']) ? $_POST['username'] : null;
    $password = isset($_POST['password']) ? $_POST['password'] : null;

    $user = null;

    foreach ($users as $u){
        if ($u['username'] === $username){
            $user = $u;
            break;
        }
    }

    if ($user && password_verify($password,$user['password'])){
        $_SESSION['user_id'] = $user['username'];
        setcookie('logged_in', true, time()+60*60*24*30, "/");
        header('Location: admin.php');
    }else{
        echo "Invalid";
    }
}
?>

<form action="login.php" method="post">
    <label for="username">User name: </label>
    <input type="text" name="username" id="username" required>

    <label for="password">Password: </label>
    <input type="password" name="password" id="password" required>

    <input type="submit" value="Login">
</form>
