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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300&display=swap"
        rel="stylesheet">

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
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <form action=file.php>
                    <h1>Cek Kelulusan</h1>
                    <br>
                    <p class="form-text">Masukkan nilai Anda : </p>
                    <input type="let" name="nilai">
                    <br>
                    <p class="form-text">Masukan kkm : </p>
                    <input type="let" name="kkm">
                    <br>
                    <button id="cek" input type="submit">Cek Sekarang</button>
                    <br>
                    <h3 id="hasil"></h3>

                    <button id="reload-button" type="button" onclick="reload()"><i> reload page</i></button>
                    <p id="keterangan">Silahkan klik <i>reload page</i> untuk mengulang.</p>
                </form>
            </div>

        </div>
    </div>

    <!-- reload -->
    <script>
        function reload() {
            reload = location.reload();
        }
    </script>

</body>

</html>