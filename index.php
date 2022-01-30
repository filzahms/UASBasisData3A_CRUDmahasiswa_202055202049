<?php
include_once("config.php");
 
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY id DESC");
?>
<br/>
<br/>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Basis Data 3A</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
  <h2>TABEL MAHASISWA</h2>       
  <table class="table table-bordered table-sm">
    <thead class="thead-light">
      <tr>
        <th>Nama</th>
        <th>NIM</th>
        <th>Prodi</th>
        <th>Update</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['nim']."</td>";
        echo "<td>".$user_data['prodi']."</td>";
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> |  <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
    }
    ?>
      </tr>
    </tbody>
  </table>
</div>
<a href="add.php"><center><button type="button" class="btn btn-success">Tambah</button><br/><br/>
</body>
</html>
