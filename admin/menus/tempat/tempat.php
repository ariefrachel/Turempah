<?php
include('../../db/config.php');

// Periksa apakah parameter 'id' telah diterima
if (isset($_GET['id'])) {
    $tempatId = $_GET['id'];

    // Query untuk mengambil data tempat berdasarkan ID
    $sql = mysqli_query($con, "SELECT * FROM tempat WHERE id = $tempatId") or die(mysqli_error($con));

    // Periksa apakah query berhasil dan ada data yang ditemukan
    if ($sql && mysqli_num_rows($sql) > 0) {
        $data = mysqli_fetch_assoc($sql);

        // Ekstrak data dari hasil query
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $profil = $data['profil'];
        $gambar = $data['gambar'];

        // Path ke direktori gambar
        $gambarDir = '../../../static/img/map/thumb/';

        // Menghasilkan path lengkap ke gambar
        $gambarPath = $gambarDir . $gambar;
    } else {
        // Tampilkan pesan jika data tidak ditemukan
        echo '<p>Data tidak ditemukan.</p>';
        exit; // Keluar dari script
    }
} else {
    // Jika parameter 'id' tidak diterima, tampilkan pesan error
    echo '<p>ID tempat tidak ditemukan.</p>';
    exit; // Keluar dari script
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../static/css/main.css" rel="stylesheet">
    <title>Detail Tempat</title>
    <style>
        /* Atur batasan tinggi dan overflow untuk profil */
        .profil-text {
            max-height: 200px; /* Tinggi maksimum area teks */
            overflow-y: auto; /* Aktifkan scroll jika teks melebihi tinggi maksimum */
        }
    </style>
</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <?php include '../../components/navbar.php'; ?>
    </header>
    <div class="container" style="margin-top:8rem">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo $gambarPath; ?>" alt="" style="width:100%;">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-8">
                    <h2><?php echo $nama; ?></h2>
                    </div>
                    <div class="col-4">
                    <a href="edit/edit.php?id=<?php echo $tempatId; ?>" class="btn btn-primary">Edit</a>
                    <a href="http://localhost/rempahtour/admin/menus/tempat/list_tempat.php" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
                <p class="profil-text overflow-auto"><?php echo $profil; ?></p>
                <p><?php echo $alamat; ?></p>
            </div>
        </div>
    </div>
</body>

</html>
