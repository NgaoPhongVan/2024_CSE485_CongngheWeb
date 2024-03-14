<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh bạ đơn vị</title>
    <link rel="icon" type="" href="assets/images/logoicon-removebg-preview.png">
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

        .button1 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgb(20, 20, 20);
            border: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0px 0px 0px 4px rgba(180, 160, 255, 0.253);
            cursor: pointer;
            transition-duration: 0.3s;
            overflow: hidden;
            position: relative;
        }

        .svgIcon {
            width: 12px;
            transition-duration: 0.3s;
        }

        .svgIcon path {
            fill: white;
        }

        .button1:hover {
            width: 140px;
            border-radius: 50px;
            transition-duration: 0.3s;
            background-color: rgb(181, 160, 255);
            align-items: center;
        }

        .button1:hover .svgIcon {
            /* width: 20px; */
            transition-duration: 0.3s;
            transform: translateY(-200%);
        }

        .button1::before {
            position: absolute;
            bottom: -20px;
            content: "Upload";
            color: white;
            /* transition-duration: .3s; */
            font-size: 0px;
        }

        .button1:hover::before {
            font-size: 13px;
            opacity: 1;
            bottom: unset;
            /* transform: translateY(-30px); */
            transition-duration: 0.3s;
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
                    <img src="../public/assets/images/1.jpeg" class="d-block w-100" alt="...">
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
        <div class="d-flex justify-content-between">
            <h4 style="color: #58b0e0" class="fw-bold">DANH BẠ ĐIỆN THOẠI ĐƠN VỊ</h4>
            <a class="btn btn-primary" rel="stylesheet" href="../../app/public/index.php?c=department&a=GetID">Thêm </a>
        </div>
        <table class="container table table-bordered table-striped mt-3 mb-5">
            <thead>
                <tr style="background-color: #017cff; color: white; font-size: 16px">
                    <th scope="col">STT</th>
                    <th scope="col">TÊN ĐƠN VỊ</th>
                    <th scope="col">ĐỊA CHỈ</th>
                    <th scope="col">SỐ ĐIỆN THOẠI</th>
                    <th scope="col">THAO TÁC</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($departments as $department) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $department->getDepartmentName() ?></td>
                        <td><?= $department->getAddress() ?></td>
                        <td><?= $department->getPhone() ?></td>
                        <td>
                            <!-- Button trigger modal -->
                            <a class='m-2' type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $department->getDepartmentID() ?>">
                                <i class='bi bi-eye-fill'></i>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop<?= $department->getDepartmentID() ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="modal-body">
                                                <h2 class="pb-2 text-center">Profile Information</h2>
                                                <div class="image text-center mx-auto" style="width: 120px; height: 120px">
                                                    <img class="w-100 h-100 rounded-circle" src="../public/assets/images/avata.jpeg" alt="">
                                                </div>
                                                <table class="table">
                                                    <tr>
                                                        <td><label for="name">Tên đơn vị:</label></td>
                                                        <td><input type="text" name="name" value="<?= $department->getDepartmentName() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="address">Địa chỉ:</label></td>
                                                        <td> <input type="text" name="address" value="<?= $department->getAddress() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                                                    </tr>
                                                    <tr>
                                                        <td> <label for="email">Email:</label></td>
                                                        <td><input type="email" name="email" value="<?= $department->getEmail() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="phone">Số điện thoại:</label></td>
                                                        <td><input type="phone" name="phone" value="<?= $department->getPhone() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                                                    </tr>
                                                    <tr>
                                                        <td><label for="phone">Website:</label></td>
                                                        <td><input type="phone" name="phone" value="<?= $department->getWebsite() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                                                    </tr>
                                                </table>
                                                <?php if ($_SESSION['Role'] == 'admin') : ?>
                                                    <label for="avatar">Avatar:</label>
                                                    <input type="file" name="avatar" accept="images/*">
                                                    <br><br>
                                                    <button class="button1 mx-auto mb-2" type="submit">
                                                        <svg class="svgIcon" viewBox="0 0 384 512">
                                                            <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"></path>
                                                        </svg>
                                                    </button>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if ($_SESSION['Role'] == 'admin') : ?>
                                <a class='m-2' href='<?= DOMAIN . '?c=department&a=DeleteDepartment&id=' ?><?= $department->getDepartmentID() ?>' onclick='return confirmDelete()'>
                                    <i class='bi bi-trash-fill'></i>
                                </a>
                                <div class="modal fade show" id="#staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header ">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        function confirmDelete() {
            return confirm('Bạn có muốn xóa đơn vị này?');
        }
    </script>
    <?php
    include_once '../views/layout/footer.php';
    ?>
</body>

</html>