<!DOCTYPE html>
<html>

<head>
    <title>php | Jeremy Diaz Prasetyo </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: lightblue;
        }

        .container {
            margin-top: 200px;
            text-align: center;
        }

        h1 {
            text-align: center;

        }

        .card {
            border-radius: 20px;
        }

        #kembali {
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
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col">
                    <p>Nilai anda <?php echo $_GET["nilai"] ?> dan KKM anda <?php echo $_GET["kkm"] ?> </p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h1><?php
                        $n = $_GET["nilai"];
                        $k = $_GET["kkm"];

                        if ($n > $k) {
                            echo "Selamat Anda lulus !";
                        } elseif ($n == $k) {
                            echo "Selamat Anda lulus ! Tapi nilainya pas-pasan";
                        } else {
                            echo "Mohon Maaf Anda Tidak lulus ! Coba lagi jangan menyerah";
                        }
                        ?>
                    </h1>

                </div>
            </div>
        </div>
        <br>
        <form action="javaskrip.html"><button class="btn btn-primary" id="kembali">Coba Lagi</button></form>
    </div>
</body>

</html>