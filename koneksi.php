<?php

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "root";
$DB_NAME = "web-sekolah";



$koneksi = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
$dataPostingan = mysqli_query($koneksi, "SELECT * FROM postingan");



$dataSiswa = mysqli_query($koneksi, "SELECT * FROM siswa"); 

$dataGuru = mysqli_query($koneksi, "SELECT * FROM guru"); 

$dataStaf = mysqli_query($koneksi, "SELECT * FROM staf"); 


if(!$koneksi){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
