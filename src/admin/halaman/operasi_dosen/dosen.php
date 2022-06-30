<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=tambah_dosen">+ TAMBAH DOSEN</a>
  <br />
  <br />
  <table border="1">
    <tr>
      <th>ID Dosen</th>
      <th>Kode Dosen</th>
      <th>Nama Dosen</th>
      <th>No HP</th>
      <th>E-Mail</th>
      <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from dosen");
    while($d = mysqli_fetch_array($data)){
        ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['kd_dosen']; ?></td>
      <td><?php echo $d['nama_dosen']; ?></td>
      <td><?php echo $d['hp']; ?></td>
      <td><?php echo $d['email']; ?></td>
      <td>
        <a href="index.php?page=edit_dosen&id_dosen=<?php echo $d['id_dosen']; ?>">EDIT</a>
        <a href="index.php?page=hapus_dosen&id_dosen=<?php echo $d['id_dosen']; ?>"
          onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');">HAPUS</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>