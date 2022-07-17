<?php 
include 'koneksi.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style-registrasi.css">
</head>
<body>

<div class="main">
<div class="background">
<h2 style="font-weight:bold; color: #753422; text-align: center;">Registrasi</h2><br>
<form action="" method="post">

			<label style="font-weight:bold; color: #753422; " for="username">username :</label><br>
			<input id="box" type="text" name="username" id="username" placeholder="Masukan username"><br>

			<label style="font-weight:bold; color: #753422; " for="password">password :</label><br>
			<input id="box" type="password" name="password" id="password" placeholder="Masukan Password"><br>

			<label style="font-weight:bold; color: #753422; " for="password2">konfirmasi password :</label><br>
			<input id="box" type="password" name="password2" id="password2" placeholder="Konfirmasi password anda"><br>

			<button class="daftar-btn" type="submit" name="register">Daftar</button>
</form>
</div>
</div>

</body>
</html>