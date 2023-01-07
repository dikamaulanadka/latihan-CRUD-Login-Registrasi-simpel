<?php

include 'config/koneksi.php';

if (isset($_POST['proseslog'])) {

    $username =$_POST['txtusername'];
    $userpassword =$_POST['txtpassword'];
    $query = "select * from useraccount where username = '$username' and userpassword='$userpassword'";
    $sql = mysqli_query($conn,$query);
    $cek = mysqli_num_rows($sql);
    
    if ($cek > 0) {
        $_SESSION['username'] = $_POST['txtusername'] || $_SESSION['userpassword'] = $_POST['txtpassword'];
        header('index.php');
    }
        else if (empty($_POST['username']) && empty($_POST['userpassword']))
		{
			echo "<script >alert('masukan username dan password!!')</script>";
			header('login.php');
		}
		else if (($_SESSION['username'] <> $_POST['txtusername']) && ($_SESSION['userpassword'] == $_POST['txtpassword']))
		{ 
			echo "<script >alert('USERNAME SALAH!')</script>";
			header('login.php');
		}
		else if (($_SESSION['username'] == $_POST['txtusername']) && ($_SESSION['userpassword'] <> $_POST['txtpassword']))
		{
			echo "<script >alert('PASSWORD SALAH!')</script>";
			header('login.php');
		}
		
		else if (($_SESSION['username'] <> $_POST['txtusername']) && ($_SESSION['userpassword'] <> $_POST['txtpassword'])){
			echo "<script >alert('USERNAME &PASSWORD SALAH!')</script>";
			header('login.php');
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
    <form action="login.php" method="post" >
        <label for="username">Username</label>
        <input type="text" id="username" name="txtusername" ><br>
        <label for="userpassword">Password</label>
        <input type="password" id="userpassword" name="txtpassword" ><br>
        <input type="submit" value="login" name="proseslog">
</form>
        </body>