-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 09:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_kar` int(10) NOT NULL,
  `nup` varchar(9) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(50) NOT NULL,
  `kawin` varchar(30) NOT NULL,
  `telepon` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `id_status` varchar(20) NOT NULL,
  `tmt` date NOT NULL,
  `tgl_angkatan` date NOT NULL,
  `no_sk` varchar(20) NOT NULL,
  `id_jabatan` varchar(100) NOT NULL,
  `id_bagian` varchar(100) NOT NULL,
  `id_pangkat` varchar(100) NOT NULL,
  `id_gol` varchar(20) NOT NULL,
  `masa_kerja` int(5) NOT NULL,
  `pelatihan` text NOT NULL,
  `prestasi` text NOT NULL,
  `wan_prestasi` text NOT NULL,
  `status_pensiun` varchar(20) NOT NULL,
  `foto` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_kar`, `nup`, `nama`, `jenis_kelamin`, `ttl`, `tgl_lahir`, `agama`, `kawin`, `telepon`, `email`, `alamat`, `pendidikan`, `keterangan`, `id_status`, `tmt`, `tgl_angkatan`, `no_sk`, `id_jabatan`, `id_bagian`, `id_pangkat`, `id_gol`, `masa_kerja`, `pelatihan`, `prestasi`, `wan_prestasi`, `status_pensiun`, `foto`) VALUES
(5, '121313', 'Erlanggaa', 'Laki-Laki', 'Probolinggo', '2023-05-17', 'Islam', 'Sudah Kawin', '089505084036', 'aji@gmail.com', 'Probolinggo', 'Perguruan Tinggi', 'adads', '9.0.00', '2023-05-17', '2023-05-17', '62/KPTS/BPAM/90', '0.1.02', '1.0.00', '103', 'A/I', 4, 'adads', 'adsad', 'afsg', 'Aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id_gol` varchar(5) NOT NULL,
  `deskripsi_gol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id_gol`, `deskripsi_gol`) VALUES
