<?php
include('../../db/config.php');
?>

<?php
if(isset($_POST['submit'])) {

    // Ambil nilai dari form
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Buat query untuk memasukkan data admin baru
    $sql = "INSERT INTO admin (nama, username, email, password) VALUES ('$nama', '$username', '$email', '$password')";

    if ($con->query($sql) === TRUE) {
        echo "Admin berhasil didaftarkan.";
        header("Location: http://localhost/rempahtour/admin/menus/admin/data_admin.php");

    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    // Tutup koneksi
    $con->close();
}
?>
