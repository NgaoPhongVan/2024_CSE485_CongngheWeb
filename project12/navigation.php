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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project12</title>
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <style>
        .header{
            background-color: #0a1f77;
            display: flex;
        }
        .naviteams{
            display: flex;
            height: 40px;
            align-content: center;
            justify-content: space-around;
        }
        .bxs-home{
            color: white;
            font-size: 30px;
        }
        li{
            list-style: none;
        }
        span{
            font-size: 18px;
            color: white;
            padding-left: 16px;
            border-left: 2px solid white;
        }
    </style>
</head>
<body>
<div class = header>
    <ul class = "naviteams">
        <i class='bx bxs-home'></i>
        <?php
        foreach ($navItems as $item){
            echo "<li><span>$item</span></li>";
        }
        ?>
    </ul>
</div>

</body>
</html>
