<!DOCTYPE html>
<html>

<body>
  <a href="index.php?page=tambah_nilai">+TAMBAH DATA NILAI</a>
  <br />
  <br />
  <table border="1">
    <tr>
      <th>ID Nilai</th>
      <th>NIM</th>
      <th>Kode Mata Kuliah</th>
      <th>Kode Dosen</th>
      <th>Nilai Hadir</th>
      <th>Nilai UTS</th>
      <th>Nilai UAS</th>
      <th>Nilai Tugas</th>
      <th>OPSI</th>
    </tr>
    <?php
    include 'koneksi.php';
    $no = 1;
    $data = mysqli_query($koneksi, "select * from nilai");
    while($d = mysqli_fetch_array($data)){
        ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $d['nim']; ?></td>
      <td><?php echo $d['kd_matkul']; ?></td>
      <td><?php echo $d['kd_dosen']; ?></td>
      <td><?php echo $d['nhadir']; ?></td>
      <td><?php echo $d['nuts']; ?></td>
      <td><?php echo $d['nuas']; ?></td>
      <td><?php echo $d['ntugas']; ?></td>
      <td>
        <a href="index.php?page=edit_nilai&id_nilai= <?php echo $d['id_nilai']; ?>">EDIT</a>
        <a href="index.php?page=hapus_nilai&id_nilai= <?php echo $d['id_nilai']; ?>"
          onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');">HAPUS</a>
      </td>
    </tr>
    <?php
    }
    ?>
  </table>
</body>