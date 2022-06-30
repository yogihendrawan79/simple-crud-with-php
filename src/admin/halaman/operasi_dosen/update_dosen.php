<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$id_dosen=$_POST['id_dosen'];
$kd_dosen=$_POST['kd_dosen'];
$nama_dosen=$_POST['nama_dosen'];
$hp=$_POST['hp'];
$email=$_POST['email'];
// update data ke database
mysqli_query($koneksi,"UPDATE dosen SET kd_dosen='$kd_dosen', nama_dosen='$nama_dosen', hp='$hp', email='$email' WHERE id_dosen='$id_dosen'");
// mengalihkan halaman kembali ke index.php
header("location:../../?page=dosen");
?>