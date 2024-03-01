<?php
session_start();
session_start();
session_destroy();
setcookie('logged_in', "", 1, "/");
header('Location: login.php');
?>