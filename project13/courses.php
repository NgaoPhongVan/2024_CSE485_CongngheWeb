<?php
$courses = [
    [
        'img' => './img/banner1.webp',
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],

    [
        'img' => './img/banner1.webp',
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],

    [
        'img' => './img/banner1.webp',
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],

    [
        'img' => './img/banner1.webp',
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],

    [
        'img' => './img/banner1.webp',
        'title' => 'Học viên quốc tế',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],

    [
        'img' => './img/banner1.webp',
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
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<div class="container">
    <div class="h1-text">
        <h2 class="h1">KHÓA HỌC SẮP KHAI GIẢNG</h2>
    </div>
</div>

<div class="contents">
    <?php
    foreach ($courses as $course){
    ?>
        <div class="course">
            <img src="<?php echo $course['img'] ?>" alt="">
            <div class="content">
                <h3><?php echo $course['title'] ?></h3>
                <p><?php echo $course['description'] ?></p>
                <div class="info">
                    <div class="fee">
                        <p>Học phí: <?php echo $course['fee'] ?></p>
                    </div>
                    <div class="date">
                        <p>Ngày khai giảng: <?php echo $course['start_date'] ?></p>
                    </div>
                    <div class="duration">
                        <p>Thời lượng: <?php echo $course['duration'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
</body>
</html>