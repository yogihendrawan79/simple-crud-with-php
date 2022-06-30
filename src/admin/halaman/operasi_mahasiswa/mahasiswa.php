<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=tambah_mahasiswa">+ TAMBAH MAHASISWA</a>
  <br />
  <br />
  <table border="1">
    <tr>
      <th>ID Mahasiswa</th>
      <th>Nama</th>
      <th>NIM</th>
      <th>Alamat</th>
      <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi,"select * from mahasiswa");
    while($d = mysqli_fetch_array($data)){
        ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['nama']; ?></td>
      <td><?php echo $d['nim']; ?></td>
      <td><?php echo $d['alamat']; ?></td>
      <td>
        <a href="index.php?page=edit_mahasiswa&id=<?php echo $d['id']; ?>">EDIT</a>
        <a href="index.php?page=hapus_mahasiswa&id=<?php echo $d["id"]; ?>"
          onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');">HAPUS</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </table>
</body>

</html>