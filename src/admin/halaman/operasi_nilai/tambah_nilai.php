<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=nilai">KEMBALI</a>
  <br />
  <br />
  <h3>TAMBAH DATA MATA KULIAH</h3>
  <form method="post" action="index.php?page=tambah_aksi_nilai">
    <table>
      <tr>
        <td>NIM</td>
        <td><input type="number" name="nim"></td>
      </tr>
      <tr>
        <td>Kode Mata Kuliah</td>
        <td><input type="text" name="kd_matkul"></td>
      </tr>
      <tr>
        <td>Kode Dosen</td>
        <td><input type="text" name="kd_dosen"></td>
      </tr>
      <tr>
        <td>Nilai Hadir</td>
        <td><input type="number" name="nhadir"></td>
      </tr>
      <tr>
        <td>Nilai UTS</td>
        <td><input type="number" name="nuts"></td>
      </tr>
      <tr>
        <td>NIlai UAS</td>
        <td><input type="number" name="nuas"></td>
      </tr>
      <tr>
        <td>NIlai Tugas</td>
        <td><input type="number" name="ntugas"></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="SIMPAN"></td>
      </tr>
    </table>
  </form>
</body>

</html>