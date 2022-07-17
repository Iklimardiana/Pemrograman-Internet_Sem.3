<?php session_start();
unset($_SESSION["nama"]); //hapus data session spesifik
session_destroy(); //hapus semua data session
?>