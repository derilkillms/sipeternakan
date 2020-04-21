-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 05:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peternakan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwalku`
--

CREATE TABLE `jadwalku` (
  `jadwal_id` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `jadwalku`
--

INSERT INTO `jadwalku` (`jadwal_id`, `date`, `title`, `description`) VALUES
(6, '2015-01-12 12:11:22', 'Tes', 'Tess'),
(7, '2018-10-13 12:03:00', 'Pemberian Pakan', 'Pemberian pakan jagung'),
(8, '2018-10-31 14:00:00', 'Pemberian Obat', 'Pemberian Obat Delatrin'),
(9, '2018-08-08 06:00:00', 'Pemberian Pakan', 'Pemberian pakan dedak');

-- --------------------------------------------------------

--
-- Table structure for table `stok_obat`
--

CREATE TABLE `stok_obat` (
  `obat_id` int(11) NOT NULL,
  `nama_obat` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_obat`
--

INSERT INTO `stok_obat` (`obat_id`, `nama_obat`, `stok`, `id_suplier`, `id_kategori`, `tgl_masuk`, `tgl_kadaluarsa`, `deskripsi`) VALUES
(1, 'Delatrin', 12, 123, 1, '2018-10-29', '2018-10-31', 'Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky'),
(2, 'Zaldes', 12, 123, 2, '2018-10-11', '2018-10-31', 'Desinfektan'),
(3, 'ALBENOL-100 ORAL', 13, 124, 4, '2018-10-05', '2018-10-31', 'Untuk obat cacing'),
(4, 'Paracetamol', 198, 123, 6, '2018-10-01', '2018-10-30', 'deskripsi\r\n                         ');

-- --------------------------------------------------------

--
-- Table structure for table `stok_pakan`
--

CREATE TABLE `stok_pakan` (
  `pakan_id` int(9) NOT NULL,
  `nama_pakan` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_pakan`
--

INSERT INTO `stok_pakan` (`pakan_id`, `nama_pakan`, `stok`, `id_suplier`, `id_kategori`, `tgl_masuk`, `tgl_kadaluarsa`) VALUES
(1, 'Jagung', 22, 123, 1, '2018-10-01', '2018-10-31'),
(2, 'Bekatul', 200, 123, 2, '2018-10-01', '2019-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(250) NOT NULL,
  `alamat_karyawan` varchar(250) NOT NULL,
  `telepon_karyawan` varchar(14) NOT NULL,
  `jabatan_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `nama_karyawan`, `alamat_karyawan`, `telepon_karyawan`, `jabatan_karyawan`) VALUES
(1219, 'Ibu Maya', 'ciamis', '0852312', 'kr'),
(1221, 'Yunus', 'Ciamis', '089628117119', 'kr'),
(1222, 'Pak Ato', 'Ciamis', '087827899990', 'kpg'),
(1223, 'Hari', 'ciamis', '087827786886', 'kr'),
(1224, 'Ibu Ebah', 'Desa Karang Ampel, Kec. Baregbeg, Kab. Ciamis', '087625311263', 'kr'),
(1225, 'Ibu Ikah', 'Desa Karang Ampel, Kec. Baregbeg, Kab. Ciamis', '087625112798', 'kr');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `id_obat` int(9) NOT NULL,
  `nama_obat` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `nama_obat`, `stok`, `id_suplier`, `id_kategori`, `tgl_masuk`, `tgl_kadaluarsa`, `deskripsi`) VALUES
(136, 'Delatrin', 20, 123, 1, '2018-10-05', '2018-10-31', 'Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky'),
(137, 'Delatrin', 16, 125, 1, '2018-10-02', '2018-10-13', 'Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky'),
(138, 'ALBENOL-100 ORAL', 100, 123, 4, '2018-10-04', '2018-10-31', '                \r\n                         Untuk Obat cacing                         '),
(139, 'ALBENOL-100 ORAL', 30, 125, 4, '2018-10-04', '2018-10-19', '        \r\n                         Untuk obat cacing'),
(140, 'INTERTRIM LA', 100, 123, 5, '2018-10-05', '2018-10-31', 'Pengobatan Infectious Coryza /Snot, Fowl Cholera, Colibacillosis, Salmonellosis dan malaria unggas '),
(141, 'INTERTRIM LA', 17, 123, 5, '2018-10-05', '2018-10-12', 'Pengobatan Infectious Coryza /Snot, Fowl Cholera, Colibacillosis, Salmonellosis dan malaria unggas '),
(142, 'Zaldes', 27, 123, 2, '2018-10-02', '2018-10-31', '        Desinfektan\r\n                         '),
(143, 'Zaldes', 140, 125, 2, '2018-10-03', '2019-01-31', '        \r\n                         Desikfektan'),
(144, 'Paracetamol', 20, 125, 6, '2018-10-04', '2018-11-01', ' Untuk obat demam\r\n                         '),
(145, 'Paracetamol', 110, 124, 6, '2018-10-13', '2018-10-31', 'Untuk Obat demam');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pakan`
--

CREATE TABLE `tb_pakan` (
  `id_pakan` int(9) NOT NULL,
  `nama_pakan` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pakan`
