<?php
  session_start();
  if($_SESSION("isLogin")) {
    header("Location: /login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Alo alo alo</h3>
  <a href="logout.php">Logout</a>
</body>
</html>