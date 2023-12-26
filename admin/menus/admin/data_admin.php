<?php
include('../../db/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../static/css/main.css" rel="stylesheet">
</head>
<body>
    <header id="header" class="header fixed-top d-flex align-items-center">
            <?php include '../../components/navbar.php';?>
        </header>
    <div class="container mt-5">
        <h2>Daftar Admin</h2>
        <a href="register_admin.php" class="btn btn-primary mb-3">Tambah Admin</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mengambil data admin
                $sql = "SELECT * FROM admin";
                $result = $con->query($sql);

                // Jika data ditemukan
                if ($result->num_rows > 0) {
                    // Tampilkan data dalam tabel
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>".$row["nama"]."</td>
                                <td>".$row["username"]."</td>
                                <td>".$row["email"]."</td>
                                <td>
                                    <a href='hapus_admin.php?id=".$row["id"]."' class='btn btn-danger'>Hapus</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Tidak ada admin.</td></tr>";
                }

                // Tutup koneksi
                $con->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
