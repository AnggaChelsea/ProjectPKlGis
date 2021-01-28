-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql311.byetcluster.com
-- Generation Time: Jan 21, 2021 at 12:58 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27175470_geografis`
--

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `npsn` int(11) NOT NULL,
  `nama_sekolah` varchar(32) DEFAULT NULL,
  `alamat` varchar(41) DEFAULT NULL,
  `desa` varchar(15) DEFAULT NULL,
  `kecamatan` varchar(14) DEFAULT NULL,
  `jumlah_siswa` int(11) DEFAULT NULL,
  `jumlah_guru` int(11) DEFAULT NULL,
  `kepala_sekolah` varchar(23) DEFAULT NULL,
  `akreditasi` varchar(1) DEFAULT NULL,
  `latitude` decimal(10,7) DEFAULT NULL,
  `longitude` decimal(11,7) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytable`
--

INSERT INTO `mytable` (`npsn`, `nama_sekolah`, `alamat`, `desa`, `kecamatan`, `jumlah_siswa`, `jumlah_guru`, `kepala_sekolah`, `akreditasi`, `latitude`, `longitude`) VALUES
(20202250, 'SMAN 1 SUKARAJA', 'JL. MH. Holil No. 78', 'Sukaraja', 'Sukaraja', 833, 36, 'Uum', 'B', '-6.9138042', '106.9693051'),
(20202251, 'SMAN 1 WARUNG KIARA', 'Jl. Pelabuhan Ratu, Km. 9', 'Warung Kiara', 'Warung Kiara', 1041, 33, 'Ade Munajat', 'A', '-6.9770659', '106.7170779'),
(20202259, 'SMAN 1 SAGARANTEN', 'Jl. SMA 32 Sagaranten', 'Sagaranten', 'Sagaranten', 556, 24, 'Mumuh', 'A', '-7.2168947', '106.8793673'),
(20202260, 'SMAN 1 CIRACAP', 'Jl.R. Natadipura', 'Purwasedar', 'Ciracap', 592, 36, 'Joni Purnama', 'A', '-7.3299206', '106.5121159'),
(20202263, 'SMAN 1 JAMPANGKULON', 'Jl. Warung Tagog, 01/01', 'Nagraksari', 'Jampang Kulon', 1345, 56, 'Edi Yama', 'A', '-7.2743402', '106.6215976'),
(20202264, 'SMAN 1 JAMPANGTENGAH', 'Jl. Panumbangan, Km. 2', 'Cijulang', 'Jampang Tengah', 743, 27, 'Tateng Mlyana', 'A', '-7.0629821', '106.8104385'),
(20202265, 'SMAN 1 LENGKONG', 'JL. Raya Tegallega', 'Lengkong', 'Lengkong', 544, 24, 'Dadang Heryanto', 'A', '-7.1303531', '106.7016901'),
(20202267, 'SMAN 1 PELABUHAN RATU', 'Jl. Bhayangkara, Km. 1 Palabuhan Ratu', 'Citepus', 'Pelabuhan Ratu', 1014, 45, 'Yudi Setiawan', 'A', '-6.9871177', '106.5565901'),
(20202272, 'SMKS PGRI PALABUHANRATU SUKABUMI', 'Jl. Badak Putih, No. 11 Pelabuhan Ratu', 'Pelabuhan Ratu', 'Pelabuhan Ratu', 175, 7, 'Eneng Rismawati', 'B', '-6.9842890', '106.5504544'),
(20202288, 'SMAN 1 CIKEMBAR', 'Jl. Pelabuhan 2, Km. 20', 'Cikembar', 'Cikembar', 1023, 44, 'Iman Sofyani', 'A', '-6.9617880', '106.7824249'),
(20246334, 'SMAS AZ ZAINIYYAH', 'JL. Wanasari Selabintana', 'Perbawati', 'Sukabumi', 164, 10, 'Rokhid Sumarja', 'A', '-6.8682288', '106.9378125'),
(20246472, 'SMKN 1 TEGALBULEUD', 'Jl. Siliwangi-Tegalbuleud', 'Buniasih', 'Tegalbuleud', 392, 16, 'Iwan', 'B', '-7.4034720', '106.7165382'),
(20247160, 'SMAS AL FARDIYATUSSAADAH', 'Jl. Raya Citepus 02/14', 'Citepus', 'Pelabuhan Ratu', 195, 8, 'Eneng Laelah Muaropah', 'B', '-6.9870910', '106.5500240'),
(20247169, 'SMAS TERPADU DARUL AMAL', 'Jl. Cikaso-Cinagen Kp.Selajati Rt. 02/01', 'Bojonggenteng', 'Jampang Kulon', 277, 22, 'Febri Maswandi', 'A', '-7.3030567', '106.6211900'),
(20252009, 'SMAN 1 NYALINDUNG', 'Jl. Rancabali', 'Kertaangsana', 'Nyalindung', 441, 16, 'Ade Ruslan Nurdin', 'A', '-7.0024331', '106.9065880'),
(20253014, 'SMKN 1 SURADE', 'Jl. Raya Cipeundeuy, No. 1', 'Cipeundeuy', 'Surade', 632, 30, 'Awan Sudianto', 'A', '-7.3675008', '106.5589244'),
(20253046, 'SMKS BINA BANGSA 2 SUKABUMI', 'Jl. Pasir Ipis Surade', 'Buniwangi', 'Surade', 242, 9, 'Drs. H. Encep Bambang H', 'A', '-7.3253889', '106.5904713'),
(20253652, 'SMKS BINA BANGSA 1 SUKABUMI', 'Jl. Pasir Ipis Surade', 'Buniwangi', 'Surade', 199, 25, 'Zenny Zainal Alamsyah', 'A', '-7.3253889', '106.5904713'),
(20253655, 'SMKS MUTIARA HIKMAH', 'Jl. Taman Jaya', 'Taman Jaya', 'Ciemas', 168, 7, 'Rahmat Zaelani', 'B', '-7.2314014', '106.5230958'),
(20253661, 'SMAS NURUL HUDA', 'Jl. Babakan Astana, No. 3', 'Buniwangi', 'Pelabuhan Ratu', 256, 11, 'Widan Shaleh, S.Sos', 'B', '-6.9127111', '106.5711089'),
(20253845, 'SMAN 1 KALIBUNDER', 'Jl. Cibuntu Kalibunder', 'Sukaluyu', 'Kalibunder', 269, 17, 'Erwanda', 'B', '-7.2630693', '106.7265880'),
(20253979, 'SMAN 1 SURADE', 'Jl. Raya Cikaso Km 1 Surade-Sukabumi', 'Jagamukti', 'Surade', 1227, 46, 'Iyep Budiman', 'A', '-7.3373427', '106.5802243'),
(20257690, 'SMK PLUS NUSA PUTRA', 'Jl. Raya Surade Wetan', 'Surade', 'Surade', 326, 10, 'Purwono Supriatin', 'B', '-7.3274773', '106.5745790'),
(20258510, 'SMKS PERTANIAN KADUDAMPIT', 'Jl. Swadarma, Km. 1', 'Sukamaju', 'Kadudampit', 77, 8, 'Saepudin', 'C', '-6.8649737', '106.9150231'),
(20268788, 'SMKS TIRTAYASA CIRACAP', 'Jl. Ciracap-Mareleng Batugares, Rt. 38/09', 'Ciracap', 'Ciracap', 208, 10, 'Mamah Rukoyah', 'A', '-7.3192912', '106.5212057'),
(20271154, 'SMK BINA BAHARI', 'Jl. Raya Citarete Ujung Genteng', 'Ujung Genteng', 'Ciracap', 95, 8, 'Asep Jamaludin', 'A', '-7.3524020', '106.4257416'),
(60726515, 'SMKN 1 SUKABUMI', 'Jl. Salabintana Wetan, 02/11', 'Sudajaya Girang', 'Sukabumi', 1848, 102, 'Dadang Hernawan', 'A', '-6.8801810', '106.9524749'),
(60726667, 'SMAS TERPADU AL-FIYYAH', 'Jl. Gunungjati No. 01 Ciparapat Rt.10/03', 'Bangbayang', 'Tegalbuleud', 42, 4, 'Risti Inayatul Hamamah', 'B', '-7.2770620', '106.7827058'),
(60726697, 'SMAN 1 CIEMAS', 'Jl. Pasirhaur', 'Ciwaru', 'Ciemas', 300, 40, 'Sri Erwini Chrstine', 'B', '-7.1981462', '106.4784628'),
(69727426, 'SMKS JAYA TAMA BANGSA', 'Kp. Mekar Asih Cisitu', 'Ciemas', 'Ciemas', 138, 10, 'Asep Hermawan, S.pd.i', 'B', '-7.1413232', '106.5503474'),
(69727427, 'SMKS TUNAS BANGSA CIEMAS', 'Jl. Desa Girimukti, Km. 8', 'Girimukti', 'Ciemas', 151, 6, 'Dedi Hartono', 'B', '-7.1421716', '106.4972732'),
(69754714, 'SMKS NURUL ICHSAN', 'Kp. Selamanjah, Rt. 02/01', 'Cidolog', 'Cidolog', 72, 4, 'Oyok Nur\'ailah', 'B', '-7.3177930', '106.8409959'),
(69755456, 'SMKS PERSADA CIEMAS', 'Jl. Raya Cibinong', 'Mekarjaya', 'Ciemas', 88, 2, 'Entip Satipah', 'B', '-7.2066473', '106.5314496'),
(69757439, 'SMKS AL-MUHAJIRIN', 'Jl. Simpang, Rt. 03/08', 'Cikangkung', 'Ciracap', 245, 8, 'Reni S.Pd.i', 'A', '-7.3430820', '106.4528525'),
(69886243, 'SMK GUNA JAYA', 'Buniwangi', 'Buniwangi', 'Surade', 66, 5, 'Saepul Rohman', 'A', '-7.3611674', '106.5398176'),
(69888422, 'SMK AKADEMIK BANI AGUNG', 'Kp. Cibaregbeg', 'Cibaregbeg', 'Sagaranten', 134, 8, 'Jajang', 'B', '-7.1593611', '106.8777774'),
(69888446, 'SMK PERMATA MANDIRI', 'Jl. Pengkolan Kondang, Rt. 04/06', 'Tanjung', 'Jampang Kulon', 123, 10, 'Ratna Ningsih', 'B', '-7.2420867', '106.6194670'),
(69888654, 'SMK KESEHATAN SAGARANTEN', 'Jl. Raya Cigadog Km 01 Sagaranten', 'Sagaranten', 'Sagaranten', 71, 5, 'Abud Darmadji', 'B', '-7.2164389', '106.8820117'),
(69915781, 'SMA PERMATA MANDIRI', 'Jl. Pengkolan Kondang Jampangkulon, 04/06', 'Tanjung', 'Jampang Kulon', 200, 6, 'Amir Mahmud', 'B', '-7.2410420', '106.6208309');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan`
--

CREATE TABLE `permintaan` (
  `id` int(11) NOT NULL,
  `wilayah` varchar(128) NOT NULL,
  `kecamatan` varchar(128) NOT NULL,
  `nama_dinas` varchar(128) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `keterangan` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permintaan`
