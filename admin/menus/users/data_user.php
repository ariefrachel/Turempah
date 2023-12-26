<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>DATA </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.css">
    <link href="../../../static/css/main.css" rel="stylesheet">
  </head>
  <body>
  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php include '../../components/navbar.php';?>
  </header>
         <div class="container">
  <div class="row">
     
   <h1> <br>
      <br>Data Users</h1>
<br>

<script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>

<table
  id="table"
  data-toggle="table"
  data-height="460"
  data-pagination="true"
   
  data-search="true"
 >
  <thead>
    <tr>
      <th data-field="id">NO</th>
      <th data-field="name">NAMA LENGKAP </th>
      <th data-field="username">USERNAME </th>
      <th data-field="email">EMAIL </th>
      <th data-field="notelp">NO. TELP </th>
       <th data-field="status">STATUS</th>
           <th data-field="hapus">HAPUS</th>
    </tr>
    
  </thead>
  <tbody>
                      <?php  
            include "../../../db/config.php";
error_reporting(0);
  $no=1;


$query = mysqli_query($con, "SELECT * FROM user  ORDER BY id ASC ");
while ($data = mysqli_fetch_array($query)) { // Ambil semua data dari hasil eksekusi $sql
   
  
$status=$data['transaction_status'];

   echo "<tr>";
   echo "<td >".$no++."</td>";
    echo "<td>".$data['nama']."</td>";
     echo "<td>".$data['username']."</td>";
     echo "<td>".$data['email']."</td>";
     echo "<td>".$data['notelp']."</td>";

    
if($status >=3 )
{
echo  "<td><b> Pembayaran Sukses</b></span></td>";
}
elseif ($status>=2  ) {
  echo "<td><b> Pembayaran Panding</b></span></td>";
}
else
{
  echo "<td><b> Pembayaran Belum Dilakukan</b></span></td>";
}


    echo "<td><a href='hapus.php?id=".$data['id']."' class='btn btn-danger' onclick='return confirmDelete()'><i class='bi bi-trash-fill'></i> HAPUS </a></td>";
   
    }
     

  ?> 
  </tbody>
</table>
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.21.0/dist/bootstrap-table.min.js"></script>
  </body>
  <script>
  function confirmDelete() {
    return confirm("Apakah Anda yakin ingin menghapus data ini?");
  }
</script>

</html>