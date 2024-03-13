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
    <h4 style="color: #58b0e0" class="fw-bold">DANH BẠ ĐIỆN THOẠI CÁ NHÂN</h4>
    <div class=" ms-3 justify-content-end d-flex">
      <form action="../../app/public/index.php?c=employee&a=index" method="post" class="form">
        <button>
          <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
            <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </button>
        <input class="input" placeholder="Type your text" name = "search" required="" type="text">
        <button class="reset" type="reset">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
            </path>
          </svg>
        </button>
      </form>
    </div>
  </div>
  <div class="p-0 d-flex gap-5 justify-content-between flex-wrap mb-5" style="margin-right: 160px; margin-left: 160px">
    <?php foreach ($employees as $employee) : ?>
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
            <button class="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
              </svg> Profile
            </button>
          </div>
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p style="font-size: 18px" class="m-0 ms-4 mb-1"><b>Name:</b> <?= $employee->getFullName() ?></p>
                  <p style="font-size: 17px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 200px;" class="m-0 ms-4 mb-1"><b>About: </b><?= $employee->getPosition() ?></p>
                  <p style="font-size: 17px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 200px;" class="m-0 ms-4 mb-1"><b>About: </b><?= $employee->get ?></p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Understood</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <?php
  include_once '../views/layout/footer.php';
  ?>
</body>

</html>