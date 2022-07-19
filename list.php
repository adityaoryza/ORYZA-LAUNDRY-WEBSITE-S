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

    <div class="container">
        <h2 class="text-center mt-5">LIST DATA ORDERAN LAUNDRY</h2>
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
                <button class="btn btn-outline-dark">HOMEPAGE</button>
            </a>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>

<!-- <?php 
    $date=date('Y-m-d');
    echo "<head><title>My Guest Book</title></head>";
    $fp = fopen("beli.txt", "r");
    echo "<center>";
    echo "<h1>Data Orderan Laundry</h1>";
    echo "<table border='1' cellspacing='0' cellpadding='2'>";
    echo "<tr> <td witdh='150px'>Tanggal</td>
               <td witdh='150px'>Nama Depan</td>
               <td witdh='150px'>Nama Belakang</td>
               <td witdh='150px'>Alamat</td>
               <td witdh='150px'>No Telepon</td>
               <td witdh='150px'>Pilihan Paket</td>
          </tr>";
    while ($isi = fgets($fp,80)) {
        $pisah = explode('|', $isi);
        
        echo "<tr>  <td>$date</td>
                     <td>$pisah[0]</td>
                     <td>$pisah[1]</td>
                     <td>$pisah[2]</td>
                     <td>$pisah[3]</td>
                     <td>$pisah[4]</td>
            </tr>";

    }

    echo "</table>";
    echo "</center>";
    echo "<center><a href='index.html'>Kembali Ke halaman</a></center><br>";
    echo "<center><a href='checkout.html'>Pesan Lagi</a></center><br>";

?> -->