('A/I', 'Golongan A Ruang 1'),
('A/II', 'Golongan A Ruang 2'),
('A/III', 'Golongan A Ruang 3'),
('A/IV', 'Golongan A Ruang 4'),
('B/I', 'Golongan B Ruang 1'),
('B/II', 'Golongan B Ruang 2'),
('B/III', 'Golongan B Ruang 3'),
('B/IV', 'Golongan B Ruang 4'),
('C/I', 'Golongan C Ruang 1'),
('C/II', 'Golongan C Ruang 2'),
('C/III', 'Golongan C Ruang 3'),
('C/IV', 'Golongan C Ruang 4'),
('D/I', 'Golongan D Ruang 1'),
('D/II', 'Golongan D Ruang 2'),
('D/III', 'Golongan D Ruang 3'),
('D/IV', 'Golongan D Ruang 4');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` varchar(10) NOT NULL,
  `deskripsi_jab` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `deskripsi_jab`) VALUES
('0.0.00', 'DIREKTUR'),
('0.0.01', 'DIREKTUR UMUM'),
('0.0.02', 'DIREKTUR TEKNIK'),
('0.1.00', 'KETUA'),
('0.1.01', 'SEKRETARIS'),
('0.1.02', 'ANGGOTA'),
('0.2.00', 'KETUA SPI'),
('0.2.02', 'ANGGOTA SPI'),
('1.1.00', 'KABAG.ADM.UMUM & KEU'),
('1.1.10', 'KASUBAG.UMUM & KEPEG'),
('1.1.19', 'STAF UMUM'),
('1.1.20', 'KA.SUB.BAG.ADM'),
('1.1.29', 'STAF ADMINISTRASI'),
('1.1.30', 'KA.SUB.BAG.PERSON'),
('1.1.39', 'STAF PESONALIA'),
('1.2.00', 'KASUBAG.ANGGARAN'),
('1.2.10', 'KASIR PUSAT LECES'),
('1.2.19', 'STAF KEUANGAN'),
('1.2.20', 'KASUBAG.PEMB&PERBDH.'),
('1.3.00', 'KABAG.HUB.PELANGGAN'),
('1.3.10', 'STAF PEMBACA METER'),
('1.3.19', 'STAF LANGGANAN'),
('1.3.20', 'KASUBAG.PENGEL.REK'),
('1.3.24', 'KASUBAG.PELAYANAN'),
('1.3.26', 'KASUBAG.PEMASARAN'),
('1.3.29', 'STAF PENAGIHAN'),
('2.1.00', 'KABAG.TEKNIK'),
('2.1.10', 'KA.SUB.BAG.PRODUKSI'),
('2.1.15', 'OPERATOR POMPA'),
('2.1.20', 'KA.SUB.BAG.LAB'),
('2.1.30', 'OPERATOR PENGOLAHAN'),
('2.2.00', 'KABAG.DISTRIBUSI'),
('2.2.10', 'KASUBAG.DISTRI&TRANS'),
('2.2.19', 'STAF DISTRIBUSI'),
('2.2.20', 'KA.SUB.BAG.M.SEGEL'),
('2.2.29', 'STAF METER SEGEL'),
('2.3.00', 'KABAG.PERENCN.TEKNIK'),
('2.3.10', 'KA.SUB.BAG.PERENC.'),
('2.3.19', 'STAF PERENCANAAN'),
('2.3.20', 'KA.SUB.BAG.PENGAWAS'),
('2.4.00', 'KABAG.PERALATAN'),
('2.4.10', 'KASUBAG.PERLT&PEMELH'),
('2.4.20', 'KA.SUB.BAG.PEMEL.'),
('3.0.20', 'KA.UNIT SUMBER'),
('3.0.21', 'STAF ADM.SUMBER'),
('3.0.22', 'STAF TEHNIK SUMBER'),
('3.0.23', 'KASIR SUMBER'),
('3.0.30', 'KA.UNIT KURIPAN'),
('3.0.31', 'STAF ADM KURIPAN'),
('3.0.32', 'STAF TEHNIK KURIPAN'),
('3.0.33', 'KASIR KURIPAN'),
('3.0.40', 'KA.UNIT BANTARAN'),
('3.0.41', 'STAF ADM BANTARAN'),
('3.0.42', 'STAF TEHNIK BANTARAN'),
('3.0.43', 'KASIR BANTARAN'),
('3.0.50', 'KA.UNIT PATALAN'),
('3.0.51', 'STAF ADM.PATALAN'),
('3.0.52', 'STAF TEHNIK PATALAN'),
('3.0.53', 'KASIR PATALAN'),
('3.0.60', 'KA.UNIT MARON'),
('3.0.61', 'STAF ADM MARON'),
('3.0.62', 'STAF TEHNIK MARON'),
('3.0.63', 'KASIR MARON'),
('3.0.70', 'KA. UNIT TIRIS'),
('3.0.71', 'STAF ADM TIRIS'),
('3.0.72', 'STAF TEHNIK TIRIS'),
('3.0.73', 'KASIR TIRIS'),
('3.0.80', 'KA.UNIT KRAKSAAN'),
('3.0.81', 'STAF ADM KRAKSAAN'),
('3.0.82', 'STAF TEHNIK KRAKSAAN'),
('3.0.83', 'KASIR KRAKSAAN'),
('3.0.90', 'KA.UNIT SUKAPURA'),
('3.0.91', 'STAF ADM SUKAPURA'),
('3.0.92', 'STAF TEHNIK SUKAPURA'),
('3.0.93', 'KASIR SUKAPURA'),
('3.1.00', 'KA.UNIT BANYUANYAR'),
('3.1.01', 'STAF ADM BANYUANYAR'),
('3.1.02', 'STAF TEK. BANYUANYAR'),
('3.1.03', 'KASIR BANYUANYAR'),
('3.1.10', 'KA.UNIT BESUK'),
('3.1.11', 'STAF ADM BESUK'),
('3.1.12', 'STAF TEHNIK BESUK'),
('3.1.13', 'KASIR BESUK'),
('3.1.20', 'KA. UNIT CONDONG'),
('3.1.21', 'STAF ADM CONDONG'),
('3.1.22', 'STAF TEHNIK CONDONG'),
('3.1.23', 'KASIR CONDONG'),
('3.1.30', 'KA. UNIT DRINGU'),
('3.1.31', 'STAF ADM DRINGU'),
('3.1.32', 'STAF TEHNIK DRINGU'),
('3.1.33', 'KASIR DRINGU'),
('3.1.35', 'KA. UNIT PEDAGANGAN'),
('3.1.36', 'KASIR PEDAGANGAN'),
('3.1.37', 'STAF TEKNIK'),
('3.1.39', 'KA. UNIT TONGAS'),
('3.1.40', 'KASIR UNIT TONGAS'),
('3.1.41', 'STAF TEKNIK U.TONGAS'),
('3.1.42', 'OPERATOR U.TONGAS'),
('3.1.43', 'KA. UNIT KRUCIL'),
('3.1.44', 'KASIR UNIT KRUCIL'),
('3.1.45', 'STAF TEKNIK U.KRUCIL'),
('3.1.46', 'KA. UNIT LECES'),
('3.1.47', 'KASIR LECES'),
('3.1.48', 'STAF TEKNIK U LECES'),
('3.1.49', 'STAF ADM & KEU U.LCS'),
('3.1.50', 'OPERATOR U LECES'),
('4.0.00', 'NON JOB'),
('9.0.00', 'PETUGAS HARIAN'),
('9.1.00', 'SATPAM');

-- --------------------------------------------------------

--
-- Table structure for table `pangkat`
--

CREATE TABLE `pangkat` (
  `id_pangkat` varchar(10) NOT NULL,
  `deskripsi_pang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pangkat`
--

INSERT INTO `pangkat` (`id_pangkat`, `deskripsi_pang`) VALUES
('101', 'Pegawai Dasar Muda'),
('102', 'Pegawai Dasar Muda 1'),
('103', 'Pegawai Dasar'),
('104', 'Pegawai Dasar 1'),
('201', 'Pelaksana Muda '),
('202', 'Pelaksana Muda 1'),
('203', 'Pelaksana'),
('204', 'Pelaksana 1'),
('301', 'Staff Muda'),
('302', 'Staff Muda 1'),
('303', 'Staff'),
('304', 'Staff 1'),
('401', 'Staff Madya'),
('402', 'Staff Madya 1'),
('403', 'Staff Utama Madya'),
('404', 'Staff Utama');

-- --------------------------------------------------------

--
-- Table structure for table `stat_pegawai`
--

CREATE TABLE `stat_pegawai` (
  `id_status` varchar(10) NOT NULL,
  `ket_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stat_pegawai`
--

INSERT INTO `stat_pegawai` (`id_status`, `ket_status`) VALUES
('9.0.00', 'PEGAWAI'),
('9.0.01', 'CAPEG'),
('9.0.02', 'HONORER'),
('9.0.03', 'MAGANG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Super User','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'Administrator'),
(2, 'Superuser', 'superuser', 'superuser', 'Super User'),
(3, 'user', 'user', 'user', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `bidang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_profil`, `alamat`, `bidang`) VALUES
(1, 'Perusahaan Umum Daerah Air Minum Tirta Argapura', 'Kab. Probolinggo', 'BUMN');

-- --------------------------------------------------------

--
-- Table structure for table `unit_bagian`
--

CREATE TABLE `unit_bagian` (
  `id_bagian` varchar(10) NOT NULL,
  `ket_bagian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `unit_bagian`
