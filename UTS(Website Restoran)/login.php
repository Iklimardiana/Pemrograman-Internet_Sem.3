<?php 
session_start();
include 'koneksi.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['kunci']) ) {
	$id = $_COOKIE['id'];
	$kunci = $_COOKIE['kunci'];

	$result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
	$row = mysqli_fetch_assoc($result);

	// cek cookie dan username
	if( $kunci === hash('sha256', $row['username']) ) {
		$_SESSION['login'] = true;
	}
	
}

if( isset($_SESSION["login"]) ) {
	header("Location: halamanpegawai.php");
	exit;
}


if( isset($_POST["login"]) ) {

	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$_SESSION["username"] = $_POST["username"];

	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek username
	if( mysqli_num_rows($result) === 1 ) {

		// cek password
		$row = mysqli_fetch_assoc($result);
		if( password_verify($password, $row["password"]) ) {
			// set session
			$_SESSION["login"] = true;

			// cek remember me
			if( isset($_POST['remember']) ) {
				// membuat cookie
				setcookie('id', $row['id'], time()+60);
				setcookie('kunci', hash('sha256', $row['username']), time()+60);
			}

			header("Location: halamanpegawai.php");
			exit;
		}
	}

	$error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style-login.css" >
	<title>Halaman Login Petugas</title>
</head>
<body>

<div class="main">
	<h2 style="text-align: center; color:#753422; margin-top: 20px;">LOGIN</h2>
	<?php if( isset($error) ) : ?>
		<p style="color: red; font-style: italic;">Username / password salah</p>
	<?php endif; ?>
	<form action="" method="post">
			<label style="font-weight:bold; color: #753422; " for="username" > <br><br><i class="bx bx-user"></i> Username:</label><br>
			<input id="box" type="text" name="username" id="username" placeholder="Masukan username"><br>
			

			<label style=" color: #753422; font-weight:bold; color: #753422" for="password"><br><i class="bx bx-key"></i>Password :</label><br>
			<input input id="box" type="password" name="password" id="password" placeholder="Masukan password"><br>

			<input type="checkbox" name="remember" id="remember">
			<label style="color: #753422; font-size:15px; font-weight:bold; padding-left:5px;" for=remember">Remember me</label><br><br>

			<button class="login-btn" type="submit" name="login">Login</button><br>	
	</form>
	</div>
</div>

</body>
</html>