--

INSERT INTO `tb_pakan` (`id_pakan`, `nama_pakan`, `stok`, `id_suplier`, `id_kategori`, `tgl_masuk`, `tgl_kadaluarsa`) VALUES
(424, 'Jagung', 0, 123, 1, '2018-05-25', '2018-11-30'),
(428, 'Dedak', 112, 123, 3, '2018-10-01', '2018-10-31'),
(429, 'Jagung', 101, 123, 1, '2018-05-25', '2018-11-29'),
(431, 'Jagung', 20, 123, 1, '2018-05-25', '2018-11-28'),
(436, 'Bekatul', 131, 123, 2, '2018-10-05', '2018-10-31'),
(437, 'Bekatul', 0, 122, 2, '2018-10-21', '2018-10-30'),
(438, 'Jagung', 22, 124, 1, '2018-10-05', '2018-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suplier`
--

CREATE TABLE `tb_suplier` (
  `id_suplier` int(5) NOT NULL,
  `nama_suplier` varchar(250) NOT NULL,
  `alamat_suplier` varchar(250) NOT NULL,
  `tlp_suplier` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suplier`
--

INSERT INTO `tb_suplier` (`id_suplier`, `nama_suplier`, `alamat_suplier`, `tlp_suplier`) VALUES
(122, 'Bahtian', 'Ciamis', '08523165479'),
(123, 'CV ARFAM JAYA', 'JL. Tamansari indah perumahan maya Blok D no 24B Tasikmalaya', '085222726570'),
(124, 'Putra Apay Jaya', 'JL. Kalmantren Manonjaya Tasikmalaya', '085315030950'),
(125, 'Andhika Pakan Ternak. PS', 'JL. Raya Margaluyu, Cikoneng, Ciamis, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46211', '(0265) 31148');

-- --------------------------------------------------------

--
-- Table structure for table `tb_telur`
--

CREATE TABLE `tb_telur` (
  `id_telur` int(7) NOT NULL,
  `id_karyawan` int(7) NOT NULL,
  `jml_telur` int(10) NOT NULL,
  `berat` float NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_telur`
--

INSERT INTO `tb_telur` (`id_telur`, `id_karyawan`, `jml_telur`, `berat`, `tanggal`) VALUES
(1, 1221, 5652, 6.2, '2018-06-05'),
(3, 1223, 34, 4.3, '2018-06-07'),
(4, 1221, 39, 4.1, '2018-07-20'),
(5, 1224, 100, 3.8, '2018-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'a2960f70941d29b6123e6ebe493f38d2', 'Pak Ato');

-- --------------------------------------------------------

--
-- Table structure for table `ts_obat`
--

CREATE TABLE `ts_obat` (
  `kode_obat` int(7) NOT NULL,
  `id_obat` int(9) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jml_obat` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_obat`
--

INSERT INTO `ts_obat` (`kode_obat`, `id_obat`, `id_karyawan`, `jml_obat`, `tanggal`, `deskripsi`) VALUES
(22, 138, 1222, 12, '2018-10-30', 'Untuk obat cacing');

-- --------------------------------------------------------

--
-- Table structure for table `ts_pakan`
--

CREATE TABLE `ts_pakan` (
  `kode_pakan` int(7) NOT NULL,
  `id_pakan` int(9) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jml_pakan` int(10) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ts_pakan`
--

INSERT INTO `ts_pakan` (`kode_pakan`, `id_pakan`, `id_karyawan`, `jml_pakan`, `tanggal`) VALUES
(135, 424, 1223, 10, '2018-06-26'),
(137, 424, 1221, 13, '2018-10-09'),
(138, 436, 1221, 23, '2018-10-06'),
(139, 428, 1223, 12, '2018-10-20'),
(140, 424, 1222, 100, '2018-10-20'),
(141, 437, 1224, 100, '2018-10-27');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategoriobat`
--

CREATE TABLE `t_kategoriobat` (
  `id_kategori` int(11) NOT NULL,
  `nama_obat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategoriobat`
--

INSERT INTO `t_kategoriobat` (`id_kategori`, `nama_obat`) VALUES
(1, 'Delatrin'),
(2, 'Zaldes'),
(4, 'ALBENOL-100 ORAL'),
(5, 'INTERTRIM LA'),
(6, 'Paracetamol');

-- --------------------------------------------------------

--
-- Table structure for table `t_kategoripakan`
--

CREATE TABLE `t_kategoripakan` (
  `id_kategori` int(11) NOT NULL,
  `nama_pakan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_kategoripakan`
--

INSERT INTO `t_kategoripakan` (`id_kategori`, `nama_pakan`) VALUES
(1, 'Jagung'),
(2, 'Bekatul'),
(3, 'Dedak');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_obat`
-- (See below for the actual view)
--
CREATE TABLE `view_obat` (
`id_obat` int(9)
,`nama_obat` varchar(250)
,`kadaluarsa` decimal(32,0)
,`tersedia` decimal(32,0)
,`id_kategori` int(11)
,`deskripsi` varchar(100)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pakan`
-- (See below for the actual view)
--
CREATE TABLE `view_pakan` (
`id_pakan` int(9)
,`nama_pakan` varchar(250)
,`kadaluarsa` decimal(32,0)
,`tersedia` decimal(32,0)
,`id_kategori` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `view_obat`
--
DROP TABLE IF EXISTS `view_obat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_obat`  AS  select `tb_obat`.`id_obat` AS `id_obat`,`tb_obat`.`nama_obat` AS `nama_obat`,sum((case when (`tb_obat`.`tgl_kadaluarsa` < curdate()) then `tb_obat`.`stok` else 0 end)) AS `kadaluarsa`,sum((case when (`tb_obat`.`tgl_kadaluarsa` > curdate()) then `tb_obat`.`stok` else 0 end)) AS `tersedia`,`tb_obat`.`id_kategori` AS `id_kategori`,`tb_obat`.`deskripsi` AS `deskripsi` from `tb_obat` group by `tb_obat`.`nama_obat` ;

-- --------------------------------------------------------

--
-- Structure for view `view_pakan`
--
DROP TABLE IF EXISTS `view_pakan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pakan`  AS  select `tb_pakan`.`id_pakan` AS `id_pakan`,`tb_pakan`.`nama_pakan` AS `nama_pakan`,sum((case when (`tb_pakan`.`tgl_kadaluarsa` < curdate()) then `tb_pakan`.`stok` else 0 end)) AS `kadaluarsa`,sum((case when (`tb_pakan`.`tgl_kadaluarsa` > curdate()) then `tb_pakan`.`stok` else 0 end)) AS `tersedia`,`tb_pakan`.`id_kategori` AS `id_kategori` from `tb_pakan` group by `tb_pakan`.`nama_pakan` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwalku`
--
ALTER TABLE `jadwalku`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `stok_obat`
--
ALTER TABLE `stok_obat`
  ADD PRIMARY KEY (`obat_id`);

--
-- Indexes for table `stok_pakan`
--
ALTER TABLE `stok_pakan`
  ADD PRIMARY KEY (`pakan_id`);

--
-- Indexes for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_suplier` (`id_suplier`);

--
-- Indexes for table `tb_pakan`
--
ALTER TABLE `tb_pakan`
  ADD PRIMARY KEY (`id_pakan`),
  ADD KEY `id_suplier` (`id_suplier`);

--
-- Indexes for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `tb_telur`
--
ALTER TABLE `tb_telur`
  ADD PRIMARY KEY (`id_telur`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ts_obat`
--
ALTER TABLE `ts_obat`
  ADD PRIMARY KEY (`kode_obat`),
  ADD KEY `id_obat` (`id_obat`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `ts_pakan`
--
ALTER TABLE `ts_pakan`
  ADD PRIMARY KEY (`kode_pakan`),
  ADD KEY `id_pakan` (`id_pakan`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- Indexes for table `t_kategoriobat`
--
ALTER TABLE `t_kategoriobat`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `t_kategoripakan`
--
ALTER TABLE `t_kategoripakan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwalku`
--
ALTER TABLE `jadwalku`
  MODIFY `jadwal_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stok_obat`
--
ALTER TABLE `stok_obat`
  MODIFY `obat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stok_pakan`
--
ALTER TABLE `stok_pakan`
  MODIFY `pakan_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1226;
--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `id_obat` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;
--
-- AUTO_INCREMENT for table `tb_pakan`
--
ALTER TABLE `tb_pakan`
  MODIFY `id_pakan` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=439;
--
-- AUTO_INCREMENT for table `tb_suplier`
--
ALTER TABLE `tb_suplier`
  MODIFY `id_suplier` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- AUTO_INCREMENT for table `tb_telur`
--
ALTER TABLE `tb_telur`
  MODIFY `id_telur` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ts_obat`
--
ALTER TABLE `ts_obat`
  MODIFY `kode_obat` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `ts_pakan`
--
ALTER TABLE `ts_pakan`
  MODIFY `kode_pakan` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
--
-- AUTO_INCREMENT for table `t_kategoriobat`
--
ALTER TABLE `t_kategoriobat`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_kategoripakan`
--
ALTER TABLE `t_kategoripakan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD CONSTRAINT `tb_obat_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `tb_suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_pakan`
--
ALTER TABLE `tb_pakan`
  ADD CONSTRAINT `tb_pakan_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `tb_suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_telur`
--
ALTER TABLE `tb_telur`
  ADD CONSTRAINT `tb_telur_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ts_obat`
--
ALTER TABLE `ts_obat`
  ADD CONSTRAINT `ts_obat_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ts_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ts_pakan`
--
ALTER TABLE `ts_pakan`
  ADD CONSTRAINT `ts_pakan_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ts_pakan_ibfk_2` FOREIGN KEY (`id_pakan`) REFERENCES `tb_pakan` (`id_pakan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
