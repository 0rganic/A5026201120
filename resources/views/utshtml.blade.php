<!DOCTYPE html>
<html>
<title>UTS | Jeremy Diaz Prasetyo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    h3 {
        text-align: center;
    }

    .container {
        border: rgb(207, 207, 207);
    }

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

    #reset {
        background-color: greenyellow;
    }
</style>

<body>
    <div class=" container">
        <div class="row">
            <div class="col">
                <h3>Form Input Peserta Vaksinasi</h3>
            </div>
        </div>
        <form action="/www.w3schools.com" onsubmit="return fnama() && fnik()  && fnbatch()">
            @csrf
            <div class="row">
                <div class="col">
                    <table style="width:100%">
                        <tr>
                            <td>Nama Peserta</td>
                            <td>:</td>
                            <td> <input type="text" id="nama-peserta" class="form-control" placeholder="Masukan Nama"
                                    oninput="fnama()" required>
                                <p id="alertnama"></p>

                </div>
                </td>
                </tr>
                <tr>
                    <td>NIK</td>
                    <td>:</td>
                    <td> <input type="number" id="nik" class="form-control" placeholder="Masukan NIK" oninput="fnik()"
                            required>
                        <p id="alertnik"></p>
            </div>
            </td>
            </tr>
            <tr>
                <td>Jenis Vaksin</td>
                <td>:</td>
                <td> <select class="form-control" id="j-vaksin" name="course" oninput="validateFormCourse()" required>
                        <option> </option>
                        <option>AZ</option>
                        <option>Sinovac</option>
                        <option>Moderna</option>

                    </select>

                </td>
            </tr>
            <tr>
                <td>No Batch</td>
                <td>:</td>
                <td> <input type="text" id="nobatch" class="form-control" placeholder="Masukan No Batch"
                        oninput="fnbatch()" required>
                    <p id="alertnbatch"></p>
    </div>
    </td>
    </tr>
    </table>
    <button type="submit" class="btn btn-primary">Simpan</button>
    <button id="reset" type="button" onclick="reload()"><i>Reset</i></button>
    </form>
    </div>

    <script>
        function reload() {
            reload = location.reload();
        }
    </script>



    <script>
        function fnama() {
            let nama = document.getElementById("nama-peserta").value;
            const nm = /^[A-Za-z ]{10,}$/.test(document.getElementById("nama-peserta").value);


            if (nm == false) {
                $("#alertnama").text("Nama tidak valid (alphabet dan minim 10 karakter)");
                return false;
            } else {
                $("#alertnama").text("");
                return true;
            }
        }
    </script>

    <script>
        function fnik() {
            let nk = document.getElementById("nik").value;
            const nikk = /^[0-9]{16}$/.test(document.getElementById("nik").value);

            if (nikk == false) {
                $("#alertnik").text("NIK harus angka dan 16 digit");
                return false;
            } else {
                $("#alertnik").text("");
                return true;
            }
        }
    </script>

    <script>
        function fnbatch() {
            let nb = document.getElementById("nobatch").value;
            const nob = /^[A-Za-z]{}$/.test(document.getElementById("nobatch").value);

            if (nob == false) {
                $("#alertnbatch").text("No Batch bisa angka dan huruf tapi tidak boleh tanda baca misal spasi");
                return false;
            } else {
                $("#alertnbatch").text("");
                return true;
            }
        }
    </script>
</body>

</html>
