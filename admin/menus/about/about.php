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
        <div class="profil">
            <div class="row">
            <?php
            // Lakukan query ke database
            $sql = mysqli_query($con, "SELECT * FROM about") or die(mysqli_error($con));

            // Periksa apakah query berhasil
            if ($sql && mysqli_num_rows($sql) > 0) {
                while ($data = mysqli_fetch_assoc($sql)) {
                    $bio = $data['bio'];

                    ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title mt-3">Tentang Rempahtour</h3>
                                    <a href="edit.php">
                                        <button class="btn btn-primary" style="border:none">Edit</button>
                                    </a>
                                </div>
                                <hr>
                                <p class="card-text" style="font-size:16px"><?php echo $bio; ?></p>
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
<script>
    function confirmDelete() {
        return confirm("Apakah Anda yakin ingin menghapus data ini?");
    }
</script>
</html>
