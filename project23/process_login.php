<?php
    include "users/users.php";
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    //khoi tao 1 bien user luu gia tri
    $user = null;
    foreach ($users as $u){
        if($u['username'] === $username){
            $user = $u;
            break;
        }
    }
    if($user && password_verify($password , $user['password'])){
        echo "login succes";
        $_SESSION['user_id'] = $user['username'];
        setcookie("logged_in",true,time() + 60 * 60 * 24 *30);
        header("location: profile.php");
    }else{
        echo "invalid username or password";
    }
