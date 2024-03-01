<!-- courses.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <title>Danh sách khóa học</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        .course {
            background-color: #f9f9f9;
            padding: 10px;
            margin-bottom: 20px;
            flex-basis: calc(30% - 20px);

        }
        .upcoming_course{
            border-left: 5px solid red;
            padding: 5px 0 5px 5px;
            color: red;
            margin-left: 3.5%;
        }
        .main-course{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly; /* Căn các phần tử theo khoảng cách đều giữa các cột */
            margin: 0 -10px; /* Tạo một khoảng cách bằng nhau ở hai bên của main-course */
        }
        .image{
            max-width: 100%;
        }
        .title{
            font-size: 100%;
            font-style: inherit;
        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #000000;
        }
        i{
            color:#9b292a;
        }
    </style>
</head>
<body>
<?php
// Dữ liệu khóa học lưu động trong mảng
$courses = [
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2024/01/banner-1900x750-1.png.webp',
        'title' => 'LẬP TRÌNH VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chuẩn quốc tế và toàn diện. 
         Phù hợp với học sinh tốt nghiệp THPT, sinh viên và người định hướng 
         theo nghề lập trình chuyên nghiệp..',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2023/08/banner-1920x750_ITT.png.webp',
        'title' => 'LẬP TRÌNH WEB FULLSTACK',
        'description' => 'Khóa học phù hợp với người bắt đầu lập trình hoặc người chuyển nghề. 
        Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học..',
        'fee' => 'ưu đãi giảm 24% học phí',
        'start_date' => 'khai giảng: 2/2/24',
        'duration' => 'thời lượng: 6 tháng'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-java.png.webp',
        'title' => 'LẬP TRÌNH JAVA FULLSTACk',
        'description' => 'Phát triển ứng dụng web từ cơ bản đến nâng cao bằng Java, 
        các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, EJB,....',
        'fee' => 'ưu đãi giảm 24% học phí',
        'start_date' => '2/2/24',
        'duration' => 'thời lượng: 236 giờ'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-php.png.webp',
        'title' => 'LẬP TRÌNH PHP & LARAVEL',
        'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị
         kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework.',
        'fee' => 'Học phí: 9.600.000 VNĐ',
        'start_date' => '26/2/24',
        'duration' => 'thời lượng: 36 giờ'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2021/05/lap-trinh-.net_.png.webp',
        'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
        'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt
         khóa học yêu cầu học viên đã có kiến thức C# và Frontend..',
         'fee' => 'Học phí: 6.000.000 VNĐ',
        'start_date' => '2/2/24',
        'duration' => 'thời lượng: 40 giờ'
    ],
    [
        'img' => 'https://aptech.vn/wp-content/uploads/2021/06/lap-trinh-csdl-voi-sql.png.webp',
        'title' => 'LẬP TRÌNH SQL SERVER',
        'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: 
        lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
        'fee' => 'Học phí: 4.500.000 VNĐ',
        'start_date' => '2/2/24',
        'duration' => 'thời lượng: 30 giờ'
    ],
];
// Hiển thị danh sách khóa học
echo '<h3 class = "upcoming_course">KHÓA HỌC SẮP KHAI GIẢNG</h3>';
echo '<div class = "main-course"> ';
foreach ($courses as $course) {
    echo '<div class="course">';
    echo "<img class = 'image' src='".$course['img']."' >";
    echo '<h2 class = "title">' . $course['title'] . '</h2>';
    echo '<p class = "description" >' . $course['description'] . '</p>';
    echo '<p  class = "fee"><i class="bx bxs-gift"></i> Học phí: ' . $course['fee'] . '</p>';
    echo '<p class = "start_date"><i class="bx bxs-bookmark-star" ></i>Khải giảng: ' . $course['start_date'] . '</p>';
    echo '<p class = "duration"><i class="bx bxs-time-five" ></i>Thời lượng: ' . $course['duration'] . '</p>';
    echo '</div>';
}
echo '</div>';
?>

</body>
</html>

