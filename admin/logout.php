<?php
session_start();

// Hapus semua sesi yang ada
session_destroy();

// Arahkan pengguna ke halaman login atau halaman lain yang sesuai
header("Location: login.php"); // Ganti "login.php" dengan halaman yang sesuai
?>
