<?php
$countries = array (
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
    "Antigua & Barbuda",
    "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
    "Bahamas", "Bahrain",
    "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bermuda", "Bhutan",
    "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin 
Islands", "Brunei",
    "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
);
// You can use the $countries array in your PHP code as needed.
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
    <p class="fw-bold" >bassic info</p>
<hr>
<table class="table table-borderless">
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Empolyee ID</td>
        <td class="col-10">9</td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Last Name</td>
        <td class="col-10">Dodsworth</td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">First Name</td>
        <td class="col-10"><input type="text" value="Anne" style="width: 100%"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Gender</td>
        <td class="col-10">
            <input type="radio" name="gender-item" id=""> Male <br>
            <input type="radio" name="gender-item" id=""> Female <br>
            <input type="radio" name="gender-item" id=""> XXX <br>
            <input type="radio" name="gender-item" id=""> YYY
        </td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Suffix</td>
        <td class="col-10"><input type="text" value="Sales Representative" style="width: 100%"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">First Name</td>
        <td class="col-10"><input type="text" value="Ms." style="width: 100%"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">BirthDate</td>
        <td class="col-10"><input type="text" value="1969-07-02 00:00:00" style="width: 100%"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">HireDate</td>
        <td class="col-10"><input type="text" value="1994-11-15 00:00:00" style="width: 100%"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">SSN # (if applicable)</td>
        <td class="col-10"><input type="text" style="width: 100%"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Reports To</td>
        <td class="col-10">
            <select >
                <option value="">Buchanan</option>
                <option value="">ói dòi oi</option>
                <option value="">còn cái nọt</option>
                <option value="">còn cái nịt</option>
            </select>

        </td>
    </tr>
</table>
<hr>
<table class="table table-borderless">
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Email</td>
        <td class="col-10"><input type="email" style="width: 100%" value="name@example.com"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Address</td>
        <td class="col-10"><input type="text" style="width: 100%" value="& Houndstooth Rd."></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">City</td>
        <td class="col-10"><input type="text" style="width: 100%" value="VietNam"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Region</td>
        <td class="col-10"><input type="text" style="width: 100%"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold">Country</td>
        <td class="col-10"><input type="text" style="width: 100%">
            <select class="form-select col-3">
                <?php
                foreach ($countries as $country) {
                    echo '<option>' . $country . '</option>';
                }
                ?>
            </select>
        </td>
    </tr>

</table>
<table class="table table-borderless">
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>
    <tr class="row align-items-center">
        <td class="col-2 fw-bold"></td>
        <td class="col-10"></td>
    </tr>

</table>
    </div>

</body>
</html>