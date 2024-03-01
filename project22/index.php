<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project22</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<?php
require_once 'upload_profile.php';
?>

<div class="container d-flex justify-content-center">
    <div class="w-50px h-500px border border-primary">
        <div class="pt-4 px-3">
            <h3>Account Setting</h3>
        </div>
        <div class="d-flex justify-content-between">
            <div class="side-left">
                <div class="d-flex flex-column px-2 px-3">
                    <a class="text-decoration-none text-danger pb-3" href="/">Profile</a>
                    <a class="text-decoration-none text-danger pb-3" href="/">Password</a>
                    <a class="text-decoration-none text-danger pb-3" href="/">Intergration</a>
                    <a class="text-decoration-none text-danger pb-3" href="/">Billing</a>
                </div>
            </div>
            
            <div class="side-right d-flex px-5 py-4">
                <form action="upload_profile.php" method="post" enctype="multipart/form-data">
                    <div class="d-flex flex-column">
                        <img src="assets/img/anh1.jpg" alt="avatar" style="width: 100px; height: 100px; border-radius: 50%">
                        <br>
                        <input type="file" name="avatar" accept="image/*">
                        <br>

                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($user['fullname']) ? $user['fullname'] : '' ?>">
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : '' ?>">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo isset($user['phone']) ? $user['phone'] : ''; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="company" class="form-label">Company</label>
                            <input type="text" class="form-control" id="company" name="company" value="<?php echo isset($user['company']) ? $user['company'] : ''; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>>