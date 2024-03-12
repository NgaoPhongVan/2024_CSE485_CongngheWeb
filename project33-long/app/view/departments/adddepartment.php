
<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href='../../bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css'>
    <title>Document</title>
</head>
<body>
    <div class = "container-fluid">
        <div class = "row" >
            <div class  = "col-md">
                <h3 class = "text-center text-primary ">Thêm đơn vi</h3>
                <form action="../../index.php?controller=department&action=AddDepartment" method="post">
                    <lable class = "form-label  ">id</lable>
                    <input  class = "form-control mb-3" type="number" name = "id" id = ''>

                    <lable class = "form-label  ">name</lable>
                    <input class = "form-control mb-3" type="text" name = "name" id = ''>

                    <lable class = "form-label  ">phone</lable>
                    <input class = "form-control  mb-3" type="tel" name ="phone" ">

                    <lable class = "form-label">address</lable>
                    <input class = "form-control  mb-3" type="text" name = "address" id = ''>

                    <lable class = "form-label">email</lable>
                    <input class = "form-control  mb-3" type="email" name = "email" id = ''>
                    <button class = "btn btn-primary" type="submit">thêm</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>