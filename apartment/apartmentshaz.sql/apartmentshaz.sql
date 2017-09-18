-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2015 at 03:38 AM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apartmentshaz`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE IF NOT EXISTS `aduan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(300) NOT NULL,
  `rumah` varchar(50) NOT NULL,
  `perkara` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`id`, `nama`, `rumah`, `perkara`, `status`) VALUES
(2, '', '', 'Aduan mengenai: testing<br> Bertarikh: 20/11/2015<br> Untuk Aktiviti: testinggg', 0),
(3, '', '', 'Aduan mengenai: maintenance lampu mempunyai masalah<br> Bertarikh: 22/11/2015<br> Untuk Aktiviti: lampu terbakar, ingin memanggil pihak maintenance tetapi tiada yang tampir', 0),
(4, '', '', 'Aduan mengenai: salam<br> Bertarikh: 22/11/2015<br> Untuk Aktiviti: shaz nak present.. gud ;luckkk!', 0),
(5, '', '', 'Aduan mengenai: lampu terbakar<br> Bertarikh: 26/11/2015<br> Untuk Aktiviti: lampu terbakar.\r\n\r\nfaridah bt Borhan\r\n25-3-2\r\n01928389494', 0),
(10, '', '', 'Aduan mengenai: SAMPAH<br> Bertarikh: 26/11/2015<br> Untuk Aktiviti: SAMPAH BERSEPAH', 0),
(11, '', '', 'Aduan mengenai: SDFGHJ<br> Bertarikh: SDFGFGH<br> Untuk Aktiviti: fgkjl', 0),
(12, '', '', 'Aduan mengenai: lampu terbakar<br> Bertarikh: 30/12/2015<br> Untuk Aktiviti: sila amk tindakan segera. shazwan. 23-3-10.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `aktiviti`
--

CREATE TABLE IF NOT EXISTS `aktiviti` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `aktiviti` varchar(300) NOT NULL,
  `tarikh` varchar(50) NOT NULL,
  `tempat` varchar(300) NOT NULL,
  `catatan` varchar(300) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `aktiviti`
--

INSERT INTO `aktiviti` (`id`, `aktiviti`, `tarikh`, `tempat`, `catatan`, `gambar`, `date`) VALUES
(1, 'Mensyuarat agung tahunan ke-8', '22.03.2015/9.00malam', 'Perkarangan pusat aktiviti PPB23TWSKL', 'Mensyuarat Agung Tahunan ke-8 PPB23TWSKL', 'resit.png', '2015-11-30 02:49:09'),
(2, 'Membuat pertandingan mencipta logo persatuan.', 'Jun hingga Julai 2015', 'Tarikh tutup penyertaan adalah sebelum 4.30 petang, 4 Julai 2013.', 'Hanya mendapat 2 penyertaan ', '', '2015-11-30 02:49:21'),
(3, 'Gotong-royong mini sempena sambutan Ramadhan', '06.07.2015/ 8.00pagi', 'Setiap ruang legar dan koridor blok 23.', 'Setiap ruang legar dan koridor blok 23.', '', '2015-11-30 02:49:30'),
(4, 'Menerima geran bantuan keselamatan dan keharmonian Masyarakat.', 'Julai 2015', 'Geran bantuan melalui “online”', 'Geran diterima dari Jabatan Pendaftaran Pertubuhan Malaysia untuk pembelian peralatan keselamatan', '', '2015-11-30 02:49:38'),
(5, 'Penyertaan Persatuan diProgram COMBJ', '24.08.2015', 'Padang bolasepak Taman Wilayah Selayang', 'Anjuran Jabatan Kesihatan dan Alam Sekitar Dewan Bandaraya Kuala Lumpur', '', '2015-11-30 02:49:44'),
(6, 'Jamuan makan malam sempena Hari Raya AidilFitri dan Hari Kebangsaan', '31.08.2015/ 8.30 malam', 'Gelanggang Taman Permainan kanak-kanak Jalan 9/2A, Taman Wilayah Selayang', 'Jamuan diadakan mendapat sambutan ramai dan mendapat kepujian dari Tetamu jemputan yang terdiri dari wakil masjid Al-Zakirin, Surau Al-Ikhwan dan pengerusi serta AJK dari persatuan penduduk setempat.', '', '2015-11-30 02:49:54'),
(7, 'Membina tempat motosikal berbumbung', 'September 2015', 'Hujung blok 23', 'Bagi kemudahan pemilik motosikal penduduk blok 23 sahaja.', '', '2015-11-30 02:50:06'),
(8, 'Membina tempat motosikal berbumbung', 'September 2015', 'Hujung blok 23', 'Bagi kemudahan pemilik motosikal penduduk blok 23 sahaja.', '', '2015-11-30 02:50:21'),
(9, 'Menggantikan penutup saluran kumbahan dari papan lapis ke penutup besi.', 'September 2015', 'Sekeliling siarkaki tingkat bawah Blok 23', 'Sebanyak 34 unit penutup.', '', '2015-11-30 02:50:29'),
(11, 'Mengemukakan surat permohonan bantuan memasang tiang bendera dan penurapan jalan ', '21.09.2013', 'Kepada Pejabat Cawangan Batu, Dewan Bandaraya Kuala Lumpur', 'Permohonan bantuan memasang tiang bendera akan diuruskan oleh Pejabat Cawangan Batu manakala permohonan turapan jalan ditolak kerana tanggungjawab JMB.', '', '0000-00-00 00:00:00'),
(12, 'Kerja-kerja pemasangan kanopi untuk persiapan Jamuan Makan Malam', '21.11.2013/ 9.00malam', 'Gelanggang Taman permainan Kanak-kanak, Jalan 9/2A', 'Hanya AJK dan ahli dan anak-anak blok23 turut melibatkan diri.', 'resit.png', '2015-11-24 12:27:07');

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE IF NOT EXISTS `bulan` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `userid` int(5) NOT NULL,
  `tahun` int(4) NOT NULL,
  `january` int(4) NOT NULL,
  `february` int(4) NOT NULL,
  `march` int(4) NOT NULL,
  `april` int(4) NOT NULL,
  `may` int(4) NOT NULL,
  `june` int(4) NOT NULL,
  `july` int(4) NOT NULL,
  `august` int(4) NOT NULL,
  `september` int(4) NOT NULL,
  `october` int(4) NOT NULL,
  `november` int(4) NOT NULL,
  `december` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id`, `userid`, `tahun`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august`, `september`, `october`, `november`, `december`) VALUES
