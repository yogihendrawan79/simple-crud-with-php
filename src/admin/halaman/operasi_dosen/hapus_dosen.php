<?php
include 'koneksi.php';
$id_dosen = $_GET["id_dosen"];
mysqli_query($koneksi, "DELETE FROM dosen WHERE id_dosen = $id_dosen")or die(mysql_error());

header("location:index.php?page=dosen");
?>