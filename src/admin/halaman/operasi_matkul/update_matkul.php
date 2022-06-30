<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$id_matkul=$_POST['id_matkul'];
$kd_matkul=$_POST['kd_matkul'];
$nama_matkul=$_POST['nama_matkul'];
$sks=$_POST['sks'];
$semester=$_POST['semester'];
// update data ke database
mysqli_query($koneksi,"UPDATE matkul SET kd_matkul='$kd_matkul', nama_matkul='$nama_matkul', sks='$sks', semester='$semester' WHERE id_matkul='$id_matkul'");
// mengalihkan halaman kembali ke index.php
header("location:../../?page=matkul");
?>