<?php
session_start();
$itemsPerPage = 12;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($Clients) / $itemsPerPage);
$currentPageItems = array_slice($Clients, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            cursor: pointer;
        }

        .container input {
            display: none;
        }

        .container svg {
            overflow: visible;
        }

        .path {
            fill: none;
            stroke: black;
            stroke-width: 6;
            stroke-linecap: round;
            stroke-linejoin: round;
            transition: stroke-dasharray 0.5s ease, stroke-dashoffset 0.5s ease;
            stroke-dasharray: 241 9999999;
            stroke-dashoffset: 0;
        }

        .container input:checked~svg .path {
            stroke-dasharray: 70.5096664428711 9999999;
            stroke-dashoffset: -262.2723388671875;
        }
    </style>
</head>

<body>
    <?php
    include_once '../views/layout/header.php';
    ?>
    <div style="margin-right: 170px; margin-left: 170px">
        <div class="mt-3">
            <div style="font-size: 18px" class="d-flex">
                <p class="me-2">steve smith |</p>
                <a class="text-decoration-none" href="">Log out</a>
            </div>
            <p>Welcome manager</p>
        </div>
        <?php if (isset($_GET['err'])) : ?>
            <div class="alert alert-success" role="alert">
                <?= $_GET['err'] ?>
            </div>
        <?php endif; ?>
        <div class="d-flex justify-content-end p-2">
            <button class="btn btn-primary"><a class="text-decoration-none text-white" href="<?= DOMAIN . '/?c=home&a=create' ?>"><i class="bi bi-plus-circle"></i></a></button>
        </div>
        <table class="container table table-bordered table-striped mt-3 mb-5">
            <thead>
                <tr style="background-color: white; color: black; font-size: 16px">
                    <th scope="col">#</th>
                    <th scope="col">Client</th>
                    <th scope="col">Project Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Project Manager</th>
                    <th scope="col">Hourly Rate</th>
                    <th scope="col">Budget</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($currentPageItems as $client) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $client->getClient() ?></td>
                        <td><?= $client->getProjectName() ?></td>
                        <td><?= $client->getStatus() ?></td>
                        <td><?= $client->getProjectManager() ?></td>
                        <td><?= $client->getHourlyRate() ?></td>
                        <td><?= $client->getBudget() ?></td>
                        <td>
                            <a class='m-2' href='<?= DOMAIN . '/?c=home&a=show&ClientID=' ?><?php echo $client->getClientID() ?>'>
                                <i class="bi bi-file-earmark-fill"></i>
                            </a>
                        </td>
                        <td>
                            <a class='m-2' href='<?= DOMAIN . '/?c=home&a=edit&ClientID=' ?><?php echo $client->getClientID() ?>'>
                                <i class='bi bi-pencil-fill'></i>
                            </a>
                        </td>
                        <td>
                            <a class='m-2' href='<?= DOMAIN . '/?c=home&a=delete&ClientID=' ?><?php echo $client->getClientID() ?>' onclick='return confirmDelete()'>
                                <i style="color: red" class="bi bi-x-circle"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="container d-flex justify-content-center mt-4">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item <?php if ($currentPage <= 1) : ?> disabled <?php endif ?>">
                    <a class="page-link" href="?c=home&page=<?php echo $currentPage - 1; ?>" tabindex="-1" aria-disabled="false">Previous</a>
                </li>
                <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                    <?php if ($i == $currentPage) : ?>
                        <li class="page-item active">
                            <a class="page-link" href="?c=home&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php else : ?>
                        <li class="page-item"><a class="page-link" href="?c=home&page=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                    <?php endif; ?>
                <?php endfor; ?>
                <li class="page-item <?php if ($currentPage >= $totalPages) : ?> disabled <?php endif ?>">
                    <a class="page-link" href="?c=home&page=<?php echo $currentPage + 1; ?>">Next</a>
                </li>
            </ul>
        </nav>
    </div>
    <?php
    include_once '../views/layout/footer.php';
    ?>
</body>
</html>