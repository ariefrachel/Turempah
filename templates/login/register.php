<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="../../static/css/main.css" rel="stylesheet">
    <style>
        body {
            position: relative; /* Diperlukan untuk posisi elemen pseudo */
        }

        body::before {
            content: "";
            background-image: url('../../static/img/bg/login_bg.png'); /* Ganti URL_GAMBAR_BACKGROUND dengan URL gambar background Anda */
            background-size: cover;
            background-position: center;
            position: fixed;
            top: 0;
            left: 0;
            filter: blur(3px);
            width: 100%;
            height: 100%;
            z-index: -1; /* Memastikan gambar latar belakang berada di belakang konten */
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna hitam dengan transparansi 50% */
            z-index: -1; /* Memastikan overlay berada di belakang konten */
        }

        .container {
            position: relative; /* Membuat konten dalam container relatif terhadap gambar latar belakang */
        }

        .card {
            background-color: rgba(255, 255, 255, 0.9); /* Menambahkan lapisan transparan pada kartu */
            border: none;
        }
    </style>
</head>
<body>
    <div class="overlay"></div> <!-- Overlay hitam transparan -->
    <div class="container">
        <div class="row">
            <div class="card mt-4">
                <div class="card-body">
                    <p><a href="../../index.php">&lt; Kembali ke Home</a></p>
                    <hr>
                    <h1>Register Rempahtour</h1>
                    <br>
                    <form action="proses/proses_register.php" method="POST">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="username" class="form-control" id="username" name="username" placeholder="Username" required="">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
                        </div>
                        <div class="mb-3">
                            <label for="notelp" class="form-label">No. Hp</label>
                            <input type="text" class="form-control" id="notelp" name="notelp" placeholder="No. Telepon" required="">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">
                        </div>
                        <!-- <div class="mb-3">
                            <label for="confirmpassword" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" placeholder="Nama Lengkap" required="">
                        </div> -->
                        <button type="submit" class="btn btn-primary" style="border:none">Register</button>
                    </form>
                    <hr>
                    <p>Sudah punya akun? <a href="../../templates/login/login.php">Klik Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>
