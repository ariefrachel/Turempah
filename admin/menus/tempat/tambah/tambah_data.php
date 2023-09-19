<?php
include('../../../db/config.php');

$sql = mysqli_query($con, "SELECT * FROM tempat") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Tour</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Tambah Data Tour</h1>
        <form method="post" enctype="multipart/form-data" novalidate>
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar:</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>
            <div class="mb-3">
                <label for="profil" class="form-label">Profil:</label>
                <textarea class="form-control" id="editor" name="profil" required data-ckeditor="true"></textarea>
            </div>

            <div class="mb-3">
                <label for="rutemap" class="form-label">Rutemap:</label>
                <input type="text" class="form-control" id="rutemap" name="rutemap" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Tambah Data</button>
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
 
        // Proses upload gambar
        $gambar = $_FILES['gambar']['name'];
        $target_dir = "../../../../static/img/map/thumb/";
        $target_file = $target_dir . basename($gambar);
        move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file);

        // Ambil nilai dari form
        $nama = $_POST['nama'];
        $profil = $_POST['profil'];
        $alamat = $_POST['alamat'];
        $rutemap = $_POST['rutemap'];

        // Insert data ke database
        $sql = "INSERT INTO tempat (gambar, nama, profil, alamat, rutemap) VALUES ('$gambar', '$nama', '$profil', '$alamat', '$rutemap')";

        if ($con->query($sql) === TRUE) {
            echo "Data berhasil ditambahkan.";
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    }
    ?>
</body>
</html>
