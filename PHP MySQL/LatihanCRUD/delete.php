<?php
    include "koneksi.php";
    $query = mysqli_query($conn, "DELETE FROM menanam WHERE id='".$_GET["id"]."'");
    if ($query) echo "Data berhasil dihapus";
    else echo  "Data gagal dihapus";
    echo "<br /><br /><a href='formdata.php'>Kembali</a>";
?>