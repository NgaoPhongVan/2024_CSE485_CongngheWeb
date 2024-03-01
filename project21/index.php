
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project21</title>
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">

</head>
<body style="font-family: Arial">
<?php
require_once 'dbconnection.php';
$db = new dbconnection();
$conn = $db->getConnection();

$sql = "SELECT * FROM products";
$stmt = $conn->query($sql);
$products = [];
while ($row = $stmt->fetch()) {
    $products[] = $row;
}


$itemPerPage = 4;
$totalPages = ceil(count($products) / $itemPerPage);
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$currentPageItems = array_slice($products, ($currentPage - 1) * $itemPerPage, $itemPerPage)
?>

<div class="container">
    <div class="row">
        <?php foreach ($currentPageItems as $item) { ?>
            <div class="col-3">
                <div class="card">
                    <img src="<?php echo $item['image'] ?>" class="card-img-top" alt="card 01">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold text-uppercase "><?php echo $item['name'] ?></h5>
                        <p class="card-text"><?php echo $item['price'] ?></p>
                        <p class="card-text"><?php echo $item['description'] ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
        <nav class="mt-3" >
            <ul class="pagination">
                <?php if ($currentPage > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $currentPage - 1 ?>" aria-label="Previous">
                            <span aria-hidden="true">Previous</span>
                        </a>
                    </li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                    </li>
                <?php endfor; ?>
                <?php if ($currentPage < $totalPages): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?php echo $currentPage + 1 ?>" aria-label="Next">
                            <span aria-hidden="true">Next</span>
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>

    </div>
</div>

</body>
<script src="./bootstrap/bootstrap-5.3.0-alpha1-dist/js/bootstrap.bundle.js"></script>
<script src="./bootstrap/bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>

</html>