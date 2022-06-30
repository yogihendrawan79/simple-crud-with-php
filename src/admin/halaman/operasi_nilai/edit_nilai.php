<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=nilai">KEMBALI</a>
  <br />
  <br />
  <h3>EDIT DATA MATA KULIAH</h3>
  <?php
    include 'koneksi.php';
    $id_nilai=$_GET['id_nilai'];
    $data=mysqli_query($koneksi,"select * from nilai where id_nilai='$id_nilai'");
    while($d=mysqli_fetch_array($data)){
        ?>
  <form method="post" action="halaman/operasi_nilai/update_nilai.php">
    <table>
      <tr>
        <td>NIM</td>
        <td>
          <input type="hidden" name="id_nilai" value="<?php echo$d['id_nilai'];?>">
          <input type="number" name="nim" value="<?php echo$d['nim'];?>">
        </td>
      </tr>
      <tr>
        <td>Kode Mata Kuliah</td>
        <td>
          <input type="textr" name="kd_matkul" value="<?php echo$d['kd_matkul'];?>">
        </td>
      </tr>
      <tr>
        <td>Kode Dosen</td>
        <td>
          <input type="text" name="kd_dosen" value="<?php echo$d['kd_dosen'];?>">
        </td>
      </tr>
      <tr>
        <td>Nilai Hadir</td>
        <td>
          <input type="number" name="nhadir" value="<?php echo$d['nhadir'];?>">
        </td>
      </tr>
      <tr>
        <td>Nilai UTS</td>
        <td>
          <input type="number" name="nuts" value="<?php echo$d['nuts'];?>">
        </td>
      </tr>
      <tr>
        <td>NIlai UAS</td>
        <td>
          <input type="number" name="nuas" value="<?php echo$d['nuas'];?>">
        </td>
      </tr>
      <tr>
        <td>Nilai Tugas</td>
        <td>
          <input type="number" name="ntugas" value="<?php echo$d['ntugas'];?>">
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