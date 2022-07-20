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
    <title>list data pembelian</title>

</head>

<body>

    <div class="container g-5">
        <div class="container text-center">
            <img class="d-block mx-auto img-fluid" src="images/sales-bw.png" alt="sales images" width="50%">
            <h1 class="text-center mt-5 lead">LIST DATA ORDERAN LAUNDRY</h1>
            <p class="lead">berikut list penjualan yang telah terekam di website anda</p>
        </div>

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nama Depan</th>
                    <th scope="col">Nama Belakang</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Pilihan Paket</th>
                </tr>
            </thead>
            <tbody>
                <?php
    $date=date('Y-m-d');
    $fp = fopen("beli.txt", "r");
    while ($isi = fgets($fp,80)) {
        $pisah = explode('|', $isi);
        echo "<tr>  
                     <td>$date</td>
                     <td>$pisah[0]</td>
                     <td>$pisah[1]</td>
                     <td>$pisah[2]</td>
                     <td>$pisah[3]</td>
                     <td>$pisah[4]</td>
            </tr>";
            }
            ?>
            </tbody>
        </table>
        <div class="container text-center">
            <a href='index.html'>
                <button class="btn btn-outline-dark mt-5 mb-5">HOMEPAGE</button>
            </a>
            <hr>
        </div>
    </div>
    <!-- Footer -->

    <footer class="white-section" id="footer">
        <div class="container-fluid text-center">
            <p class="lead mt-4 mb-5">
                Perum, Jl. Giwangan Asri 2 NO.F5, Giwangan, Kec. Umbulharjo, Kota
                Yogyakarta, Daerah Istimewa Yogyakarta 55163
            </p>
            <a href="https://www.facebook.com">
                <i class="social-icon fab fa-facebook-f"></i>
            </a>
            <a href="https://www.twitter.com/">
                <i class="social-icon fab fa-twitter"></i>
            </a>
            <a href="https://www.instagram.com">
                <i class="social-icon fab fa-instagram"></i>
            </a>
            <a href="https://www.gmail.com">
                <i class="social-icon fas fa-envelope"></i>
            </a>
            <p class="mt-2">© Copyright 2022 Only Laundry</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>