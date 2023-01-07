<?php
 
 include 'config/koneksi.php';
 if (isset($_POST['btnsimpan'])) {
     //ambil nilai form yg dikirim
     $username =$_POST['txtusername'];
     $userpassword =$_POST['txtpassword'];
     $useremail =$_POST['txtemail'];
 
 //eksekusi query
 $query = "INSERT INTO useraccount (username,userpassword,email) VALUES ('$username','$userpassword','$useremail')";
 $sql = mysqli_query($conn,$query);


 //check sql query benar/tidak
 if ($sql) {
     echo 'REGISTRASI berhasil';

 } else {
     echo 'REGISTRASI gagal';
 }

 }

?>

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
    <a href="login.php" class="btn btn-primary mt-3 mb-3"> FORM LOGIN  </a>
<a href="registrasi.php" class="btn btn-primary mt-3 mb-3"> FORM REGISTRASI </a>
<br>
<form action="registrasi.php" method="post">
    <label for="username"> Username: </label>
    <input type="text" name="txtusername" id="username">
    <br>
    <label for="userpassword"> Password: </label>
    <input type="password" name="txtpassword" id="userpassword">
    <br>
    <label for="useremail">Email</label>
    <input type="text" id="useremail" name="txtemail">
    <br>
    <button type="submit" value="simpan" name="btnsimpan">simpan</button>
</form>
    </body>