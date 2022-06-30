-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2020 pada 02.26
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `datadosen`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `datadosen` (
`kd_dosen` varchar(8)
,`nama_dosen` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `datamahasiswa`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `datamahasiswa` (
`nim` int(11)
,`nama` varchar(50)
,`kd_matkul` varchar(11)
,`nuts` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `datamatkul`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `datamatkul` (
`kd_matkul` varchar(15)
,`nama_dosen` varchar(50)
,`nama_matkul` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `datanilai`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `datanilai` (
`kd_matkul` varchar(15)
,`kd_dosen` varchar(11)
,`nama_matkul` varchar(50)
,`nim` int(11)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(11) NOT NULL,
  `kd_dosen` varchar(8) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `hp` varchar(13) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `kd_dosen`, `nama_dosen`, `hp`, `email`) VALUES
(1, 'JR-001', 'Johan Rojak, S.Pd., M.Pd.', '089683731441', 'johanrojak@gmail.com'),
(2, 'MAM-002', 'Muhammad Abdul Mujib, M.T.', '089683731442', 'mabdulmujib@gmail.com'),
(3, 'YS-003', 'Yogi Saputra, M.Kom.', '089683731443', 'yogisaputra@gmail.com'),
(4, 'IND-004', 'Indriani, S.T., M.Eng.', '089683731444', 'indriani@gmail.com'),
(5, 'RK-005', 'Rudi Kurniawan, S.Kom., M.T.', '089683731445', 'tedjodarmanto@gmail.com'),
(6, 'TD-006', 'DR. Tedjo Darmanto', '089683731446', 'tedjodarmanto@gmail.com'),
(7, 'ASP-007', 'Asep Saepul Bahri', '089683731447', 'asepsaepulbahri@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `alamat`) VALUES
(1, 'Yogi Hendrawan', 1942426, 'JL. Maleer IV 23/118'),
(2, 'Adi Iswandi', 1942420, 'Kuningan'),
(3, 'Gilang Refinsa', 1842454, 'Bandung'),
(4, 'Hafid Muhamad', 1942417, 'Majalaya'),
(5, 'Rovi Ardiyawan', 1942414, 'Dago');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `kd_matkul` varchar(15) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` int(5) NOT NULL,
  `semester` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `kd_matkul`, `nama_matkul`, `sks`, `semester`) VALUES
(1, 'IF-ID01', 'Indonesian', 2, 3),
(2, 'IF-CS01', 'Container System', 3, 3),
(3, 'IF-WP01', 'Web Programming', 4, 3),
(4, 'IF-FP01', 'Functional Programming', 4, 3),
(5, 'IF-DB01', 'Database Implementation', 3, 3),
(6, 'IF-CP01', 'Computer Protocol', 3, 3),
(7, 'IF-RE01', 'Religion 2', 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `kd_matkul` varchar(11) NOT NULL,
  `kd_dosen` varchar(11) NOT NULL,
  `nhadir` int(11) NOT NULL,
  `nuts` int(11) NOT NULL,
  `nuas` int(11) NOT NULL,
  `ntugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nim`, `kd_matkul`, `kd_dosen`, `nhadir`, `nuts`, `nuas`, `ntugas`) VALUES
(1, 1942426, 'IF-CS01', 'MAM-002', 100, 95, 86, 100),
(2, 1942420, 'IF-ID01', 'IND-004', 100, 95, 90, 100),
(3, 1942417, 'IF-DB01', 'RK-005', 100, 90, 86, 96),
(4, 1842454, 'IF-WP01', 'YS-003', 100, 83, 95, 96),
(5, 1942414, 'IF-RE01', 'ASP-007', 100, 83, 84, 93);

-- --------------------------------------------------------

--
-- Struktur untuk view `datadosen`
--
DROP TABLE IF EXISTS `datadosen`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datadosen`  AS  select `dosen`.`kd_dosen` AS `kd_dosen`,`dosen`.`nama_dosen` AS `nama_dosen` from (`dosen` join `datanilai`) where `dosen`.`kd_dosen` = `datanilai`.`kd_dosen` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `datamahasiswa`
--
DROP TABLE IF EXISTS `datamahasiswa`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datamahasiswa`  AS  select `mahasiswa`.`nim` AS `nim`,`mahasiswa`.`nama` AS `nama`,`nilai`.`kd_matkul` AS `kd_matkul`,`nilai`.`nuts` AS `nuts` from (`mahasiswa` join `nilai`) where `mahasiswa`.`nim` = `nilai`.`nim` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `datamatkul`
--
DROP TABLE IF EXISTS `datamatkul`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datamatkul`  AS  select `datanilai`.`kd_matkul` AS `kd_matkul`,`datadosen`.`nama_dosen` AS `nama_dosen`,`datanilai`.`nama_matkul` AS `nama_matkul` from (`datadosen` join `datanilai`) where `datadosen`.`kd_dosen` = `datanilai`.`kd_dosen` ;

-- --------------------------------------------------------

--
-- Struktur untuk view `datanilai`
--
DROP TABLE IF EXISTS `datanilai`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `datanilai`  AS  select `matkul`.`kd_matkul` AS `kd_matkul`,`nilai`.`kd_dosen` AS `kd_dosen`,`matkul`.`nama_matkul` AS `nama_matkul`,`nilai`.`nim` AS `nim` from (`nilai` join `matkul`) where `matkul`.`kd_matkul` = `nilai`.`kd_matkul` ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`),
  ADD KEY `kd_dosen` (`kd_dosen`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`,`kd_matkul`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nim` (`nim`),
  ADD KEY `kd_matkul` (`kd_matkul`),
  ADD KEY `kd_dosen` (`kd_dosen`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
