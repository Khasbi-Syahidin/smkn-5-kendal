<?php

include 'koneksi.php';

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web SMKN 5 Kendal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <style>
      .navbar a{
        color: #fff;
      }
      .navbar a:hover{
        color: #fff;
      }
      
      .card{
        background-color: #DEF6FE;
      }
      .card-hover :hover{
        background-color: #fff;
      }
      #data .container .row h1{
        color: #87B8D4;
      }
      #data .container .row .card .card-body h2{
        font-size: 60px;
        color: #FEAE74;
      }
      #data .container .row .card .card-body .btn-primary{
        background-color: #87B8D4;
        border: none;
      }
      #data .container .row .card .card-body .btn-primary:hover{
        background-color: #87B8D4;
        border: none;
      }
      footer .container .row h5{
        color: #fff;
      }
      footer .container .row a{
        color: #fff;
      }

      @media (max-width: 768px) {
        .selamat{
          text-align: center;
        }
        .hero{
          /* width: 50px; */
        }
        #carouselExampleAutoplaying{
          display: none;
        }
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg " style="background-color: #85B5CF;">
  <div class="container">
    <a class="navbar-brand" href="#">SMKN 5 Kendal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon white"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Kegiatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Data</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
    
<section>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner" >
    <div class="carousel-item active ">
      <img src="img/profile-1.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/profile-2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/profile-3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>

<section id="home" style="height: fit-content; background-color: #DEF6FE; padding: 85px, 0px, 85px, 0px">
  <div class="container "  >
    <div class="row py-5"  data-aos="fade-right">
      <div class="col-md-6">
      <img src="img/smk-vector.png" alt="" width="100%" class="hero">
      </div>
      <div class="col-md-6 m-auto px-5" data-aos="fade-left">
        <h1 class="m-auto selamat mb-2"  style="color: #FEAE74;">Selamat Datang Di <br> Website SMKN 5 Kendal</h1>
        <p class="selamat" style="color: #87B7D4;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia neque non ipsa eligendi sint assumenda molestias delectus similique laboriosam, optio tempora laborum amet asperiores facilis ratione eos, quo recusandae nihil?</p>
      </div>
    </div>
  </div>
</section>

<section style="background-color: #87B7D4; height: fit-content;" >
  <div class="container py-5">
    <div class="row gap-3 mx-auto d-flex justify-content-center py-2">
    <h1 class="text-center py-3" style="color: #FFF;">Kegiatan Terbaru</h1>
    <?php 
    $i = 1;
    foreach($dataPostingan as $postingan) : ?>
      <div class="card card-hover p-0" style="width: 18rem;" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <img src="img/profile-<?= $i; ?>.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title  text-center"><?php echo $postingan['title']; ?></h5>
        <p class="card-text text-center"><?php echo $postingan['content']; ?></p>
        </div>
      </div>
    <?php 
  $i++;
  endforeach; ?>
      <div class="card card-hover p-0" style="width: 18rem; border: none;" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
      <a href="tambah-postingan.php" class="text-decoration-none">
        <div class="px-5 py-2 d-flex justify-content-center">
          <img src="img/icon-tambah.png" class="card-img-top" alt="..." style="width: 80%;">
          </div>
          <div class="card-body">
          <h5 class="card-title text-center py-2 text-black">Tambah Postingan</h5>
          </div>
          </a>
      </div>
    </div>
    </div>
  </div>
</section>

<section id="data" >
  <div class="container py-5">
    <div class="row gap-3 justify-content-center">
      <h1 class="text-center py-3">Data Anggota Sekolah</h1>
      <div class="card text-center mb-3 card-hover2 p-0" style="width: 18rem;" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <div class="card-body m-auto">
          <?php 
            $resultSiswa = mysqli_query($koneksi, "SELECT COUNT(nama) as jumlahNama FROM siswa");

            if ($resultSiswa) {
                $row = mysqli_fetch_assoc($resultSiswa);
                $jumlahSiswa = $row['jumlahNama'];
                mysqli_free_result($resultSiswa);
            } else {
                $jumlahSiswa = "Error: " . mysqli_error($koneksi);
            }

          ?>
          <h2 class="card-title"><?= $jumlahSiswa;  ?></h2>
          <p class="card-text fs-6">Siswa</p>
          <a href="detail-siswa.php" class="btn btn-primary">LIhat Detail</a>
        </div>
      </div>
      <div class="card text-center mb-3 card-hover2 p-0" style="width: 18rem;" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <div class="card-body m-auto">
        <?php
            $resultGuru = mysqli_query($koneksi, "SELECT COUNT(nama) as jumlahNama FROM guru");

            if ($resultGuru) {
                $row = mysqli_fetch_assoc($resultGuru);
                $jumlahGuru = $row['jumlahNama'];
                mysqli_free_result($resultGuru);
            } else {
                $jumlahGuru = "Error: " . mysqli_error($koneksi);
            }
          ?>
          <h2 class="card-title"><?= $jumlahGuru; ?></h2>
          <p class="card-text fs-6">Guru</p>
          <a href="detail-guru.php" class="btn btn-primary">LIhat Detail</a>
        </div>
      </div>
      <div class="card text-center mb-3  card-hover2 p-0" style="width: 18rem;" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
        <div class="card-body m-auto">
        <?php
            $resultStaf = mysqli_query($koneksi, "SELECT COUNT(nama) as jumlahNama FROM staf");

            if ($resultStaf) {
                $row = mysqli_fetch_assoc($resultStaf);
                $jumlahStaf = $row['jumlahNama'];
                mysqli_free_result($resultStaf);
            } else {
                $jumlahGuru = "Error: " . mysqli_error($koneksi);
            }
          ?>
          <h2 class="card-title"><?= $jumlahStaf ?></h2>
          <p class="card-text fs-6">Staf</p>
          <a href="detail-staf.php" class="btn btn-primary">LIhat Detail</a>
        </div>
      </div>

    </div>
  </div>
</section>
<footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary" style="background-color: #FEAE70;">
  <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
    <div class="row">
      <div class="col-6 col-lg-3 offset-lg-1 mb-3">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Home</a></li>
          <li class="mb-2"><a href="#">Docs</a></li>
          <li class="mb-2"><a href="#">Examples</a></li>
          <li class="mb-2"><a href="#">Icons</a></li>
          <li class="mb-2"><a href="#">Themes</a></li>
          <li class="mb-2"><a href="#">Blog</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Swag Store</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3 mb-3">
        <h5>Guides</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Getting started</a></li>
          <li class="mb-2"><a href="#">Starter template</a></li>
          <li class="mb-2"><a href="#">Webpack</a></li>
          <li class="mb-2"><a href="#">Parcel</a></li>
          <li class="mb-2"><a href="#">Vite</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-3 mb-3">
        <h5>Projects</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Bootstrap 5</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Bootstrap 4</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Icons</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">RFS</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Examples repo</a></li>
        </ul>
      </div>
      <div class="col-6 col-lg-2 mb-3">
        <h5>Community</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Issues</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Discussions</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Corporate sponsors</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Open Collective</a></li>
          <li class="mb-2"><a href="#" target="_blank" rel="noopener">Stack Overflow</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
      AOS.init();
    </script>
    </body>
</html>