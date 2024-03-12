<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href='../bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css''>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class = "container">
    <div class="row">
        <div class="col-md">
            <form action="../../app/routes/web.php?c=department&a=UpdateDepartmentByID" method="post">
                <lable  class = "form-label mt-3">id</lable>
                <input  class = "form-control" type="text" name = "id" value="<?php echo $viewdepartment->getDepartmentID() ?>" id = "">

                <lable  class = "form-label mt-3">tên đơn vị</lable>
                <input  class = "form-control" type="text" name = "name"  value="<?php echo $viewdepartment->getDepartmentName() ?>" id = "">

                <lable  class = "form-label mt-3">địa chỉ</lable>
                <input  class = "form-control" type="text" name = "address"  value="<?php echo $viewdepartment->getAddress() ?>" id = "">

                <lable  class = "form-label mt-3">số điện thoại</lable>
                <input  class = "form-control" type="text" name = "phone"  value="<?php echo $viewdepartment->getPhone() ?>" id = "">

                <button type = "submit">sửa</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>