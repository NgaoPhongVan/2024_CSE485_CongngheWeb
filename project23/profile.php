<?php
include 'users/users.php' ;

session_start();
if(!isset($_SESSION['user_id']) || isset($_SESSION['logged_id'])) {
    header("location:login.php");
}
    $username = $_SESSION['user_id'];
    $user = null;
    foreach ($users as $u){
        if($u['username'] == $username){
            $user = $u;
            break;
        }
    }
    if($user){
        echo "welcome, ".$user['name'];
        echo " <br> email:  ".$user['email'];
    }else{
        echo "user not found";
    }
