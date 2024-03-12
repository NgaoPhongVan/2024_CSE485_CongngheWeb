<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href='./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css'>
</head>
<body>
    <div class = "container-fluid mt-5">
        <div class = "row">
            <div class = "col-md">
<!--                ./view/departments/adddepartment.php-->
                <table class = "table">
                    <a class = "btn btn-primary" href="view/departments/adddepartment.php">them</a>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>address</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>Logo</th>
                        <th>website</th>
                        <th>parenid</th>
                    </tr>
                    </thead>
                   <tbody>
                       <?php foreach ($departments as $depart ): ?>
                       <tr>
                           <th><?= $depart -> getDepartmentID()?></th>
                           <td><?php echo $depart -> getDepartmentName()?></td>
                           <td><?php echo $depart -> getEmail()?></td>
                           <td><?php echo $depart -> getAddress() ?></td>
                           <td><?php echo $depart -> getPhone() ?></td>
                           <td><?php echo $depart -> getLogo() ?></td>
                           <td><?php echo $depart -> getWebsite() ?></td>
                           <td><?php echo $depart -> getParentDepartment() ?></td>
                           <td><a class = "btn btn-primary" href="../app/index.php?controller=Department&action=DetailDepartmentByID&id=<?php echo $depart->getDepartmentID()?>">chi tiết</a></td>
                           <td><a class = "btn btn-primary" href="../app/index.php?controller=Department&action=getDepartmentByID&id=<?php echo $depart->getDepartmentID()?>">sửa</a></td>
                           <td><a class = "btn btn-primary" href="../app/index.php?controller=Department&action=DeleteDepartmentByID&id=<?php echo $depart->getDepartmentID() ?> ">xóa</a></td>
                       </tr>
                       <?php endforeach; ?>

                   </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>