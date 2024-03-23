<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .form111 {
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-width: 350px;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px;
            position: relative;
        }

        .title {
            font-size: 28px;
            color: royalblue;
            font-weight: 600;
            letter-spacing: -1px;
            position: relative;
            display: flex;
            align-items: center;
            padding-left: 30px;
        }

        .title::before,
        .title::after {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            border-radius: 50%;
            left: 0px;
            background-color: royalblue;
        }

        .title::before {
            width: 18px;
            height: 18px;
            background-color: royalblue;
        }

        .title::after {
            width: 18px;
            height: 18px;
            animation: pulse 1s linear infinite;
        }

        .message,
        .signin {
            color: rgba(88, 87, 87, 0.822);
            font-size: 14px;
        }

        .signin {
            text-align: center;
        }

        .signin a {
            color: royalblue;
        }

        .signin a:hover {
            text-decoration: underline royalblue;
        }

        .flex {
            display: flex;
            width: 100%;
            gap: 6px;
        }

        .form111 label {
            position: relative;
        }

        .form111 label .input {
            width: 100%;
            padding: 10px 10px 20px 10px;
            outline: 0;
            border: 1px solid rgba(105, 105, 105, 0.397);
            border-radius: 10px;
        }

        .form111 label .input+span {
            position: absolute;
            left: 10px;
            top: 15px;
            color: grey;
            font-size: 0.9em;
            cursor: text;
            transition: 0.3s ease;
        }

        .form111 label .input:placeholder-shown+span {
            top: 15px;
            font-size: 0.9em;
        }

        .form111 label .input:focus+span,
        .form111 label .input:valid+span {
            top: 30px;
            font-size: 0.7em;
            font-weight: 600;
        }

        .form111 label .input:valid+span {
            color: green;
        }

        .submit {
            border: none;
            outline: none;
            background-color: royalblue;
            padding: 10px;
            border-radius: 10px;
            color: #fff;
            font-size: 16px;
            transform: .3s ease;
        }

        .submit:hover {
            background-color: rgb(56, 90, 194);
        }

        @keyframes pulse {
            from {
                transform: scale(0.9);
                opacity: 1;
            }

            to {
                transform: scale(1.8);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <?php
    include_once '../views/layout/header.php';
    ?>
    <div class="d-flex justify-content-center">
        <form class="form111" method="POST" action="<?= DOMAIN . '/?c=home&a=store' ?>">
            <p class="title">Create</p>
            <div class="flex">
                <label>
                    <input required="" placeholder="" name="Client" type="text" class="input">
                    <span>Name</span>
                </label>
                <label>
                    <input required="" placeholder="" name="ProjectName" type="text" class="input">
                    <span>Project Name</span>
                </label>
            </div>
            <label>
                <input required="" placeholder="" name="Status" type="text" class="input" >
                <span>Status</span>
            </label>
            <label>
                <input required="" placeholder="" name="ProjectManager" type="text" class="input">
                <span>Project Manager</span>
            </label>
            <label>
                <input required="" placeholder="" name="HourlyRate" type="text" class="input">
                <span>Hourly Rate</span>
            </label>
            <label>
                <input required="" placeholder="" name="Budget" type="text" class="input">
                <span>Budget</span>
            </label>
            <button class="submit">Submit</button>
    </div>
    <?php
    include_once '../views/layout/footer.php';
    ?>
</body>

</html>