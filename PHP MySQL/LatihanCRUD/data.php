<?php
    include "koneksi.php";
    $query = mysqli_query($conn, "INSERT INTO menanam(nama_tanaman, hasil_panen, lama_tanam, tanggal_panen) VALUES 
    ('".$_POST["nama_tanaman"]."','".$_POST["hasil_panen"]."','".$_POST["lama_tanam"]."','".$_POST["tanggal_panen"]."')");
    if ($query) echo "Data berhasil diinput";
    else echo "Data gagal diinput";
    echo "<br/><br/><a href ='nyobadulu.php'>Kembali</a>";
?>