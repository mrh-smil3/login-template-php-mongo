
<html>
<head>
	<title>Membuat Login Multi User Dengan PHP dan MySQLi - www.belajarwithib.my.id</title>
</head>
<body>
	<center><h3>Membuat Login Multi User Dengan PHP dan MySQLi <br/> www.belajarwithib.my.id</h3>
	<?php
	if(isset($_GET['alert'])){
		if($_GET['alert']=="gagal"){
			echo "<p>Maaf! Username & Password Salah.</p>";
		}else if($_GET['alert']=="belum_login"){
			echo "<p>Anda Harus Login Terlebih Dulu!</p>";
		}else if($_GET['alert']=="logout"){
			echo "<p>Anda Telah Logout!</p>";
		}
	}
	?>
	</center>
	<center>
	<table>
		<form action="/login/config/aksi.php" method="post">
			<tr>
				<td>
					<label>Username</label>
				</td>
				<td>
					<input type="text" name="username" placeholder="Username .." required="required">
				</td>
			</tr>
			
			<tr>
				<td>
					<label>Password</label>
				</td>
				<td>
					<input type="password" name="password" placeholder="Password .." required="required">
				</td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit" class="tombol_login" value="login"></td>
				<td></td>
			</tr>
		</div>
	</table>
</center>
</body>
</html>