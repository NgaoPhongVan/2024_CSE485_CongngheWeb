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
        .nav{
            background-color: #0a1f77;
            color: #fff;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .text{
            color: #fff;
            padding-left: 20px;
            font-family: 'Times New Roman', Times, serif;
        }
        .line{
            border-left: 2px solid #fff;
        }
        .line:hover {
            color: yellow;
            cursor: pointer;
        }
        li{
            list-style: none;
        }
    </style>
</head>
<body>
<?php

foreach ($navItems as $item){
    echo "<li>$item</li>";
}

?>
</body>
</html>
