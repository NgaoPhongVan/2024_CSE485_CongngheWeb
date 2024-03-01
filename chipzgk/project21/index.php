<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boo.cigrose</title>
    <style>
        /* Thêm các định kiểu CSS của bạn ở đây */
        body {
            padding: 50px;
        }
        .list {
            display: flex;
            flex-wrap: nowrap;
            gap: 30px;
            align-items: flex-start;
            overflow-x: auto;
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
            width: 25%;
            flex-basis: 25%;
            box-sizing: border-box;
        }
        img {
            width: 200px;
            height: 200px;
        }
        .course h2 {
            color: #333;
        }
        .course p {
            color: #666;
        }
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
        }

        .course {
            width: 25%;
            flex-basis: 25%;
        }
    </style>
</head>
<body>
<?php
$products = [
    [
        "id" => 1,
        'image' => 'https://media.bongda.com.vn/files/vuong.hoang/2024/02/29/ytutkyyku-1542.jpg',
        "name" => "Ô đê gát",
        "price" => "$ 1409",
        "description" => "Captain"
    ],
    [
        "id" => 2,
        'image' => 'https://i2-prod.football.london/incoming/article28199811.ece/ALTERNATES/s1200c/0_Kai-Havertz-and-Arsenal.jpg',
        "name" => "Ha vớt",
        "price" => "$ 1409",
        "description" => "Kai công chúa"
    ],
    [
        "id" => 3,
        'image' => 'https://media.bongda.com.vn/files/tung.nguyen/2023/12/08/declan-rice-arsenal-3-1716.jpg',
        "name" => "Rai",
        "price" => "$ 1409",
        "description" => "ST25"
    ],
    [
        "id" => 4,
        'image' => 'https://media.bongda.com.vn/resize/392x339/files/anh.nguyen/2023/10/09/trossard-2220.jpg',
        "name" => "Trô sát",
        "price" => "$ 1409",
        "description" => "Trâu sắt"
    ],
    [
        "id" => 5,
        'image' => 'https://image.sggp.org.vn/w1000/Uploaded/2024/evofzyresfj/2023_10_09/erhae-1135.jpg',
        "name" => "Ma ti nê li",
        "price" => "$1409",
        "description" => "Rô béo"
    ],
    [
        "id" => 6,
        'image' => 'https://media.bongda.com.vn/files/huy.phandang/2021/08/22/0_gettyimages-1331942694-2159.jpg',
        "name" => "Goai",
        "price" => "$ 1409",
        "description" => "Trắng"
    ],
    [
        "id" => 7,
        'image' => 'https://media-cdn-v2.laodong.vn/storage/newsportal/2023/11/20/1269899/Oleksandr-Zinchenko.jpg',
        "name" => "Din chên cô",
        "price" => "$ 1409",
        "description" => "Tổng tư lệnh"
    ],
    [
        "id" => 8,
        'image' => 'https://static.independent.co.uk/2023/07/07/15/edcc112a328bccc9ecd32c9866181040Y29udGVudHNlYXJjaGFwaSwxNjg4ODIwOTk3-2.68492578.jpg',
        "name" => "Sa li ba",
        "price" => "$ 1409",
        "description" => "Salibáo"
    ],
    [
        "id" => 9,
        'image' => 'https://media.baoquangninh.vn/upload/image/202402/medium/2182238_9cd7731100bf5ea1b3acc9e703bf4b1c.jpg',
        "name" => "Sa ka",
        "price" => "$ 1409",
        "description" => "Starboy"
    ],
    [
        "id" => 10,
        'image' => 'https://i2-prod.football.london/incoming/article28536539.ece/ALTERNATES/s615/0_Gabriel.jpg',
        "name" => "Ga bờ ri eo",
        "price" => "$ 1409",
        "description" => "Big Gabi"
    ],
    [
        "id" => 11,
        'image' => 'https://static.independent.co.uk/2023/11/28/06/7d506bf0128d74549b7cdac7304dcc5aY29udGVudHNlYXJjaGFwaSwxNzAxMjI3MzE1-2.71197722.jpg',
        "name" => "Pa ti",
        "price" => "$ 1409",
        "description" => "It's party time"
    ],
    [
        "id" => 12,
        'image' => 'https://media-cdn-v2.laodong.vn/storage/newsportal/2023/11/12/1266472/Jorginho-3-01.jpg',
        "name" => "Gioóc gi nhô",
        "price" => "$ 1409",
        "description" => "Thần rùa"
    ],
    [
        "id" => 13,
        'image' => 'https://www.arsenal.com/sites/default/files/styles/desktop_16x9/public/images/smith-rowe-everton.png?auto=webp&itok=TeKYAix1',
        "name" => "Râu",
        "price" => "$ 1409",
        "description" => "Huấn rose"
    ],
    [
        "id" => 14,
        'image' => 'https://assets.goal.com/v3/assets/bltcc7a7ffd2fbf71f5/blt2f875792d43ed51a/64037cac74c5271fe7b23943/nelson-hands.jpg?auto=webp&format=pjpg&width=3840&quality=60',
        "name" => "Neo sơn",
        "price" => "$ 1409",
        "description" => "90+7"
    ],
    [
        "id" => 15,
        'image' => 'https://e0.365dm.com/23/05/2048x1152/skysports-aaron-ramsdale-arsenal_6157006.jpg?20230516120759',
        "name" => "Ram đêu",
        "price" => "$ 1409",
        "description" => "Báo 9 ngón"
    ],
    [
        "id" => 16,
        'image' => 'https://cdn1.arsenalinsider.com/uploads/19/2023/09/GettyImages-1640405891-1140x760.jpg',
        "name" => "Via ra",
        "price" => "$ 1409",
        "description" => "Nghiện sỹ"    ],
    // ... add more products
];
$itemsPerPage = 4;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($products) / $itemsPerPage);
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>
<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
        <div class="course">
            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h2><?php echo $product['name']; ?></h2>
            <p><?php echo $product['description']; ?></p>
            <p>Price: <?php echo $product['price']; ?></p>
        </div>
    <?php endforeach; ?>
</div>
<div class="pagination">
    <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">Previous</a>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <?php if ($i == $currentPage): ?>
            <span class="active"><?php echo $i; ?></span>
        <?php else: ?>
            <a href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>
    <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">Next</a>
    <?php endif; ?>
</div>
</body>
</html>