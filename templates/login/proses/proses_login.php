<?php
session_start(); // Mulai atau lanjutkan sesi yang ada

include "../../../db/config.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = $con->query($query);

if ($result->num_rows > 0) {
    // Jika login berhasil
    $_SESSION['username'] = $username; // Simpan informasi login dalam sesi
    header("Location: ../../../index.php");
} else {
    // Jika login gagal
    echo "Login gagal. Silakan coba lagi.";
}

$con->close();
?>
