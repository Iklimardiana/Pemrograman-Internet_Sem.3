<?php
    include "koneksi.php";
    $query = mysqli_query($conn, "UPDATE menanam SET nama_tanaman = '".$_POST["nama_tanaman"]."', hasil_panen = '".$_POST["hasil_panen"]."',lama_tanam = '".$_POST["lama_tanam"]."', tanggal_panen = '".$_POST["tanggal_panen"]."' WHERE id = '".$_GET["id"]."'");
    if ($query) echo "Data berhasil diubah";
    else echo "Data gagal diubah";
    echo "<br /><br /><a href='formdata.php'>Lihat Data</a>";
?>
