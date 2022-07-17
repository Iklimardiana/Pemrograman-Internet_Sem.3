<?php
    session_start();
    if (!isset($_SESSION["counter"])) {
        $_SESSION["Nama"] = "pakwebprosession";
        $_SESSION["counter"] = 0;
    }
    echo "<br /> Nama : ".$_SESSION["Nama"];
    $_SESSION["counter"]++;
    echo "<br /> Anda telah melihat haaman ini sebanyak : ". $_SESSION["counter"]." kali";

?>