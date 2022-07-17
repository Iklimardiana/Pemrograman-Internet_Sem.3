<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

include 'koneksi.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil ditambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'halamanpegawai.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'halamanpegawai.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style-tambah.css">
	<title>Tambah Daftar Menu</title>
</head>
<body>
<div class="main">
	<h2 style="text-align: center; color:#753422;">Tambah Daftar Menu</h2>
	<form action="" method="post" enctype="multipart/form-data">


				<label style="font-weight:bold; color: #753422; " for="menu">Menu : </label><br>
				<input id="box"type="text" name="menu" id="menu" placeholder="Masukkan nama menu"><br>

				<label style="font-weight:bold; color: #753422; " for="harga">Harga :</label><br>
				<input id="box" type="text" name="harga" id="harga" placeholder="Masukan Harga"><br>
				<label style="font-weight:bold; color: #753422; " for="gambar">Gambar : </label><br>
				
				<input type="file" name="gambar" id="gambar" ><br><br>
				<button class="tambah-btn"; type="submit" name="submit">Tambah Data!</button>

</div>
	</form>




</body>
</html>