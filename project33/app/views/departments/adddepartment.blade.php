<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>


<body>

    <div class="container-fluid">
        <div class="row">
            <div>
                <?php if (isset($_GET['err'])) :  ?>
                    <h3><?php echo $_GET['err'] ?></h3>
                <?php endif; ?>
            </div>
            <div class="col-md">

                <form action="../../app/public/index.php?c=department&a=addDepartment" method="post">

                    <?= DOMAIN . '?c=department&a=addDepartment' ?>

                    <lable class="form-label mt-3">id</lable>
                    <input class="form-control" name="id" type="text">

                    <lable class="form-label mt-3">name</lable>
                    <input class="form-control" name="name" type="text">

                    <lable class="form-label mt-3">phone</lable>
                    <input class="form-control" name="phone" type="tel">

                    <lable class="form-label mt-3">email</lable>
                    <input class="form-control" name="email" type="email">

                  
                    <select id="author_id" name="departmentID">
                        <?php foreach ($departments as $depart) : ?>
                            <option value="<?= $depart->getDepartmentID() ?>"><?php echo $depart->getDepartmentName() ?></option>
                        <?php endforeach;  ?>
                    </select>
                    <button class="btn btn-primary" type="submit">Thêm</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>