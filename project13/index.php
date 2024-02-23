<?php
    $courses = [
        [
        'img' => 'img/ltvqt.png.webp',
        'title' => 'HỌC VIÊN QUỐC TẾ',
        'description' => 'Chương trình đào tạo chính thức tại Việt Nam từ
       Aptech Global. Phát triển nghề nghiệp sinh viên IT như một lập trình viên 
       quốc tế.',
        'fee' => '15.000.000 VND',
        'start_date' => '2/2/24',
        'duration' => '2 - 2.5 năm'
        ],
        [
            'img' => 'img/fullstack.png.webp',
            'title' => 'LẬP TRÌNH WEB FULLSTACK',
            'description' => 'Khóa học phù hợp với người bất đầu lặp trình hoặc người chuyển nghề. Trang bị từ frontend đến backend, xây dựng website hoàn chỉnh sau khóa học.',
            'fee' => 'Ưu đãi giảm 15% học phí',
            'start_date' => 'Khai giảng: 2/2024',
            'duration' => 'Thời lượng: 6 tháng'
        ],
        [
            'img' => 'img/java.png.webp',
            'title' => 'LẬP TRÌNH JAVA FULLSTACK',
            'description' => 'Phát triển ứng dụng web từ cơ bản đến năng cao bằng Java, các ứng dụng doanh nghiệp sử dụng J2EE, Servlet, JSP, Spring Framework, ẸB,...',
            'fee' => 'Ưu đãi giảm 15% học phí',
            'start_date' => 'Khai giảng: 2/2024',
            'duration' => 'Thời lượng: 236 giờ'
        ],
        [
            'img' => 'img/php.png.webp',
            'title' => 'LẬP TRÌNH PHP & LARAVEL',
            'description' => 'PHP là một trong các ngôn ngữ thiết kế web mạnh nhất. Khóa học trang bị kỹ năng xây dựng web hoàn chỉnh sử dụng PHP kết hợp Laravel Framework',
            'fee' => 'Khai giảng: 26/2/2024',
            'start_date' => 'Ưu đãi 10% học phí',
            'duration' => 'Thời lượng: 36 giờ'
        ],
        [
            'img' => 'img/lt.net.png.webp',
            'title' => 'KHÓA HỌC LẬP TRÌNH .NET',
            'description' => 'Phát triển ứng dụng web sử dụng nền tảng ASP.NET Core MVC. Để học tốt khóa học yêu cầu học viên đã có kiến thức C# và Frontend.',
            'fee' => 'Khai giảng: 2/2024',
            'start_date' => 'Ưu đãi 10% học phí',
            'duration' => 'Thời lượng: 40 giờ'
        ],
        [
            'img' => 'img/sqlserver.png.webp',
            'title' => 'LẬP TRÌNH SQL SERVER',
            'description' => 'Trang bị những kiến thức nền tảng vững chắc về SQL Server như các kỹ thuật: lọc dữ liệu, phân tích, thiết kế và quản trị cơ sở dữ liệu,...',
            'fee' => 'Khai giảng: 2/2024',
            'start_date' => 'Ưu đãi 10% học phí',
            'duration' => 'Thời lượng: 30 giờ'
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
    <style>
        .container-fluid{
            margin: 10px;
        }
        .head{
            border-left: 4px solid #8b2627;
            color: #8b2627;
            font-weight: 700;
            font-size: 20px;
            padding-left: 10px;
            margin-bottom: 20px;
        }
        img {
            height: 200px;
            width: 480px;
            margin-bottom: 10px;
        }
        h5 {
            font-weight: 700;
        }
        .content{
            width: 480px;
            margin-top: 10px;
        }
        .contents{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .bx {
            margin-right: 5px;
            color: #8b2627;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="head">KHÓA HỌC SẮP KHAI GIẢNG</div>
        <div class="contents">
            <?php foreach ($courses as $course) {
                echo '<div class="content">';
                echo '<img src="'.$course['img'].'" alt="">';
                echo '<h5>' . $course['title'] . '</h5>';
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