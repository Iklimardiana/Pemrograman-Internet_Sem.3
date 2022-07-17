<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Update</title>
</head>
<body>
    <?php
    include "koneksi.php";
    $query = mysqli_query($conn, "SELECT * FROM menanam WHERE id =
    '".$_GET["id"]."'");
    if ($data = mysqli_fetch_array($query)) {
    ?>
    <h3>Update Data</h3>
    <form method="post" action="update.php?nim=<?php echo $data['id']; ?>">
    ID: <?php echo $data['id']; ?> <br />
    Nama Tanaman: <input type="text" name="nama_tanaman" value="<?php echo $data['nama_tanaman']; ?>" /> <br />
    Hasil panen : <input type="number" name="hasil_tanam" value="<?php echo $data['hasil_tanam']; ?>" /> <br />
    Lama tanam :<input type="number" name="lama_tanam" value="<?php echo $data['lama_tanam']; ?>" /> <br />
    Tanggal panen :<input type="number" name="tanggal_panen" value="<?php echo $data['tanggal_panen']; ?>" /> <br />
    <input type="submit" value="Update" />
    </form>
    <?php
    } else echo "Data tidak ditemukan";
    ?>
    <br /><a href='formdata.php'>Simpan</a>
    <br /><a href='viewdata.php'>Lihat Data</a>
</body>
</html>