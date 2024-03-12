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
        <img class="w-100" src="../public/assets/images/snapedit_1709546479145.jpeg" alt="">
    </div>
    <!-- <div class="d-flex justify-content-around gap-sm-3">
    <div>
      <h1 class="text-success text-uppercase my-2 mx-2">List User</h1>
    </div>
    <div>
      <a class="btn btn-success btn-primary mx-2 mt-2" href="http://localhost/2024_CSE485_CongngheWeb/project33/app/public/?route=create-user">+ Add new user</a>
    </div>
  </div>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th scope="col">Username</th>
        <th scope="col">Password</th>
        <th scope="col">Role</th>
        <th scope="col">EmployeeID</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
        foreach ($user as $item) {
        ?>
        <?php

            echo "<tr>";
            echo "<td>" . $item->getUsername() . "</td>";
            echo "<td>" . $item->getPassword() . "</td>";
            echo "<td>" . $item->getRole() . "</td>";
            echo "<td>" . $item->getEmployeeID() . "</td>";
            echo "<td>";
            echo "<a class='m-2' href='
        http://localhost/2024_CSE485_CongngheWeb/project33/app/public/?route=show-user&UserID=" . $item->getUsername() . "
        '><i class='bi bi-eye-fill'></i></a>";
            echo "<a class='m-2' href='
        http://localhost/2024_CSE485_CongngheWeb/project33/app/public/?route=edit-user&UserID=" . $item->getUsername() . "
        '><i class='bi bi-pencil-fill'></i></a>";
            echo "<a class='m-2' href='
        http://localhost/2024_CSE485_CongngheWeb/project33/app/public/?route=delete-user&UserID=" . $item->getUsername() . "
        ' onclick='return confirmDelete()'><i class='bi bi-trash-fill'></i></a>";
            echo "</td>";
            echo "</tr>";
        ?>
      <?php }
        ?>
    </tbody>
  </table>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

  <script>
    function confirmDelete() {
      return confirm('Are you sure you want to delete this user?');
    }
  </script> -->
    <div class="container p-0 d-flex gap-5 justify-content-between flex-wrap mb-5">
        <?php foreach ($employees as $employee) : ?>
            <div style="width: 340px;" class="d-flex flex-column">
                <div style="box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" class="head-content row rounded-top-3">
                    <div class="col-sm-8 pb-0 px-3 py-2">
                        <p style="font-size: 20px">Nhân viên</p>
                    </div>
                    <div class="col-sm-4"></div>
                </div>
                <div style="background-color: white; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" class="main-content row py-1">
                    <div class="col-sm-8 p-0">
                        <p style="font-size: 18px" class="m-0 ms-4 mb-1"><b><?= $employee->getFullName() ?></b></p>
                        <p style="font-size: 17px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 200px;" class="m-0 ms-4 mb-1"><b>About: </b><?= $employee->getPosition() ?></p>
                        <p style="font-size: 17px; white-space: nowrap; overflow: hidden;text-overflow: ellipsis; max-width: 200px;" class="m-0 ms-4 mb-1"><b>Address: </b><?= $employee->getAddress() ?></p>
                    </div>
                    <div class="col-sm-4 p-0">
                        <img style="width:90px; height:90px" class="rounded-circle" src="../public/assets/images/avata.jpeg" alt="">
                    </div>
                </div>
                <div style="background-color: #f1f5f8; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" class="footer-content row py-2 rounded-bottom-3">
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
                        <button class="button">
                            <svg class="svgIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0" />
                                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7" />
                            </svg> Profile
                        </button>
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