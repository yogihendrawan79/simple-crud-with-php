<?php
// koneksi database
include '../../koneksi.php';
// menangkap data yang di kirim dari form
$id_nilai=$_POST['id_nilai'];
$nim=$_POST['nim'];
$kd_matkul=$_POST['kd_matkul'];
$kd_dosen=$_POST['kd_dosen'];
$nhadir=$_POST['nhadir'];
$nuts=$_POST['nuts'];
$nuas=$_POST['nuas'];
$ntugas=$_POST['ntugas'];
// update data ke database
mysqli_query($koneksi,"UPDATE nilai SET nim='$nim', kd_matkul='$kd_matkul', kd_dosen='$kd_dosen', nhadir='$nhadir', nuts='$nuts', nuas='$nuas', ntugas='$ntugas' WHERE id_nilai='$id_nilai'");
// mengalihkan halaman kembali ke index.php
header("location:../../?page=nilai");
?>