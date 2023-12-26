<?php
include('../../db/config.php');
?>

<?php

// Periksa apakah ada parameter ID yang dikirimkan
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Buat query untuk menghapus admin berdasarkan ID
    $sql = "DELETE FROM admin WHERE id=$id";

    if ($con->query($sql) === TRUE) {
        echo "Admin berhasil dihapus.";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
} else {
    echo "ID admin tidak ditemukan.";
}

// Tutup koneksi
$con->close();
?>
