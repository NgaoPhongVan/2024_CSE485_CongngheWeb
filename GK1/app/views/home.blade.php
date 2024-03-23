<?php
session_start();
$itemsPerPage = 12;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($actors) / $itemsPerPage);
$currentPageItems = array_slice($actors, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
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
        <h4 style="color: #58b0e0" class="fw-bold">DANH MỤC QUẢN LÝ TÀI KHOẢN</h4>
        <button class="btn btn-primary"><i class="bi bi-plus-circle me-1"></i><a class="text-decoration-none text-white" href="<?= DOMAIN.'/?c=home&a=create'?>">ADD NEW</a></button>
        <table class="container table table-bordered table-striped mt-3 mb-5">
            <thead>
                <tr style="background-color: #017cff; color: white; font-size: 16px">
                    <th scope="col">
                        <label class="container">
                            <input type="checkbox">
                            <svg viewBox="0 0 64 64" height="1.5em" width="1.5em">
                                <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                            </svg>
                        </label>
                    </th>
                    <th scope="col">Action</th>
                    <th scope="col">Actor ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Last Update</th>
                    <th scope="col">Film</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($currentPageItems as $actor) : ?>
                    <tr>
                        <td>
                            <label class="container">
                                <input type="checkbox">
                                <svg viewBox="0 0 64 64" height="1.5em" width="1.5em">
                                    <path d="M 0 16 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 16 L 32 48 L 64 16 V 8 A 8 8 90 0 0 56 0 H 8 A 8 8 90 0 0 0 8 V 56 A 8 8 90 0 0 8 64 H 56 A 8 8 90 0 0 64 56 V 16" pathLength="575.0541381835938" class="path"></path>
                                </svg>
                            </label>
                        </td>
                        <td>
                            <a class='m-2' href=''>
                                <i class='bi bi-eye-fill'></i>
                            </a>
                            <a class='m-2' href='<?= DOMAIN.'/?c=home&a=edit&ActorID='?><?php echo $actor->getActorID()?>'>
                                <i class='bi bi-pencil-fill'></i>
                            </a>
                            <a class='m-2' href='<?= DOMAIN.'/?c=home&a=delete&ActorID='?><?php echo $actor->getActorID()?>' onclick='return confirmDelete()'>
                                <i class='bi bi-trash-fill'></i>
                            </a>
                        </td>
                        <td><?= $actor->getActorID() ?></td>
                        <td><?= $actor->getFirstName() ?></td>
                        <td><?= $actor->getLastName() ?></td>
                        <td><?= $actor->getLastUpdate() ?></td>
                        <td><a class="text-decoration-none" href="">Show ></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <button class="btn btn-danger"><i class="bi bi-x-circle me-1"></i><a id="deleteLink" class="text-decoration-none text-white" href="">DELETE SELECTED RECORDS</a></button>
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
                        <li class="page-item"><a class="page-link" href="?c=home&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
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
<script>
    $(document).ready(function() {
        $('thead input[type="checkbox"]').click(function() {
            var isChecked = $(this).prop('checked');
            $('tbody input[type="checkbox"]').prop('checked', isChecked);
        });
    });
    var chuoi;

$(document).ready(function() {
    var selectedActors = []; 

    $('tbody input[type="checkbox"]').click(function() {
        var actorID = $(this).closest('tr').find('td:eq(2)').text();

        if ($(this).prop('checked')) {
            selectedActors.push(actorID);
        } else {
            var index = selectedActors.indexOf(actorID);
            if (index > -1) {
                selectedActors.splice(index, 1);
            }
        }
        chuoi = selectedActors.join(',');
        document.getElementById("deleteLink").href = '<?=DOMAIN?>' + '/?home&a=multi_delete&chuoi=' + chuoi;    
    });

    $('thead input[type="checkbox"]').click(function() {
        var isChecked = $(this).prop('checked'); 

        $('tbody input[type="checkbox"]').each(function() {
            var actorID = $(this).closest('tr').find('td:eq(2)').text(); 

            if (isChecked) {
                if (!selectedActors.includes(actorID)) {
                    selectedActors.push(actorID);
                }
            } else {
                var index = selectedActors.indexOf(actorID);
                if (index > -1) {
                    selectedActors.splice(index, 1);
                }
            }
        });
        chuoi = selectedActors.join(',');
        document.getElementById("deleteLink").href = '<?=DOMAIN?>' '/?home&a=multi_delete&chuoi=' + chuoi +'';     
    });
});

</script>

</html>