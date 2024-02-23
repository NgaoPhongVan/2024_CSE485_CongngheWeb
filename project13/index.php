<?php
    $courses = [
        [
        'img' => 'img/ltvqt.png.webp',
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
       Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
       quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => 'img/ltvqt.png.webp',
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
            Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
            quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => 'img/ltvqt.png.webp',
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
           Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
           quốc tế.',
            'fee' => '15.000.000 VND',
            'start_date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
    ];
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project13</title>
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="head">KHÓA HỌC SẮP KHAI GIẢNG</div>
        <div class="contents">
            <?php foreach ($courses as $course) {
                echo '<div class="content">';
                echo '<img src="'.$course['img'].'" alt="">';
                echo '<h3>' . $course['title'] . '</h3>';
                echo '<p>'.$course['description'].'</p>';
                echo '<div class="text"><i class=\'bx bxs-gift\'></i>'.$course['fee'].'</div>';
                echo '<div class="text"><i class=\'bx bxs-time-five\'></i>'.$course['start_date'].'</div>';
                echo '<div class="text"><i class=\'bx bxs-bookmark\'></i>'.$course['duration'].'</div>';
                echo '</div>';
            } ?>
        </div>
    </div>
</body>
</html>