<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$kd_matkul = $_POST['kd_matkul'];
$kd_dosen = $_POST['kd_dosen'];
$nhadir = $_POST['nhadir'];
$nuts = $_POST['nuts'];
$nuas = $_POST['nuas'];
$ntugas = $_POST['ntugas'];
// menginput data ke database
mysqli_query($koneksi,"insert into nilai values('','$nim','$kd_matkul','$kd_dosen','$nhadir','$nuts','$nuas','$ntugas')");
// mengalihkan halaman kembali ke index.php
header("location:index.php?page=nilai");
?>