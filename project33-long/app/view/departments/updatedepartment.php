<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css'>
    <title>Document</title>
</head>
<body>

<div class = "container">
    <div class = "row" >
        <div class  = "col-md">
            <h3 class = "text-center text-primary ">thông tin chi tiết</h3>
            <form action="../app/index.php?controller=department&action=UpdateDepartment" method="post">
                <lable class = "form-label  ">id</lable>
                <input class = "form-control mb-3" readonly type="number" name = "id" id = "" value="<?php echo $Getdepartment->getDepartmentID() ?>">

                <lable class = "form-label  ">name</lable>
                <input class = "form-control mb-3" type="text" name = "name" id = '' value = "<?php echo $Getdepartment->getDepartmentName() ?>">

                <lable class = "form-label  ">phone</lable>
                <input class = "form-control  mb-3" type="tel" name ="phone"  value = "<?php echo $Getdepartment->getPhone() ?>">

                <lable class = "form-label">address</lable>
                <input class = "form-control  mb-3" type="text" name = "address" id = ''  value = "<?php echo $Getdepartment->getAddress() ?>">

                <lable class = "form-label">email</lable>
                <input class = "form-control  mb-3" type="email" name = "email" id = ''  value = "<?php echo $Getdepartment->getEmail() ?>">
                <button class = "btn btn-primary" type="submit">sửa</button>
            </form>
        </div>

    </div>


</div>

</body>
</html>
