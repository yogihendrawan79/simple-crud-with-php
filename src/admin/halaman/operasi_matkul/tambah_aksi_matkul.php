<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$kd_matkul = $_POST['kd_matkul'];
$nama_matkul = $_POST['nama_matkul'];
$sks = $_POST['sks'];
$semester = $_POST['semester'];
// menginput data ke database
mysqli_query($koneksi,"insert into matkul values('','$kd_matkul','$nama_matkul','$sks','$semester')");
// mengalihkan halaman kembali ke index.php
header("location:index.php?page=matkul");
?>