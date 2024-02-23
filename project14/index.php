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
    $reports = array(
        "Buchanan", "NgaoPhongVan", "BeHanh", "LongMoc", "LinhMy", "ZinhZu", "MinhDan"
    );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>project14</title>
    <link rel="stylesheet" href="./boxicons-2.1.4/boxicons-2.1.4/css/boxicons.min.css">
    <link rel="stylesheet" href="./bootstrap/bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <style>
        body{
            background-color: #eeeeee;
        }
        .container {
            background-color: #fff;
            width: 800px;
        }
        .head {
            border-bottom: 2px solid black;
            padding-top: 30px;
            margin-bottom: 10px;
        }
        table, tr, td {
            /* border: 2px solid black; */
            /* width: 100%; */
        }
        table {
            width: 100%;
        }
        .c1 {
            width: 30%;
            font-weight: bold;
        }
        .footer{
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
            padding-bottom: 50px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="">
            <div class="head"><b>Basic info</b></div>
            <div class="content">
                <table>
                    <tr>
                        <td class="c1">Employee</td>
                        <td class="c2">9</td>
                    </tr>
                    <tr>
                        <td class="c1">Last Name</td>
                        <td class="c2">Dodsworth</td>
                    </tr>
                    <tr>
                        <td class="c1">First Name</td>
                        <td class="c2"><input type="text" value="Anne" style="width: 34vw;"></td>
                    </tr>

                    <tr>
                        <td class="c1" rowspan="4">Gender</td>
                        <td class="c2"><input type="radio" name="check" id="check" >Male</td>
                    </tr>
                    <tr>
                        <td class="c2"><input type="radio" name="check" id="check">Female</td>
                    </tr>
                    <tr>
                        <td class="c2"><input type="radio" name="check" id="check">XXX</td>
                    </tr>
                    <tr>
                        <td class="c2"><input type="radio" name="check" id="check">ZZZ</td>
                    </tr>
                    <tr>
                        <td class="c1">Title</td>
                        <td class="c2"><input type="text" value="Sales Representative" style="width: 34vw;"></td>
                    </tr>
                    <tr>
                        <td class="c1">Suffix</td>
                        <td class="c2"><input type="text" value="Ms. " style="width: 34vw;"></td>
                    </tr>
                    <tr>
                        <td class="c1">BirthDate</td>
                        <td class="c2"><input type="date" name="date" id="" style="width: 34vw;"></td>
                    </tr>
                    <tr>
                        <td class="c1">HireDate</td>
                        <td class="c2"><input type="date" name="date" id="" style="width: 34vw;"></td>
                    </tr>
                    <tr>
                        <td class="c1">SSN # (ifapplicable)</td>
                        <td class="c2"><input type="text" style="width: 34vw;"></td>
                    </tr>
                    <tr>
                        <td class="c1">Reports</td>
                        <td class="c2">
                            <select name="report" id="report">
                                <?php foreach($reports as $report){
                                    echo '<option value="$report" size="3">'.$report.'</option>';
                                }?>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="head"><b>Contact info</b></div>
            <div class="content">
                <table>
                    <tr>
                        <td class="c1">Email</td>
                        <td class="c2"><input type="email" name="email" id="" value="name@example.com" style="width: 34vw;"></td>
                    </tr>
                    <tr>
                        <td class="c1">Address</td>
                        <td class="c2"><input type="text" value="Anne" style="width: 34vw;" value="7 Houndstooth Rd."></td>
                    </tr>
                    <tr>
                        <td class="c1">City</td>
                        <td class="c2"><input type="text" value="Sales Representative" style="width: 34vw;" value="London"></td>
                    </tr>
                    <tr>
                        <td class="c1">Region</td>
                        <td class="c2"><input type="text" value="Ms. " style="width: 34vw;"></td>
                    </tr>
                    <tr>
                        <td class="c1">Postal Code</td>
                        <td class="c2"><input type="text" name="date" id="" style="width: 34vw;" value="WG2 7LT"></td>
                    </tr>
                    <tr>
                        <td class="c1">Country</td>
                        <td class="c2">
                            <select name="country" id="country">
                                <?php foreach($countries as $country){
                                    echo '<option value="$country" size="3">'.$country.'</option>';
                                }?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="c1">US Home Phone</td>
                        <td class="c2"><input type="phone" style="width: 34vw;" value="(234)234-2342"></td>
                    </tr>
                    <tr>
                        <td class="c1">Photo</td>
                        <td class="c2"><input type="text" style="width: 34vw;" value="EmpID9.bmp"></td>
                    </tr>
                </table>
            </div>
            <div class="head"><b>Optinal info</b></div>
            <div class="content">
                <table>
                    <tr>
                        <td class="c1">Notes</td>
                        <td class="c2">
                            <textarea name="edits" id="edits" cols="30" rows="10"></textarea>
                        </td>
                        <script type="text/javascript">
                            CKEDITOR.replace( 'edits', {
                                height: "100px"
                            } );
                        </script>
                    </tr>
                    <tr>
                        <td class="c1">Preferred shift</td>
                        <td class="c2"><input type="checkbox" name="" id="">Regular</td>
                    </tr>
                    <tr>
                        <td class="c1"></td>
                        <td class="c2"><input type="checkbox" name="" id="">Gravy Yard</td>
                    </tr>
                    <tr>
                        <td class="c1">Active?</td>
                        <td class="c2"><input type="checkbox" name="" id=""></td>
                    </tr>
                    <tr>
                        <td class="c1">Are you humman?</td>
                        <td class="c2"><h3>HIHI</h3></td>
                        </tr>
                    <tr>
                        <td class="c1"></td>
                        <td class="c2"><input type="text" name="" id="" style="width: 34vw;"></td>
                    </tr>
                </table>
            </div>
            <div class="head"><b></b></div>
            <div class="footer">
                <input type="submit" value="Submit">
                <input type="reset" value="Cancel">
            </div>
        </form>
    </div>
</body>
</html>