--

INSERT INTO `unit_bagian` (`id_bagian`, `ket_bagian`) VALUES
('0.0.00', 'DIREKSI'),
('0.1.00', 'BADAN PENGAWAS'),
('0.2.00', 'S.P.I.'),
('1.0.00', 'ADM.UMUM & KEUANGAN'),
('1.2.00', 'HUBUNGAN LANGGANAN'),
('2.0.00', 'TEKNIK'),
('2.1.00', 'PRODUKSI'),
('2.2.00', 'DISTR.& TRANSMISI'),
('2.3.00', 'PERENCANAAN TEKNIK'),
('2.4.00', 'PEMELH.& PERALATAN'),
('3.0.01', 'UNIT SUMBER'),
('3.0.02', 'UNIT BANTARAN'),
('3.0.03', 'UNIT PATALAN'),
('3.0.04', 'UNIT MARON'),
('3.0.05', 'UNIT TIRIS'),
('3.0.06', 'UNIT KRAKSAAN'),
('3.0.07', 'UNIT SUKAPURA'),
('3.0.08', 'UNIT BANYUANYAR'),
('3.0.09', 'UNIT BESUK'),
('3.0.10', 'UNIT CONDONG'),
('3.0.11', 'UNIT DRINGU'),
('3.0.12', 'UNIT PEDAGANGAN'),
('3.0.15', 'UNIT TONGAS'),
('3.0.16', 'UNIT KRUCIL'),
('3.0.17', 'UNIT LECES');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'airituwater21', 'admin'),
(2, 'Direktur', 'direktur', 'pdam2021dir', 'direktur'),
(3, 'SPV', 'super', 'spvwater2020', 'super'),
(4, 'SPV1', 'super1', 'spvwater2021', 'super1'),
(5, 'User', 'adminkepeg', '123kepegawaian2020', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_kar`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `pangkat`
--
ALTER TABLE `pangkat`
  ADD PRIMARY KEY (`id_pangkat`);

--
-- Indexes for table `stat_pegawai`
--
ALTER TABLE `stat_pegawai`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `unit_bagian`
--
ALTER TABLE `unit_bagian`
  ADD PRIMARY KEY (`id_bagian`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_kar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
