<?php


session_start();
//jika blm login bawa kembali login.php
if (empty($_SESSION['namapengguna']) && empty($_SESSION['sandipengguna'])) {
    header('login.php');
} 

    echo "Username : ".$_SESSION ['namapengguna'];
    echo "<br>Password : ". $_SESSION ['sandipengguna'];




?>
<a href="logout.php" > KELUAR </a>