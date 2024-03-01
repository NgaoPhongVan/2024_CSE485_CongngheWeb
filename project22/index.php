<?php include "dateProfile/users.php"?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <title>profile</title>
</head>
<body style="background-color: #e0e0e0">

<div class = "container d-flex justify-content-center" >
    <form style="background-color: white"  class = "d-flex flex-column p-5" action="update_profile.php" method = "post" enctype="multipart/form-data">
            <div style="width: 120px ; height: 120px  "  class="image mx-autor mx-auto">
                <img class = "w-100 h-100 rounded-circle" src="<?php echo isset($_SESSION['avatar'])? $_SESSION['avatar'] : $user['avatar'] ?>" alt="">
            </div>
            <br>
            <label>Full name</label>
            <input type = "text" name = "name" value=" <?php echo $user['name']  ?> " >
            <br>
            <label>Email</label>
            <input type = "email" name = "email" value = "<?php echo $user['email'] ?>" >
            <br>
            <label> Phone number</label>
            <input type = "file" name = "avatar" accept="image/*">
            <br>
            <button style="color: white" class = "bg-primary w-25 mx-auto" type ="submit">upload</button>
    </form>
</div>

</body>
</html>
