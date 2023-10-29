<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $query = "INSERT INTO siswa (nama, gender, kelas, jurusan) VALUES ('$nama', '$gender', '$kelas', '$jurusan')";
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
          <label for="kelas" class="form-label">kelas</label>
          <input type="text" class="form-control" id="kelas" name="kelas">
        </div>
        <div class="mb-3">
          <label for="jurusan" class="form-label">jurusan</label>
          <input type="text" class="form-control" id="jurusan" placeholder="Contoh : Programmer" name="jurusan">
        </div>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
