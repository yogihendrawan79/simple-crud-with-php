<?php
include 'koneksi.php';
$id_nilai = $_GET["id_nilai"];
mysqli_query($koneksi, "DELETE FROM nilai WHERE id_nilai = $id_nilai")or die(mysql_error());

header("location:index.php?page=nilai");
?>