<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=tambah_matkul">+ TAMBAH MATA KULIAH</a>
  <br />
  <br />
  <table border="1">
    <tr>
      <th>ID Mata Kuliah</th>
      <th>Kode Mata Kuliah</th>
      <th>Nama Mata Kuliah</th>
      <th>SKS</th>
      <th>Semester</th>
      <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from matkul");
    while($d = mysqli_fetch_array($data)){
        ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['kd_matkul']; ?></td>
      <td><?php echo $d['nama_matkul']; ?></td>
      <td><?php echo $d['sks']; ?></td>
      <td><?php echo $d['semester']; ?></td>
      <td>
        <a href="index.php?page=edit_matkul&id_matkul= <?php echo $d['id_matkul']; ?>">EDIT</a>
        <a href="index.php?page=hapus_matkul&id_matkul= <?php echo $d['id_matkul']; ?>"
          onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');">HAPUS</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>