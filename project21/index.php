<?php
    $products = [
        [
            "id" => 1,
            "name" => "T-Shirt",
            "price" => 15.99,
            "description" => "A comfortable and stylish T-Shirt.",
            "imgUrl" => "./assets/images/1 (1).jpeg"
        ],
        [
            "id" => 2,
            "name" => "Jean",
            "price" => 23,
            "description" => "A comfortable and stylish Jean.",
            "imgUrl" => "./assets/images/1 (2).jpeg"
        ],
        [
            "id" => 3,
            "name" => "Blue",
            "price" => 10,
            "description" => "A comfortable and stylish Hihi.",
            "imgUrl" => "./assets/images/1 (3).jpeg"
        ],
        [
            "id" => 4,
            "name" => "Vest",
            "price" => 12,
            "description" => "A comfortable and stylish Haha.",
            "imgUrl" => "./assets/images/1 (4).jpeg"
        ],
        [
            "id" => 5,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (5).jpeg"
        ],
        [
            "id" => 6,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (1).jpg"
        ],
        [
            "id" => 7,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (2).jpg"
        ],
        [
            "id" => 8,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (3).jpg"
        ],
        [
            "id" => 9,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (4).jpg"
        ],
        [
            "id" => 10,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (5).jpg"
        ],
        [
            "id" => 11,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (6).jpg"
        ],
        [
            "id" => 12,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (7).jpg"
        ],
        [
            "id" => 13,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (8).jpg"
        ],
        [
            "id" => 14,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (9).jpg"
        ],
        [
            "id" => 15,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (10).jpg"
        ],
        [
            "id" => 16,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (11).jpg"
        ],
        [
            "id" => 17,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (12).jpg"
        ],
        [
            "id" => 18,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (13).jpg"
        ],
        [
            "id" => 18,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (14).jpg"
        ],
        [
            "id" => 18,
            "name" => "Hihi",
            "price" => 9,
            "description" => "A comfortable and stylish Huhu.",
            "imgUrl" => "./assets/images/1 (15).jpg"
        ],
       ];
    $itemsPerPage = 4;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
    // echo '<pre>';
    // print_r($currentPageItems);
    // print_r($products);
    // echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project21</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
<body>
    <div class="hihi container-fluid">
        <div class="product-list">
            <?php foreach ($currentPageItems as $product) {
                echo '<div class="product">';
                echo '<img src="'.$product['imgUrl'].'" alt="" style="margin-bottom: 10px; margin-top: 10px">';
                echo '<h5>'.$product['name'].'</h5>';
                echo '<p>'.$product['description'].'</p>';
                echo '<p>'.$product['price'].'</p>';
                echo '</div>';
            } ?>
        </div>
    </div>
    <div class="container-fluid pagination" style="width: 150px; display: flex; justify-content: space-between;">
        <?php if ($currentPage > 1): ?>
            <a href="?page=<?php echo $currentPage - 1; ?>" style="text-decoration: none;">Previous</a>
        <?php endif; ?>
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <?php if ($i == $currentPage): ?>
                <span class="active"><?php echo $i; ?></span>
            <?php else: ?>
                <a href="?page=<?php echo $i; ?>" style="text-decoration: none;"><?php echo $i; ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if ($currentPage < $totalPages): ?>
            <a href="?page=<?php echo $currentPage + 1; ?>" style="text-decoration: none;">Next</a>
        <?php endif; ?>
    </div>
</body>
</html>