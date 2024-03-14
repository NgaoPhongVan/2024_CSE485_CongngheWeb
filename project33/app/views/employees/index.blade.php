<?php
session_start();
$itemsPerPage = 12;
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
$totalPages = ceil(count($employees) / $itemsPerPage);
$currentPageItems = array_slice($employees, ($currentPage - 1) * $itemsPerPage, $itemsPerPage);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Danh bạ cá nhân</title>
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
          <img src="../public/assets/images/1.jpeg" class="d-block w-100" alt="..." style="height: auto;">
        </div>
        <div class="carousel-item" style="height: 550px">
          <img src="../public/assets/images/12.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" style="height: 550px">
          <img src="../public/assets/images/1.jpeg" class="d-block w-100" alt="...">
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
  <div class="mb-4" style="margin-right: 160px; margin-left: 160px">
    <div class="d-flex justify-content-between">
      <h4 style="color: #58b0e0" class="fw-bold">DANH BẠ ĐIỆN THOẠI CÁ NHÂN</h4>
      <div class="d-flex">
        <div class="dropdown me-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-funnel me-1"></i>Lọc: Khoa
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Đổ khoa ra đây</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-funnel me-1"></i>Lọc: Bộ môn
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
            <li><a class="dropdown-item" href="#">Đổ bộ môn ra đây</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="" style="margin-right: 160px; margin-left: 160px">
    <div class="container p-0 mb-5 d-flex gap-5 justify-content-between flex-wrap ">
      <?php foreach ($currentPageItems as $employee) : ?>
        <div style="width: 340px;" class="d-flex flex-column">
          <div class="head-content row rounded-top-3 shadow p-3 bg-body rounded">
            <div class="col-sm-8 pb-0 px-3 py-2">
              <p style="font-size: 20px">Nhân viên</p>
            </div>
            <div class="col-sm-4"></div>
          </div>
          <div style="background-color: white;" class="main-content row py-1 shadow p-3 bg-body rounded">
            <div class="col-sm-8 p-0">
              <p style="font-size: 18px" class="m-0 ms-4 mb-1"><b><?= $employee->getFullName() ?></b></p>
              <p style="font-size: 17px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 200px;" class="m-0 ms-4 mb-1"><b>About: </b><?= $employee->getPosition() ?></p>
              <p style="font-size: 17px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 200px;" class="m-0 ms-4 mb-1"><b>Address: </b><?= $employee->getAddress() ?></p>
            </div>
            <div class="col-sm-4 p-0 ">
              <img style="width:90px; height:90px" class="rounded-circle" src="../public/assets/images/avata.jpeg" alt="">
            </div>
          </div>
          <div style="background-color: #f1f5f8;" class="footer-content row py-2 rounded-bottom-3 shadow p-3 rounded">
            <div class="col-sm-8 p-0 d-flex">
              <div class="mt-1">
                <label class="ms-3" style="font-size:17px" for="">5.0</label>
              </div>
              <div class="rating w-75">
                <input type="radio" id="star-1" name="star-radio" value="star-1" checked>
                <label for="star-1">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                  </svg>
                </label>
                <input type="radio" id="star-2" name="star-radio" value="star-1">
                <label for="star-2">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                  </svg>
                </label>
                <input type="radio" id="star-3" name="star-radio" value="star-1">
                <label for="star-3">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                  </svg>
                </label>
                <input type="radio" id="star-4" name="star-radio" value="star-1">
                <label for="star-4">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                  </svg>
                </label>
                <input type="radio" id="star-5" name="star-radio" value="star-1">
                <label for="star-5">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path pathLength="360" d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z"></path>
                  </svg>
                </label>
              </div>
            </div>
            <div class="col-sm-4 p-0 mt-1">
              <button class="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $employee->getEmployeeID() ?>">
                <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                </svg> Profile
              </button>
            </div>
          </div>
        </div>
        <div class="modal fade show" id="staticBackdrop<?= $employee->getEmployeeID() ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header ">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <h2 class="pb-2 text-center">Profile Information</h2>
                <div class="image text-center mx-auto" style="width: 120px; height: 120px">
                  <img class="w-100 h-100 rounded-circle" src="../public/assets/images/avata.jpeg" alt="">
                </div>
                <table class="table">
                  <tr>
                    <td><label for="name">Họ và tên:</label></td>
                    <td><input type="text" name="name" value="<?= $employee->getFullName() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                  </tr>
                  <tr>
                    <td><label for="address">Địa chỉ:</label></td>
                    <td> <input type="text" name="address" value="<?= $employee->getAddress() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                  </tr>
                  <tr>
                    <td> <label for="email">Email:</label></td>
                    <td><input type="email" name="email" value="<?= $employee->getEmail() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                  </tr>
                  <tr>
                    <td><label for="phone">Số điện thoại:</label></td>
                    <td><input type="phone" name="phone" value="<?= $employee->getMobilePhone() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                  </tr>
                  <tr>
                    <td><label for="phone">Vị trí:</label></td>
                    <td><input type="phone" name="phone" value="<?= $employee->getPosition() ?>" <?php if ($_SESSION['Role'] == 'regular') : ?> disabled <?php endif ?>></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
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
      <?php endforeach; ?>
    </div>
    <div class="container d-flex justify-content-center mt-4">
      <nav aria-label="...">
        <ul class="pagination">
          <li class="page-item <?php if ($currentPage <= 1) : ?> disabled <?php endif ?>">
            <a class="page-link" href="?c=employee&page=<?php echo $currentPage - 1; ?>" tabindex="-1" aria-disabled="false">Previous</a>
          </li>
          <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
            <?php if ($i == $currentPage) : ?>
              <li class="page-item active">
                <a class="page-link" href="?c=employee&page=<?php echo $i; ?>"><?php echo $i; ?></a>
              </li>
            <?php else : ?>
              <li class="page-item"><a class="page-link" href="?c=employee&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
          <?php endfor; ?>
          <li class="page-item <?php if ($currentPage >= $totalPages) : ?> disabled <?php endif ?>">
            <a class="page-link" href="?c=employee&page=<?php echo $currentPage + 1; ?>">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <?php
  include_once '../views/layout/footer.php';
  ?>
</body>

</html>