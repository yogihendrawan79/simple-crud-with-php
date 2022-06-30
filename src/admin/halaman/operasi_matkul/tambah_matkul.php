<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=matkul">KEMBALI</a>
  <br />
  <br />
  <h3>TAMBAH DATA MATA KULIAH</h3>
  <form method="post" action="index.php?page=tambah_aksi_matkul">
    <table>
      <tr>
        <td>Kode Mata Kuliah</td>
        <td><input type="text" name="kd_matkul"></td>
      </tr>
      <tr>
        <td>Nama Mata Kuliah</td>
        <td><input type="text" name="nama_matkul"></td>
      </tr>
      <tr>
        <td>SKS</td>
        <td><input type="number" name="sks"></td>
      </tr>
      <tr>
        <td>Semester</td>
        <td><input type="number" name="semester"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN"></td>
      </tr>
    </table>
  </form>
</body>

</html>