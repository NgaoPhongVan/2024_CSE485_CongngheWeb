<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        .rating {
            display: flex;
            flex-direction: row-reverse;
            /* gap: 0.3rem; */
            --stroke: #666;
            --fill: #ffc73a;
        }

        .rating input {
            appearance: unset;
        }

        .rating label {
            cursor: pointer;
        }

        .rating svg {
            width: 2rem;
            height: 2rem;
            overflow: visible;
            fill: transparent;
            stroke: var(--stroke);
            stroke-linejoin: bevel;
            stroke-dasharray: 12;
            animation: idle 4s linear infinite;
            transition: stroke 0.2s, fill 0.5s;
        }

        @keyframes idle {
            from {
                stroke-dashoffset: 24;
            }
        }

        .rating label:hover svg {
            stroke: var(--fill);
        }

        .rating input:checked~label svg {
            transition: 0s;
            animation: idle 4s linear infinite, yippee 0.75s backwards;
            fill: var(--fill);
            stroke: var(--fill);
            stroke-opacity: 0;
            stroke-dasharray: 0;
            stroke-linejoin: miter;
            stroke-width: 8px;
        }

        @keyframes yippee {
            0% {
                transform: scale(1);
                fill: var(--fill);
                fill-opacity: 0;
                stroke-opacity: 1;
                stroke: var(--stroke);
                stroke-dasharray: 10;
                stroke-width: 1px;
                stroke-linejoin: bevel;
            }

            30% {
                transform: scale(0);
                fill: var(--fill);
                fill-opacity: 0;
                stroke-opacity: 1;
                stroke: var(--stroke);
                stroke-dasharray: 10;
                stroke-width: 1px;
                stroke-linejoin: bevel;
            }

            30.1% {
                stroke: var(--fill);
                stroke-dasharray: 0;
                stroke-linejoin: miter;
                stroke-width: 8px;
            }

            60% {
                transform: scale(1.2);
                fill: var(--fill);
            }
        }

        .button {
            width: 90px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            gap: 10px;
            background-color: #2c88ce;
            border-radius: 30px;
            color: white;
            font-weight: 600;
            border: none;
            position: relative;
            cursor: pointer;
            transition-duration: .2s;
            box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.116);
            padding-left: 8px;
            transition-duration: .5s;
        }

        .svgIcon {
            height: 25px;
            transition-duration: 1.5s;
        }

        .bell path {
            fill: rgb(19, 19, 19);
        }

        .button:hover {
            background-color: #71d1f0;
            transition-duration: .5s;
        }

        .button:active {
            transform: scale(0.97);
            transition-duration: .2s;
        }

        .button:hover .svgIcon {
            transform: rotate(360deg);
            transition-duration: 1.5s;
        }
    </style>
</head>

<body>
    <?php
    include_once '../views/layout/header.php';
    ?>
    <div class="container-fluid mb-5 p-0">
        <!-- <img class="w-100" src="../public/assets/images/snapedit_1709546479145.jpeg" alt=""> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 550px">
                    <img src="../public/assets/images/1.jpeg" class="d-block h-100 w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 550px">
                    <img src="../public/assets/images/12.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" style="height: 550px">
                    <img src="../public/assets/images/13.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div style="margin-right: 170px; margin-left: 170px">
        <h4 style="color: #58b0e0" class="fw-bold">DANH BẠ ĐIỆN THOẠI ĐƠN VỊ</h4>
        <table class="container table table-bordered table-striped mt-3 mb-5">
            <thead>
                <tr style="background-color: #017cff; color: white; font-size: 16px">
                    <th scope="col">ID</th>
                    <th scope="col">TÊN ĐƠN VỊ</th>
                    <th scope="col">ĐỊA CHỈ</th>
                    <th scope="col">SỐ ĐIỆN THOẠI</th>
                    <th scope="col">THAO TÁC</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departments as $department) : ?>
                    <tr>
                        <td><?= $department->getDepartmentID() ?></td>
                        <td><?= $department->getDepartmentName() ?></td>
                        <td><?= $department->getAddress() ?></td>
                        <td><?= $department->getPhone() ?></td>
                        <td>
                            <a class='m-2' href='../../app/routes/web.php?c=department&a=DetailDepartmentByID&id=<?php echo $department->getDepartmentID() ?>'>
                                <i class='bi bi-eye-fill'></i>
                            </a>
                        <?php if ($_SESSION['Role'] == 'admin') : ?>
                            <a class='m-2' href='../../app/routes/web.php?c=department&a=ViewUpdateDepartment&id=<?php echo $department->getDepartmentID() ?>'>
                                <i class='bi bi-pencil-fill'></i>
                            </a>
                            <a class='m-2' href='../../app/routes/web.php?c=department&a=DeleteDepartment&id=<?php echo $department->getDepartmentID() ?>' onclick='return confirmDelete()'>
                                <i class='bi bi-trash-fill'></i>
                            </a>
                            </td>
                        <?PHP endif; ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this user?');
        }
    </script>

    <?php
    include_once '../views/layout/footer.php';
    ?>
</body>

</html>