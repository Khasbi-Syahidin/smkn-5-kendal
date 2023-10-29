<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $mapel = $_POST['mapel'];
    $query = "INSERT INTO guru (nama, gender, mapel) VALUES ('$nama', '$gender', '$mapel')";
    $result = mysqli_query($koneksi, $query);
    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container mt-5">
    <form method="post"> <!-- Mengubah method="$_POST" menjadi "post" -->
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="gender" class="form-label">Jenis Kelamin</label>
          <input type="text" class="form-control" id="gender" name="gender">
        </div>
        <div class="mb-3">
          <label for="mapel" class="form-label">Mapel</label>
          <input type="text" class="form-control" id="mapel" placeholder="Contoh : PAI" name="mapel">
        </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
