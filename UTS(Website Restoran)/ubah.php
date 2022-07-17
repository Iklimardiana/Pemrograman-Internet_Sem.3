<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

include 'koneksi.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$menuMakanan = query("SELECT * FROM menumakanan WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'halamanpegawai.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'halamanpegawai.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style-ubah.css">
	<title>Ubah Daftar Menu</title>
</head>
<body>
<div class="main">
	<h2 style="text-align: center; color:#753422; margin-top: 20px;">Ubah Daftar Menu</h2>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $menuMakanan["id"]; ?>">
		<input type="hidden" name="gambar" value="<?= $menuMakanan["gambar"]; ?>">

				<label style="font-weight:bold; color: #753422; " for="menu">Menu : </label><br>
				<input id="box" type="text" name="menu" id="menu" value="<?= $menuMakanan["menu"]; ?>"><br>

				<label style="font-weight:bold; color: #753422; " for="harga">Harga : </label><br>
				<input id="box" type="text" name="harga" id="harga" value="<?= $menuMakanan["harga"]; ?>"><br>

				<label style="font-weight:bold; color: #753422; " for="gambar">Gambar :</label> <br>
				<img src="gambar/file/<?= $menuMakanan['gambar']; ?>" width="70"> <br>
				<input type="file" name="gambar" id="gambar"><br>

				<button class= "update-btn" type="submit" name="submit">Ubah Data!</button>
	</form>
</div>

</body>
</html>