--

INSERT INTO `permintaan` (`id`, `wilayah`, `kecamatan`, `nama_dinas`, `latitude`, `longitude`, `photo`, `keterangan`) VALUES
(1, 'wilayah gobang', 'Pelabuhanratu', 'angga', '-6.63187', '107.655029', 'home1593934984.jpg', 'disini saya hanya ingin membuatkan pemetaan wilayah saya yang saya ajukan ke kantor bappeda sekiranya saya berharap dapat di pertimbangkan kembali'),
(2, 'istighfar', 'bandung lama', 'angga', '-6.708254', '107.457275 ', 'home1593936350.png', 'coba coba'),
(3, 'Allah', 'berusah', 'berubah', '-6.620957', '107.940674', 'home1593990532.png', 'kita harus berusaha dan mendaoatkan cintanya allah.. abaikan smuanya yang sudah membuat kamu sakit hati'),
(4, 'Bpa', 'Bpa', 'Bpa', '343545454r', '55565656566', 'home1609048483.jpg', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `name`, `email`, `subject`, `pertanyaan`) VALUES
(1, 'Angga', 'Angga@gmail.com', 'Tidak ada', 'Ini Percobaan'),
(2, 'Abdul', 'Abdul@gmail.com', 'Bissmillah', 'Ini Percobaan dan Lahaola'),
(3, 'perikanan', 'angga@gmail.com', 'test', 'test'),
(4, 'test', 'test@gmail.com', 'test', 'test'),
(5, 'sadfsd', 'asd@gmail.com', 'tes', 'tes'),
(6, 'terte', 'erer@gmail.com', 'er', 'erer'),
(7, 'asdas', 'asdas@gmail.com', 'asdasd', 'asdasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tps`
--

CREATE TABLE `tbl_tps` (
  `id` varchar(255) DEFAULT NULL,
  `kode_tps` varchar(255) DEFAULT NULL,
  `wilayah` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `nama_tps` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `photo` varchar(210) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_tps`
--

INSERT INTO `tbl_tps` (`id`, `kode_tps`, `wilayah`, `kecamatan`, `nama_tps`, `lokasi`, `latitude`, `longitude`, `photo`) VALUES
('30', 'TU030', 'BANDUNG UTARA', 'COBLONG', 'SANGKURIAN', 'CISITU', '-6.882778', '107.610229', ''),
('31', 'TU031', 'BANDUNG UTARA', 'COBLONG', 'BOROMEUS', 'DJUANDA (RUMAH SAKIT BOROMEUS)', '-6.894761', '107.613858', ''),
('32', 'TU032', 'BANDUNG UTARA', 'COBLONG', 'TERMINAL DAGO', 'TERMINAL DAGO', '-6.867195', '107.621516', ''),
('33', 'TU033', 'BANDUNG UTARA', 'COBLONG', 'DIPATIUKUR', 'SINGAPERBANGSA', '-6.895688', '107.616884', ''),
('34', 'TU034', 'BANDUNG UTARA', 'COBLONG', 'PASAR SADANG SERANG', 'PASAR SADANG SERANG', '-6.892071', '107.624908', ''),
('35', 'TU035', 'BANDUNG UTARA', 'COBLONG', 'KOMPLEK SADANG SERANG', 'SADANG TENGAH', '-6.890184', '107.625154', ''),
('36', 'TU036', 'BANDUNG UTARA', 'COBLONG', 'KEBON BINATANG', 'TAMANSARI', '-6.893971', '107.608394', ''),
('37', 'TU037', 'BANDUNG UTARA', 'COBLONG', 'BABAKAN SILIWANGI', 'BABAKAN SILIWANGI', '-6.885066', '107.608938', ''),
('38', 'TU038', 'BANDUNG UTARA', 'COBLONG', 'PUTER', 'PUTER', '-6.898462', '107.622263', ''),
('40', 'TS002', 'BANDUNG SELATAN', 'SUMUR BANDUNG', 'PATRAKOMALA', 'PATRAKOMALA', '-6.912586', '107.624853', ''),
('41', 'TS003', 'BANDUNG SELATAN', 'SUMUR BANDUNG', 'GEDUNG PAKUAN', 'GEDUNG PAKUAN', '-6.911939', '107.605076', ''),
('42', 'TS004', 'BANDUNG SELATAN', 'SUMUR BANDUNG', 'GUDANG SELATAN', 'GUDANG SELATAN', '-6.916756', '107.619216', ''),
('43', 'TS005', 'BANDUNG SELATAN', 'SUMUR BANDUNG', 'BI BRAGA', 'BRAGA', '-6.913973', '107.609106', ''),
('44', 'TS006', 'BANDUNG SELATAN', 'KIARACONDONG', 'KEBAKTIAN', 'KEBAKTIAN', '-6.922385', '107.649556', ''),
('45', 'TS008', 'BANDUNG SELATAN', 'KIARACONDONG', 'PSM', 'PSM', '-6.929856', '107.648888', ''),
('46', 'TS009', 'BANDUNG SELATAN', 'KIARACONDONG', 'PASAR CICADAS', 'PASAR CICADAS', '-6.911315', '107.643993', ''),
('47', 'TS010', 'BANDUNG SELATAN', 'KIARACONDONG', 'PASAR KIARACONDONG', 'KIARACONDONG', '-6.926538', '107.644702', ''),
('48', 'TS011', 'BANDUNG SELATAN', 'KIARACONDONG', 'TARUMATEX', 'AHMAD YANI', '-6.911961', '107.636369', ''),
('49', 'TS012', 'BANDUNG SELATAN', 'KIARACONDONG', 'CICAHEUM', 'TERMINAL CICAHEUM (BELAKANG)', '-6.902577', '107.65673', ''),
('50', 'TS013', 'BANDUNG SELATAN', 'REGOL', 'TEGALLEGA/KOBANA', 'M. TOHA', '-6.932901', '107.606407', ''),
('51', 'TS014', 'BANDUNG SELATAN', 'REGOL', 'TAMAN TEGALLEGA', 'TAMAN TEGALLEGA', '-6.937096', '107.603423', ''),
('52', 'TS015', 'BANDUNG SELATAN', 'REGOL', 'PASAR KARAPITAN', 'PASAR KARAPITAN', '-6.93217', '107.615351', ''),
('53', 'TS016', 'BANDUNG SELATAN', 'REGOL', 'PASIRLUYU', 'PASIRLUYU', '-6.944699', '107.620927', ''),
('54', 'TS017', 'BANDUNG SELATAN', 'REGOL', 'PLN SUKARNO HATTA', 'SUKARNO HATTA', '-6.949005', '107.611994', ''),
('55', 'TS018', 'BANDUNG SELATAN', 'REGOL', 'CISEUREUH', 'M. TOHA', '-6.955037', '107.611764', ''),
('56', 'TS019', 'BANDUNG SELATAN', 'LENGKONG', 'PUTERACO', 'GUNTURSARI WETAN', '-6.944903', '107.634558', ''),
('57', 'TS020', 'BANDUNG SELATAN', 'LENGKONG', 'HASAN SAPUTRA', 'HASAN', '-6.937215', '107.634952', ''),
('58', 'TS021', 'BANDUNG SELATAN', 'LENGKONG', 'PASAR PALASARI', 'LODAYA', '-6.931732', '107.62302', ''),
('59', 'TS022', 'BANDUNG SELATAN', 'LENGKONG', 'BINTARA', 'SESKO ABRI RW 08', '-6.925608', '107.628695', ''),
('60', 'TS023', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'SUKABUMI', 'SUKABUMI', '-6.917163', '107.63451', ''),
('61', 'TS024', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'BANTEN', 'BANTEN', '-6.917934', '107.640912', ''),
('62', 'TS025', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'PEMKOT', 'CIANJUR', '-6.915805', '107.632432', ''),
('63', 'TS026', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'PT. DELAMI', 'SUKARNO HATTA', '-6.945798', '107.638431', ''),
('64', 'TS027', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'LP KB. WARU', 'JAKARTA', '-6.91405', '107.63898', ''),
('65', 'TS028', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'MAJALENGKA', 'MAJALENGKA', '-6.919548', '107.63076', ''),
('66', 'TS029', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'CIBANGKONG RW 11', 'CIBANGKONG', '-6.920972', '107.631426', ''),
('67', 'TS030', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'MALEER INDAH', 'KOMPLEK MALEER INDAH', '-6.928854', '107.638725', ''),
('68', 'TS031', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'MALEER RW 05', 'JEMBATAN CIBANGKONG', '-6.922346', '107.636901', ''),
('69', 'TS032', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'MALEER RW 06', 'JEMBATAN IV', '-6.924978', '107.638314', ''),
('70', 'TS033', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'GUMURUH', 'GUMURUH', '-6.939377', '107.637677', ''),
('71', 'TS034', 'BANDUNG SELATAN', 'BATUNUNGGAL', 'BINONGJATI', 'BINONGJATI', '-6.941195', '107.640197', ''),
('72', 'TS035', 'BANDUNG SELATAN', 'BANDUNG KIDUL', 'BATUNUNGGAL INDAH', 'BATUNUNGGAL INDAH', '-6.961939', '107.624687', ''),
('73', 'TS036', 'BANDUNG SELATAN', 'BANDUNG KIDUL', 'PASAR MODEN BATUNUNGGAL', 'KOMPLEK BATUNUNGGAL', '-6.958627', '107.623818', ''),
('74', 'TS037', 'BANDUNG SELATAN', 'BANDUNG KIDUL', 'LEN LIPI', 'SUKARNO HATTA', '-6.949259', '107.61953', ''),
('75', 'TS038', 'BANDUNG SELATAN', 'BANDUNG KIDUL', 'CURUG ECE', 'BUAH BATU', '-6.954415', '107.63885', ''),
('76', 'TS040', 'BANDUNG SELATAN', 'BANDUNG KIDUL', 'JAKAPURWA', 'JAKAPURWA', '-6.962812', '107.64902', ''),
('77', 'TS043', 'BANDUNG SELATAN', 'BANDUNG KIDUL', 'POOLSEKELIMUS', 'SEKELIMUS BARAT', '-6.948118', '107.636457', ''),
('78', 'TB001', 'BANDUNG BARAT', 'CICENDO', 'GUNUNG BATU BARAT', 'GUNUNG BATU BARAT', '-6.889066', '107.564819', ''),
('79', 'TB002', 'BANDUNG BARAT', 'CICENDO', 'GUNUNG BATU TIMUR', 'GUNUNG BATU TIMUR', '-6.890467', '107.571774', ''),
('80', 'TB003', 'BANDUNG BARAT', 'CICENDO', 'PASAR PAMOYANAN', 'PASAR PAMOYANAN', '-6.903482', '107.596173', ''),
('81', 'TB004', 'BANDUNG BARAT', 'CICENDO', 'PABRIK KINA', 'PAJAJARAN', '-6.907275', '107.602447', ''),
('83', 'TB006', 'BANDUNG BARAT', 'CICENDO', 'IPTN', 'KOMPLEK PTDI', '-6.899048', '107.583847', ''),
('84', 'TB007', 'BANDUNG BARAT', 'CICENDO', 'INDUSTRI DALAM', 'INDUSTRI DALAM', '-6.912398', '107.595185', ''),
('85', 'TB008', 'BANDUNG BARAT', 'CICENDO', 'ARUNA', 'ARUNA', '-6.908853', '107.588417', ''),
('86', 'TB009', 'BANDUNG BARAT', 'ANDIR', 'BABAKAN CIANJUR', 'BABAKAN CIANJUR', '-6.896893', '107.568667', ''),
('87', 'TB010', 'BANDUNG BARAT', 'ANDIR', 'RUMAH SAKIT KEBONJATI', 'RUMAH SAKIT KEBONJATI', '-6.91606', '107.596325', ''),
('88', 'TB011', 'BANDUNG BARAT', 'ANDIR', 'PASAR ANDIR', 'PASAR ANDIR', '-6.91781', '107.590265', ''),
('89', 'TB012', 'BANDUNG BARAT', 'ANDIR', 'ENCE AZIS', 'ENCE AZIS', '-6.919155', '107.600982', ''),
('90', 'TB013', 'BANDUNG BARAT', 'ANDIR', 'CIROYOM', 'PASAR CIROYOM', '-6.914407', '107.587663', ''),
('91', 'TB014', 'BANDUNG BARAT', 'ANDIR', 'PASAR BARU', 'PASAR BARU', '-6.917366', '107.603742', ''),
('92', 'TB015', 'BANDUNG BARAT', 'ANDIR', 'HYPERSQUARE', 'PASIR KALIKI', '-6.91437', '107.594345', ''),
('93', 'TB016', 'BANDUNG BARAT', 'ANDIR', 'WARINGIN', 'WARINGIN', '-6.91781', '107.590265', ''),
('94', 'TB017', 'BANDUNG BARAT', 'BOJONGLOA KALER', 'PASAR SUKAHAJI', 'PASAR SUKAHAJI', '-6.927458', '107.585917', ''),
('95', 'TB018', 'BANDUNG BARAT', 'BANDUNG KULON', 'PASAR CIJERAH', 'CIJERAH', '-6.926913', '107.564936', ''),
('96', 'TB019', 'BANDUNG BARAT', 'BANDUNG KULON', 'TAMAN HOLIS', 'TAMAN HOLIS', '-6.949503', '107.565123', ''),
('97', 'TB020', 'BANDUNG BARAT', 'BANDUNG KULON', 'PASAR RAHAYU', 'CIGONDEWAH', '-6.951814', '107.564632', ''),
('98', 'TB021', 'BANDUNG BARAT', 'BANDUNG KULON', 'BUMI ASRI', 'KOMPLEK BUMI ASRI', '-6.92007', '107.706557', ''),
('99', 'TB022', 'BANDUNG BARAT', 'BANDUNG KULON', 'MELONG ASIH', 'KOMPLEK MELONG ASIH', '-6.922132', '107.565206', ''),
('100', 'TB023', 'BANDUNG BARAT', 'BANDUNG KULON', 'MASTERINDO', 'SUKARNO HATTA', '-6.937977', '107.579738', ''),
('101', 'TB024', 'BANDUNG BARAT', 'BANDUNG KULON', 'SURYANI', 'TERUSAN SURYANI', '-6.92645', '107.577698', ''),
('102', 'TB025', 'BANDUNG BARAT', 'BANDUNG KULON', 'CIGONDEWAH RW 08', 'CIGONDEWAH KALER RW 08', '-6.935616', '107.563677', ''),
('103', 'TB026', 'BANDUNG BARAT', 'BABAKAN CIPARAY', 'PORIB', 'PORIB', '-6.948799', '107.582281', ''),
('104', 'TB027', 'BANDUNG BARAT', 'BABAKAN CIPARAY', 'SATRIA RAYA', 'KOMPLEK SATRIA RAYA', '-6.948345', '107.572199', ''),
('105', 'TB028', 'BANDUNG BARAT', 'BABAKAN CIPARAY', 'KOPO ELOK', 'KOPO', '-6.960323', '107.579967', ''),
('106', 'TB029', 'BANDUNG BARAT', 'BABAKAN CIPARAY', 'DIAN PERMAI', 'DIAN PERMAI', '-6.941385', '107.571214', ''),
('107', 'TB030', 'BANDUNG BARAT', 'BABAKAN CIPARAY', 'SUMBERSARI', 'SUMBERSARI', '-6.932243', '107.574038', ''),
('108', 'TB031', 'BANDUNG BARAT', 'BABAKAN CIPARAY', 'PIKIRAN RAKYAT', 'SUKARNO HATTA', '-6.93745', '107.580362', ''),
('109', 'TB032', 'BANDUNG BARAT', 'BABAKAN CIPARAY', 'PASIR KOJA', 'TERUSAN PASIR KOJA', '-6.929329', '107.579196', ''),
('110', 'TB033', 'BANDUNG BARAT', 'ASTANA ANYAR', 'PASAR ASTANA ANYAR', 'ASTANA ANYAR', '-6.930574', '107.60106', ''),
('111', 'TB034', 'BANDUNG BARAT', 'ASTANA ANYAR', 'PETA', 'PETA', '-6.937229', '107.599497', ''),
('112', 'TB035', 'BANDUNG BARAT', 'ASTANA ANYAR', 'PAGARSIH', 'PAGARSIH', '-6.92328', '107.595648', ''),
('113', 'TB036', 'BANDUNG BARAT', 'ASTANA ANYAR', 'NYENGSERET', 'NYENGSERET', '-6.931288', '107.599691', ''),
('114', 'TB037', 'BANDUNG BARAT', 'BOJONGLOA KIDUL', 'RUMAH SAKIT IMANUEL', 'KOPO', '-6.935786', '107.596329', ''),
('115', 'TB038', 'BANDUNG BARAT', 'BOJONGLOA KIDUL', 'PASAR LEUWI PANJANG', 'LEUWI PANJANG', '-6.93842', '107.59705', ''),
('116', 'TB039', 'BANDUNG BARAT', 'BOJONGLOA KIDUL', 'TERMINAL LEUWI PANJANG', 'TERMINAL LEUWI PANJANG', '-6.94544', '107.592922', ''),
('117', 'TB040', 'BANDUNG BARAT', 'BOJONGLOA KIDUL', 'CIBADUYUT', 'CIBADUYUT', '-6.962001', '107.59384', ''),
('118', 'TB041', 'BANDUNG BARAT', 'BOJONGLOA KIDUL', 'MEKAR WANGI', 'KARASAK LAMA', '-6.956275', '107.607503', ''),
('119', 'TB042', 'BANDUNG BARAT', 'BOJONGLOA KIDUL', 'KARASAK', 'KARASAK', '-6.948939', '107.604308', ''),
('120', 'TT001', 'BANDUNG TIMUR', 'ARCAMANIK', 'PACUAN KUDA', 'PACUAN KUDA', '-6.909549', '107.673853', ''),
('121', 'TT002', 'BANDUNG TIMUR', 'ARCAMANIK', 'KOMPLEK ARCAMANIK', 'CISARANTEN RW 15', '-6.925413', '107.674764', ''),
('122', 'TT003', 'BANDUNG TIMUR', 'ARCAMANIK', 'CISARANTEN JATI', 'CISARANTEN JATI', '-6.916406', '107.682559', ''),
('124', 'TT005', 'BANDUNG TIMUR', 'ARCAMANIK', 'CICUKANG', 'CICUKANG', '-6.912408', '107.683038', ''),
('125', 'TT006', 'BANDUNG TIMUR', 'ARCAMANIK', 'BOJONG AWI', 'BOJONG AWI', '-6.907363', '107.685567', ''),
('126', 'TT007', 'BANDUNG TIMUR', 'ARCAMANIK', 'PU BINAMARGA', 'KOMPLEK BINAMARGA', '-6.915195', '107.688462', ''),
('127', 'TT008', 'BANDUNG TIMUR', 'ARCAMANIK', 'GADING REGENSI', 'KOMPLEK GADING REGENSI', '-6.935927', '107.671181', ''),
('128', 'TT009', 'BANDUNG TIMUR', 'ANTAPANI', 'SUBANG', 'SUBANG', '-6.912648', '107.655265', ''),
('129', 'TT010', 'BANDUNG TIMUR', 'ANTAPANI', 'INDRAMAYU', 'INDRAMAYU', '-6.917873', '107.657642', ''),
('130', 'TT011', 'BANDUNG TIMUR', 'ANTAPANI', 'CIBATU', 'CIBATU', '-6.915205', '107.665714', ''),
('131', 'TT012', 'BANDUNG TIMUR', 'ANTAPANI', 'PRATISTA', 'PRATISTA', '-6.927434', '107.668131', ''),
('132', 'TT013', 'BANDUNG TIMUR', 'CIBIRU', 'CIPADUNG RW 08', 'CIPADUNG RW 08', '-6.918357', '107.722479', ''),
('133', 'TT014', 'BANDUNG TIMUR', 'CIBIRU', 'LEGIT', 'AH. NASUTION', '-6.927804', '107.711587', ''),
('134', 'TT015', 'BANDUNG TIMUR', 'GEDEBAGE', 'CEMPAKA ARUM', 'CEMPAKA ARUM', '-6.956463', '107.706541', ''),
('135', 'TT016', 'BANDUNG TIMUR', 'GEDEBAGE', 'RANCABOLANG', 'RANCABOLANG', '-6.967186', '107.689146', ''),
('136', 'TT017', 'BANDUNG TIMUR', 'RANCASARI', 'DERWATI', 'DERWATI', '-6.968468', '107.685994', ''),
('137', 'TT018', 'BANDUNG TIMUR', 'RANCASARI', 'PASAR CIWASTRA', 'PASAR CIWASTRA', '-6.961261', '107.66661', ''),
('138', 'TT019', 'BANDUNG TIMUR', 'RANCASARI', 'BANDUNG INTEN', 'KOMPLEK BANDUNG INTEN', '-6.962297', '107.684365', ''),
('139', 'TT020', 'BANDUNG TIMUR', 'BUAH BATU', 'CIPAGALO', 'CIPAGALO', '-6.952764', '107.648219', ''),
('140', 'TT021', 'BANDUNG TIMUR', 'BUAH BATU', 'CIJAURA GIRANG', 'KOMPLEK CIJAURA', '-6.949825', '107.654045', ''),
('141', 'TT022', 'BANDUNG TIMUR', 'BUAH BATU', 'EMERALD TOWER', 'EMERALD TOWER', '-6.932958', '107.663931', ''),
('142', 'TT023', 'BANDUNG TIMUR', 'MANDALAJATI', 'CIKADUT', 'CIKADUT/ MAKAM CIKADUT', '-6.902276', '107.665968', ''),
('143', 'TT024', 'BANDUNG TIMUR', 'MANDALAJATI', 'BANDUNG HILL SIDE', 'KOMPLEK TAMANSARI BUKIT BANDUNG', '-6.901288', '107.683451', ''),
('144', 'TT025', 'BANDUNG TIMUR', 'MANDALAJATI', 'SUKA ASIH', 'KOMPLEK SUKA ASIH', '-6.903882', '107.686414', ''),
('145', 'TT026', 'BANDUNG TIMUR', 'UJUNG BERUNG', 'CIJAMBE', 'CIJAMBE', '-6.909275', '107.690682', ''),
('146', 'TT027', 'BANDUNG TIMUR', 'UJUNG BERUNG', 'PASAR UJUNG BERUNG', 'PASAR UJUNG BERUNG', '-6.913759', '107.702342', ''),
('147', 'TT028', 'BANDUNG TIMUR', 'UJUNG BERUNG', 'CIGENDING', 'CIGENDING', '-6.909617', '107.703856', ''),
('148', 'TT029', 'BANDUNG TIMUR', 'UJUNG BERUNG', 'UJUNG BERUNG INDAH', 'KOMPLEK UJUNG BERUNG INDAH', '-6.908726', '107.696078', ''),
('149', 'TT030', 'BANDUNG TIMUR', 'CINAMBO', 'CINAMBO INDAH', 'CINAMBO', '-6.924559', '107.690714', ''),
('150', 'TT031', 'BANDUNG TIMUR', 'CINAMBO', 'GOLF', 'GOLF', '-6.917651', '107.688964', ''),
('151', 'TT032', 'BANDUNG TIMUR', 'PANYILEUKAN', 'PANYILEUKAN', 'KOMPLEK PANYILEUKAN', '-6.936523', '107.712407', ''),
('152', 'TT033', 'BANDUNG TIMUR', 'PANYILEUKAN', 'PANGARITAN', 'PANGARITAN', '-6.926104', '107.707907', ''),
('153', 'TT034', 'BANDUNG TIMUR', 'PANYILEUKAN', 'PASAR GEDEBAGE', 'PASAR GEDEBAGE', '-6.936373', '107.696179', ''),
('154', 'TT035', 'BANDUNG TIMUR', 'PANYILEUKAN', 'POLDA JABAR', 'SUKARNO HATTA', '-6.937023', '107.703626', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `dinas` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `dinas`, `image`, `password`, `phone`, `role_id`, `is_active`, `date_created`) VALUES
(24, 'Angga Lesmana', 'angga1@gmail.com', 'Bappeda', 'default.jpg', '$2y$10$HLpL5SmbNyZvEt3NcAk6deHnYP4QvATgPs8O9n4mCm3uU6C4Lbv1q', '', 1, 1, 1593470594),
(25, 'adika', 'aga@gmail.com', 'adikadinas', 'default.jpg', '$2y$10$v1LHKc/ks1x4Xh7Y4Jl8Oes1bfuTjAfteqlbOr4kM4bdV19KMNliC', '', 2, 1, 1593471709),
(26, 'mujib', 'mujib@gmail.com', 'perikanan', 'default.jpg', '$2y$10$HboZwxwz1EuS2yV/kqsoQeEQeRHRS.sqwz3I9RJ3NTe87x3DmfGSy', '', 2, 1, 1593486472),
(27, 'ada', 'ada@gmail.com', 'ada', 'default.jpg', '$2y$10$YbKv4RaTE2qKP1.OUet1A.EWXN2vmfSaF/JTwtXcTqS/rWPXUEUgq', '', 2, 1, 1593502911),
(28, 'Adi Darma', 'adi@gmail.com', 'bappeda', 'default.jpg', '$2y$10$a/WpL/b33FCfrRVPRPSA4.GYNW7a6OfGrz7tFHzIY.N5CYCCFMs1a', '', 2, 1, 1593566461),
(29, 'abdul ajis asegaf', 'albarokah@gmail.com', 'albarokah', 'default.jpg', '$2y$10$sPM0bUTiJUyxh4fptOWPeemOvjPfVd6dKgfJKXNm4b8C0Pfg53eo2', '', 2, 1, 1593705386),
(30, 'angga saputra', 'saputra1@gmail.com', 'perikanan', 'default.jpg', '$2y$10$FAka9K/DKjqhcSgTiNWk8eZOdWMKI6NCDa6lSTEbw6TW.L7KbVQfO', '', 2, 1, 1593705507),
(31, 'angga dirga', 'lionsaputraa81@yahoo.com', 'perikanan', 'default.jpg', '$2y$10$GktlTTS8SaJEc9yAykChZuYqngOZ8EppV8S8/mKrd7DmgITwAfUNK', '', 2, 1, 1593725660),
(32, 'ade', 'ade@gmail.com', 'ade', 'default.jpg', '$2y$10$3X1FD0MkBkz9Plr.smuIeeLTwnM4/.hUrlI0MpcxxGDZ8kxrO8cIG', '', 2, 0, 1593746909),
(33, 'ades', 'ades@gmail.com', 'ades', 'default.jpg', '$2y$10$UuDqRmzCHyskay2dwrLYOObe0trWmcHZ9OFvUi8S2pbcI9lHm3tkK', '', 2, 0, 1593747640),
(34, 'ades', 'ades@gmail.com', 'ades', 'default.jpg', '$2y$10$mXJqMzxE2ZJc/T52xhwgHuaYjNV.rTyNADMIK.ZwRD6UcjHjsBIQG', '', 2, 0, 1593747762),
(35, 'asdasd', 'asda@gmail.com', 'asasdas', 'default.jpg', '$2y$10$1CjXpDsq3cKgv13pXC8Jp.8BERj9rUHrz9GCVvMF0RvTTt5BP/xsO', '', 2, 0, 1593747874),
(36, 'ade', 'ade@gmail.com', 'ades', 'default.jpg', '$2y$10$dNZ3.1pguLwN70g2EIPQYOn1jByu8oU3Rf1csRB9WNNU4GM9KzBuq', '', 2, 0, 1593748021),
(37, 'ande', 'ande@gmail.com', 'ande', 'default.jpg', '$2y$10$AoHG.QXT8GG/b93Gqkld8.R.jK3DKwTipKgYYuFPG8ksPR6PQquBW', '', 2, 0, 1593748357),
(38, 'asdasd', 'test@gmail.com', 'perikanan', 'default.jpg', '$2y$10$64q0quZakQODpgdmYlR17u6bNz5KSpcXO6eItIEJHv55RPw2lrf0m', '', 2, 0, 1593748666),
(39, 'ades', 'adi@gmail.com', 'perikanan', 'default.jpg', '$2y$10$ZCVydvT54qDyekHNKh2etuHGzgv3YfBm6a/swOuSax6Az2by4RgMm', '', 2, 0, 1593748737),
(40, 'angga2', 'test1@gmail.com', 'bappeda', 'default.jpg', '$2y$10$ntWrgu4zcjOqiCxQJ/zcpuRXPqcyHLB9Xze.YypAXi1nz7nU1QsWW', '', 2, 0, 1593748830),
(41, 'angga2', 'test1@gmail.com', 'bappeda', 'default.jpg', '$2y$10$fe6lXjOcqv/UcJDlNbNmVO0cq6NafrXpcVUW7Z2y97TImFkz5u62m', '', 2, 0, 1593749039),
(42, '1234a', 'lionsaputra81@yahoo.com', 'perikanan', 'default.jpg', '$2y$10$HI4wlZ.J00BaXx5rOwPLweIrrinc0FcqenEvDShTo4fJ632Wsp63O', '', 2, 0, 1593749065),
(43, 'angga saputra', 'anggasaputra@gmail.com', 'bappeda', 'default.jpg', '$2y$10$0t3vr2gZ6a2Ia5v/lJJRYuNju8htF7uL0.Er47wJCVZgjchhc2Fwe', '', 2, 0, 1593750175),
(44, 'angga saputra', 'anggasaputra@gmail.com', 'bappeda', 'default.jpg', '$2y$10$coDstj.9SNsb9p3I5oO4De0qz/DXGKbvwQL9V9rlhOVBm9uTAkEVi', '', 2, 0, 1593750194),
(45, 'ades', 'ades@gmail.com', 'ades', 'default.jpg', '$2y$10$VBxRak9E25pyxMVv13eplujr/BQryYdor7tQcFO2Rhis./cVOFpDa', '', 2, 1, 1593750516),
(46, 'angga', 'adaw@gmail.com', 'perikanan', 'default.jpg', '$2y$10$nXOI/3pHcsJ7MUtUQLkVKu.9tggUay37pg5n5mzuQVWFp9zb3dJBS', '', 2, 1, 1593757830),
(47, 'abdar', 'abdar@gmail.com', 'peribadahan', 'default.jpg', '$2y$10$aPrihlxGEUxzY3qSTq3WP.ebZQzNp3YT3PcKc6IP7QCJqyjDsUhAm', '', 2, 1, 1593759059),
(48, 'as', 'as@gmail.com', 'as', 'default.jpg', '$2y$10$SOp5n3wkcZFHhEmzZnQbUOAagOfT2YIKtZ4H0fNfZtP8hAQ0PQ2BG', '', 2, 1, 1593759676),
(49, 'angga', 'aga5@gmail.com', 'perikanan', 'default.jpg', '$2y$10$X3u9NHzXflwYJhLqZ6S1quI5wnresbFWovkjT4Rs9D3H9iN7Bf78W', '', 2, 1, 1593763706),
(50, 'abdar', 'abdar@gmail.com', 'asda', 'default.jpg', '$2y$10$tL6gEhEh2Sv3g./3lrUFF.PTOF/GN3hRGNV8ZM0sGMfUofkbb/vgm', '', 2, 1, 1593767555),
(51, 'angga', 'aga21@gmail.com', 'adesa', 'default.jpg', '$2y$10$koB.vlR7JaTG74RW5xi1Ne9WpXb4lLKzn/1RsJyhyn9iN7AU0j31q', '', 2, 1, 1597156675),
(52, 'Eva Siti Nurjanah', 'evasitinurjanah2019@gmail', '', 'default.jpg', '$2y$10$09adK3WjGKMKtGijUF2btO12Q7QOIbvDiLexpVCPtVFjA20.aLfUu', '', 2, 1, 1605393755),
(53, 'Angga Lesmana', 'Yutup@gmail.com', 'Yutup', 'default.jpg', '$2y$10$nvXX0vUMK/Os24GnHgq...XT4WTdv/wb1TWmVluvdtIJ1ClAhzfTC', '', 2, 1, 1605394060),
(54, 'evasiera', 'evasitinurjanah2019@gmail.com', '', 'default.jpg', '$2y$10$RhCLq9L8A5pAF5UvrmRZXOG4Ok9f2SY2njvfn8iChCGBkSZ1aAZmq', '', 2, 1, 1605394248),
(55, 'Adako', 'Aga21', 'Pertanian', 'default.jpg', '$2y$10$NRG/tIzUTTUEzUvo8bQBduLII6Ahw8kKiMSuNgyXlT6dArkqPxOhy', '', 2, 1, 1608724676),
(56, 'Angga Chelsea', 'angga11@gmail.com', 'Smk Assubandiyah', 'default.jpg', '$2y$10$bRy9zjIcwmkMvcuDra2lh.omaJ6pyeqGq6qGc2WWbB6touze4Cuqy', '', 2, 1, 1610697558);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(4, 1, 2),
(5, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `user_menuu`
--

CREATE TABLE `user_menuu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member'),
(3, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'home/dashboard', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile ', 'home/profile', 'fas fa-fw fa-user', 1),
(3, 1, 'Manu Management', 'home/editdata', 'fas fa-fw fa-folder', 1),
(4, 2, 'Peta Cluster', 'home/cluster', 'fa fa-fw fa-map-pin', 1),
(6, 2, 'Router', 'home/routing', 'fa fa-fw fa-location-arrow', 1),
(7, 2, 'Search_Map', 'home/controlmap', 'fa fa-fw fa-street-view', 1),
(8, 2, 'heat map', 'home/tempatheatmap', 'fa fa-fw fa-map', 1),
(10, 2, 'data pemetaan', 'home/tps/pemetaan_tps', 'fa fa-fw fa-map-marker', 1),
(11, 3, 'Hak akses menu', 'home/menuakses', 'fa fa-fw fa-book', 1),
(12, 3, 'sub menu management', 'home/submenumanagement', 'fas fa-fw fa-folder-open', 1),
(16, 1, 'Admin Role', 'home/role', 'fas fa-fw fa-user-tie', 1),
(20, 1, 'Pesan Perminatan', 'home/perminatan', 'fa fa-fw fa-comments', 1),
(21, 2, 'Coordinat', 'home/coordinat', 'fa fa-globe', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mytable`
--
ALTER TABLE `mytable`
  ADD PRIMARY KEY (`npsn`);

--
-- Indexes for table `permintaan`
--
ALTER TABLE `permintaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permintaan`
--
ALTER TABLE `permintaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
