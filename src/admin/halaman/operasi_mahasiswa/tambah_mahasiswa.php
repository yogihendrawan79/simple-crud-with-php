<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=mahasiswa">KEMBALI</a>
  <br />
  <br />
  <h3>TAMBAH DATA MAHASISWA</h3>
  <form method="post" action="index.php?page=tambah_aksi_mahasiswa">
    <table>
      <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td>
      </tr>
      <tr>
        <td>NIM</td>
        <td><input type="number" name="nim"></td>
      </tr>
      <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN"></td>
      </tr>
    </table>
  </form>
</body>

</html>