(1, 3, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0),
(2, 31, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 18, 2015, 0, 0, 0, 80, 80, 0, 80, 0, 0, 80, 80, 0),
(4, 32, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 33, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 34, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0),
(7, 35, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 36, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0),
(9, 37, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0),
(10, 38, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 39, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0),
(12, 40, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0),
(13, 41, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80),
(14, 42, 2015, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 80, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cartaorganisasi`
--

CREATE TABLE IF NOT EXISTS `cartaorganisasi` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jawatan` varchar(50) NOT NULL,
  `notelefon` varchar(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `cartaorganisasi`
--

INSERT INTO `cartaorganisasi` (`id`, `nama`, `jawatan`, `notelefon`, `gambar`) VALUES
(1, 'Noor Aslan B Abdul Rahman', 'Pengerusi', '01238723667', 'peng.PNG'),
(2, 'Rosli B Hassan', 'Timbalan Pengerusi', '0123345978', 'npeng.PNG'),
(3, 'Rodzuan B Abdul Hamid', 'Setiausaha', '0196489143', 'setia.PNG'),
(4, 'Othman B Din', 'Bendahari', '0196279058', 'benda.PNG'),
(5, 'Mohd Amil B Bon', 'Ketua Blok', '0175886256', 'kblok.PNG'),
(6, 'Farhana Bt Rodzuan', 'Timbalan Setiausaha', '0176258862', 'psetia.PNG'),
(7, 'Rozita Bt Mohd Radzi', 'Biro Wanita', '0122116058', 'biro1.PNG'),
(8, 'Rohana Bt Abd Rashid', 'Biro Wanita', '0177321551', 'biro2.PNG'),
(9, 'Noor Liza Bt Abdul Aziz', 'Biro Wanita', '0195224189', 'biro3.PNG'),
(10, 'Norizan Bt Mohd Yusof', 'Biro Wanita', '01123032387', 'biro4.PNG'),
(11, 'Mohd Azrai B Mohd Sani', 'Ahli Jawatankuasa', '01123087651', 'ajk1.PNG'),
(12, 'Peter Lee Kok Loon', 'Ahli Jawatankuasa', '0165278907', 'ajk2.PNG'),
(13, 'Sangapilai A/L Ponampalan', 'Ahli Jawatankuasa', '0167215671', 'ajk3.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `debitTambah`
--

CREATE TABLE IF NOT EXISTS `debitTambah` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `perkara` varchar(500) NOT NULL,
  `jumlah` int(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `debitTambah`
--

INSERT INTO `debitTambah` (`id`, `perkara`, `jumlah`) VALUES
(1, 'Sumber Melalui: JAKIM<br> Bertarikh: 21/3/91<br> Dengan Jumlah Sebanyak : 7000<br> Untuk Aktiviti: korban ramai2', 7000),
(3, 'Sumber Melalui: ROSMAH MASNOR<br> Bertarikh: 2009<br> Dengan Jumlah Sebanyak : 500<br> Untuk Aktiviti: KAK MAH sedekah..', 500),
(4, 'Sumber Melalui: TOK BILAL<br> Bertarikh: 23 NOV<br> Dengan Jumlah Sebanyak : 300<br> Untuk Aktiviti: KENDURI ANAK DIA', 300);

-- --------------------------------------------------------

--
-- Table structure for table `kreditTolak`
--

CREATE TABLE IF NOT EXISTS `kreditTolak` (
  `id` int(6) NOT NULL,
  `perkara` varchar(100) NOT NULL,
  `jumlah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kreditTolak`
--

INSERT INTO `kreditTolak` (`id`, `perkara`, `jumlah`) VALUES
(1, 'program ramadhan', 400),
(2, 'program sihat senam', 300);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `iduser` varchar(5) NOT NULL,
  `month` varchar(30) NOT NULL,
  `year` year(4) NOT NULL,
  `paid` int(1) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `iduser`, `month`, `year`, `paid`, `gambar`, `date`) VALUES
(19, '25', 'November', 2015, 1, 'resit1.png', '2015-11-24 23:00:23'),
(21, '25', 'November', 2015, 1, 'resit1.png', '2015-11-24 23:00:44'),
(22, '3', 'November', 2015, 1, 'resit1.png', '2015-11-24 22:58:09'),
(23, '34', 'November', 2015, 1, 'resit1.png', '2015-11-24 23:01:06'),
(24, '37', 'November', 2015, 1, 'resit1.png', '2015-11-24 23:01:28'),
(25, '37', 'November', 2015, 1, 'resit1.png', '2015-11-24 23:01:54'),
(26, '3', 'November', 2015, 1, 'resit1.png', '2015-11-24 22:57:24'),
(28, '3', 'November', 2015, 1, 'resit1.png', '2015-11-25 03:35:53'),
(29, '3', 'November', 2015, 0, 'resit1.png', '2015-11-25 04:28:04'),
(30, '39', 'November', 2015, 1, 'resit1.png', '2015-11-25 08:51:07'),
(31, '40', 'November', 2015, 1, 'resit1.png', '2015-11-26 02:22:50'),
(32, '41', 'November', 2015, 1, 'resit1.png', '2015-12-02 03:29:33'),
(33, '42', 'November', 2015, 1, 'resit1.png', '2015-11-30 03:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `total`
--

CREATE TABLE IF NOT EXISTS `total` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `tahun` int(4) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `jumlah` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `total`
--

INSERT INTO `total` (`id`, `tahun`, `bulan`, `jumlah`) VALUES
(1, 2015, 'november', '1040'),
(2, 2015, 'july', '80');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `emel` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `binlname` varchar(50) NOT NULL,
  `hp` varchar(50) NOT NULL,
  `icpp` varchar(50) NOT NULL,
  `maybankaccount` varchar(50) NOT NULL,
  `dateregistered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `block` varchar(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `houseno` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `emel`, `password`, `fname`, `binlname`, `hp`, `icpp`, `maybankaccount`, `dateregistered`, `block`, `floor`, `houseno`) VALUES
(1, 'admin123@gmail.com', 'admin123', 'admin', 'admin', '0197897899', '890909145666', '1234567876', '2015-11-16 16:13:07', '23', '3', '8'),
(3, 'bella@yahoo.com', '12345', 'Nabilah', 'Marahat', '0192834567', '890101145756', '1234567890', '2015-11-16 10:08:00', '21', '1', '1'),
(31, 'hazmi@gmail.com', '12345', 'hazmi', 'razak', '0192471047', '9320123911', '0192341123', '2015-11-15 05:26:38', '21', '1', '3'),
(32, 'eimah@hotmail.com', '12345', 'Rahimah Haiza', 'Mazlan', '0189988090', '560919026766', '7890889900', '2015-11-17 02:59:35', '22', '1', '2'),
(33, 'arif_samsu@gmail.com', '12345', 'Syamsul Arif', 'Iskandar', '0169909091', '600901145677', '4321567890', '2015-11-16 15:48:32', '22', '1', '3'),
(34, 'lew_wang@yahoo.com', '12345', 'Lew Wang', 'Kim', '0165678543', '560114145788', '9878009870', '2015-11-16 16:14:49', '22', '1', '4'),
(35, 'sam_pilai@gmail.com', '12345', 'Muthusamy ', 'Pillai', '0125431234', '710314145655', '9090124311', '2015-11-16 16:18:04', '22', '1', '5'),
(36, 'razak@gmail.com', '12345', 'Razak', 'Mashur', '0176751234', '770728145577', '8877113390', '2015-11-18 17:18:11', '6', '1', '1'),
(37, 'muhammadzulfadhli92@gmail.com', '12345', 'Zulfadhli', 'Subni', '0132860564', '920812145865', 'CIMB', '2015-11-20 15:26:01', '6', '3', '13'),
(38, 'skelehmikuil@gmail.com', '123456', 'Rashdan', 'Razak', '0192471047', '123456111234', '123456111234', '2015-11-20 15:21:44', '23', '1', '3'),
(39, 'fatin@gmail.com', '12345', 'Nurul Fatin', 'Janaudin', '0189876890', '890808145566', '987654321', '2015-11-25 08:44:08', '24', '2', '2'),
(40, 'fatidah@gmai.com', '12345', 'Faridah', 'Borhan', '0197658909', '600901145666', '9090111111', '2015-11-26 02:10:50', '25', '3', '5'),
(41, 'atiqa@gmail.com', '12345', 'Atiqa', 'Samsudin', '0189768123', '700101145666', '7896867677', '2015-11-26 05:24:22', '25', '2', '2'),
(42, 'shazwan@gmail.com', '12345', 'Shazwan', 'Othman', '0134567890', '890909146655', '78908909889', '2015-11-30 03:01:00', '23', '3', '10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
