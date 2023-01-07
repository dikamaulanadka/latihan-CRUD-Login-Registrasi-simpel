<?php

    include 'config/koneksi.php';
    if (isset($_POST['btnsimpan'])) {
        //ambil nilai form yg dikirim
        $judul =$_POST['txtjudul'];
        $penerbit =$_POST['txtpenerbit'];
        $penulis =$_POST['txtpenulis'];
    
    //eksekusi query
    $query = "INSERT INTO buku (judul,penerbit,penulis) VALUES ('$judul','$penerbit','$penulis')";
    $sql = mysqli_query($conn,$query);


    //check sql query benar/tidak
    if ($sql) {
        echo 'Input data berhasil';
        header('location:index.php'); //redirect
    } else {
        echo 'input data gagal';
    }

    }
?>

<form action="formbuku.php" method="post">
    <label for="judul">Judul : </label>
    <input type="text" id="judul" name="txtjudul">
    <br>
    <label for="penerbit">Penerbit : </label>
    <input type="text" id="penerbit" name="txtpenerbit">
    <br>
    <label for="penulis">Penulis : </label>
    <input type="text" id="penulis" name="txtpenulis">
    <br>
    <input type="submit" value="simpan" name="btnsimpan">
</form>