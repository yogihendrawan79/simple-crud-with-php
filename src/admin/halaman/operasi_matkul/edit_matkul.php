<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=matkul">KEMBALI</a>
  <br />
  <br />
  <h3>EDIT DATA MATA KULIAH</h3>
  <?php
    include 'koneksi.php';
    $id_matkul=$_GET['id_matkul'];
    $data=mysqli_query($koneksi,"select * from matkul where id_matkul='$id_matkul'");
    while($d=mysqli_fetch_array($data)){
        ?>
  <form method="post" action="halaman/operasi_matkul/update_matkul.php">
    <table>
      <tr>
        <td>Kode Mata Kuliah</td>
        <td>
          <input type="hidden" name="id_matkul" value="<?php echo$d['id_matkul'];?>">
          <input type="text" name="kd_matkul" value="<?php echo$d['kd_matkul'];?>">
        </td>
      </tr>
      <tr>
        <td>Nama Mata Kuliah</td>
        <td>
          <input type="text" name="nama_matkul" value="<?php echo$d['nama_matkul'];?>">
        </td>
      </tr>
      <tr>
        <td>SKS</td>
        <td>
          <input type="number" name="sks" value="<?php echo$d['sks'];?>">
        </td>
      </tr>
      <tr>
        <td>Semester</td>
        <td>
          <input type="number" name="semester" value="<?php echo$d['semester'];?>">
        </td>
      </tr>
      <tr>
        <td></td>
        <td>
          <input type="submit" value="SIMPAN">
        </td>
      </tr>
    </table>
  </form>
  <?php
        }
    ?>
</body>

</html>