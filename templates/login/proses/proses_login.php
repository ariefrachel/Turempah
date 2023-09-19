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

    // Di sini, Anda harus mendapatkan orderId yang sesuai dari basis data atau sumber lainnya.
    // Misalnya, kita asumsikan orderId tersimpan dalam basis data dalam tabel user.
    $query = "SELECT order_id FROM user WHERE username='$username'";
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $orderId = $row['order_id'];

        // Simpan orderId dalam sesi
        $_SESSION['order_id'] = $orderId;
    }

    header("Location: ../../../index.php");
} else {
    // Jika login gagal
    echo "Login gagal. Silakan coba lagi.";
}

$con->close();
?>
