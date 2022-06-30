<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=dosen">KEMBALI</a>
  <br />
  <br />
  <h3>EDIT DATA DOSEN</h3>
  <?php
    include 'koneksi.php';
    $id_dosen=$_GET['id_dosen'];
    $data=mysqli_query($koneksi,"select * from dosen where id_dosen='$id_dosen'");
    while($d=mysqli_fetch_array($data)){
        ?>
  <form method="post" action="halaman/operasi_dosen/update_dosen.php">
    <table>
      <tr>
        <td>Kode Dosen</td>
        <td>
          <input type="hidden" name="id_dosen" value="<?php echo$d['id_dosen'];?>">
          <input type="text" name="kd_dosen" value="<?php echo$d['kd_dosen'];?>">
        </td>
      </tr>
      <tr>
        <td>Nama Dosen</td>
        <td>
          <input type="text" name="nama_dosen" value="<?php echo$d['nama_dosen'];?>">
        </td>
      </tr>
      <tr>
        <td>No HP</td>
        <td>
          <input type="number" name="hp" value="<?php echo$d['hp'];?>">
        </td>
      </tr>
      <tr>
        <td>E-Mail</td>
        <td>
          <input type="text" name="email" value="<?php echo$d['email'];?>">
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