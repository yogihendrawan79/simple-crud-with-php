<!DOCTYPE html>
<html>

<head>
  <title>Web Penginputan Data Nilai "AMIKBANDUNG"</title>
  <!-- menghubungkan dengan file css -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- menghubungkan dengan file jquery -->
  <script type="text/javascript" src="jquery.js"></script>
</head>

<body>
  <div class="content">
    <header>
      <h1 class="judul">STMIK "AMIKBANDUNG"</h1>
      <h3 class="deskripsi">Web Penginputan Nilai Akademis</h3>
    </header>
    <div class="menu">
      <ul>
        <li><a href="index.php?page=home">HOME</a></li>
        <li><a href="index.php?page=mahasiswa">MAHASISWA</a></li>
        <li><a href="index.php?page=dosen">DOSEN</a></li>
        <li><a href="index.php?page=matkul">MATA KULIAH</a></li>
        <li><a href="index.php?page=nilai">NILAI</a></li>
        <li><a href="index.php?page=logout"
            onclick="return confirm('Apakah anda yakin untuk keluar dari halaman ini?');">LOGOUT</a></li>
      </ul>
    </div>
    <div class="badan">
      <?php
        if(isset($_GET['page'])){
            $page = $_GET['page'];
            switch ($page) {
                case 'home':
                    include "halaman/home.php";
                    break;
                case 'mahasiswa':
                    include "halaman/operasi_mahasiswa/mahasiswa.php";
                    break;
                case 'tambah_mahasiswa':
                    include "halaman/operasi_mahasiswa/tambah_mahasiswa.php";
                    break;
                case 'tambah_aksi_mahasiswa':
                    include "halaman/operasi_mahasiswa/tambah_aksi_mahasiswa.php";
                    break;
                case 'edit_mahasiswa':
                    include "halaman/operasi_mahasiswa/edit_mahasiswa.php";
                    break;
                case 'hapus_mahasiswa':
                    include "halaman/operasi_mahasiswa/hapus_mahasiswa.php";
                    break;
                case 'dosen':
                    include "halaman/operasi_dosen/dosen.php";
                    break;
                case 'tambah_dosen':
                    include "halaman/operasi_dosen/tambah_dosen.php";
                    break;
                case 'tambah_aksi_dosen':
                    include "halaman/operasi_dosen/tambah_aksi_dosen.php";
                    break;
                case 'edit_dosen':
                    include "halaman/operasi_dosen/edit_dosen.php";
                    break;
                case 'hapus_dosen':
                    include "halaman/operasi_dosen/hapus_dosen.php";
                    break;
                case 'matkul':
                    include "halaman/operasi_matkul/matkul.php";
                    break;
                case 'tambah_matkul':
                    include "halaman/operasi_matkul/tambah_matkul.php";
                    break;
                case 'tambah_aksi_matkul':
                    include "halaman/operasi_matkul/tambah_aksi_matkul.php";
                    break;
                case 'edit_matkul':
                    include "halaman/operasi_matkul/edit_matkul.php";
                    break;
                case 'hapus_matkul':
                    include "halaman/operasi_matkul/hapus_matkul.php";
                    break;
                case 'nilai':
                    include "halaman/operasi_nilai/nilai.php";
                    break;
                case 'tambah_nilai':
                    include "halaman/operasi_nilai/tambah_nilai.php";
                    break;
                case 'tambah_aksi_nilai':
                    include "halaman/operasi_nilai/tambah_aksi_nilai.php";
                    break;
                case 'edit_nilai':
                    include "halaman/operasi_nilai/edit_nilai.php";
                    break;
                case 'hapus_nilai':
                    include "halaman/operasi_nilai/hapus_nilai.php";
                    break;
                case 'logout':
                    include "logout.php";
                    break;
                default:
                    echo "<center><h3>Maaf. Halaman tidak di temukan!</h3></center>";
                    break;
            } 
        }
        else{
            include "halaman/home.php";
        }
    ?>
    </div>
  </div>
</body>

</html>