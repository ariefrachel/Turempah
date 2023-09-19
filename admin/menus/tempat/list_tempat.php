<?php
include('../../db/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../static/css/main.css" rel="stylesheet">
    <title>Profil</title>

</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
        <?php include '../../components/navbar.php';?>
    </header>
    <div class="bio container" style="margin-top:120px">
        <a href="tambah/tambah_data.php">
            <button class="btn btn-primary" style="border:none">Tambah Data</button>
        </a>
        <div class="profil">
            <div class="row">
            <?php
            // Lakukan query ke database
            $sql = mysqli_query($con, "SELECT * FROM tempat") or die(mysqli_error($con));

            // Periksa apakah query berhasil
            if ($sql && mysqli_num_rows($sql) > 0) {
                while ($data = mysqli_fetch_assoc($sql)) {
                    $gambar = $data['gambar'];
                    $nama = $data['nama'];
                    $alamat = $data['alamat'];

                    // Path ke direktori gambar
                    $gambarDir = '../../../static/img/map/thumb/';

                    // Menghasilkan path lengkap ke gambar
                    $gambarPath = $gambarDir . $gambar;
                    ?>
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="<?php echo $gambarPath; ?>" alt="" style="width:100%;height:150px">
                                <h5 class="card-title mt-3"><?php echo $nama; ?></h5>
                                <p class="card-text" style="font-size:14px"><?php echo $alamat; ?></p>
                                <a href="tempat.php?id=<?php echo $data['id']; ?>" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<p>Tidak ada data.</p>';
            }
            ?>
            </div>
        </div>
    </div>
</body>

</html>
