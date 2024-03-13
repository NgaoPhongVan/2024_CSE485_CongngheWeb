<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH BẠ ĐIỆN THOẠI CÔNG CỘNG</title>
    <link rel="icon" type="" href="assets/images/logoicon-removebg-preview.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @font-face {
            font-family: font_strong;
            src: url('..assets/fonts/SVN-Gilroy Medium.otf') format('truetype'), ;
            font-weight: normal;
            font-style: normal;
        }

        p {
            font-family: font_strong;
        }

        .text-head:hover {
            color: white;
        }

        .text-head {
            color: gray;
        }

        .form button {
            border: none;
            background: none;
            color: #8b8ba7;
        }

        .form {
            --timing: 0.3s;
            --width-of-input: 200px;
            --height-of-input: 40px;
            --border-height: 2px;
            --input-bg: #fff;
            --border-color: #2f2ee9;
            --border-radius: 30px;
            --after-border-radius: 1px;
            position: relative;
            width: var(--width-of-input);
            height: var(--height-of-input);
            display: flex;
            align-items: center;
            padding-inline: 0.8em;
            border-radius: var(--border-radius);
            transition: border-radius 0.5s ease;
            background: var(--input-bg, #fff);
        }

        .input {
            font-size: 0.9rem;
            background-color: transparent;
            width: 100%;
            height: 100%;
            padding-inline: 0.5em;
            padding-block: 0.7em;
            border: none;
        }

        .form:before {
            content: "";
            position: absolute;
            background: var(--border-color);
            transform: scaleX(0);
            transform-origin: center;
            width: 100%;
            height: var(--border-height);
            left: 0;
            bottom: 0;
            border-radius: 1px;
            transition: transform var(--timing) ease;
        }

        .form:focus-within {
            border-radius: var(--after-border-radius);
        }

        input:focus {
            outline: none;
        }

        .form:focus-within:before {
            transform: scale(1);
        }

        .reset {
            border: none;
            background: none;
            opacity: 0;
            visibility: hidden;
        }

        input:not(:placeholder-shown)~.reset {
            opacity: 1;
            visibility: visible;
        }

        .form svg {
            width: 17px;
            margin-top: 3px;
        }
    </style>
</head>

<body>
    <header class="container-fluid p-0 m-0" style="position: sticky; z-index:99; top: 0px;">
        <div class="container-fluid p-0 m-0" style="background-color: #1f2636;">
            <div style="background-color: #1f2636" class="head px-4 container d-flex justify-content-between">
                <div class="text-left-head d-flex small" style="line-height: 40px; font-size: 16px">
                    <a href="<?= DOMAIN . '/?c=department' ?>" class="text-decoration-none text-white">
                        <p class="text-head <?php if ($_GET['c'] == 'department') : ?> text-white <?php endif ?>" style="margin-bottom: 0px; margin-right: 20px; ">Danh bạ đơn vị</p>
                    </a>
                    <a href="<?= DOMAIN . '/?c=employee' ?>" class="text-decoration-none">
                        <p class="text-head <?php if ($_GET['c'] == 'employee') : ?> text-white <?php endif ?>" style="margin-bottom: 0px; margin-right: 20px;">Danh bạ cá nhân</p>
                    </a>
                    <?php if ($_SESSION['Role'] == "admin") : ?>
                        <a href="<?= DOMAIN . '/?c=user' ?>" class="text-decoration-none">
                            <p class="text-head <?php if ($_GET['c'] == 'user') : ?> text-white <?php endif ?>" style="margin-bottom: 0px; margin-right: 20px;">Quản lý tài khoản</p>
                        </a>
                    <?php endif ?>
                </div>
                <div class="d-flex">
                    <div class="text-left-head text-white d-flex small" style="line-height: 40px; font-size: 16px">
                        <a href="" class="text-decoration-none">
                            <p class="text-head" style="margin-bottom: 0px; margin-right: 20px;">Tuyển dụng</p>
                        </a>
                        <a href="" class="text-decoration-none">
                            <p class="text-head" style="margin-bottom: 0px; margin-right: 20px;">Điểm giao dịch</p>
                        </a>
                        <a href="<?= DOMAIN . '/?c=login&a=logout' ?>" class="text-decoration-none">
                            <p class="text-head" style="margin-bottom: 0px; margin-right: 20px;">Đăng xuất</p>
                        </a>
                        <a href="" class="text-white text-decoration-none">
                            <p class="text-head text-white" style="margin-bottom: 0px; margin-right: 20px; font-weight: bold">VI</p>
                        </a>
                        <a href="" class="text-decoration-none">
                            <p class="text-head" style="margin-bottom: 0px; margin-right: 20px;">EN</p>
                        </a>
                    </div>
                    <div class="dropdown" style="z-index:99999">
                        <button class="p-1 btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img style="width:30px; height:30px" class="rounded-circle" src="../public/assets/images/avata.jpeg" alt="">
                        </button>
                        <ul class="dropdown-menu bg-dark text-white p-3" style="min-width: 300px" aria-labelledby="dropdownMenuButton1">
                            <div class="row" style="background-color:#303030">
                                <div class="col-sm-2 mt-1">
                                    <img style="width:37px; height:37px" class="rounded-circle" src="../public/assets/images/avata.jpeg" alt="">
                                </div>
                                <div class="col-sm-10">
                                    <p class="m-0" style="font-size: 17px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 300px;"><?php if ($_SESSION['Role'] == "regular") { ?> Nhân viên <?php } else { ?> Quản trị viên <?php } ?>: <?= $_SESSION['FullName'] ?></p>
                                    <p class="m-0" style="white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 300px;"><?= $_SESSION['Email'] ?></p>
                                </div>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-white">
            <div class="container bg-white">
                <div class="head2 d-flex">
                    <div class="img_head" style="width: 90px; height: 70px">
                        <img class="w-100 h-100" src="assets/images/logoicon-removebg-preview.png" alt="">
                    </div>
                    <div class="text-content-head d-flex justify-content-between fw-bold" style="font-size: 15.5px">
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">GIỚI THIỆU</p>
                        </a>
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">TIN TỨC & THÔNG BÁO</p>
                        </a>
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">TUYỂN SINH</p>
                        </a>
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">ĐÀO TẠO</p>
                        </a>
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">NGHIÊN CỨU</p>
                        </a>
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">ĐỐI NGOẠI</p>
                        </a>
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">VĂN BẢN</p>
                        </a>
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">SINH VIÊN</p>
                        </a>
                        <a href="" class="text-decoration-none mx-2" style="line-height: 70px;">
                            <p class="m-0" style="color: #555555;">LIÊN HỆ</p>
                        </a>
                        <div class="mt-2 ms-3">
                            <form class="form">
                                <button>
                                    <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                                        <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </button>
                                <input class="input" placeholder="Type your text" required="" type="text">
                                <button class="reset" type="reset">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                        </path>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>