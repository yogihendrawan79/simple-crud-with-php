<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=dosen">KEMBALI</a>
  <br />
  <br />
  <h3>TAMBAH DATA DOSEN</h3>
  <form method="post" action="index.php?page=tambah_aksi_dosen">
    <table>
      <tr>
        <td>Kode Dosen</td>
        <td><input type="text" name="kd_dosen"></td>
      </tr>
      <tr>
        <td>Nama Dosen</td>
        <td><input type="text" name="nama_dosen"></td>
      </tr>
      <tr>
        <td>No HP</td>
        <td><input type="number" name="hp"></td>
      </tr>
      <tr>
        <td>E-mail</td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN"></td>
      </tr>
    </table>
  </form>
</body>

</html>