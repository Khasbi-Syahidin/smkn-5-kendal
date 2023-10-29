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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
    <table class="table">
        <thead>
            
            <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Gender</th>
            <th scope="col">Mapel</th>
            </tr>
        </thead>
        <tbody>
        <?php
                $i = 1; 
                foreach($dataGuru as $guru):
            ?>
            <tr>
            <th scope="row"><?= $i ?></th>
            <td><?= $guru['nama']; ?></td>
            <td><?= $guru['gender']; ?></td>
            <td><?= $guru['mapel']; ?></td>
            </tr>
            <?php 
            $i++; 
            endforeach ?>
        </tbody>
        </table>
        <a href="tambah-guru.php">
          <button type="button" class="btn btn-info">Tambah Data</button>
        </a>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  </body>
</html>