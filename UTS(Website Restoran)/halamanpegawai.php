<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

include 'koneksi.php';
$MenuMakanan = query("SELECT * FROM menumakanan");

// if( isset($_POST["cari"]) ) {
// 	$MenuMakanan = cari($_POST["keyword"]);
// }

?>
<!DOCTYPE html>
<html>
<head>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style-halamanpegawai.css" />
    <title>Halaman Pegawai</title>
</head>
<body>
<div class="headerr">
<body>
    <div class="container">
        <nav>
           <ul id="navbar">
                <li><h3 style="font-size:larger"><i class="bx bx-user"></i> <?=$_SESSION["nama"];?></h3></li>
                <li><a onclick="return confirm('yakin akan keluar dari halaman ini?')"  href="logout.php"><b><i class="bx bx-exit"></i> Logout</b></a></li>
            </ul>
            <div class="menu-toggle" id="nav-bar">
                <input type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>
    <center>
        <div class="box-atas">
            <h1 style="text-align: center;"><marquee scrollamount='10'> Selamat Datang <?=$_SESSION["username"];?> !!</marquee></h1><br><br>
        </div>
    </center>

    <fieldset style= 'border-color : #753422'>
    <legend align="center" style= 'color:#a08238;' ><h1 style='text-align:center;'>Daftar Menu Makanan</h1></legend>
        <div>
            <center>
                
                <div class="box-transparan">                                    
                <div>
                    <form action="" method="post">
                        <input id="boxsearch" type="text" name="keyword" size="40" autofocus placeholder="Cari.." autocomplete="off" id="keyword">
                        <button class="search-btn"  type="submit" name="cari" id="tombol-cari"><i class="bx bx-search"></i></button>
                    </form>
                    </div>
                    <button class="tambahmenu">
                       <a href="tambah.php"><i class="bx bx-plus"></i><b>Tambah Menu</b></a>
                    </button>  
                </div>             
                <table border='2' cellpadding='10' width ='800px' style = 'border-color : #a08238' align ='center'>
                    <tr bgcolor=#f1dfb1>
                        <th><h3 style="color:#a08238;">Aksi<h3></th>
                        <th><h3 style="color:#a08238;">Gambar<h3></th>
                        <th><h3 style="color:#a08238;">Nama Menu<h3></th>
                        <th><h3 style="color:#a08238;">Harga<h3></th>
                    </tr>
                    

                    <?php foreach( $MenuMakanan as $row ) : ?>
                    <tr bgcolor=#f9f1dd style="text-align:center">
                        <td >
                            <a href="ubah.php?id=<?= $row["id"]; ?>" style="text-decoration: none;">
                            <i class='bx bx-edit' style="color:#a08238;"></i></a>  | 
                            <a href="hapus.php?id=<?= $row["id"]; ?> " onclick="return confirm('yakin akan menghapus menu ini?');" style="text-decoration: none;">
                            <i class='bx bx-trash' style="color:#a08238;"></i></a>
                        </td>
                        <td><img src="gambar/file/<?= $row["gambar"]; ?>" width="200" height="50px"></td>
                        <td style="color:#a08238;"><?= $row["menu"]; ?></td>
                        <td style="color:#a08238;">Rp. <?= $row["harga"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table><br><br>
        </div>
        </center>
        </legend>
    </fieldset>
        
    <script>
        const menuToggle = document.querySelector('.menu-toggle input');
        const nav = document.querySelector('nav ul');

        menuToggle.addEventListener('click', function() {
            nav.classList.toggle('slide');
        });
    </script>
</body>
</html>