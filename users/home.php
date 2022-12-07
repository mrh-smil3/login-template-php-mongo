<?php 
session_start();
//berfungsi mengecek apakah user sudah login atau belum
if($_SESSION['username']==""){
	header("location:../index.php?alert=belum_login");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman User </title>
</head>
<body>
	<h1>Halaman USER</h1>

	<p>Halo <b><?php echo $_SESSION['nama']; ?><br></b> Anda telah login sebagai <b><?php echo $_SESSION['role']; ?></b>.</p>
	<a href="logout.php">logout</a>
</body>
</html>