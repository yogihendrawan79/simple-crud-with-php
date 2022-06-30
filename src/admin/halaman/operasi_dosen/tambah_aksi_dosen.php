<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$kd_dosen = $_POST['kd_dosen'];
$nama_dosen = $_POST['nama_dosen'];
$hp = $_POST['hp'];
$email = $_POST['email'];
// menginput data ke database
mysqli_query($koneksi,"insert into dosen values('','$kd_dosen','$nama_dosen','$hp','$email')");
// mengalihkan halaman kembali ke index.php
header("location:index.php?page=dosen");
?>