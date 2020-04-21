

CREATE TABLE `jadwalku` (
  `jadwal_id` int(10) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`jadwal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

INSERT INTO jadwalku VALUES("6","2015-01-12 12:11:22","Tes","Tess");
INSERT INTO jadwalku VALUES("7","2018-10-13 12:03:00","Pemberian Pakan","Pemberian pakan jagung");
INSERT INTO jadwalku VALUES("8","2018-10-31 14:00:00","Pemberian Obat","Pemberian Obat Delatrin");
INSERT INTO jadwalku VALUES("9","2018-08-08 06:00:00","Pemberian Pakan","Pemberian pakan dedak");
INSERT INTO jadwalku VALUES("10","2018-09-12 01:00:00","asdas","asdasd");



CREATE TABLE `stok_obat` (
  `obat_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`obat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO stok_obat VALUES("1","Delatrin","12","123","1","2018-10-29","2018-10-31","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO stok_obat VALUES("2","Zaldes","12","123","2","2018-10-11","2018-10-31","Desinfektan");
INSERT INTO stok_obat VALUES("3","ALBENOL-100 ORAL","13","124","4","2018-10-05","2018-10-31","Untuk obat cacing");
INSERT INTO stok_obat VALUES("4","Paracetamol","198","123","6","2018-10-01","2018-10-30","deskripsi
                         ");



CREATE TABLE `stok_pakan` (
  `pakan_id` int(9) NOT NULL AUTO_INCREMENT,
  `nama_pakan` varchar(25) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  PRIMARY KEY (`pakan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO stok_pakan VALUES("1","Jagung","22","123","1","2018-10-01","2018-10-31");



CREATE TABLE `t_kategoriobat` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO t_kategoriobat VALUES("1","Delatrin");
INSERT INTO t_kategoriobat VALUES("2","Zaldes");
INSERT INTO t_kategoriobat VALUES("4","ALBENOL-100 ORAL");
INSERT INTO t_kategoriobat VALUES("5","INTERTRIM LA");
INSERT INTO t_kategoriobat VALUES("6","Paracetamol");



CREATE TABLE `t_kategoripakan` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pakan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO t_kategoripakan VALUES("1","Jagung");
INSERT INTO t_kategoripakan VALUES("2","Bekatul");
INSERT INTO t_kategoripakan VALUES("3","Dedak");



CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_karyawan` varchar(250) NOT NULL,
  `alamat_karyawan` varchar(250) NOT NULL,
  `telepon_karyawan` varchar(14) NOT NULL,
  `jabatan_karyawan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB AUTO_INCREMENT=1226 DEFAULT CHARSET=latin1;

INSERT INTO tb_karyawan VALUES("1219","Ibu Maya","ciamis","0852312","kr");
INSERT INTO tb_karyawan VALUES("1221","Yunus","Ciamis","089628117119","kr");
INSERT INTO tb_karyawan VALUES("1222","Pak Ato","Ciamis","087827899990","kpg");
INSERT INTO tb_karyawan VALUES("1223","Hari","ciamis","087827786886","kr");
INSERT INTO tb_karyawan VALUES("1224","Ibu Ebah","Desa Karang Ampel, Kec. Baregbeg, Kab. Ciamis","087625311263","kr");
INSERT INTO tb_karyawan VALUES("1225","Ibu Ikah","Desa Karang Ampel, Kec. Baregbeg, Kab. Ciamis","087625112798","kr");



CREATE TABLE `tb_obat` (
  `id_obat` int(9) NOT NULL AUTO_INCREMENT,
  `nama_obat` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_obat`),
  KEY `id_suplier` (`id_suplier`),
  CONSTRAINT `tb_obat_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `tb_suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

INSERT INTO tb_obat VALUES("136","Delatrin","20","123","1","2018-10-05","2018-10-31","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO tb_obat VALUES("137","Delatrin","16","125","1","2018-10-02","2018-10-13","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO tb_obat VALUES("138","ALBENOL-100 ORAL","100","123","4","2018-10-04","2018-10-31","                
                         Untuk Obat cacing                         ");
INSERT INTO tb_obat VALUES("139","ALBENOL-100 ORAL","30","125","4","2018-10-04","2018-10-19","        
                         Untuk obat cacing");
INSERT INTO tb_obat VALUES("140","INTERTRIM LA","100","123","5","2018-10-05","2018-10-31","Pengobatan Infectious Coryza /Snot, Fowl Cholera, Colibacillosis, Salmonellosis dan malaria unggas ");
INSERT INTO tb_obat VALUES("141","INTERTRIM LA","17","123","5","2018-10-05","2018-10-12","Pengobatan Infectious Coryza /Snot, Fowl Cholera, Colibacillosis, Salmonellosis dan malaria unggas ");



CREATE TABLE `tb_pakan` (
  `id_pakan` int(9) NOT NULL AUTO_INCREMENT,
  `nama_pakan` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_suplier` int(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  PRIMARY KEY (`id_pakan`),
  KEY `id_suplier` (`id_suplier`),
  CONSTRAINT `tb_pakan_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `tb_suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=439 DEFAULT CHARSET=latin1;

INSERT INTO tb_pakan VALUES("424","Jagung","0","123","1","2018-05-25","2018-11-30");
INSERT INTO tb_pakan VALUES("428","Dedak","112","123","3","2018-10-01","2018-10-31");
INSERT INTO tb_pakan VALUES("429","Jagung","101","123","1","2018-05-25","2018-11-29");
INSERT INTO tb_pakan VALUES("431","Jagung","20","123","1","2018-05-25","2018-11-28");
INSERT INTO tb_pakan VALUES("436","Bekatul","131","123","2","2018-10-05","2018-10-31");
INSERT INTO tb_pakan VALUES("437","Bekatul","0","122","2","2018-10-21","2018-10-30");
INSERT INTO tb_pakan VALUES("438","Jagung","22","124","1","2018-10-05","2018-10-28");



CREATE TABLE `tb_pakan_detail` (
  `id_pakan_detail` int(11) NOT NULL AUTO_INCREMENT,
  `pakan_id` int(11) NOT NULL,
  `suplier_id` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_pakan_detail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `tb_suplier` (
  `id_suplier` int(5) NOT NULL AUTO_INCREMENT,
  `nama_suplier` varchar(250) NOT NULL,
  `alamat_suplier` varchar(250) NOT NULL,
  `tlp_suplier` varchar(12) NOT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;

INSERT INTO tb_suplier VALUES("122","Bahtian","Ciamis","08523165479");
INSERT INTO tb_suplier VALUES("123","CV ARFAM JAYA","JL. Tamansari indah perumahan maya Blok D no 24B Tasikmalaya","085222726570");
INSERT INTO tb_suplier VALUES("124","Putra Apay Jaya","JL. Kalmantren Manonjaya Tasikmalaya","085315030950");
INSERT INTO tb_suplier VALUES("125","Andhika Pakan Ternak. PS","JL. Raya Margaluyu, Cikoneng, Ciamis, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46211","(0265) 31148");



CREATE TABLE `tb_telur` (
  `id_telur` int(7) NOT NULL AUTO_INCREMENT,
  `id_karyawan` int(7) NOT NULL,
  `jml_telur` int(10) NOT NULL,
  `berat` float NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_telur`),
  KEY `id_karyawan` (`id_karyawan`),
  CONSTRAINT `tb_telur_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tb_telur VALUES("1","1221","5652","6.2","2018-06-05");
INSERT INTO tb_telur VALUES("3","1223","34","4.3","2018-06-07");
INSERT INTO tb_telur VALUES("4","1221","39","4.1","2018-07-20");



CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tb_user VALUES("1","admin","a2960f70941d29b6123e6ebe493f38d2","Pak Ato");



CREATE TABLE `ts_obat` (
  `kode_obat` int(7) NOT NULL AUTO_INCREMENT,
  `id_obat` int(9) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jml_obat` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_obat`),
  KEY `id_obat` (`id_obat`),
  KEY `id_karyawan` (`id_karyawan`),
  CONSTRAINT `ts_obat_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ts_obat_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `tb_obat` (`id_obat`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

INSERT INTO ts_obat VALUES("22","138","1222","12","2018-10-30","Untuk obat cacing");



CREATE TABLE `ts_pakan` (
  `kode_pakan` int(7) NOT NULL AUTO_INCREMENT,
  `id_pakan` int(9) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `jml_pakan` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`kode_pakan`),
  KEY `id_pakan` (`id_pakan`),
  KEY `id_karyawan` (`id_karyawan`),
  CONSTRAINT `ts_pakan_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `tb_karyawan` (`id_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ts_pakan_ibfk_2` FOREIGN KEY (`id_pakan`) REFERENCES `tb_pakan` (`id_pakan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

INSERT INTO ts_pakan VALUES("135","424","1223","10","2018-06-26");
INSERT INTO ts_pakan VALUES("137","424","1221","13","2018-10-09");
INSERT INTO ts_pakan VALUES("138","436","1221","23","2018-10-06");
INSERT INTO ts_pakan VALUES("139","428","1223","12","2018-10-20");
INSERT INTO ts_pakan VALUES("140","424","1222","100","2018-10-20");
INSERT INTO ts_pakan VALUES("141","437","1224","100","2018-10-27");



CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_obat` AS select `tb_obat`.`id_obat` AS `id_obat`,`tb_obat`.`nama_obat` AS `nama_obat`,sum((case when (`tb_obat`.`tgl_kadaluarsa` < curdate()) then `tb_obat`.`stok` else 0 end)) AS `kadaluarsa`,sum((case when (`tb_obat`.`tgl_kadaluarsa` > curdate()) then `tb_obat`.`stok` else 0 end)) AS `tersedia`,`tb_obat`.`id_kategori` AS `id_kategori`,`tb_obat`.`deskripsi` AS `deskripsi` from `tb_obat` group by `tb_obat`.`nama_obat`;

INSERT INTO view_obat VALUES("138","ALBENOL-100 ORAL","30","100","4","                
                         Untuk Obat cacing                         ");
INSERT INTO view_obat VALUES("136","Delatrin","16","20","1","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO view_obat VALUES("140","INTERTRIM LA","17","100","5","Pengobatan Infectious Coryza /Snot, Fowl Cholera, Colibacillosis, Salmonellosis dan malaria unggas ");



CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pakan` AS select `tb_pakan`.`id_pakan` AS `id_pakan`,`tb_pakan`.`nama_pakan` AS `nama_pakan`,sum((case when (`tb_pakan`.`tgl_kadaluarsa` < curdate()) then `tb_pakan`.`stok` else 0 end)) AS `kadaluarsa`,sum((case when (`tb_pakan`.`tgl_kadaluarsa` > curdate()) then `tb_pakan`.`stok` else 0 end)) AS `tersedia`,`tb_pakan`.`id_kategori` AS `id_kategori` from `tb_pakan` group by `tb_pakan`.`nama_pakan`;

INSERT INTO view_pakan VALUES("436","Bekatul","0","131","2");
INSERT INTO view_pakan VALUES("428","Dedak","0","112","3");
INSERT INTO view_pakan VALUES("424","Jagung","22","121","1");



CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_stok` AS select `stok_pakan`.`pakan_id` AS `pakan_id`,`stok_pakan`.`nama_pakan` AS `nama_pakan`,sum((case when (`stok_pakan`.`tgl_kadaluarsa` < curdate()) then `stok_pakan`.`stok` else 0 end)) AS `kadaluarsa`,sum((case when (`stok_pakan`.`tgl_kadaluarsa` > curdate()) then `stok_pakan`.`stok` else 0 end)) AS `tersedia`,`stok_pakan`.`id_kategori` AS `id_kategori` from `stok_pakan` group by `stok_pakan`.`nama_pakan`;

INSERT INTO view_stok VALUES("1","Jagung","0","22","1");



CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_stok_obat` AS select `stok_obat`.`obat_id` AS `obat_id`,`stok_obat`.`nama_obat` AS `nama_obat`,sum((case when (`stok_obat`.`tgl_kadaluarsa` < curdate()) then `stok_obat`.`stok` else 0 end)) AS `kadaluarsa`,sum((case when (`stok_obat`.`tgl_kadaluarsa` > curdate()) then `stok_obat`.`stok` else 0 end)) AS `tersedia`,`stok_obat`.`id_kategori` AS `id_kategori`,`stok_obat`.`deskripsi` AS `deskripsi` from `stok_obat` group by `stok_obat`.`nama_obat`;

INSERT INTO view_stok_obat VALUES("3","ALBENOL-100 ORAL","0","13","4","Untuk obat cacing");
INSERT INTO view_stok_obat VALUES("1","Delatrin","0","12","1","Mencegah dan mengobati infestasi ektoparasit (kutu, tungau, caplak, lalat, dan kutu franky");
INSERT INTO view_stok_obat VALUES("4","Paracetamol","0","0","6","deskripsi
                         ");
INSERT INTO view_stok_obat VALUES("2","Zaldes","0","12","2","Desinfektan");

