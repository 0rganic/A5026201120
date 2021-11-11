<!DOCTYPE html>
<html lang="in">

<head>
    <title>Validasi Form | Jeremy Diaz Prasetyo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="http://static.w3big.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
    <script src="http://static.w3big.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
    <style>
        /* Chrome, Safari, Edge, Opera  */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox  */
        input[type=number] {
            -moz-appearance: textfield;
        }

        h2 {
            text-align: center;
        }

        #alerttelephone,
        #alertpassword,
        #alertzip {
            color: red;
        }

        body {
            background-color: lightblue;
            font-family: "Times New Roman", Times, serif;
        }
    </style>
</head>


<body>
    <div class="container mt-3">
        <h2>REGISTRATION FORM</h2>

        <form action="/www.w3schools.com" onsubmit="return nm()  && pass() && telp() && crs() && zip()"
            class="needs-validation">


            <!-- form nama -->
            <div class="mb-3 mt-3">
                <label for="uname" class="form-label">Name:</label>
                <input type="text" class="form-control" id="nama" placeholder="Enter name" name="uname" oninput="nm()"
                    required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- form Address -->
            <div class="mb-3">
                <label for="pwd" class="form-label">Address:</label>
                <input type="text" class="form-control" id="alamat" placeholder="Enter Address" name="pswd" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- Email Address -->
            <label for="pwd" class="form-label">Email Address:</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Your Email" name="Email" required>
                <span class="input-group-text">@gmail.com</span>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- password -->
            <div class="mb-3">
                <label for="pwd" class="form-label">Password:</label>
                <input type="password" class="form-control" id="sandi" placeholder="Enter Password" name="pswd"
                    oninput="pass()" required>
                <p id="alertpassword"></p>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- Telephone -->
            <div class="mb-3">
                <label for="pwd" class="form-label">Telephone:</label>
                <input type="number" class="form-control" id="telepon" placeholder="Enter Telephone" name="pswd"
                    oninput="telp()" required>
                <p id="alerttelephone"></p>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>
            <!-- course -->
            <div class="mb-3">
                <label for="pwd" class="form-label">Select Your Course:</label>
                <select class="form-control" id="pelajaran" name="course" oninput="crs()" required>
                    <option> </option>
                    <option>BTECH</option>
                    <option>BBA</option>
                    <option>BCA</option>
                    <option>B COM</option>
                    <option>GEEKFORGEEKS</option>
                </select>
            </div>
            <!-- zip code -->
            <div class="mb-3">
                <label for="pwd" class="form-label">Zip Code:</label>
                <input type="number" class="form-control" id="zipcd" placeholder="Enter Zip code" name="pswd"
                    oninput="zip()" required>
                <p id="alertzip"></p>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
            </div>



            <input type="submit" class="btn btn-primary" value="Send "> <br>
            <br>
            <input type="reset" class="btn btn-primary" value="Reset ">
        </form>


        <script>
            function nm() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var nama = document.getElementById("nama");
                if (nama.value.match(validasiHuruf)) {
                    return true;
                } else {
                    alert("Masukkan nama Anda!\nFormat wajib huruf!");
                    nama.value = "";
                    nama.focus();
                    return false;
                }
            }

        </script>

        <script>
            function pass() {
                var validasi = /^[a-zA-Z ][0-9]+$/;
                var sandi = document.getElementById("sandi");

                if (sandi.value.length >= 8 && sandi.value.length <= 16) {
                    $("#alertpassword").text("");
                    return true;
                } else {
                    $("#alertpassword").text("Password harus 8-16 digit !");
                    return false;
                }
            }
        </script>

        <script>
            function telp() {

                var telepon = document.getElementById("telepon");

                if (telepon.value.length >= 7) {
                    $("#alerttelephone").text("");
                    return true;
                } else {
                    $("#alerttelephone").text("Telephone harus minimal 7 digit !");
                    return false;
                }
            }
        </script>

        <script>
            function zip() {

                var zipc = document.getElementById("zipcd");

                if (zipc.value.length == 6) {
                    $("#alertzip").text("");
                    return true;
                } else {
                    $("#alertzip").text("Zip code harus 6 digit !");
                    return false;
                }
            }
        </script>


    </div>



    </div>
</body>






</html>
