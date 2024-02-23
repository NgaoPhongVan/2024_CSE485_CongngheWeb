<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách khóa học</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        body {
            padding: 50px;
        }
        .list {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            align-items: flex-start;
        }
        .title {
            display: block;
            border-left: 3px solid red;
            color: red;
            padding: 5px;
            margin-bottom: 10px;
            font-size: large;
        }
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
            width: 50%;
            flex-basis: calc(50%-30px);
            box-sizing: border-box;
        }
        img {
            width: 50%;
            height: 20%;
        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #666;
        }
        @media(min-width: 768px){
            .course{
                width: 25%;
            }
        }
    </style>
</head>
<body>
<h1 class="title">KHÓA HỌC SẮP KHAI GIẢNG</h1>
<div class="list">
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'image' => 'https://i.pinimg.com/474x/9c/49/90/9c4990509a884fff21d06352a1e1970e.jpg',
        'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diện. Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng theo nghề ập trình chuyên nghiệp.',
        'scholarship' => '15.000.000 VND',
        'start_date' => '2/2024',
        'duration' => '2 - 2.5 năm'
    ],

    // Thêm các khóa học khác vào đây
];
$courses1 = [
    [
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'image' => 'https://i.ytimg.com/vi/1z2k4V94pco/maxresdefault.jpg',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
        'voucher' => '15% học phí',
        'start_date' => '2/2024',
        'duration' => '6 tháng'
    ],

];
$courses2 =[
    [
        'title' => 'LẬP TRÌNH JAVA FULLSTACK',
        'image' => 'https://ih1.redbubble.net/image.2751542233.6049/flat,750x,075,f-pad,750x1000,f8f8f8.jpg',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,...',
        'voucher' => '15% học phí',
        'start_date' => '2/2024',
        'duration' => '236 giờ'
    ],
];
$courses3 =[
    [
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'image' => 'https://midorigifts.com/cdn/shop/products/63b7ddb11b2f8feae519d09a01efe0f3.png?v=1701755358&width=480',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
        'start_date' => '5/2/2024',
        'fee' => '9.600.000 VNĐ',
        'duration' => '36 giờ'
    ],
];
$courses4 =[
    [
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'image' => 'https://s1.zerochan.net/Slam.Dunk.600.3408414.jpg',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
        'start_date' => '2/2024',
        'duration' => '40 giờ',
        'fee' => '6.000.000 VNĐ'
    ],
];
$courses5 =[
    [
        'title' => 'LẬP TRÌNH SQL SERVER',
        'image' => 'https://e1.pxfuel.com/desktop-wallpaper/897/254/desktop-wallpaper-slam-dunk-group-slam-dunk-hanamichi.jpg',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'start_date' => '2/2024',
        'fee' => '4.500.000 VNĐ',
        'duration' => '30 giờ'
    ],
];
// Hiển thị danh sách khóa học
foreach ($courses as $course) {
    echo '<div class="course">';
    echo '<img src="'. $course['image'] .'"/>';
    echo '<h2>' . $course['title'] . '</h2>';
    echo '<p>' . $course['description'] . '</p>';
    echo '<p>Học bổng: ' . $course['scholarship'] . '</p>';
    echo '<p>Khai giảng: ' . $course['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
}
foreach ($courses1 as $course1) {
    echo '<div class="course">';
    echo '<img src="'. $course1['image'] .'"/>';
    echo '<h2>' . $course1['title'] . '</h2>';
    echo '<p>' . $course1['description'] . '</p>';
    echo '<p>Ưu đãi giảm ' . $course1['voucher'] . '</p>';
    echo '<p>Khai giảng: ' . $course1['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course1['duration'] . '</p>';
    echo '</div>';
}
foreach ($courses2 as $course2) {
    echo '<div class="course">';
    echo '<img src="'. $course2['image'] .'"/>';
    echo '<h2>' . $course2['title'] . '</h2>';
    echo '<p>' . $course2['description'] . '</p>';
    echo '<p>Ưu đãi giảm ' . $course2['voucher'] . '</p>';
    echo '<p>Khai giảng: ' . $course2['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course2['duration'] . '</p>';
    echo '</div>';
}
foreach ($courses3 as $course3) {
    echo '<div class="course">';
    echo '<img src="'. $course3['image'] .'"/>';
    echo '<h2>' . $course3['title'] . '</h2>';
    echo '<p>' . $course3['description'] . '</p>';
    echo '<p>Khai giảng: ' . $course3['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course3['duration'] . '</p>';
    echo '<p>Học phí: ' . $course3['fee'] . '</p>';
    echo '</div>';
}
foreach ($courses4 as $course4) {
    echo '<div class="course">';
    echo '<img src="'. $course4['image'] .'"/>';
    echo '<h2>' . $course4['title'] . '</h2>';
    echo '<p>' . $course4['description'] . '</p>';
    echo '<p>Khai giảng: ' . $course4['start_date'] . '</p>';
    echo '<p>Thời lượng: ' . $course4['duration'] . '</p>';
    echo '<p>Học phí: ' . $course4['fee'] . '</p>';
    echo '</div>';
}
foreach ($courses5 as $course5) {
    echo '<div class="course">';
    echo '<img src="'. $course5['image'] .'"/>';
    echo '<h2>' . $course5['title'] . '</h2>';
    echo '<p>' . $course5['description'] . '</p>';
    echo '<p>Khai giảng: ' . $course5['start_date'] . '</p>';
    echo '<p>Học phí: ' . $course5['fee'] . '</p>';
    echo '<p>Thời lượng: ' . $course5['duration'] . '</p>';
    echo '</div>';
}
