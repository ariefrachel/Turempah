<!DOCTYPE html>
<html>
      <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAYMENT </title>
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
            width: 100%;
            filter: blur(3px);
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
    <div class="overlay"></div>
        <br>
        <br>
            <div class="container">
                
<div class="card">
  <div class="card-body">
    <center class="mt-5">
      <img class="mt-2"src="../../static/img/logo/check.png" alt="" style="max-width:100px">
      <h4 class="mt-4">PEMBAYARAN BERHASIL</h4>
      <p class="mt-4"style="font-size:18px">Selamat anda sudah dapat mengunjungi semua tour.</p>
      <hr>
      <br>
      <a href="https://app.tegaltourism.com/turempah"></a>
      <button class="btn btn-primary" style="border:none">KEMBALI KE HOME</button>
    </center>
    <br>

          </div>
          </div>
          </div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>