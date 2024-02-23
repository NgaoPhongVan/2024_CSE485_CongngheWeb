<?php
    $countries = array (
        "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Anguilla",
        "Antigua & Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan",
        "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
        "Bermuda", "Bhutan", "Bolivia", "Bosnia & Herzegovina", "Botswana", "Brazil", "British Virgin Islands", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Vietnam"
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
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="container">
        <form action="form.php" method="post">
            <div class="form-group">
                <div class="title-info">
                    <h3>Basic Info</h3>
                </div>
                <div class="main-form">
                    <div class="row">
                        <div class="col-25">
                            <label for="id">Employ ID</label>
                        </div>
                        <div class="col-75">
                            <label for="id">9</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">Last Name</label>
                        </div>
                        <div class="col-75">
                            <label for="id">Doe</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="lname">First Name</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="firstname" placeholder="Your first name ...">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="gender">Gender</label>
                        </div>
                        <div class="col-75">
                            <input type="radio" name="male" value="Male">
                            <label for="male">Male</label><br>
                            <input type="radio" name="female" value="Female">
                            <label for="female">Female</label><br>
                            <input type="radio" name="xxx" value="XXX">
                            <label for="xxx">XXX</label><br>
                            <input type="radio" name="zzz" value="ZZZ">
                            <label for="zzz">ZZZ</label><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="title">Title</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="title" name="title" placeholder="Title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="title">Suffix</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="suffix" name="suffix" placeholder="Suffix">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="BirthDate">BirthDate</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="BirthDate" name="BirthDate" placeholder="BirthDate">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="HireDate">HireDate</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="HireDate" name="HireDate" placeholder="HireDate">(?)
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="SSN">SSN # (if applicable)</label>
                    </div>
                    <div class="col-75">
                        <input type="text" id="ssn" name="ssn" placeholder="ssn">
                    </div>
                </div>
                <div class="row">
                    <div class="col-25">
                        <label for="reports">Reports To</label>
                    </div>
                    <div class="col-75">
                        <select id="reports" name="reports">
                            <option value="reports">Buchana</option>
                            <option value="reports">Cannada</option>
                            <option value="reports">USA</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="title-info">
                <h3>Contact Info</h3>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="email">Email</label>
                </div>
                <div class="col-75">
                    <input type="text" id="email" name="email" placeholder="name@example.com">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="addr">Address</label>
                </div>
                <div class="col-75">
                    <input type="text" id="addr" name="addr" placeholder="7 Houndstoon Rd.">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="city">City</label>
                </div>
                <div class="col-75">
                    <input type="text" id="city" name="city" placeholder="London">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="region">Region</label>
                </div>
                <div class="col-75">
                    <input type="text" id="region" name="region" placeholder="">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="postal">Postal</label>
                </div>
                <div class="col-75">
                    <input type="text" id="postal" name="postal" placeholder="WG2 7LT">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="country">Country</label>
                </div>
                <div class="col-75">




                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="phone">US Home Phone</label>
                </div>
                <div class="col-75">
                    <input type="text" id="phone" name="phone" placeholder="(234)234-2342">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="photo">Photo</label>
                </div>
                <div class="col-75">
                    <input type="text" id="photo" name="photo" placeholder="EmpID9.bmp">
                </div>
            </div>

            <div class="title-info">
                <h3>Optional Info</h3>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="notes">Notes</label>
                </div>
                <div class="col-75">
                    <div id="editor">Anne has a BA degree in English from St.Lawrence College.
                        She iss fluent in French and German.ZZZ</div>
                </div>
            </div>
    </div>
</body>
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
</html>