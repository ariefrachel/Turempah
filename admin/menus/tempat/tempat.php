<?php
include('../../db/config.php');

$sql = mysqli_query($con, "SELECT * FROM tempat") or die(mysqli_error($con));
$data = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profil</title>
    <style>
    body {
        background: #f5f6f8;
    }

    h2,
    h3,
    p,
    th,
    td {
        color: #333;
    }

    .bio {
        width: 50%;
        position: absolute;
        top: 5%;
        left: 25%;
    }

    .profil {
        width: 800px;
        height: auto;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
        padding: 3em;
    }
    </style>
</head>

<body>
    <div class="bio">
        <a href="tambah/tambah_data.php">
            <button class="btn btn-primary" style="border:none">Tambah Data</button>
        </a>
        <div class="profil">
            <?php
                $sql = mysqli_query($con, "SELECT * FROM tempat ORDER BY id ASC") or die(mysqli_error($con));
                if(mysqli_num_rows($sql) > 0) {
                    $no = 1;
                    while($data = mysqli_fetch_assoc($sql)) {
                        echo '<h2>Nama</h2>';
                        echo nl2br('<p class="p">'.$data['nama'].'</p>');
                        echo "<h2>sejarah</h2>";
                        echo nl2br('<p class="p">'.$data['profil'].'</p>');
                        echo "<h2>no telpon</h2>";
                        echo nl2br('<p class="p">'.$data['alamat'].'</p>');
                        echo "<h2>email</h2>";
                        echo nl2br('<p class="p">'.$data['rutemap'].'</p>');
                    }
                } else{
                    echo '
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    ';
                }
            ?>
        </div>
  
    </div>

</body>

</html>