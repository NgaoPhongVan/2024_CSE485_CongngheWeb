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
       ];
    $itemsPerPage = 2;
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
    <div class="container-fluid">
        <div class="product-list">
            <?php foreach ($currentPageItems as $product) {
                echo '<div class="product">';
                echo '<img src="'.$product['imgUrl'].'" alt="">';
                echo '<p>'.$product['description'].'</p>';
            } ?>
        </div>
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



