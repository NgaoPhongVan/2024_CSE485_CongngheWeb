<?php
    $products = [
        [
        "id" => 1,
        "name" => "T-Shirt",
        "price" => 15.99,
        "description" => "A comfortable and stylish T-Shirt."
        ],
        [
        "id" => 2,
        "name" => "Jean",
        "price" => 23,
        "description" => "A comfortable and stylish Jean."
        ],
        
       ];
    $itemsPerPage = 10;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPages = ceil(count($products) / $itemsPerPage);
    $currentPageItems = array_slice($products, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="product-list">
    <?php foreach ($currentPageItems as $product): ?>
 <div class="product">
//Tự xác định cách hiển thị và định dạng CSS
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



