<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <style>

    </style>
</head>
<body>
    <?php
    $courses = [
        [
            'title' => 'Học viên quốc tế',
            'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên
quốc tế.',
            'fee' => '15.000.000 VND',
            'start-date' => '2/2/24',
            'duration' => '2 - 2.5 năm'
        ],
        [
            'title' => '',
            'description' => '',
            'fee' => '',
            'start-date' => '',
            'duration' => ''
        ],
        [
            'title' => '',
            'description' => '',
            'fee' => '',
            'start-date' => '',
            'duration' => ''
        ],
        [
            'title' => '',
            'description' => '',
            'fee' => '',
            'start-date' => '',
            'duration' => ''
        ],
        [
            'title' => '',
            'description' => '',
            'fee' => '',
            'start-date' => '',
            'duration' => ''
        ],
        [
            'title' => '',
            'description' => '',
            'fee' => '',
            'start-date' => '',
            'duration' => ''
        ],
    ];

    foreach ($courses as $course){
        echo '<div class="course">';
        echo '<h2>'. $course['title'] .'</h2>';
        echo '<p>'. $course['description'] .'</p>';
        echo '<p>Học phí: '. $course['fee'] .'</p>';
        echo '<p>Khai giảng: '. $course['start_date'].'</p>';
        echo '<p>Thời lượng: '. $course['duration'] .'</p>';
    }
    ?>
</body>
</html>