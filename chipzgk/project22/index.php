<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boo.cigrose</title>
    <style>
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .avatar-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        .avatar {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .custom-file-upload {
            display: inline-block;
            padding: 6px 20px;
            cursor: pointer;
            background-color: orange;
            color: #fff;
            border: none;
            border-radius: 5px;
        }

        .custom-file-upload input[type="file"] {
            display: none;
        }
    </style>
</head>
<body>
<div class="container">
    <form action="upload_profile.php" method="post" enctype="multipart/form-data">
        <div class="avatar-container">
            <label for="avatar"></label>
            <br>
            <?php if (isset($user['avatar'])) : ?>
                <img src="<?php echo $user['avatar']; ?>" alt="Avatar" class="avatar">
            <?php else : ?>
                <img src="https://upload.wikimedia.org/wikipedia/en/f/f7/Slam_Dunk_%28manga%29_1.png" alt="Default Avatar" class="avatar">
            <?php endif; ?>
            <br>
            <label class="custom-file-upload">
                <input type="file" name="avatar" accept="image/*">
                Change My Avatar
            </label>
            <br><br>
        </div>

        <label for="name">Full Name:</label>
        <br>
        <input type="text" name="name" value="<?php echo isset($user['name']) ? $user['name'] : ''; ?>" required>
        <br><br>

        <label for="email">Email:</label>
        <br>
        <input type="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" required>
        <br><br>

        <label for="phone">Phone Number:</label>
        <br>
        <input type="tel" name="phone" value="<?php echo isset($user['phone']) ? $user['phone'] : ''; ?>" required>
        <br><br>

        <label for="company">Company Name:</label>
        <br>
        <input type="text" name="company" value="<?php echo isset($user['company']) ? $user['company'] : ''; ?>" required>
        <br><br>

        <button type="submit">Update Profile</button>
    </form>
</div>
</body>
</html>