<?php
    session_start();
    unset($_SESSION["nama"]); //s\Hapus data sesuai spesifik
    session_destroy(); //hapus semua data session
?>