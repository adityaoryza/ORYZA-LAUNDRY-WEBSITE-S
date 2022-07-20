<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet" />

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" href="css/checkout.css" />
    <title>LIST</title>

</head>

<body>
    <?php
    $NamaDPN = $_POST['NamaDPN'];
    $NamaBLKG = $_POST['NamaBLKG'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $paket = $_POST['paket'];
    echo "<head><title>Data Order</title></head>";
    $fp = fopen("beli.txt","a+");
    fputs($fp,"$NamaDPN|$NamaBLKG|$alamat|$telp|$paket\n");
    fclose($fp);
?>
    <div class="card mx-auto mt-5" style="width: 18rem;">
        <img src="images/thankyou-gif.gif" class="card-img-top" alt="thhankyou-gif">
        <div class="card-body">
            <p class="card-text lead text-center">Terimakasih Sudah Memilih Jasa Kami</p>
        </div>
        <div class="row mb-5 text-center">
            <div class="col-lg-6 mt-2">
                <a href="index.html">
                    <button class="btn btn-outline-secondary">HOMEPAGE</button>
                </a>
            </div>
            <div class="col-lg-6 mt-2">
                <a href="checkout.html">
                    <button class="btn btn-outline-secondary">PESAN LAGI</button>
                </a>
            </div>
        </div>
    </div>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>