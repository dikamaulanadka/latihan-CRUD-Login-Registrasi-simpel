<?php

    include 'config/koneksi.php';
    if (isset($_POST['btnsimpan'])) {
        //ambil nilai form yg dikirim
        $id=$_POST['id'];
        $judul =$_POST['txtjudul'];
        $penerbit =$_POST['txtpenerbit'];
        $penulis =$_POST['txtpenulis'];
    
        //eksekusi query
        $query = "UPDATE buku SET judul='$judul', penerbit='$penerbit',penulis='$penulis' WHERE id='$id'";
        $sql = mysqli_query($conn,$query);


        //check sql query benar/tidak
        if ($sql) {
            echo 'data berhasil diubah';
            header('location:index.php'); //redirect
        } else {
        echo 'data gagal diubah';
        }

    }

    else {
        $id = $_GET['id'];
        $query = "SELECT * FROM buku WHERE id='$id'";
        $sql=mysqli_query($conn,$query);
        $recordset=mysqli_fetch_array($sql);

        $judul_lama = $recordset['judul'];
        $penerbit_lama = $recordset['penerbit'];
        $penulis_lama = $recordset['penulis'];

    }

?>

<form action="ubahbuku.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label for="judul">Judul : </label>
    <input type="text" id="judul" name="txtjudul" value="<?php echo $judul_lama; ?>">
    <br>
    <label for="penerbit">Penerbit : </label>
    <input type="text" id="penerbit" name="txtpenerbit" value="<?php echo $penerbit_lama; ?>">
    <br>
    <label for="penulis">Penulis : </label>
    <input type="text" id="penulis" name="txtpenulis" value="<?php echo $penulis_lama; ?>">
    <br>
    <input type="submit" value="simpan" name="btnsimpan">
</form>