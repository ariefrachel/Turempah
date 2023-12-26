<?php
include('../../../../db/config.php');

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
        $rutemap = $data['rutemap'];

        // Path ke direktori gambar
        $gambarDir = '../../../../static/img/map/thumb/';

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
    <link href="../../../../static/css/main.css" rel="stylesheet">
    <title>Edit Data Tour</title>
    <style>
        /* Atur batasan tinggi dan overflow untuk profil */
        .profil-text {
            max-height: 200px; /* Tinggi maksimum area teks */
            overflow-y: auto; /* Aktifkan scroll jika teks melebihi tinggi maksimum */
        }
    </style>
</head>

<body>

    <div class="container" style="margin-top:8rem">
        <h1 class="mt-4">Edit Data Tour</h1>
        <form method="post" enctype="multipart/form-data" novalidate>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar:</label>
                <input type="file" class="form-control" id="gambar" name="gambar">
                <img src="<?php echo $gambarPath; ?>" alt="Gambar saat ini" style="max-width: 200px; margin-top: 10px;">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
            </div>
            <div class="mb-3">
                <label for="profil" class="form-label">Profil:</label>
                <textarea class="form-control" id="editor" name="profil" required data-ckeditor="true"><?php echo $profil; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="rutemap" class="form-label">Rutemap:</label>
                <input type="text" class="form-control" id="rutemap" name="rutemap" value="<?php echo $rutemap; ?>" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="http://localhost/rempahtour/admin/menus/tempat/list_tempat.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <!-- Include CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        // Initialize CKEditor
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <?php
    if (isset($_POST['submit'])) {
        // Ambil nilai dari form
        $nama = $_POST['nama'];
        $profil = $_POST['profil'];
        $alamat = $_POST['alamat'];
        $rutemap = $_POST['rutemap'];

        // Jika file gambar diubah
        if ($_FILES['gambar']['size'] > 0) {
            $gambar = $_FILES['gambar']['name'];
            $target_dir = "../../../../static/img/map/thumb/";
            $target_file = $target_dir . basename($gambar);
            move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);

            // Update data dengan gambar baru
            $sql = "UPDATE tempat SET gambar = '$gambar', nama = '$nama', profil = '$profil', alamat = '$alamat', rutemap = '$rutemap' WHERE id = $tempatId";
        } else {
            // Update data tanpa mengubah gambar
            $sql = "UPDATE tempat SET nama = '$nama', profil = '$profil', alamat = '$alamat', rutemap = '$rutemap' WHERE id = $tempatId";
        }

        if ($con->query($sql) === TRUE) {
            echo "Data berhasil diupdate.";
            header("Location: http://localhost/rempahtour/admin/menus/tempat/list_tempat.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    }
    ?>
</body>

</html>
