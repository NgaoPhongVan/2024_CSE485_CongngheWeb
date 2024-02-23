<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap-grid.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.4.0-web/css/solid.css">
    <title>Form</title>
    <style>
        #container-background {
            border: ;
        }
    </style>
</head>
<body>
<?php
$countries = array(
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
<div class="container mt-5">
    <p class="underline fw-bold">Basic Info</p>
    <hr>
    <table class="table table-borderless">
        <tbody>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Employee ID</td>
            <td class="col-10">9</td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Last name</td>
            <td class="col-10">Dodsworth</td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">First name</td>
            <td class="col-10" style="width=100%">
                <input type="text" class="col-12" style="width=100%" value="Anne">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold ">Gender</td>
            <td class="col-10">
                <input type="radio" name="option" id="" value="Male"> Male<br>
                <input type="radio" name="option" id="" value="Female"> Female<br>
                <input type="radio" name="option" id="" value="XXX"> XXX<br>
                <input type="radio" name="option" id="" value="ZZZ"> ZZZ<br>
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Title</td>
            <td class="col-10">
                <input type="text" class="col-12" style="width=100%" value="Sales Representative">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Suffix</td>
            <td class="col-10">
                <input type="text" class="col-12" style="width=100%" value="Ms.">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">BirthDate</td>
            <td class="col-10">
                <input type="text" class="col-12" style="width=100%" value="1969-07-02 00:00:00">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">HireDate</td>
            <td class="col-10">
                <input type="text" class="col-12" style="width=100%" value="1994-11-15 00:00:00">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">SSN # (if applicable)</td>
            <td class="col-10">
                <input type="text" class="col-12" style="width=100%" value="">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Reports to</td>
            <td class="col-10">
                <select class="form-select col-3">
                    <option>Buchanan</option>
                    <option>Me</option>
                    <option>THP</option>
                    <option>YYY</option>
                </select>
            </td>
        </tr>
        </tbody>
    </table>
    <p class="underline fw-bold">Contact Info</p>
    <hr>
    <table class="table table-borderless">
        <tbody>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Email</td>
            <td class="col-10">
                <input type="text" class="col-12"  placeholder="name@example.com">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Andress</td>
            <td class="col-10">
                <input type="text" class="col-12" value="7 Houndstooth Rd.">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">City</td>
            <td class="col-10">
                <input type="text" class="col-12" value="London">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold ">Region</td>
            <td class="col-10">
                <input type="text" class="col-12" name="option" id="" value="">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Postal Code</td>
            <td class="col-10">
                <input type="text" class="col-12"value="WG2 7LT">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Country</td>
            <td class="col-10">
                <select class="form-select col-3">
                    <?php
                    foreach ($countries as $country) {
                        echo '<option>' . $country . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold ">US Home Phone</td>
            <td class="col-10">
                <input type="text" class="col-12" name="option" id="" value="(234)234-2342">
            </td>
        </tr>
        <tr class="row d-flex align-items-center">
            <td class="col-2 fw-bold">Photo</td>
            <td class="col-10">
                <input type="text" class="col-12" style="width=100%" value="EmpID9.bmp">
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>