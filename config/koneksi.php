<?php
    $hostName="localhost";
    $userName="root";
    $passWord="";
    $databaseName="perpustakaan";
    //tambahkan $port = "" jika port mysql tidak 3306

    $conn = mysqli_connect($hostName,$userName,$passWord,$databaseName);

    if (mysqli_connect_errno()) {
        echo 'Koneksi Tidak Berhasil'. mysqli_connect_error();
    }
?>