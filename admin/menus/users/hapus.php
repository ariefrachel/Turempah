<?php
include "../../../db/config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lakukan query DELETE ke database
    $query = "DELETE FROM user WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result) {
        // Jika penghapusan berhasil, alihkan kembali ke halaman sebelumnya atau halaman utama
        header("Location: http://localhost/rempahtour/admin/menus/users/data_user.php"); // Ganti index.php dengan halaman yang sesuai
        exit();
    } else {
        echo "Gagal menghapus data.";
    }
}
?>
