<?php
include('koneksi.php')
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
    <div class="container">
    <table class="table">
        <thead>
            
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Gender</th>
            <th scope="col">Kelas</th>
            <th scope="col">Jurusan</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $i = 1; 
                foreach($dataSiswa as $siswa):
            ?>
            <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $siswa['nama']; ?></td>
            <td><?= $siswa['gender']; ?></td>
            <td><?= $siswa['kelas']; ?></td>
            <td><?= $siswa['jurusan']; ?></td>
            </tr>
            <?php
            $i++; 
            endforeach ?>
        </tbody>
        </table>
        <a href="tambah-siswa.php">
          <button type="button" class="btn btn-info">Tambah Data</button>
        </a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>