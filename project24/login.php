<?php include 'users/users.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
</head>
<body>
<div class = "justify-content-center container d-flex">
    <form class = "flex-column d-flex"  action="process_login.php" method="post">
        <input type="text" name = "username" required>
        <br>
        <input type="password" name = "password" required>
        <br>
        <button class = "w-25 mx-auto" type="submit">login</button>
    </form>
</div>

</body>
</html>
