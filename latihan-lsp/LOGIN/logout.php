<?php 


session_start();

// menghapu semua sesi
session_destroy();

// Mengarahkan halaman dan memberikan pesan logout
header("location:index.php?pesan=logout");

?>