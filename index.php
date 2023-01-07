<?php

session_start();
//jika blm login bawa kembali login.php
if (empty($_SESSION['username']) && empty($_SESSION['userpassword'])) {
    header('login.php');
} 

    include 'config/koneksi.php';

    //eksekusi query
    $sql = "SELECT * FROM buku";
    $recordset = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>
    
    <head>
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <style>
            td {
                padding-left: 20px; 
                padding-right: 20px;
            } 
        </style>
    </head>
    <body>
        <a href="formbuku.php" class="btn btn-primary mt-3 mb-3"> TAMBAH DATA </a>
        <a href="logout.php" class="btn btn-primary mt-3 mb-3"> KELUAR </a>
        <br>
        <table class="table-bordered border text-center ">
            <thead >
                <tr >
                    <th>No</th>
                    <th>judul</th>
                    <th>penerbit</th>
                    <th>penulis</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                    $no=1;
                    while ($row = mysqli_fetch_array($recordset)){
                ?>
                <tr>
                    <td><?php echo $no; ?> </td>
                    <td><?php echo $row['judul']; ?> </td>
                    <td><?php echo $row['penerbit']; ?> </td>
                    <td><?php echo $row['penulis']; ?> </td>
                    <td>
                    <a href="ubahbuku.php?id=<?php echo $row['id'];?>" class="btn btn-warning">Ubah Data</a>
                        |
                    <a href="hapusbuku.php?id=<?php echo $row['id'];?>"
                         class="btn btn-danger">Hapus Data</a>
                    </td>
                </tr>
                <?php
                    $no++;
                }
                ?>
            </tbody>
        </table>
    </body>
</html>