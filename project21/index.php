<?php include 'products/products.php' ?>
<?php include 'css.php' ?>
<?php
    $itemsPerpage = 4;
    $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
    $totalPage = ceil(count($products) / $itemsPerpage);
    $currentPageitem = array_slice($products, ($currentPage - 1) *$itemsPerpage , $itemsPerpage);
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class = "pages">
            <?php foreach ($currentPageitem as $product): ?>
                    <div class = "page">
                        <image src = "image/image1.png"></image>
                        <h5><?php echo $product['name']; ?></h5>
                        <p><?php echo $product['price']; ?></p>
                    </div>
            <?php endforeach ; ?>
    </div>

    <nav aria-label="Page navigation example">

        <ul class="pagination">
            <?php if ($currentPage > 1): ?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $currentPage - 1; ?>">Previous</a></li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPage; $i++): ?>
                    <li class="page-item"><a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endfor; ?>
            <?php if ($currentPage < $totalPage): ?>
                <li class="page-item"> <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>">Next</a></li>
            <?php endif; ?>

        </ul>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>