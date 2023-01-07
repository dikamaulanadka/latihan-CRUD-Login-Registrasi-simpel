<?php
    include 'config/koneksi.php';

    //ambil get[id]
    $id = $_GET['id'];
    $sql = "DELETE FROM buku WHERE id='$id'";

    //koneksi database dengan query
    $status = mysqli_query($conn,$sql);

    if ($status) {
        
        header('location:index.php');
    } else {
        echo "data gagal dihapus";
    }
    
?>