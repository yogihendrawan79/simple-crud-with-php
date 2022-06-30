<?php
include 'koneksi.php';
$id_matkul = $_GET["id_matkul"];
mysqli_query($koneksi, "DELETE FROM matkul WHERE id_matkul = $id_matkul")or die(mysql_error());

header("location:index.php?page=matkul");
?>