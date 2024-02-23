<?php
    $navItems = [
        "GIỚI THIỆU",
        "TIN TỨC & THÔNG BÁO",
        "TUYỂN SINH",
        "ĐÀO TẠO",
        "NGHIÊN CỨU",
        "ĐỐI NGOẠI",
        "VĂN BẢN",
        "SINH VIÊN",
        "LIÊN HỆ"
       ];      
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <style>
        .header{
            background-color: #0a53be;
        }
        .navitem{
            display: flex ;
            height: 50px;
            align-items: center;
            justify-content: space-around;
        }
        li{
            list-style: none;
        }
        span{
            font-size: 20px;
            color: white;
            padding-left: 20px;
            /*background-color: red;*/
            border-left: 3px solid white;

        }
        .bx.bx-home-heart{
            font-size: 30px;
            color: white;
        }
    </style>

</head>
<body>
    <div class = header>
        <ul class = "navitem">
            <i class='bx bx-home-heart'></i>
            <?php
            foreach ($navItems as $item){
                echo "<li> <span>$item</span> </li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>





