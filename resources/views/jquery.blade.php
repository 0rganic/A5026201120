<!DOCTYPE html>
<html>

<head>
    <title>javascript | Jeremy Diaz Prasetyo </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet">

    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#panel").slideToggle("slow");
            });
            $("#stop").click(function () {
                $("#panel").stop();
            });
        });
    </script>

    <style>
        #repeat {
            color: #184486;
            padding-top: 20px;
        }

        body {
            background-color: lightblue;
        }

        .container {
            margin-top: 100px;
            text-align: center;

        }

        h1 {
            text-align: center;

        }

        #cek {
            border: none;
            border-radius: 15px;
            background-color: #0d2c91;
            width: 150px;
            outline: none;
            cursor: pointer;
            color: #fff;
            margin-bottom: 15px;
            margin-top: 10px;
            padding: 5px;

        }

        #reload-button {
            border: none;
            background-color: lightblue;
            color: rgb(105, 104, 104);
            text-decoration: underline;
            font-size: smaller;
            outline: none;
        }

        #nilai {
            border: 1px solid;
            border-radius: 5px;

        }

        #kkm {
            border: 1px solid;
            border-radius: 5px;
        }

        #keterangan {
            font-size: 15px;
            font-family: "Times New Roman", Times, serif;
        }

        #panel,
        #flip {
            padding: 5px;
            text-align: center;
            background-color: #lightblue;
            border: solid 1px #c3c3c3;
        }

        #panel {
            padding: 10px;
            display: none;
        }

        #stop {
            border: none;
            border-radius: 15px;
            background-color: #555555;
            width: 100px;
            outline: none;
            cursor: pointer;
            color: #fff;
            margin-bottom: 15px;
            margin-top: 10px;
            padding: 5px;
        }
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cek Kelulusan</h1>
                <br>
                <p class="form-text">Masukkan nilai Anda : </p>
                <input type="let" id="nilai">
                <p class="form-text">Masukkan kkm : </p>
                <input type="let" id="kkm">
                <br>
                <p id="repeat"></p>
                <button id="cek" onclick="hitung()">Cek Sekarang</button>
                <br>
                <h3 id="hasil"></h3>

                <button id="reload-button" type="button" onclick="reload()"><i> reload page</i></button>
                <p id="keterangan">Silahkan klik <i>reload page</i> untuk mengulang.</p>
                <button id="stop">Stop sliding</button>
                <div id="flip">Keterangan</div>
                <div id="panel">kkm <b>lebih besar dari</b> Nilai --><b>bTidak Lulus</b> <br>
                    KKM <b>lebih besar dari</b> Nilai --> <b>Lulus</b> <br>
                    KKM <b>lebih kecil dari</b>nilai --> <b>Lulus</b></div>
            </div>

        </div>
    </div>

    <!-- java convert to js -->
    <script type="text/javascript">
        function hitung() {
            var n = document.getElementById('nilai').value;
            var k = document.getElementById('kkm').value;

            document.getElementById('repeat').innerHTML = "Nilai anda " + n + ", KKM anda " + k;

            if (n > k) {
                description = "Selamat Anda lulus !";
            } else if (n == k) {
                description = "Selamat Anda lulus ! Tapi nilainya pas-pasan";
            } else {
                description = "Mohon Maaf Anda Tidak lulus ! Coba lagi jangan menyerah";
            }
            document.getElementById('hasil').innerHTML = description;
        }
    </script>

    <!-- reload -->
    <script>
        function reload() {
            reload = location.reload();
        }
    </script>

</body>

</html>