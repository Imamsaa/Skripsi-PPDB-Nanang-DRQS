-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2023 at 03:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdbsd`
--

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id_bukti_pembayaran` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(15) NOT NULL,
  `nomor_referensi` varchar(30) NOT NULL,
  `bukti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bukti_pembayaran`
--

INSERT INTO `bukti_pembayaran` (`id_bukti_pembayaran`, `nomor_pendaftaran`, `nomor_referensi`, `bukti`) VALUES
(20, 'PPDB2022001', '20221201CENAIDJA51080129622', 'bukti_pembayaran/buktiPPDB2022001.jpeg'),
(21, 'PPDB2022002', '20221202CENAIDJA51083853520', 'bukti_pembayaran/buktiPPDB2022002.jpg'),
(22, 'PPDB2022003', '29122016', 'bukti_pembayaran/buktiPPDB2022003.png'),
(23, 'PPDB2022004', 'FT223373HGL8', 'bukti_pembayaran/buktiPPDB2022004.jpeg'),
(25, 'PPDB2022005', 'FT2233739W2C', 'bukti_pembayaran/buktiPPDB2022005.jpeg'),
(27, 'PPDB2022007', '20221205210732486017', 'bukti_pembayaran/buktiPPDB2022007.jpg'),
(39, 'PPDB2022008', 'SDIT Annafi Khusna Khumaira', 'bukti_pembayaran/buktiPPDB2022008.jpg'),
(40, 'PPDB2022009', 'Laimuna Marwa Adi', 'bukti_pembayaran/buktiPPDB2022009.jpg'),
(41, 'PPDB2022010', '', 'bukti_pembayaran/buktiPPDB2022010.jpg'),
(42, 'PPDB2022011', 'SDIT Alesha Zahra', 'bukti_pembayaran/buktiPPDB2022011.jpg'),
(43, 'PPDB2022012', 'SDIT Safira Azka', 'bukti_pembayaran/buktiPPDB2022012.pdf'),
(44, 'PPDB2022013', 'FT22343SVPXL', 'bukti_pembayaran/buktiPPDB2022013.jpg'),
(45, 'PPDB2022014', 'SDIT Akib Muhtar Hakim', 'bukti_pembayaran/buktiPPDB2022014.pdf'),
(46, 'PPDB2022015', '', 'bukti_pembayaran/buktiPPDB2022015.pdf'),
(47, 'PPDB2022016', '491393949991', 'bukti_pembayaran/buktiPPDB2022016.pdf'),
(48, 'PPDB2022017', '', 'bukti_pembayaran/buktiPPDB2022017.jpg'),
(49, 'PPDB2022018', 'SDIT Kalila dan Akmal', 'bukti_pembayaran/buktiPPDB2022018.pdf'),
(50, 'PPDB2022019', 'SDIT Alesha Putri Oktavia', 'bukti_pembayaran/buktiPPDB2022019.pdf'),
(51, 'PPDB2022020', 'SDIT 7 anak 12122022', 'bukti_pembayaran/buktiPPDB2022020.pdf'),
(52, 'PPDB2022021', 'SDIT 7 anak 12122022', 'bukti_pembayaran/buktiPPDB2022021.pdf'),
(53, 'PPDB2022022', 'SDIT 7 anak 12122022', 'bukti_pembayaran/buktiPPDB2022022.pdf'),
(54, 'PPDB2022023', 'SDIT 7 anak 12122022', 'bukti_pembayaran/buktiPPDB2022023.pdf'),
(55, 'PPDB2022024', 'SDIT 7 anak 12122022', 'bukti_pembayaran/buktiPPDB2022024.pdf'),
(56, 'PPDB2022025', '00358675 FT223470V3W4', 'bukti_pembayaran/buktiPPDB2022025.pdf'),
(57, 'PPDB2022026', '72536880', 'bukti_pembayaran/buktiPPDB2022026.jpg'),
(58, 'PPDB2022027', '20221212CENAIDJA51011554229', 'bukti_pembayaran/buktiPPDB2022027.jpeg'),
(59, 'PPDB2022028', 'SDIT 7 anak 12122022', 'bukti_pembayaran/buktiPPDB2022028.pdf'),
(60, 'PPDB2022029', 'SDIT 4 anak', 'bukti_pembayaran/buktiPPDB2022029.pdf'),
(61, 'PPDB2022030', '00358675 FT223470V3W4', 'bukti_pembayaran/buktiPPDB2022030.pdf'),
(62, 'PPDB2022031', '00358675 FT223470V3W4', 'bukti_pembayaran/buktiPPDB2022031.pdf'),
(63, 'PPDB2022032', '00852949 FT22347MV11L', 'bukti_pembayaran/buktiPPDB2022032.pdf'),
(64, 'PPDB2022033', '20221214CENAIDJA51015866773', 'bukti_pembayaran/buktiPPDB2022033.jpeg'),
(65, 'PPDB2022034', '', 'bukti_pembayaran/buktiPPDB2022034.png'),
(66, 'PPDB2022035', 'Arkan Al Fatih Zabran SDIT', 'bukti_pembayaran/buktiPPDB2022035.jpeg'),
(67, 'PPDB2022036', '00305834 FT22346WD51M', 'bukti_pembayaran/buktiPPDB2022036.pdf'),
(68, 'PPDB2022037', 'SDIT 7 anak 12122022', 'bukti_pembayaran/buktiPPDB2022037.pdf'),
(69, 'PPDB2022038', 'SDIT Aidah dan Zavira', 'bukti_pembayaran/buktiPPDB2022038.jpg'),
(70, 'PPDB2022039', '00852949 FT22347MV11L', 'bukti_pembayaran/buktiPPDB2022039.pdf'),
(71, 'PPDB2022040', '00852949 FT22347MV11L', 'bukti_pembayaran/buktiPPDB2022040.pdf'),
(72, 'PPDB2022041', '00852949 FT22347MV11L', 'bukti_pembayaran/buktiPPDB2022041.pdf'),
(73, 'PPDB2022042', '00852949 FT22347MV11L', 'bukti_pembayaran/buktiPPDB2022042.pdf'),
(74, 'PPDB2022043', 'SDIT Aidah dan Zavira', 'bukti_pembayaran/buktiPPDB2022043.jpg'),
(75, 'PPDB2022044', '00909736 FT22353BGDV', 'bukti_pembayaran/buktiPPDB2022044.pdf'),
(76, 'PPDB2022045', '00898932 FT223535H0BW', 'bukti_pembayaran/buktiPPDB2022045.pdf'),
(77, 'PPDB2022046', '00925943 FT223539X8SN', 'bukti_pembayaran/buktiPPDB2022046.pdf'),
(78, 'PPDB2022047', '00759386 FT223517BVSQ', 'bukti_pembayaran/buktiPPDB2022047.pdf'),
(79, 'PPDB2022048', '00852949 FT22347MV11L', 'bukti_pembayaran/buktiPPDB2022048.pdf'),
(80, 'PPDB2022049', '7180950731', 'bukti_pembayaran/buktiPPDB2022049.jpg'),
(81, 'PPDB2022050', '113', 'bukti_pembayaran/buktiPPDB2022050.jpg'),
(82, 'PPDB2022051', '20221220CENAIDJA51031190424', 'bukti_pembayaran/buktiPPDB2022051.jpeg'),
(83, 'PPDB2022052', 'FT22356PNX41', 'bukti_pembayaran/buktiPPDB2022052.jpeg'),
(84, 'PPDB2022053', 'FT22356PNX41', 'bukti_pembayaran/buktiPPDB2022053.jpeg'),
(85, 'PPDB2022054', 'FT22356PNX41', 'bukti_pembayaran/buktiPPDB2022054.jpeg'),
(86, 'PPDB2022055', '78797924', 'bukti_pembayaran/buktiPPDB2022055.jpg'),
(87, 'PPDB2022056', '', 'bukti_pembayaran/buktiPPDB2022056.jpg'),
(88, 'PPDB2022057', 'FT2235791KBB', 'bukti_pembayaran/buktiPPDB2022057.jpeg'),
(89, 'PPDB2022058', 'FT2235791KBB', 'bukti_pembayaran/buktiPPDB2022058.jpeg'),
(91, 'PPDB2022060', '494453641401', 'bukti_pembayaran/buktiPPDB2022060.jpg'),
(92, 'PPDB2022061', 'FIOLA SHANUM ALMAYHRA', 'bukti_pembayaran/buktiPPDB2022061.jpg'),
(93, 'PPDB2022062', '', 'bukti_pembayaran/buktiPPDB2022062.pdf'),
(94, 'PPDB2022063', 'FT22353BGDVV', 'bukti_pembayaran/buktiPPDB2022063.pdf'),
(95, 'PPDB2022064', 'FT223517BVSQ', 'bukti_pembayaran/buktiPPDB2022064.pdf'),
(96, 'PPDB2022065', 'FT223534MQCL', 'bukti_pembayaran/buktiPPDB2022065.pdf'),
(97, 'PPDB2022066', 'FT22361HX24Q', 'bukti_pembayaran/buktiPPDB2022066.jpeg'),
(98, 'PPDB2022067', '495233658936', 'bukti_pembayaran/buktiPPDB2022067.jpg'),
(99, 'PPDB2022068', 'SDIT Alifia Qurota Ayun', 'bukti_pembayaran/buktiPPDB2022068.jpeg'),
(100, 'PPDB2023069', 'SDIT_Zalfa dan Khairinniswa', 'bukti_pembayaran/buktiPPDB2023069.jpeg'),
(101, 'PPDB2023070', 'SDIT Hidayah dan Asyataz Zahra', 'bukti_pembayaran/buktiPPDB2023070.jpeg'),
(102, 'PPDB2023071', 'SDIT_Zalfa dan Khairinniswa', 'bukti_pembayaran/buktiPPDB2023071.jpeg'),
(103, 'PPDB2023072', 'SDIT Hidayah dan Asyataz Zahra', 'bukti_pembayaran/buktiPPDB2023072.jpeg'),
(104, 'PPDB2023073', 'SDIT Fathan Shaka', 'bukti_pembayaran/buktiPPDB2023073.jpeg'),
(105, 'PPDB2023074', 'SDIT BIMA ONE BIMA TWO', 'bukti_pembayaran/buktiPPDB2023074.jpeg'),
(106, 'PPDB2023075', 'SDIT BIMA ONE BIMA TWO', 'bukti_pembayaran/buktiPPDB2023075.jpeg'),
(107, 'PPDB2023076', 'SDIT M Raffi Abiyyu', 'bukti_pembayaran/buktiPPDB2023076.jpeg'),
(108, 'PPDB2023077', 'SDIT M ALI HABIBI', 'bukti_pembayaran/buktiPPDB2023077.jpeg'),
(109, 'PPDB2023078', 'SDIT GENDIS CIKAL ASTAGINA', 'bukti_pembayaran/buktiPPDB2023078.jpeg'),
(110, 'PPDB2023079', 'SDIT LUCKY ZULIANT JR', 'bukti_pembayaran/buktiPPDB2023079.jpeg'),
(111, 'PPDB2023080', 'dsfdsfds', 'bukti_pembayaran/buktiPPDB2023080.png'),
(112, 'PPDB2023081', 'dsfsdfsf', 'bukti_pembayaran/buktiPPDB2023081.png'),
(113, 'PPDB2023082', 'dfgdfg', 'bukti_pembayaran/buktiPPDB2023082.png'),
(114, 'PPDB2023083', 'fdsfsdfsd', 'bukti_pembayaran/buktiPPDB2023083.png'),
(115, 'PPDB2023084', 'fdsfsfsf', 'bukti_pembayaran/buktiPPDB2023084.png'),
(116, 'PPDB2023085', 'gdfgdfgd', 'bukti_pembayaran/buktiPPDB2023085.png'),
(117, 'PPDB2023086', 'gdfggfd', 'bukti_pembayaran/buktiPPDB2023086.png'),
(118, 'PPDB2023087', 'gdgdg', 'bukti_pembayaran/buktiPPDB2023087.png'),
(119, 'PPDB2023088', 'dasdada', 'bukti_pembayaran/buktiPPDB2023088.png'),
(120, 'PPDB2023089', 'dsadasd', 'bukti_pembayaran/buktiPPDB2023089.png'),
(121, 'PPDB2023090', 'sadasda', 'bukti_pembayaran/buktiPPDB2023090.png'),
(122, 'PPDB2023091', 'ASAS', 'bukti_pembayaran/buktiPPDB2023091.png'),
(123, 'PPDB2023092', 'dasdsas', 'bukti_pembayaran/buktiPPDB2023092.png'),
(124, 'PPDB2023093', 'fdsfsdfsd', 'bukti_pembayaran/buktiPPDB2023093.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_ayah`
--

CREATE TABLE `data_ayah` (
  `id_data_ayah` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL,
  `penghasilan` varchar(30) NOT NULL,
  `nomor_wa` varchar(15) NOT NULL,
  `hubungan_pendaftar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_ayah`
--

INSERT INTO `data_ayah` (`id_data_ayah`, `nomor_pendaftaran`, `nik`, `nama_lengkap`, `alamat`, `pendidikan`, `tempat_lahir`, `tanggal_lahir`, `status`, `pekerjaan`, `penghasilan`, `nomor_wa`, `hubungan_pendaftar`) VALUES
(48, 'PPDB2022001', '3315142609780001', 'SUCIPTO', 'Kauman Selatan RT 01 RW 08 PURWODADI', 'S1', 'GROBOGAN', '1978-09-26', 'HIDUP', 'WIRASWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '081228499760', 'AYAH KANDUNG'),
(49, 'PPDB2022002', '3315130603880001', 'IWAN TEGAR MANDIRI', 'Getasrejo, RT/RW 008/002 Desa Getasrejo Kecamatan Grobogan Kabupaten Grobogan Provinsi Jawa Tengah 58152', 'S1', 'GROBOGAN', '1988-03-06', 'HIDUP', 'PNS', 'Rp. 4 Juta sampai Rp. 5 Juta', '0895411811453', 'AYAH KANDUNG'),
(50, 'PPDB2022003', '3315162007860004', 'M YUSUF AL HAKIM', 'Sambak indah 1/7 danyang Purwodadi Grobogan', 'S1', 'GROBOGAN', '1986-07-20', 'HIDUP', 'POLRI', 'Di Atas Rp. 5 Juta', '0812282369999', 'AYAH KANDUNG'),
(51, 'PPDB2022004', '3315172102790004', 'MUHLISIN', 'RT.06 RW.19 KEL KURIPAN', 'S2', 'GROBOGAN', '1979-02-21', 'HIDUP', 'PNS', 'Di Atas Rp. 5 Juta', '081326675955', 'AYAH KANDUNG'),
(52, 'PPDB2022005', '3322181504860002', 'WISNU AFRIYANTO', 'JL. PANCAPANA 18 RT 07/05 LANGENSARI UNGARAN BARAT', 'D3', 'KAB.SEMARANG', '1986-04-15', 'HIDUP', 'KARYAWAN SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '085727752481', 'AYAH KANDUNG'),
(54, 'PPDB2022007', '3315132303870004', 'ARIYANTO', 'Kebonarum', 'SMP Sederajat', 'GROBOGAN', '1987-03-23', 'HIDUP', 'WIRASWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '082242273861', 'AYAH KANDUNG'),
(55, 'PPDB2022008', '3315032506850003', 'NUR KHOLIS', 'Dusun Kauman RT 07 RW 02 Desa Kluwan, Penawangan', 'S1', 'GROBOGAN', '1985-06-25', 'HIDUP', 'GURU', 'Rp. 1 Juta sampai Rp. 2 Juta', '085799716731', 'AYAH KANDUNG'),
(56, 'PPDB2022009', '3374120707840001', 'ADI PURWANTO', 'Desa Wedoro RT 02 RW 02 Penawangan Grobogan', 'S1', 'SEMARANG', '1984-07-07', 'HIDUP', 'ASN', 'Rp. 4 Juta sampai Rp. 5 Juta', '082220517063', 'AYAH KANDUNG'),
(57, 'PPDB2022010', '3315132003780004', 'ZAINAL SYAIFUDIN ZUHRI', 'Koripan Nambuhan', 'S1', 'GROBOGAN', '1978-03-20', 'HIDUP', 'SWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '082133848861', 'AYAH KANDUNG'),
(58, 'PPDB2022011', '3315131112860005', 'MUCHAMAD KHOIRI', 'Nglarik', 'SMP Sederajat', 'GROBOGAN', '1986-12-11', 'HIDUP', 'SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '085727417136', 'AYAH KANDUNG'),
(59, 'PPDB2022012', '3315132508710002', 'PARJONO', 'Dusun Pucang Selatan Tambirejo Toroh', 'SMP Sederajat', 'GROBOGAN', '1971-08-25', 'HIDUP', 'KARYAWAN SWASTA', 'Di Atas Rp. 5 Juta', '081329169711', 'AYAH KANDUNG'),
(60, 'PPDB2022013', '1607032710870001', 'MUHAMMAD SHOLEH', 'Dusun ngrojo 4/4 DS.sambung kec.gpodnh', 'S1', 'SUKOHARJO', '1987-10-27', 'HIDUP', 'SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '085788738810', 'AYAH KANDUNG'),
(61, 'PPDB2022014', '3315130206780003', 'NGATMIN', 'Gading RT 2 RW 17 Kuripan Purwodadi', 'SMP Sederajat', 'GROBOGAN', '1978-06-02', 'HIDUP', 'SWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '081326479569', 'AYAH KANDUNG'),
(62, 'PPDB2022015', '3315131602850002', 'MOCH ANIES ADE NUGROHO', 'AYODYA 1 JL. ANILA BLOK K NO.11 KURIPAN PURWODADI', 'D3', 'GROBOGAN', '1985-02-16', 'HIDUP', 'SWASTA', 'Di Atas Rp. 5 Juta', '085343868393', 'AYAH KANDUNG'),
(63, 'PPDB2022016', '3312192509780005', 'SUNANDAR', 'JL BOGASARI 1 RT 005 RW 004 DANYANG PURWODADI', 'S1', 'PATI', '1978-09-25', 'HIDUP', 'PERAWAT/ NERS', 'Rp. 2 Juta sampai Rp. 4 Juta', '088806732795', 'AYAH KANDUNG'),
(64, 'PPDB2022017', '3315042603910003', 'MUHAMAD ARIES HIRGIANTO', 'Dsn. Depok Selatan 7/2 Depok Toroh', 'SMA Sederajat', 'GROBOGAN', '1991-03-26', 'HIDUP', 'SWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '089632378371', 'AYAH KANDUNG'),
(65, 'PPDB2022018', '3315050706820003', 'HARIYANTO', 'Timongo RT 05 RW 02 Monggot Geyer', 'SMA Sederajat', 'GROBOGAN', '1982-06-07', 'HIDUP', 'SWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '082133534467', 'AYAH KANDUNG'),
(66, 'PPDB2022019', '3315132605740003', 'ENDRA', 'Danyang Utara RT 2 RW 2', 'S1', 'GROBOGAN', '1974-05-26', 'HIDUP', 'WIRASWASTA', 'Di Atas Rp. 5 Juta', '081393700568', 'AYAH KANDUNG'),
(67, 'PPDB2022020', '332003250880002', 'NOOR AKHSAN', 'Desa Candisari RT 01 RW 04 Purwodadi Grobogan', 'S2', 'JEPARA', '1980-08-25', 'HIDUP', 'GURU', 'Rp. 2 Juta sampai Rp. 4 Juta', '081330210893', 'AYAH KANDUNG'),
(68, 'PPDB2022021', '3320080709820003', 'HANDY SETIANTO', 'Perumahan Griya Semesta No 29 Nglarik Danyang', 'S1', 'JEPARA', '1982-09-07', 'HIDUP', 'PNS', 'PILIH PENGHASILAN', '081390974387', 'AYAH KANDUNG'),
(69, 'PPDB2022022', '3315131910870002', 'ANGGA SETYA PUTRANTO', 'Jalan Usaha No.10 RT 03 RW 07 Purwodadi', 'S1', 'GROBOGAN', '1987-10-19', 'HIDUP', 'WIRASWASTA', 'Di Atas Rp. 5 Juta', '085292166734', 'AYAH KANDUNG'),
(70, 'PPDB2022023', '6203010706820008', 'FRENGKI WIBOWO', 'Jalan Ampera No.4 Purwodadi Grobogan', 'S2', 'JAKARTA', '1982-06-07', 'HIDUP', 'PNS KEJAKSAAN RI', 'Di Atas Rp. 5 Juta', '081227642592', 'AYAH KANDUNG'),
(71, 'PPDB2022024', '3315130611870001', 'MUHAMMAD NUR ALLIM HUSSEI', 'Desa Krangganharjo RT 04 RW 05 Toroh', 'S1', 'GROBOGAN', '1987-11-06', 'HIDUP', 'SWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '082134020673', 'AYAH KANDUNG'),
(72, 'PPDB2022025', '3315130112850005', 'AFIT AGUNG MUJIATI', 'Jl. Hayam Wuruk No.2 Purwodadi', 'D3', 'GROBOGAN', '1985-12-01', 'HIDUP', 'WIRASWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '082220077201', 'AYAH KANDUNG'),
(73, 'PPDB2022026', '3321012010900004', 'YOVIE GUSTAV MUSYTACHOIR', 'DS.Boloh,RT 004,RW 006', 'SMA Sederajat', 'DEMAK', '1990-10-20', 'HIDUP', 'KARYAWAN BUMN', 'Di Atas Rp. 5 Juta', '085641394408', 'AYAH KANDUNG'),
(74, 'PPDB2022027', '3315130508790008', 'AFI WILDANI', 'JL DI PANJAITAN NO. 33 RT 04 RW 14 PURWODADI KAB. GROBOGAN', 'S2', 'SEMARANG', '1979-08-05', 'HIDUP', 'PNS', 'Di Atas Rp. 5 Juta', '08157711098', 'AYAH KANDUNG'),
(75, 'PPDB2022028', '3306062802880003', 'CIPTA YUSUF BACHTIAR', 'Jrobang RT 4 RW 8 Ngesrep Banyumanik Kota Semarang', 'D3', 'PURWOREJO', '1988-02-28', 'HIDUP', 'PELAYARAN', 'PILIH PENGHASILAN', '082134510064', 'AYAH KANDUNG'),
(76, 'PPDB2022029', '3315122502690003', 'SUDARMAJI', 'Dusun Sumberagung RT 3 RW 1 Godong', 'S1', 'GROBOGAN', '1969-02-25', 'HIDUP', 'PNS', 'Rp. 4 Juta sampai Rp. 5 Juta', '085726833669', 'AYAH KANDUNG'),
(77, 'PPDB2022030', '3315040812860003', 'SUKO LISNANTO', 'Dusun Planjetan RT 02 RW 14 Desa Depok Toroh Kabupaten Grobogan', 'S1', 'GROBOGAN', '1986-12-08', 'HIDUP', 'GURU', 'Rp. 2 Juta sampai Rp. 4 Juta', '085290610403', 'AYAH KANDUNG'),
(78, 'PPDB2022031', '3315121509750007', 'GONDO PRAJITNO', 'Ayodya 1 Jln. Sugriwo Blok P No.19 Purwodadi', 'S1', 'SEMARANG', '1975-09-15', 'HIDUP', 'SWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '08972700616', 'AYAH KANDUNG'),
(79, 'PPDB2022032', '3315041504860003', 'ERI CHRISTIANTARA', 'Desa Jangkungharjo RT 4 RW 3 Brati', 'SMA Sederajat', 'GROBOGAN', '1986-04-15', 'HIDUP', 'WIRASWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '083842570166', 'AYAH KANDUNG'),
(80, 'PPDB2022033', '3374131503900004', 'HARMEDIA BUDI WARDANA', 'JL USAHA NO 11 PURWODADI', 'S1', 'SEMARANG', '1990-03-15', 'HIDUP', 'KARYAWAN BUMN', 'Rp. 2 Juta sampai Rp. 4 Juta', '082221221990', 'AYAH KANDUNG'),
(81, 'PPDB2022034', '3315045605960001', 'BUDI THAMRIN', 'Jl Argopuro Semarang', 'S1', 'SEMARANG', '1988-04-10', 'HIDUP', 'WIRASWASTA', 'Di Atas Rp. 5 Juta', '085974429719', 'AYAH KANDUNG'),
(82, 'PPDB2022035', '3316091701890004', 'YANUAR REZANO', 'Jl. Harjuna IV no. 10 Simpang Lima Utara Purwodadi Grobogan', 'S1', 'BLORA', '1989-01-17', 'HIDUP', 'DOKTER', 'Di Atas Rp. 5 Juta', '081226000803', 'AYAH KANDUNG'),
(83, 'PPDB2022036', '3522022112870001', 'YOSAFAT DIAN PERMANAPUTRA', 'Perumahan Griya Sambak Jl. Aisyiyah Gg II', 'S1', 'BOJONEGORO', '1987-12-21', 'HIDUP', 'WIRAUSAHA', 'Di Atas Rp. 5 Juta', '085799796187', 'AYAH KANDUNG'),
(84, 'PPDB2022037', '3315040312850002', 'TEGUH KURNIAWAN', 'Dusun Sukoharjo RT 9 RW 5 Krangganharjo Toroh', 'SMA Sederajat', 'GROBOGAN', '1985-12-13', 'HIDUP', 'WIRASWASTA', 'Di Atas Rp. 5 Juta', '085600874804', 'AYAH KANDUNG'),
(85, 'PPDB2022038', '3315122309810004', 'TUMINO', 'Jl. Ksatrian RT 2 RW 4 Grobogan', 'S1', 'KEBUMEN', '1981-09-23', 'HIDUP', 'ASN', 'Rp. 2 Juta sampai Rp. 4 Juta', '085325333374', 'AYAH KANDUNG'),
(86, 'PPDB2022039', '1671070806800016', 'MULYADI', 'Jln. Ngembak Kuripan Desa Majenang RT 7 RW 19', 'S1', 'GROBOGAN', '1980-06-08', 'HIDUP', 'WIRASWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '081273282360', 'AYAH KANDUNG'),
(87, 'PPDB2022040', '3315132710750005', 'R. INDRARATNA NURCAHYADI', 'Jl. Glugu No 52 RT 7 RW 14 Purwodadi', 'S1', 'GROBOGAN', '1975-10-27', 'HIDUP', 'PEGAWAI DISPERINDAG', 'Rp. 1 Juta sampai Rp. 2 Juta', '089638278188', 'AYAH KANDUNG'),
(88, 'PPDB2022041', '3315040507830003', 'JARWANTO', 'Dusun Sukoharjo RT 5 RW 5 Krangganharjo Toroh', 'SMA Sederajat', 'GROBOGAN', '1983-07-05', 'HIDUP', 'WIRASWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '081393390919', 'AYAH KANDUNG'),
(89, 'PPDB2022042', '3315160602840003', 'EKO SUDARYONO', 'Dusun Kandangan RT 2 RW 3 Purwodadi', 'S1', 'GROBOGAN', '1984-02-06', 'HIDUP', 'SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '082135334480', 'AYAH KANDUNG'),
(90, 'PPDB2022043', '3315040802880001', 'FEBRIAN HERI PAMUNGKAS', 'Perumahan Sambak Jln. Aisyah 1 No 8 RT 01 RW 09 Purwodadi', 'SMA Sederajat', 'GROBOGAN', '1988-02-08', 'HIDUP', 'KARYAWAN BUMN (PT KAI)', 'Rp. 4 Juta sampai Rp. 5 Juta', '085640346034', 'AYAH KANDUNG'),
(91, 'PPDB2022044', '3374110507850001', 'SENTOT BAGUS YULIANTO', 'LINGKUNGAN KELING RT 3 RW 2 KALONGAN PURWODADI', 'S1', 'KLATEN', '1985-07-05', 'HIDUP', 'ASN', 'Rp. 2 Juta sampai Rp. 4 Juta', '081325100120', 'AYAH KANDUNG'),
(92, 'PPDB2022045', '3323083107900004', 'YUDI MUSTAQIM', 'Dusun Sukoharjo RT 7 RW 4 Krangganharjo Toroh', 'SMA Sederajat', 'TEMANGGUNG', '1990-07-31', 'HIDUP', 'ASN', 'Rp. 2 Juta sampai Rp. 4 Juta', '082242862825', 'AYAH KANDUNG'),
(93, 'PPDB2022046', '3404032812830001', 'WAFIK DANAR PRANANTO', 'JL. R. SUPRAPTO GG KEPODANG 28 PURWODADI', 'S1', 'SLEMAN', '1983-12-28', 'HIDUP', 'KARYAWAN SWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '08122562275', 'AYAH KANDUNG'),
(94, 'PPDB2022047', '3315122207840001', 'JOKO LAKSONO', 'JL. R. SUPRAPTO GG DWOROWATI RT 5 RW 21 PURWODADI', 'SMA Sederajat', 'GROBOGAN', '1984-07-22', 'HIDUP', 'POLISI', 'Rp. 4 Juta sampai Rp. 5 Juta', '081358050647', 'AYAH KANDUNG'),
(95, 'PPDB2022048', '3315072306850002', 'FANDYASIH BOWO LEKSONO', 'DUSUN LAJER RT 5 RW 1 PENAWANGAN', 'S2', 'GROBOGAN', '1985-06-23', 'HIDUP', 'PNS SETDA', 'Di Atas Rp. 5 Juta', '081325727299', 'AYAH KANDUNG'),
(96, 'PPDB2022049', '6471042103810004', 'ANUGRO SURINYOTO', 'Jl. Kebondalem Utara No.47 RT/RW 09/14 Purwodadi', 'S1', 'BALIKPAPAN', '1981-03-21', 'HIDUP', 'WIRASWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '085225600147', 'AYAH KANDUNG'),
(97, 'PPDB2022050', '3315130908780003', 'RUDY ADHIE WIBOWO', 'Perumahan Ayodya 2 Blok F nomer 11 Purwodadi', 'D3', 'GROBOGAN', '1978-08-09', 'HIDUP', 'WIRASWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '082326084848', 'AYAH KANDUNG'),
(98, 'PPDB2022051', '3315131110870001', 'DINTA GRIAWAN', 'Gang Dworowati 3 Purwodadi', 'S1', 'GROBOGAN', '1987-10-11', 'HIDUP', 'POLRI', 'Rp. 4 Juta sampai Rp. 5 Juta', '085226612042', 'AYAH KANDUNG'),
(99, 'PPDB2022052', '3315041007760001', 'SUYITNO', 'Sukoharjo RT 01 RW 05 Krangganharjo', 'SMA Sederajat', 'GROBOGAN', '1976-07-10', 'HIDUP', 'WIRASWASTA', 'Di Atas Rp. 5 Juta', '081329339354', 'AYAH KANDUNG'),
(100, 'PPDB2022053', '3216160809830001', 'SAMSUDIN', 'Jalan Merapi No 30 Purwodadi', 'S1', 'BEKASI', '1983-09-08', 'HIDUP', 'KARYAWAN BUMD', 'Di Atas Rp. 5 Juta', '082136512867', 'AYAH KANDUNG'),
(101, 'PPDB2022054', '3315131201780001', 'BUDI SANTOSO', 'Genuksuran RT 01 RW 01 Kecamatan Purwodadi', 'S1', 'GROBOGAN', '1978-01-12', 'HIDUP', 'PNS', 'Rp. 2 Juta sampai Rp. 4 Juta', '081578858119', 'AYAH KANDUNG'),
(102, 'PPDB2022055', '331513600', 'DIMAS ROMAN WIDYAPRAKASA', 'Jl kepodang 3 no 16, sambak', 'S1', 'SEMARANG', '1987-12-09', 'HIDUP', 'PERUMDAM GROBOGAN', 'Di Atas Rp. 5 Juta', '082333250050', 'AYAH KANDUNG'),
(103, 'PPDB2022056', '3318130401870001', 'TAUFIQURROHMAN', 'SENDANGSARI,04/07,TAMBIREJO,TOROH,GROBOGAN', 'S1', 'PATI', '1987-01-04', 'HIDUP', 'WIRASWASTA', 'PILIH PENGHASILAN', '082133720066', 'AYAH KANDUNG'),
(104, 'PPDB2022057', '3315011312770001', 'MUJIANTO', 'Jl. Untung Suropati RT 05 RW 19 Simpang Lima Utara Purwodadi', 'SMA Sederajat', 'GROBOGAN', '1977-12-13', 'HIDUP', 'SWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '087747875600', 'AYAH KANDUNG'),
(105, 'PPDB2022058', '3313040104910002', 'RINO DYASTONO', 'Klaster Ramayana No 100 Putat', 'S1', 'KARANGANYAR', '1991-04-01', 'HIDUP', 'PEGAWAI SWASTA', 'Di Atas Rp. 5 Juta', '0813227272582', 'AYAH KANDUNG'),
(107, 'PPDB2022060', '3315131307880002', 'MIFTAKHUL KHOIRI', 'DUSUN WINONG RT 003 RW 003 DESA PULOREJO, PURWODADI, KAB. GROBOGAN', 'SMA Sederajat', 'GROBOGAN', '1988-07-13', 'HIDUP', 'WIRASWASTA (WEB DEVELOPER', 'Rp. 2 Juta sampai Rp. 4 Juta', '08990658382', 'AYAH KANDUNG'),
(108, 'PPDB2022061', '3315110602810005', 'ADY SETYA NUGROHO', 'Gang Bima karanganyar Rt 04 Rw 01 Godong', 'S1', 'GROBOGAN', '1981-02-06', 'HIDUP', 'WIRAUSAHA', 'Di Atas Rp. 5 Juta', '081392207207', 'AYAH KANDUNG'),
(109, 'PPDB2022062', '3315131705780006', 'BAMBANG WIDIASTOMO, ST', 'Jl. Gajahmada No. 14 Purwodadi', 'S1', 'GROBOGAN', '1978-05-17', 'HIDUP', 'SWASTA', 'Di Atas Rp. 5 Juta', '081325383113', 'AYAH KANDUNG'),
(110, 'PPDB2022063', '3315131007780003', 'NURWANTO', 'Dusun Tegal RT 01 RW 06 Cingkrong', 'S1', 'GROBOGAN', '1978-07-10', 'HIDUP', 'WIRASWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '081325131154', 'AYAH KANDUNG'),
(111, 'PPDB2022064', '3315041902900001', 'RISTANTO', 'Samben RT 05 RW 05 Pilangpayung Toroh', 'S1', 'GROBOGAN', '1990-02-19', 'HIDUP', 'SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '089522388500', 'AYAH KANDUNG'),
(112, 'PPDB2022065', '3315132111880002', 'ANDI MURYONO', 'Jl. Kepodang No. 26 RT 01 RW 07 Sambak, Danyang', 'SMA Sederajat', 'GROBOGAN', '1988-11-21', 'HIDUP', 'WIRASWASTA', 'Di Atas Rp. 5 Juta', '085290659000', 'AYAH KANDUNG'),
(113, 'PPDB2022066', '3315043007770002', 'KARSONO', 'Sendangsari RT 04 RW 07 Tambirejo Toroh', 'SMA Sederajat', 'GROBOGAN', '1977-07-30', 'HIDUP', 'PETANI /PEDAGANG', 'Rp. 2 Juta sampai Rp. 4 Juta', '082134211054', 'AYAH KANDUNG'),
(114, 'PPDB2022067', '3374062007860004', 'WUWUH TRI SAPUTRO PUGUH P', 'DSN TUMENGGUNGAN 09/03 GENUKSURAN', 'S1', 'GROBOGAN', '1986-07-20', 'HIDUP', 'PEGAWAI BUMN', 'Di Atas Rp. 5 Juta', '082220223031', 'AYAH KANDUNG'),
(115, 'PPDB2022068', '3315132303900001', 'DEDEK GIYAN ADI NUGROHO', 'Jl. Untung Suropati Lingkungan Plendungan, Gg. Brumbung III', 'SMA Sederajat', 'GROBOGAN', '1990-03-21', 'HIDUP', 'KEPOLISIAN RI (POLRI)', 'Rp. 2 Juta sampai Rp. 4 Juta', '081226857674', 'AYAH KANDUNG'),
(116, 'PPDB2023069', '9101010303840002', 'SUTIKNO', 'Depok Utara RT 7 RW 1 Toroh', 'SMA Sederajat', 'GROBOGAN', '1984-03-03', 'HIDUP', 'TNI', 'Rp. 4 Juta sampai Rp. 5 Juta', '081325756202', 'AYAH KANDUNG'),
(117, 'PPDB2023070', '33......', 'SOKHIB RISDIYANTO', 'Plendungan RT 04 RW 03 Kuripan', 'SMP Sederajat', '....', '1972-11-03', 'HIDUP', 'WIRASWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '089512057631', 'AYAH KANDUNG'),
(118, 'PPDB2023071', '3314032710890001', 'KARNAWAN SEJATI', 'Krangganharjo RT 07/05, Ds. Krangganharjo, Kec Toroh', 'S1', 'SRAGEN', '1989-10-27', 'HIDUP', 'PNS', 'Di Atas Rp. 5 Juta', '082134504943', 'AYAH KANDUNG'),
(119, 'PPDB2023072', '3315042212880005', 'EDI TRIYONO', 'Dsn Kepuh, Ds Tambirejo RT 02/09 Toroh', 'SMA Sederajat', 'GROBOGAN', '1988-12-22', 'HIDUP', 'WIRASWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '082134626839', 'AYAH KANDUNG'),
(120, 'PPDB2023073', '3315132309790007', 'MUCHAMMAD MUSTAIN', 'Dusun Kebondalem RT 01 RW 14 Purwodadi', 'S2', 'GROBOGAN', '1979-09-23', 'HIDUP', 'PNS', 'Di Atas Rp. 5 Juta', '08157757685', 'AYAH KANDUNG'),
(121, 'PPDB2023074', '3315100406770002', 'DENIE INDRIAS', 'Sambirejo RT 05/05 Wirosari Grobogan', 'SMA Sederajat', 'GROBOGAN', '1977-06-04', 'HIDUP', 'SWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '085712227549', 'AYAH KANDUNG'),
(122, 'PPDB2023075', '3315100406770002', 'DENIE INDRIAS', 'Sambirejo RT 05/05 Wirosari Grobogan', 'SMA Sederajat', 'GROBOGAN', '1977-06-04', 'HIDUP', 'SWASTA', 'Rp. 4 Juta sampai Rp. 5 Juta', '085712227549', 'AYAH KANDUNG'),
(123, 'PPDB2023076', '3305121407890002', 'IMAM MUKHLISIN', 'Sekaran RT 04 RW 10 Kalongan Purwodadi', 'D3', 'KEBUMEN', '1989-07-14', 'HIDUP', 'KARYAWAN', 'Rp. 4 Juta sampai Rp. 5 Juta', '081910197600', 'AYAH KANDUNG'),
(124, 'PPDB2023077', '6201022612850005', 'IWANTO', 'Jl. Gajah Mada No. 20 B Kuripan Purwodadi', 'SMA Sederajat', 'SUKOHARJO', '1985-12-26', 'HIDUP', 'WIRASWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '085345785455', 'AYAH KANDUNG'),
(125, 'PPDB2023078', '6472022112890006', 'ARISA GESANG MULYANA', 'JL. MADUKORO NO. 1 RT 08/21 PURWODADI', 'SMA Sederajat', 'GROBOGAN', '1989-12-21', 'HIDUP', 'TNI', 'Di Atas Rp. 5 Juta', '081327944200', 'AYAH KANDUNG'),
(126, 'PPDB2023079', '3315142105840006', 'YAKUM ZULIANTO', 'DSN PEDAK DS MENDURAN RT 6/4 BRATI GROBOGAN', 'SMA Sederajat', 'GROBOGAN', '1984-05-21', 'HIDUP', 'POLRI', 'Rp. 4 Juta sampai Rp. 5 Juta', '081288426302', 'AYAH KANDUNG'),
(127, 'PPDB2023080', '24424234', 'DFSF', 'sdfsdf', 'D3', 'DSFSDDSDF', '2023-08-17', 'MENINGGAL', 'DSFSDF', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'AYAH ANGKAT'),
(128, 'PPDB2023081', 'dsf', 'SDFSD', 'dsfds', 'S1', 'FSDFDS', '2023-08-23', 'HIDUP', 'FSDFSF', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'AYAH ANGKAT'),
(129, 'PPDB2023082', 'dsfsdf', 'SDFSDF', 'fdsfsdf', 'S1', 'FDSFSDS', '2023-08-23', 'HIDUP', 'FSDFSF', 'Kurang Dari Rp. 1 Juta', '6281548811047', 'AYAH KANDUNG'),
(130, 'PPDB2023083', 'dgdgd', 'GDFG', 'dfgd', 'S1', 'GDFGD', '2023-08-09', 'MENINGGAL', 'GDGD', 'Rp. 2 Juta sampai Rp. 4 Juta', 'gfdgd', 'AYAH KANDUNG'),
(131, 'PPDB2023084', 'sdfsdf', 'FDSFS', 'fsdfsf', 'S1', 'FSFSD', '2023-08-10', 'HIDUP', 'FSDFDSF', 'Rp. 2 Juta sampai Rp. 4 Juta', '6281548811047', 'AYAH KANDUNG'),
(132, 'PPDB2023085', 'gdgfg', 'DFGDG', 'gdfgd', 'D3', 'GDGDG', '2023-08-09', 'MENINGGAL', 'GDFGD', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'AYAH ANGKAT'),
(133, 'PPDB2023086', 'gfdg', 'DGD', 'fgdgdfg', 'SMP Sederajat', 'FGDFG', '2023-08-09', 'MENINGGAL', 'GDFGD', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'AYAH KANDUNG'),
(134, 'PPDB2023087', 'dgdgdfg', 'GFDGD', 'gdfgd', 'SMP Sederajat', 'GDFGDFG', '2023-08-16', 'MENINGGAL', 'DFGDG', 'Rp. 1 Juta sampai Rp. 2 Juta', 'gdfgd', 'AYAH ANGKAT'),
(135, 'PPDB2023088', 'dasdads', 'DASDA', 'dasda', 'SMP Sederajat', 'DADA', '2023-08-22', 'MENINGGAL', 'DASD', 'Rp. 4 Juta sampai Rp. 5 Juta', 'sadad', 'AYAH KANDUNG'),
(136, 'PPDB2023089', 'dasdas', 'DASDA', 'dsadasd', 'SMP Sederajat', 'DASDAD', '2023-08-30', 'HIDUP', 'DASDA', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'AYAH KANDUNG'),
(137, 'PPDB2023090', 'dada', 'DSADASD', 'dasdasd', 'D3', 'DASDA', '2023-08-16', 'HIDUP', 'DASDA', 'Rp. 2 Juta sampai Rp. 4 Juta', 'dasdas', 'AYAH KANDUNG'),
(138, 'PPDB2023091', 'dadasd', 'DADA', 'dasda', 'SMP Sederajat', 'DSADA', '2023-08-23', 'HIDUP', 'DSADA', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'AYAH KANDUNG'),
(139, 'PPDB2023092', 'dsadas', 'ADASD', 'dasdasd', 'SMP Sederajat', 'DASDASD', '2023-08-16', 'MENINGGAL', 'DASDADA', 'Kurang Dari Rp. 1 Juta', 'dasda', 'AYAH KANDUNG'),
(140, 'PPDB2023093', 'sdfsdf', 'FDSFS', 'dsfsdf', 'D3', 'FSDFSDF', '2023-08-22', 'HIDUP', 'FDSFSDF', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'AYAH KANDUNG');

-- --------------------------------------------------------

--
-- Table structure for table `data_ibu`
--

CREATE TABLE `data_ibu` (
  `id_data_ibu` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(15) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `pendidikan` varchar(15) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `pekerjaan` varchar(25) NOT NULL DEFAULT '''IBU RUMAH TANGGA''',
  `penghasilan` varchar(30) NOT NULL,
  `nomor_wa` varchar(15) NOT NULL,
  `hubungan_pendaftar` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_ibu`
--

INSERT INTO `data_ibu` (`id_data_ibu`, `nomor_pendaftaran`, `nik`, `nama_lengkap`, `alamat`, `pendidikan`, `tempat_lahir`, `tanggal_lahir`, `status`, `pekerjaan`, `penghasilan`, `nomor_wa`, `hubungan_pendaftar`) VALUES
(86, 'PPDB2022001', '3315136010890004', 'MIFTAQUL JANAH', 'Kauman Selatan RT 01 RW 08 PURWODADI', 'S1', 'GROBO', '1989-10-20', 'HIDUP', 'GURU', 'Rp. 1 Juta sampai Rp. 2 Juta', '085870931270', 'IBU KANDUNG'),
(87, 'PPDB2022002', '3315126708890001', 'FITRIA WAHYU PINASTI', 'Getasrejo, RT/RW 008/002 Desa Getasrejo Kecamatan Grobogan Kabupaten Grobogan Provinsi Jawa Tengah 58152', 'S1', 'GROBOGAN', '1989-08-27', 'HIDUP', 'IBU RUMAH TANGGA', 'Rp. 1 Juta sampai Rp. 2 Juta', '087728986972', 'IBU KANDUNG'),
(88, 'PPDB2022003', '3315175311880003', 'WAHYU DWI UTAMI', 'Sambak indah rt.1/7 danyang purwodadi', 'S1', 'GROBOGAN', '1988-11-13', 'HIDUP', 'BUMD', 'Di Atas Rp. 5 Juta', '085291180999', 'IBU KANDUNG'),
(89, 'PPDB2022004', '3315134508790004', 'ZAKIYYAH MASRUROH', 'RT.06 RW.19 KEL KURIPAN', 'S2', 'GROBOGAN', '1979-08-05', 'HIDUP', 'PNS', 'Rp. 4 Juta sampai Rp. 5 Juta', '081228211124', 'IBU KANDUNG'),
(90, 'PPDB2022005', '3322135802870003', 'HERNISA DEWI LAILANITA', 'JL. PANCAPANA 18 RT 07/05 LANGENSARI UNGARAN BARAT', 'S1', 'GROBOGAN', '1987-02-18', 'HIDUP', 'PPNPN KABUPATEN GROBOGAN', 'Rp. 1 Juta sampai Rp. 2 Juta', '085640163334', 'IBU KANDUNG'),
(92, 'PPDB2022007', '3315134204900003', 'APRILIA AYU KUSUMA WARDAN', 'Kebonarum', 'S1', 'GROBOGAN', '1990-04-02', 'HIDUP', 'GURU', 'Kurang Dari Rp. 1 Juta', '082242273870', 'IBU KANDUNG'),
(93, 'PPDB2022008', '3315034605910003', 'SITI ISTIANAH', 'Dusun Kauman RT 07 RW 02 Desa Kluwan, Penawangan', 'SMP Sederajat', 'GROBOGAN', '1991-05-06', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '085799716731', 'IBU KANDUNG'),
(94, 'PPDB2022009', '3315036806890002', 'PRADANTI AYU FRAHMASARI', 'Desa Wedoro RT 02 RW 02 Penawangan Grobogan', 'S1', 'GROBOGAN', '1989-06-28', 'HIDUP', 'SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '082220517063', 'IBU KANDUNG'),
(95, 'PPDB2022010', '3315135705850007', 'WIJI LESTARI', 'Koripan Nambuhan', 'SMA Sederajat', 'GROBOGAN', '1985-05-17', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '081311667512', 'IBU KANDUNG'),
(96, 'PPDB2022011', '3315136402900002', 'FITRI DWI ARYANI', 'Nglarik Kalongan', 'S1', 'GROBOGAN', '1990-02-24', 'HIDUP', 'GURU', 'Rp. 1 Juta sampai Rp. 2 Juta', '085727417136', 'IBU KANDUNG'),
(97, 'PPDB2022012', '3315044303890004', 'NUR HIDAYAH', 'Dusun Pucang Selatan Tambirejo Toroh', 'SD Sederajat', 'GROBOGAN', '1989-03-03', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '085227661826', 'IBU KANDUNG'),
(98, 'PPDB2022013', '3315166508860006', 'FARINDOTUN ULFA ', 'Dusun ngrojo 4/4 DS sambung kec', 'S1', 'GROBOGAN', '1986-08-25', 'HIDUP', 'GURU SWASTA', 'Kurang Dari Rp. 1 Juta', '085728568949', 'IBU KANDUNG'),
(99, 'PPDB2022014', '3315135705860003', 'FITRI ANGGRAENI', 'Gading RT 2 RW 17 Kuripan Purwodadi', 'S1', 'GROBOGAN', '1986-05-17', 'HIDUP', 'GURU', 'Rp. 2 Juta sampai Rp. 4 Juta', '081326479569', 'IBU KANDUNG'),
(100, 'PPDB2022015', '3315175610860007', 'ASRIFATIN EKA NURLAILY', 'AYODYA 1 JL. ANILA BLOK K NO 11 KURIPAN PURWIDADI', 'S1', 'PATI', '1986-10-16', 'HIDUP', 'PNS', 'Rp. 4 Juta sampai Rp. 5 Juta', '085640393434', 'IBU KANDUNG'),
(101, 'PPDB2022016', '3312196103830003', 'ARIESTYA RENY SURYANTI', 'JL. BOGASARI 1 RT 005 / RW 004 DANYANG', 'D3', 'WONOGIRI', '1983-03-21', 'HIDUP', 'SWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '081393753148', 'IBU KANDUNG'),
(102, 'PPDB2022017', '3315046001910003', 'ERI SETIANINGSIH', 'Dsn. Depok Selatan 7/2 Depok Toroh', 'D3', 'GROBOGAN', '1991-01-20', 'HIDUP', 'SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '088221289299', 'IBU KANDUNG'),
(103, 'PPDB2022018', '3315056906870001', 'NUNUK DWI LESTARI', 'Timongo RT 05 RW 02 Monggot Geyer', 'SMA Sederajat', 'SRAGEN', '1987-06-29', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '082133534467', 'IBU KANDUNG'),
(104, 'PPDB2022019', '33151360003770001', 'DIAH WORO UNTARI', 'Danyang Utara RT 2 RW 2', 'S1', 'GROBOGAN', '1977-03-20', 'HIDUP', 'WIRASWASTA', 'PILIH PENGHASILAN', '081393700568', 'IBU KANDUNG'),
(105, 'PPDB2022020', '3315136712810003', 'HERLINA UTAMIINGSIH', 'Desa Candisari RT 01 RW 04 Purwodadi Grobogan', 'S1', 'GROBOGAN', '1981-12-27', 'HIDUP', 'GURU', 'Rp. 2 Juta sampai Rp. 4 Juta', '081330210893', 'IBU KANDUNG'),
(106, 'PPDB2022021', '3315044711870005', 'RIBUT TRI SURYANINGATI', 'Perumahan Griya Semesta No 29 Nglarik Danyang', 'S1', 'GROBOGAN', '1987-11-07', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '081390974387', 'IBU KANDUNG'),
(107, 'PPDB2022022', '6471034411880002', 'GHINA RUFAIDAH ANNISA', 'Jalan Usaha No.10 RT 03 RW 07 Purwodadi', 'S1', 'BALIKPAPAN', '1988-11-04', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '085292166734', 'IBU KANDUNG'),
(108, 'PPDB2022023', '6203014503870008', 'DETTY RISMAYA', 'Jalan Ampera No.4 Purwodadi Grobogan', 'S1', 'BANJARNEGARA', '1987-03-05', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '081227642592', 'IBU KANDUNG'),
(109, 'PPDB2022024', '3315046203880002', 'DIAN ULVA MAYASARI', 'Desa Krangganharjo RT 04 RW 05 Toroh', 'S1', 'GROBOGAN', '1988-03-20', 'HIDUP', 'PNS', 'Rp. 2 Juta sampai Rp. 4 Juta', '082134020673', 'IBU KANDUNG'),
(110, 'PPDB2022025', '3315136806890004', 'DESIANA AZIZ RAHMANTO', 'Jl. Hayam Wuruk No.2 Purwodadi', 'S1', 'GROBOGAN', '1989-06-28', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '082220077201', 'IBU KANDUNG'),
(111, 'PPDB2022026', '3315046105900002', 'MEITA VERA WULANDARI ', 'DS.Boloh,RT 004,RW 006', 'D3', 'GROBOGAN', '1990-05-21', 'HIDUP', 'BIDAN', 'Rp. 1 Juta sampai Rp. 2 Juta', '085826234850', 'IBU KANDUNG'),
(112, 'PPDB2022027', '3315136704790003', 'KURNIA DWI ASTUTI', 'JL DI PANJAITAN NO. 33 RT 04 RW 14 PURWODADI KAB. GROBOGAN', 'S2', 'BANJARMASIN', '1979-04-27', 'HIDUP', 'DOKTER', 'Di Atas Rp. 5 Juta', '08122910299', 'IBU KANDUNG'),
(113, 'PPDB2022028', '3315134109890001', 'ENDAH WIDAYATI', 'Jrobang RT 4 RW 8 Ngesrep Banyumanik Kota Semarang', 'S1', 'PURWODADI', '1989-09-01', 'HIDUP', 'KARYAWAN BANK MANDIRI', 'Di Atas Rp. 5 Juta', '082134510064', 'IBU KANDUNG'),
(114, 'PPDB2022030', '3315046907870002', 'RETNO WULANDARI', 'Dusun Planjetan RT 02 RW 14 Desa Depok Toroh Kabupaten Grobogan', 'S1', 'GROBOGAN', '1987-07-29', 'HIDUP', 'GURU', 'Rp. 1 Juta sampai Rp. 2 Juta', '085290610403', 'IBU KANDUNG'),
(115, 'PPDB2022032', '3315134908880004', 'AGUSTINA MULIYANDARI', 'Desa Jangkungharjo RT 4 RW 3 Brati', 'S1', 'GROBOGAN', '1988-08-09', 'HIDUP', 'WIRASWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '083842570166', 'IBU KANDUNG'),
(116, 'PPDB2022033', '3315136412890001', 'DIAH AYU WIGASARI', 'JL USAHA NO 11 PURWODADI', 'S1', 'GROBOGAN', '1989-12-24', 'HIDUP', 'KARYAWAN SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '082135630953', 'IBU KANDUNG'),
(117, 'PPDB2022034', '3315045605960001', 'DYAH AMELIA PRATIWI', 'Jl Raden Saleh', 'SMA Sederajat', 'GROBOGAN', '1996-05-16', 'HIDUP', 'WIRASWASTA', 'Di Atas Rp. 5 Juta', '085210222216', 'IBU KANDUNG'),
(118, 'PPDB2022035', '3374065901910004', 'MAYA KURNIA DEWI', 'Jl. Harjuna IV no. 10 Simpang Lima Utara Purwodadi Grobogan', 'S1', 'SURAKARTA', '1991-01-19', 'HIDUP', 'DOKTER', 'Di Atas Rp. 5 Juta', '081226000903', 'IBU KANDUNG'),
(119, 'PPDB2022036', '3522024902880001', 'RETNO KUMALANINGRUM', 'Perumahan Griya Sambak Jl. Aisyiyah Gg II', 'D3', 'BOJONEGORO', '1988-02-09', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '085799796187', 'IBU KANDUNG'),
(120, 'PPDB2022037', '3315175910850003', 'ISFAIDIAH', 'Dusun Sukoharjo RT 9 RW 5 Krangganharjo Toroh', 'SMA Sederajat', 'GROBOGAN', '1985-10-19', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '085600874804', 'IBU KANDUNG'),
(121, 'PPDB2022038', '3315124906830001', 'YUNI TOTALIATI', 'Jl. Ksatrian RT 2 RW 4 Grobogan', 'S1', 'GROBOGAN', '1983-06-09', 'HIDUP', 'ASN', 'Rp. 4 Juta sampai Rp. 5 Juta', '085325333374', 'IBU KANDUNG'),
(122, 'PPDB2022039', '1671077112850067', 'EKA RISKI', 'Jln. Ngembak Kuripan Desa Majenang RT 7 RW 19', 'S1', 'JAMBI', '1985-12-31', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '081281116362', 'IBU KANDUNG'),
(123, 'PPDB2022040', '3315166006900008', 'ULIL HIDAYAH YUNIANNINGTY', 'Jl. Glugu No 52 RT 7 RW 14 Purwodadi', 'SMP Sederajat', 'GROBOGAN', '1990-06-20', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '089638278188', 'IBU KANDUNG'),
(124, 'PPDB2022041', '3314155911900001', 'WINDA NOVITASARI', 'Dusun Sukoharjo RT 5 RW 5 Krangganharjo Toroh', 'SMA Sederajat', 'SRAGEN', '1990-11-19', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '081228804317', 'IBU KANDUNG'),
(125, 'PPDB2022042', '3315134504880006', 'DWI WAHYU RAHMAWATI', 'Dusun Kandangan RT 2 RW 3 Purwodadi', 'D3', 'GROBOGAN', '1988-04-05', 'HIDUP', 'ASN', 'Rp. 2 Juta sampai Rp. 4 Juta', '082135334480', 'IBU KANDUNG'),
(126, 'PPDB2022043', '3315136802890003', 'INDAH NURUL IZZATI', 'Perumahan Sambak Jln. Aisyah 1 No 8 RT 01 RW 09 Purwodadi', 'S1', 'BLORA', '1989-02-28', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '085640346034', 'IBU KANDUNG'),
(127, 'PPDB2022044', '3315016205850001', 'EPIET NURIKA DEWI', 'LINGKUNGAN KELING RT 3 RW 2 KALONGAN PURWODADI', 'S1', 'GROBOGAN', '1985-05-22', 'HIDUP', 'ASN', 'Rp. 2 Juta sampai Rp. 4 Juta', '081325100120', 'IBU KANDUNG'),
(128, 'PPDB2022045', '3315046404900002', 'NANIN WAHYUNINGTYAS', 'Dusun Sukoharjo RT 7 RW 4 Krangganharjo Toroh', 'S1', 'GROBOGAN', '1990-04-24', 'HIDUP', 'IBU RUMAH TANGGA', 'PILIH PENGHASILAN', '082242862825', 'IBU KANDUNG'),
(129, 'PPDB2022046', '3315136211840003', 'ADITA DHANARYANTI', 'JL. R. SUPRAPTO GG KEPODANG 28 PURWODADI', 'S1', 'GROBOGAN', '1984-11-22', 'HIDUP', 'PNS', 'Rp. 2 Juta sampai Rp. 4 Juta', '08122562275', 'IBU KANDUNG'),
(130, 'PPDB2022047', '3315136908850001', 'YUANNITA AGUSTINA', 'JL. R. SUPRAPTO GG DWOROWATI RT 5 RW 21 PURWODADI', 'S1', 'GROBOGAN', '1985-08-29', 'HIDUP', 'KARYAWAN BUMN', 'Rp. 4 Juta sampai Rp. 5 Juta', '081358050647', 'IBU KANDUNG'),
(131, 'PPDB2022048', '3315164609890003', 'AYU RETNO PALUPI', 'DUSUN LAJER RT 5 RW 1 PENAWANGAN', 'D3', 'GROBOGAN', '1989-09-06', 'HIDUP', 'BIDAN', 'Rp. 2 Juta sampai Rp. 4 Juta', '081392688062', 'IBU KANDUNG'),
(132, 'PPDB2022049', '3315135612850004', 'ENDANG MARTININGSIH', 'Jl. Kebondalem Utara No.47 RT/RW 09/14 Purwodadi', 'S1', 'TEMANGGUNG', '1981-12-16', 'HIDUP', 'ASN', 'Rp. 1 Juta sampai Rp. 2 Juta', '085743554126', 'IBU KANDUNG'),
(133, 'PPDB2022050', '3315134410810001', 'ESTI TRIHASTUTI ', 'Perumahan Ayodya 2 Blok F nomer 11', 'S1', 'GROBOGAN', '1981-10-04', 'HIDUP', 'PNS', 'Rp. 4 Juta sampai Rp. 5 Juta', '08997991000', 'IBU KANDUNG'),
(134, 'PPDB2022051', '3315134106890001', 'NINDYA YUNITA SWASTANA IN', 'Gang Dworowati 3 Purwodadi', 'S1', 'PURWODADI', '1989-06-01', 'HIDUP', 'GURU', 'Rp. 1 Juta sampai Rp. 2 Juta', '085640037006', 'IBU KANDUNG'),
(135, 'PPDB2022052', '3315047005790002', 'IKA CAHYANINGRUM', 'Sukoharjo RT 01 RW 05 Krangganharjo', 'SMA Sederajat', 'GROBOGAN', '1979-05-30', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '0895373001186', 'IBU KANDUNG'),
(136, 'PPDB2022053', '3315135301880002', 'LINDUNG PERMANASARI', 'Jalan Merapi No 30 Purwodadi', 'S1', 'GROBOGAN', '1988-01-13', 'HIDUP', 'KARYAWAN BUMD', 'Di Atas Rp. 5 Juta', '082136512867', 'IBU KANDUNG'),
(137, 'PPDB2022054', '3315135001820007', 'MARYAWATI', 'Genuksuran RT 01 RW 01 Kecamatan Purwodadi', 'S1', 'GROBOGAN', '1982-01-10', 'HIDUP', 'PNS', 'Rp. 1 Juta sampai Rp. 2 Juta', '081578858119', 'IBU KANDUNG'),
(138, 'PPDB2022055', '3315136008890001', 'JENA HAYU WIDYASTI', 'Jl kepodang 3 no 16, sambak', 'S2', 'BLORA', '1989-08-20', 'HIDUP', '', 'Di Atas Rp. 5 Juta', '082242441755', 'IBU KANDUNG'),
(139, 'PPDB2022056', '3315045004910002', 'IMA RUSNANING TIAS', 'SENDANGSARI,04/07,TAMBIREJO,TOROH,GROBOGAN', 'S1', 'GROBOGAN', '1991-04-10', 'MENINGGAL', 'KARYAWAN BUMD', 'PILIH PENGHASILAN', '085226327865', 'IBU KANDUNG'),
(140, 'PPDB2022057', '3315135704740005', 'TRI PUTU SUPIJANTINI', 'Jl. Untung Suropati RT 05 RW 19 Simpang Lima Utara Purwodadi', 'SMA Sederajat', 'GROBOGAN', '1974-04-17', 'HIDUP', '', 'Kurang Dari Rp. 1 Juta', '087747875600', 'IBU KANDUNG'),
(141, 'PPDB2022058', '3313105207910002', 'IKA ERNAWATI', 'Klaster Ramayana No 100 Putat', 'S2', 'KARANGANYAR', '1991-07-12', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '0813227272582', 'IBU KANDUNG'),
(143, 'PPDB2022060', '3315034204920004', 'APRILIA ELFINA CHAMIDAH', 'DUSUN WINONG RT 003 RW 003 DESA PULOREJO, PURWODADI, KAB. GROBOGAN', 'D3', 'GROBOGAN', '1992-04-02', 'HIDUP', 'PERANGKAT DESA', 'Rp. 1 Juta sampai Rp. 2 Juta', '0895636461414', 'IBU KANDUNG'),
(144, 'PPDB2022061', '3315026410860003', 'IKA TRI KRIDIANTORO', 'Gang Bima karanganyar Rt 04 Rw 01 Godong', 'D3', 'GROBOGAN', '1986-10-24', 'HIDUP', 'ASN', 'Rp. 2 Juta sampai Rp. 4 Juta', '081392207207', 'IBU KANDUNG'),
(145, 'PPDB2022062', '331513691080003', 'LAKSMI HIYU PRATIWI', 'Jl. Gajahmada No. 14 Purwodadi', 'S1', 'SEMARANG', '1980-10-29', 'HIDUP', 'DOKTER', 'Di Atas Rp. 5 Juta', '081325383113', 'IBU KANDUNG'),
(146, 'PPDB2022063', '3315135811830001', 'ENDANG PURWANTINI', 'Dusun Tegal RT 01 RW 06 Cingkrong', 'S1', 'GROBOGAN', '1983-11-18', 'HIDUP', 'GURU', 'Rp. 1 Juta sampai Rp. 2 Juta', '081325131154', 'IBU KANDUNG'),
(147, 'PPDB2022064', '3315044211910003', 'NOVIA SULISTYOWATI', 'Samben RT 05 RW 05 Pilangpayung Toroh', 'S1', 'GROBOGAN', '1991-11-02', 'HIDUP', 'SWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '089522388500', 'IBU KANDUNG'),
(148, 'PPDB2022065', '3315046808890006', 'FILLA AYU SETYANINGRUM', 'Jl. Kepodang No. 26 RT 01 RW 07 Sambak, Danyang', 'SMA Sederajat', 'GROBOGAN', '1989-08-28', 'HIDUP', 'WIRASWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '085290659000', 'IBU KANDUNG'),
(149, 'PPDB2022066', '3315044810820009', 'ENDANG WURIYANI', 'Sendangsari RT 04 RW 07 Tambirejo Toroh', 'SMA Sederajat', 'SRAGEN', '1982-10-08', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '082134211054', 'IBU KANDUNG'),
(150, 'PPDB2022067', '3315136404900001', 'SETRA APRIL FITRIYANI', 'DSN TUMENGGUNGAN 09/03 GENUKSURAN', 'S1', 'GROBOGAN', '1990-04-24', 'HIDUP', 'PEGAWAI BUMD', 'Di Atas Rp. 5 Juta', '081280802216', 'IBU KANDUNG'),
(151, 'PPDB2022068', '3315134608900009', 'AGUSTIYANI WILLIYANA', 'Jl. Untung Suropati Lingkungan Plendungan, Gg. Brumbung III', 'SMA Sederajat', 'GROBOGAN', '1990-08-06', 'HIDUP', 'SWASTA', 'Rp. 2 Juta sampai Rp. 4 Juta', '081226857674', 'IBU KANDUNG'),
(152, 'PPDB2022029', '3315165808820006', 'NIRUL KHONIAH', 'Desa Sumberagung RT 03 RW 01 Godong Grobogan', 'D3', 'GROBOGAN', '1982-08-18', 'HIDUP', 'PNS', 'Rp. 2 Juta sampai Rp. 4 Juta', '85726833669', 'IBU KANDUNG'),
(153, 'PPDB2022029', '3315165808820006', 'NIRUL KHONIAH', 'Desa Sumberagung RT 03 RW 01 Godong Grobogan', 'D3', 'GROBOGAN', '1982-08-18', 'HIDUP', 'PNS', 'Rp. 2 Juta sampai Rp. 4 Juta', '85726833669', 'IBU KANDUNG'),
(154, 'PPDB2022031', '3315064510840001', 'SITI MUALIMAH', 'Ayodya1 Jl. Sugriwo blok P.19 Purwodadi', 'S1', 'GROBOGAN', '1984-10-05', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '8972700616', 'IBU KANDUNG'),
(155, 'PPDB2023069', '3315054204830002', 'SRI RAHAYU', 'Depok Utara RT 7 RW 1 Toroh', 'D3', 'GROBOGAN', '1983-04-02', 'HIDUP', 'KARYAWAN HONORER', 'Kurang Dari Rp. 1 Juta', '081325756202', 'IBU KANDUNG'),
(156, 'PPDB2023070', '33......', 'YULIYANTI', 'Plendungan RT 04 RW 03 Kuripan', 'SMP Sederajat', '....', '1977-12-20', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '089512057631', 'IBU KANDUNG'),
(157, 'PPDB2023071', '3313094812850002', 'AYU FARAHNAS HANINDHITA', 'Krangganharjo RT 07/05, Ds. Krangganharjo, Kec Toroh', 'D3', 'SEMARANG', '1985-12-03', 'HIDUP', 'PNS', 'Di Atas Rp. 5 Juta', '082134504943', 'IBU KANDUNG'),
(158, 'PPDB2023072', '3315044612970005', 'ANIF MAGHFIROH', 'Dsn Kepuh, Ds Tambirejo RT 02/09 Toroh', 'SMA Sederajat', 'GROBOGAN', '1997-12-06', 'HIDUP', 'WIRASWASTA', 'Rp. 1 Juta sampai Rp. 2 Juta', '082134626839', 'IBU KANDUNG'),
(159, 'PPDB2023073', '3315146002900002', 'NOVA IRMAWATI', 'Dusun Kebondalem RT 01 RW 14 Purwodadi', 'S1', 'GROBOGAN', '1990-02-20', 'HIDUP', 'PPPK', 'Rp. 2 Juta sampai Rp. 4 Juta', '08157757685', 'IBU KANDUNG'),
(160, 'PPDB2023074', '3315104202800002', 'SITI NUR WAHYUNI', 'Sambirejo RT 05/05 Wirosari Grobogan', 'S1', 'GROBOGAN', '1980-02-02', 'HIDUP', 'PNS', 'Rp. 2 Juta sampai Rp. 4 Juta', '085712227549', 'IBU KANDUNG'),
(161, 'PPDB2023075', '3315104202800002', 'SITI NUR WAHYUNI', 'Sambirejo RT 05/05 Wirosari Grobogan', 'S1', 'GROBOGAN', '1980-02-02', 'HIDUP', 'PNS', 'Rp. 2 Juta sampai Rp. 4 Juta', '085712227549', 'IBU KANDUNG'),
(162, 'PPDB2023076', '3305045801900001', 'AMANAH', 'Sekaran RT 04 RW 10 Kalongan Purwodadi', 'S1', 'KEBUMEN', '1990-01-18', 'HIDUP', 'GURU', 'PILIH PENGHASILAN', '087837625435', 'IBU KANDUNG'),
(163, 'PPDB2023077', '6201024203140001', 'DIANA LARISSA', 'Jl. Gajah Mada No. 20 B Kuripan Purwodadi', 'S1', 'SEMARANG', '1986-01-09', 'HIDUP', 'KARYAWAN BUMN', 'Rp. 2 Juta sampai Rp. 4 Juta', '085345785455', 'IBU KANDUNG'),
(164, 'PPDB2023078', '3315135508900009', 'IKA PURNASIWI UTAMI', 'JL. MADUKORO NO. 1 RT 08/21 PURWODADI', 'S1', 'GROBOGAN', '1990-08-15', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '081327944300', 'IBU KANDUNG'),
(165, 'PPDB2023079', '3318105007880006', 'FLOYAN ARISTA WIDAYANTI', 'DSN PEDAK DS MENDURAN RT 6/4 BRATI GROBOGAN', 'S1', 'PATI', '1988-07-10', 'HIDUP', 'IBU RUMAH TANGGA', 'Kurang Dari Rp. 1 Juta', '081288426302', 'IBU KANDUNG'),
(166, 'PPDB2023080', 'erte', 'GREGERG', 'ergerg', 'SMP Sederajat', 'GERGERG', '2023-08-23', 'HIDUP', 'GERGERGR', 'Rp. 2 Juta sampai Rp. 4 Juta', '6281548811047', 'IBU ANGKAT'),
(167, 'PPDB2023081', 'sdfdsf', 'FDSFS', 'fsdfs', 'SMP Sederajat', 'FDSFS', '2023-08-22', 'HIDUP', 'DSFSF', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'IBU KANDUNG'),
(168, 'PPDB2023082', 'fsfsf', 'SFSDF', 'sdfdsfs', 'SMA Sederajat', 'FSDFSDF', '2023-08-16', 'MENINGGAL', 'FDSFS', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'IBU KANDUNG'),
(169, 'PPDB2023083', 'gdgd', 'GDGF', 'dgdgd', 'SMA Sederajat', 'GDG', '2023-08-09', 'HIDUP', 'GDFGDFG', 'Rp. 4 Juta sampai Rp. 5 Juta', '6281548811047', 'IBU KANDUNG'),
(170, 'PPDB2023084', 'fsdfsf', 'FSDFSD', 'fsdfsd', 'SMA Sederajat', 'FSDFSF', '2023-08-09', 'HIDUP', 'FSDSDFS', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'IBU KANDUNG'),
(171, 'PPDB2023085', 'gdfg', 'DGDGF', 'dgdg', 'S1', 'GDFGDF', '2023-08-17', 'HIDUP', 'FDGDG', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'IBU KANDUNG'),
(172, 'PPDB2023086', 'gdfgdg', 'FDG', 'dgffdgd', 'SMP Sederajat', 'GFDGD', '2023-08-21', 'HIDUP', 'GFDGDFG', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'IBU KANDUNG'),
(173, 'PPDB2023087', 'gdfgdf', 'DFGDGF', 'gdgd', 'SMP Sederajat', 'GDGDGF', '2023-08-15', 'MENINGGAL', 'GDGD', 'Kurang Dari Rp. 1 Juta', 'gdgdg', 'IBU KANDUNG'),
(174, 'PPDB2023088', 'dasda', 'DASDA', 'dasda', 'SMP Sederajat', 'DASDA', '2023-08-16', 'HIDUP', 'DADA', 'Rp. 1 Juta sampai Rp. 2 Juta', 'dada', 'IBU ANGKAT'),
(175, 'PPDB2023089', 'dasdsad', 'DASDASD', 'dasdas', 'SMA Sederajat', 'DASDASD', '2023-08-15', 'HIDUP', 'DSADAS', 'Rp. 2 Juta sampai Rp. 4 Juta', 'dasdas', 'IBU KANDUNG'),
(176, 'PPDB2023090', 'dasda', 'DASDA', 'asdasd', 'SMP Sederajat', 'DASDSA', '2023-08-15', 'HIDUP', 'DASDA', 'Rp. 1 Juta sampai Rp. 2 Juta', 'asdas', 'IBU ANGKAT'),
(177, 'PPDB2023091', 'dasddasd', 'DASDA', 'dasdas', 'D3', 'DASDASD', '2023-08-21', 'MENINGGAL', '', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'IBU KANDUNG'),
(178, 'PPDB2023092', 'dasdasd', 'DASDASD', 'dasda', 'SMA Sederajat', 'DASDA', '2023-08-09', 'MENINGGAL', 'SDASD', 'Rp. 1 Juta sampai Rp. 2 Juta', '6281548811047', 'IBU KANDUNG'),
(179, 'PPDB2023093', 'sdfsf', 'SDFSDF', 'sdfsdfsdf', 'S1', 'DSFSDF', '2023-08-15', 'MENINGGAL', 'FDSFS', 'Rp. 1 Juta sampai Rp. 2 Juta', 'dsfdsfs', 'IBU KANDUNG');

-- --------------------------------------------------------

--
-- Table structure for table `data_jalur`
--

CREATE TABLE `data_jalur` (
  `id_data_jalur` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(15) NOT NULL,
  `jalur` enum('PRESTASI','REGULER') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_jalur`
--

INSERT INTO `data_jalur` (`id_data_jalur`, `nomor_pendaftaran`, `jalur`) VALUES
(11, 'PPDB2022001', 'REGULER'),
(12, 'PPDB2022002', 'PRESTASI'),
(13, 'PPDB2022003', 'PRESTASI'),
(14, 'PPDB2022004', 'PRESTASI'),
(15, 'PPDB2022005', 'PRESTASI'),
(17, 'PPDB2022007', 'PRESTASI'),
(18, 'PPDB2022008', 'PRESTASI'),
(19, 'PPDB2022009', 'PRESTASI'),
(20, 'PPDB2022010', 'PRESTASI'),
(21, 'PPDB2022011', 'PRESTASI'),
(22, 'PPDB2022012', 'PRESTASI'),
(23, 'PPDB2022013', 'REGULER'),
(24, 'PPDB2022014', 'PRESTASI'),
(25, 'PPDB2022015', 'REGULER'),
(26, 'PPDB2022016', 'REGULER'),
(27, 'PPDB2022017', 'REGULER'),
(28, 'PPDB2022018', 'REGULER'),
(29, 'PPDB2022019', 'REGULER'),
(30, 'PPDB2022020', 'REGULER'),
(31, 'PPDB2022021', 'REGULER'),
(32, 'PPDB2022022', 'REGULER'),
(33, 'PPDB2022023', 'REGULER'),
(34, 'PPDB2022024', 'REGULER'),
(35, 'PPDB2022025', 'REGULER'),
(36, 'PPDB2022026', 'REGULER'),
(37, 'PPDB2022027', 'REGULER'),
(38, 'PPDB2022028', 'REGULER'),
(39, 'PPDB2022029', 'REGULER'),
(40, 'PPDB2022030', 'REGULER'),
(41, 'PPDB2022031', 'REGULER'),
(42, 'PPDB2022032', 'REGULER'),
(43, 'PPDB2022033', 'REGULER'),
(44, 'PPDB2022034', 'REGULER'),
(45, 'PPDB2022035', 'REGULER'),
(46, 'PPDB2022036', 'REGULER'),
(47, 'PPDB2022037', 'REGULER'),
(48, 'PPDB2022038', 'REGULER'),
(49, 'PPDB2022039', 'REGULER'),
(50, 'PPDB2022040', 'REGULER'),
(51, 'PPDB2022041', 'REGULER'),
(52, 'PPDB2022042', 'REGULER'),
(53, 'PPDB2022043', 'REGULER'),
(54, 'PPDB2022044', 'REGULER'),
(55, 'PPDB2022045', 'REGULER'),
(56, 'PPDB2022046', 'REGULER'),
(57, 'PPDB2022047', 'REGULER'),
(58, 'PPDB2022048', 'REGULER'),
(59, 'PPDB2022049', 'REGULER'),
(60, 'PPDB2022050', 'REGULER'),
(61, 'PPDB2022051', 'REGULER'),
(62, 'PPDB2022052', 'REGULER'),
(63, 'PPDB2022053', 'REGULER'),
(64, 'PPDB2022054', 'REGULER'),
(65, 'PPDB2022055', 'REGULER'),
(66, 'PPDB2022056', 'REGULER'),
(67, 'PPDB2022057', 'REGULER'),
(68, 'PPDB2022058', 'REGULER'),
(70, 'PPDB2022060', 'REGULER'),
(71, 'PPDB2022061', 'REGULER'),
(72, 'PPDB2022062', 'REGULER'),
(73, 'PPDB2022063', 'REGULER'),
(74, 'PPDB2022064', 'REGULER'),
(75, 'PPDB2022065', 'REGULER'),
(76, 'PPDB2022066', 'REGULER'),
(77, 'PPDB2022067', 'REGULER'),
(78, 'PPDB2022068', 'REGULER'),
(79, 'PPDB2023069', 'REGULER'),
(80, 'PPDB2023070', 'REGULER'),
(81, 'PPDB2023071', 'REGULER'),
(82, 'PPDB2023072', 'REGULER'),
(83, 'PPDB2023073', 'REGULER'),
(84, 'PPDB2023074', 'REGULER'),
(85, 'PPDB2023075', 'REGULER'),
(86, 'PPDB2023076', 'REGULER'),
(87, 'PPDB2023077', 'REGULER'),
(88, 'PPDB2023078', 'REGULER'),
(89, 'PPDB2023079', 'REGULER'),
(90, 'PPDB2023080', 'REGULER'),
(91, 'PPDB2023081', 'REGULER'),
(92, 'PPDB2023082', 'REGULER'),
(93, 'PPDB2023083', 'REGULER'),
(94, 'PPDB2023084', 'REGULER'),
(95, 'PPDB2023085', 'REGULER'),
(96, 'PPDB2023086', 'REGULER'),
(97, 'PPDB2023087', 'REGULER'),
(98, 'PPDB2023088', 'REGULER'),
(99, 'PPDB2023089', 'REGULER'),
(100, 'PPDB2023090', 'REGULER'),
(101, 'PPDB2023091', 'REGULER'),
(102, 'PPDB2023092', 'REGULER'),
(103, 'PPDB2023093', 'REGULER');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendaftaran`
--

CREATE TABLE `data_pendaftaran` (
  `id_data_pendaftaran` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(15) NOT NULL,
  `pembayaran` enum('SUDAH','BELUM') NOT NULL,
  `admin_bayar` enum('YAYASAN','UNIT') NOT NULL,
  `pengumpulan_berkas` enum('SUDAH','BELUM') NOT NULL,
  `wawancara` enum('SUDAH','BELUM') NOT NULL,
  `diterima` enum('DITERIMA','TIDAK DITERIMA','PENDING') NOT NULL,
  `daftar_ulang` enum('SUDAH','BELUM') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pendaftaran`
--

INSERT INTO `data_pendaftaran` (`id_data_pendaftaran`, `nomor_pendaftaran`, `pembayaran`, `admin_bayar`, `pengumpulan_berkas`, `wawancara`, `diterima`, `daftar_ulang`) VALUES
(8, 'PPDB2022001', 'SUDAH', 'YAYASAN', 'SUDAH', 'SUDAH', 'DITERIMA', 'BELUM'),
(9, 'PPDB2022002', 'SUDAH', 'YAYASAN', 'SUDAH', 'SUDAH', 'DITERIMA', 'BELUM'),
(10, 'PPDB2022003', 'SUDAH', 'YAYASAN', 'SUDAH', 'SUDAH', 'DITERIMA', 'BELUM'),
(11, 'PPDB2022004', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(12, 'PPDB2022005', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(14, 'PPDB2022007', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(15, 'PPDB2022008', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(16, 'PPDB2022009', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(17, 'PPDB2022010', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(18, 'PPDB2022011', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(19, 'PPDB2022012', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(20, 'PPDB2022013', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(21, 'PPDB2022014', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(22, 'PPDB2022015', 'SUDAH', 'YAYASAN', 'SUDAH', 'SUDAH', 'DITERIMA', 'BELUM'),
(23, 'PPDB2022016', 'SUDAH', 'YAYASAN', 'SUDAH', 'SUDAH', 'DITERIMA', 'BELUM'),
(24, 'PPDB2022017', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(25, 'PPDB2022018', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(26, 'PPDB2022019', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(27, 'PPDB2022020', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(28, 'PPDB2022021', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(29, 'PPDB2022022', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(30, 'PPDB2022023', 'BELUM', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(31, 'PPDB2022024', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(32, 'PPDB2022025', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(33, 'PPDB2022026', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(34, 'PPDB2022027', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(35, 'PPDB2022028', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(36, 'PPDB2022029', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(37, 'PPDB2022030', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(38, 'PPDB2022031', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(39, 'PPDB2022032', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(40, 'PPDB2022033', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(41, 'PPDB2022034', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(42, 'PPDB2022035', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(43, 'PPDB2022036', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(44, 'PPDB2022037', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(45, 'PPDB2022038', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(46, 'PPDB2022039', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(47, 'PPDB2022040', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(48, 'PPDB2022041', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(49, 'PPDB2022042', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(50, 'PPDB2022043', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(51, 'PPDB2022044', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(52, 'PPDB2022045', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(53, 'PPDB2022046', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(54, 'PPDB2022047', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(55, 'PPDB2022048', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(56, 'PPDB2022049', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(57, 'PPDB2022050', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(58, 'PPDB2022051', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(59, 'PPDB2022052', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(60, 'PPDB2022053', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(61, 'PPDB2022054', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(62, 'PPDB2022055', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(63, 'PPDB2022056', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(64, 'PPDB2022057', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(65, 'PPDB2022058', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(67, 'PPDB2022060', 'BELUM', 'YAYASAN', 'SUDAH', 'BELUM', 'PENDING', 'BELUM'),
(68, 'PPDB2022061', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(69, 'PPDB2022062', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(70, 'PPDB2022063', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(71, 'PPDB2022064', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(72, 'PPDB2022065', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(73, 'PPDB2022066', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(74, 'PPDB2022067', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(75, 'PPDB2022068', 'BELUM', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(76, 'PPDB2023069', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'BELUM'),
(77, 'PPDB2023070', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'TIDAK DITERIMA', 'BELUM'),
(78, 'PPDB2023071', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'DITERIMA', 'SUDAH'),
(79, 'PPDB2023072', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'PENDING', 'BELUM'),
(80, 'PPDB2023073', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'PENDING', 'BELUM'),
(81, 'PPDB2023074', 'SUDAH', 'YAYASAN', 'SUDAH', 'BELUM', 'PENDING', 'BELUM'),
(82, 'PPDB2023075', 'SUDAH', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(83, 'PPDB2023076', 'SUDAH', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(84, 'PPDB2023077', 'SUDAH', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(85, 'PPDB2023078', 'SUDAH', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(86, 'PPDB2023079', 'SUDAH', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(87, 'PPDB2023080', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(88, 'PPDB2023081', 'SUDAH', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(89, 'PPDB2023082', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(90, 'PPDB2023083', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(91, 'PPDB2023084', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(92, 'PPDB2023085', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(93, 'PPDB2023086', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(94, 'PPDB2023087', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(95, 'PPDB2023088', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(96, 'PPDB2023089', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(97, 'PPDB2023090', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(98, 'PPDB2023091', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(99, 'PPDB2023092', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM'),
(100, 'PPDB2023093', 'BELUM', 'YAYASAN', 'BELUM', 'BELUM', 'PENDING', 'BELUM');

-- --------------------------------------------------------

--
-- Table structure for table `data_prestasi`
--

CREATE TABLE `data_prestasi` (
  `id_data_prestasi` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(15) NOT NULL,
  `prestasi_1` text DEFAULT NULL,
  `prestasi_2` text DEFAULT NULL,
  `prestasi_3` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_prestasi`
--

INSERT INTO `data_prestasi` (`id_data_prestasi`, `nomor_pendaftaran`, `prestasi_1`, `prestasi_2`, `prestasi_3`) VALUES
(50, 'PPDB2022001', '', '', ''),
(51, 'PPDB2022002', '', '', ''),
(52, 'PPDB2022003', 'Juara 1 lomba tahfidz rayon 3', '', ''),
(53, 'PPDB2022004', 'USIA 5 TAHUN HAFAL AL-MULK DAN 29 SURAT DI JUZ 30', '', ''),
(54, 'PPDB2022005', '', '', ''),
(56, 'PPDB2022007', 'Juara 1 Lomba Mewarnai di exspo alun-alun', 'Juara 1 Lomba Mewarnai di sekolah', 'Juara 2 Lomba Mewarnai di Luwes'),
(57, 'PPDB2022008', '', '', ''),
(58, 'PPDB2022009', '', '', ''),
(59, 'PPDB2022010', '', '', ''),
(60, 'PPDB2022011', 'Juara 1 lomba menyanyi virtual usia 4-5 tahun', '', ''),
(61, 'PPDB2022012', 'Mewarnai', '', ''),
(62, 'PPDB2022013', '-', '-', '-'),
(63, 'PPDB2022014', '', '', ''),
(64, 'PPDB2022015', '', '', ''),
(65, 'PPDB2022016', '-', '', ''),
(66, 'PPDB2022017', '', '', ''),
(67, 'PPDB2022018', '', '', ''),
(68, 'PPDB2022019', 'Juara 1 Lomba mewarnai di Mitra Swalayan', 'Juara 1 Lomba mewarnai di masjid Danyang', 'Juara Harapan 3 Lomba mewarnai di Luwes'),
(69, 'PPDB2022020', '', '', ''),
(70, 'PPDB2022021', '', '', ''),
(71, 'PPDB2022022', '', '', ''),
(72, 'PPDB2022023', '', '', ''),
(73, 'PPDB2022024', '', '', ''),
(74, 'PPDB2022025', '', '', ''),
(75, 'PPDB2022026', '', '', ''),
(76, 'PPDB2022027', '', '', ''),
(77, 'PPDB2022028', '', '', ''),
(78, 'PPDB2022029', '', '', ''),
(79, 'PPDB2022030', '', '', ''),
(80, 'PPDB2022031', '', '', ''),
(81, 'PPDB2022032', '', '', ''),
(82, 'PPDB2022033', '', '', ''),
(83, 'PPDB2022034', '', '', ''),
(84, 'PPDB2022035', '', '', ''),
(85, 'PPDB2022036', '', '', ''),
(86, 'PPDB2022037', '', '', ''),
(87, 'PPDB2022038', '', '', ''),
(88, 'PPDB2022039', '', '', ''),
(89, 'PPDB2022040', '', '', ''),
(90, 'PPDB2022041', '', '', ''),
(91, 'PPDB2022042', '', '', ''),
(92, 'PPDB2022043', 'Juara 1 lomba Describing Something Th 2022', '', ''),
(93, 'PPDB2022044', '', '', ''),
(94, 'PPDB2022045', 'JUARA 2 MELENGKAPI KATA DI MITRA SWALAYAN', 'JUARA 3 DESCRIBING SOMETHING BILINGUAL FESTIVAL AND MARKETDAY DI SD BILINGUAL MUHAMMADIYAH 1 PURWODADI', ''),
(95, 'PPDB2022046', '', '', ''),
(96, 'PPDB2022047', '', '', ''),
(97, 'PPDB2022048', 'JUARA 1 HAFALAN SURAT PENDEK TINGKAT RA', '', ''),
(98, 'PPDB2022049', '', '', ''),
(99, 'PPDB2022050', '', '', ''),
(100, 'PPDB2022051', '', '', ''),
(101, 'PPDB2022052', '', '', ''),
(102, 'PPDB2022053', '', '', ''),
(103, 'PPDB2022054', '', '', ''),
(104, 'PPDB2022055', '', '', ''),
(105, 'PPDB2022056', '', '', ''),
(106, 'PPDB2022057', '', '', ''),
(107, 'PPDB2022058', '', '', ''),
(109, 'PPDB2022060', '', '', ''),
(110, 'PPDB2022061', '', '', ''),
(111, 'PPDB2022062', '', '', ''),
(112, 'PPDB2022063', '', '', ''),
(113, 'PPDB2022064', '', '', ''),
(114, 'PPDB2022065', '', '', ''),
(115, 'PPDB2022066', '', '', ''),
(116, 'PPDB2022067', '', '', ''),
(117, 'PPDB2022068', '', '', ''),
(118, 'PPDB2023069', '', '', ''),
(119, 'PPDB2023070', 'Juara 2 lomba hafalan', '', ''),
(120, 'PPDB2023071', '', '', ''),
(121, 'PPDB2023072', '', '', ''),
(122, 'PPDB2023073', '', '', ''),
(123, 'PPDB2023074', '', '', ''),
(124, 'PPDB2023075', '', '', ''),
(125, 'PPDB2023076', '', '', ''),
(126, 'PPDB2023077', '', '', ''),
(127, 'PPDB2023078', '', '', ''),
(128, 'PPDB2023079', '', '', ''),
(129, 'PPDB2023080', '', '', ''),
(130, 'PPDB2023081', '', '', ''),
(131, 'PPDB2023082', '', '', ''),
(132, 'PPDB2023083', '', '', ''),
(133, 'PPDB2023084', '', '', ''),
(134, 'PPDB2023085', '', '', ''),
(135, 'PPDB2023086', '', '', ''),
(136, 'PPDB2023087', '', '', ''),
(137, 'PPDB2023088', '', '', ''),
(138, 'PPDB2023089', '', '', ''),
(139, 'PPDB2023090', '', '', ''),
(140, 'PPDB2023091', '', '', ''),
(141, 'PPDB2023092', '', '', ''),
(142, 'PPDB2023093', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_data_siswa` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(15) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `asal_sekolah` varchar(25) NOT NULL,
  `jenis_kelamin` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` text NOT NULL,
  `rt` int(3) DEFAULT NULL,
  `rw` int(3) DEFAULT NULL,
  `dusun` varchar(15) DEFAULT NULL,
  `desa` varchar(15) DEFAULT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `kabupaten` varchar(20) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `warga_negara` varchar(15) NOT NULL DEFAULT '''INDONESIA''',
  `nomor_wa` varchar(15) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `agama` varchar(10) NOT NULL DEFAULT '''ISLAM''',
  `riwayat_penyakit` text DEFAULT NULL,
  `difabel` varchar(10) DEFAULT NULL,
  `domisili` varchar(15) NOT NULL,
  `anak_ke` int(5) NOT NULL,
  `hobi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_data_siswa`, `nomor_pendaftaran`, `nama_lengkap`, `asal_sekolah`, `jenis_kelamin`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `warga_negara`, `nomor_wa`, `email`, `agama`, `riwayat_penyakit`, `difabel`, `domisili`, `anak_ke`, `hobi`) VALUES
(55, 'PPDB2022001', 'AL ZAIDAN FAEYZA CIPTA', 'TK ABA 1 PURWODADI', 'LAKI-LAKI', '0161963250', 'GROBOGA', '2016-09-12', 'Kauman Selatan', 1, 8, 'KAUMAN SELATAN', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'mifta.mathematics@gmail.c', 'ISLAM', 'tidak ada', 'tidak', 'KAUMAN SELATAN', 2, 'Outdoor Activity'),
(56, 'PPDB2022002', 'AKSARA BRILLIO ARKHAREGA', 'TK ABA TUNAS MELATI', 'LAKI-LAKI', '3177866769', 'GROBOGAN', '2017-03-24', 'Getasrejo, RT/RW 008/002 Desa Getasrejo Kecamatan Grobogan Kabupaten Grobogan Provinsi Jawa Tengah 58152', 8, 2, 'KRAJAN', 'GETASREJO', 'GROBOGAN', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'tegar.mandiri10@gmail.com', 'ISLAM', '-', '-', 'GETASREJO, RT/R', 2, 'Menggambar'),
(57, 'PPDB2022003', 'ALENA AUFAA ZHAFIRA', 'TK AL MAJIDA RUTABA DAFAA', 'PEREMPUAN', '', 'GROBOGAN', '2016-12-29', 'Sambak indah rt.1/7 danyang Purwodadi', 1, 7, 'DANYANG', 'DANYANG', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'alhakimzld@gmail.com', 'ISLAM', 'Tidak ada', 'Tidak', 'SAMBAK INDAH', 2, 'Menggambar'),
(58, 'PPDB2022004', 'WILDAN RAFA ADZKIA', 'TK AISYIAH BUSTANUL ATHFA', 'LAKI-LAKI', '3154388251', 'KENDAL', '2017-03-18', 'JL.GARUDA UTAMA', 6, 19, 'MAJENANG', 'KURIPAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'zak111yamuhlisina@gmail.c', 'ISLAM', '-', '-', 'KURIPAN-PURWODA', 1, 'MERANGKAI LEGO'),
(59, 'PPDB2022005', 'KENZIE RAYHAN PUTRA WISNU', 'TKIT ISLAMIC CENTER', 'LAKI-LAKI', '', 'KAB.SEMARANG', '2017-05-21', 'JL.PURWODADI 3', 3, 4, '', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'hernisadewilailanita@gmai', 'ISLAM', '-', '-', 'JL. PANCAPANA 1', 1, 'BERSEPEDA'),
(61, 'PPDB2022007', 'AYRA SHAKILA ARDANI', 'RA IT AL FIRDAUS', 'PEREMPUAN', '', 'GROBOGAN', '2016-04-15', 'Kebonarum No 6', 6, 14, 'PURWODADI', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'ayrashakilaardani@gmail.c', 'ISLAM', '', '', 'KEBONARUM', 1, 'Mewarnai'),
(62, 'PPDB2022008', 'ANNAFI KHUSNA KHUMAIRA', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2017-09-07', 'Dusun Kauman Desa Kluwan', 7, 2, 'KAUMAN', 'KLUWAN', 'PENAWANGAN', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'PENAWANGAN', 1, 'Mewarnai'),
(63, 'PPDB2022009', 'LAIMUNA MARWA ADI', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2016-11-21', 'Desa Wedoro', 2, 2, '', 'WEDORO', 'PENAWANGAN', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'Sering pusing', '', 'PENAWANGAN', 2, 'Mewarnai'),
(64, 'PPDB2022010', 'NAVISA FATHMAWATI ZUHRI', 'RAIT AL FIRDAUS PURWODADI', 'PEREMPUAN', '', 'GROBOGAN', '2016-09-27', 'Koripan', 5, 10, 'KORIPAN', 'NAMBUHAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'Navisafathma@gmail.com', 'ISLAM', '', '', 'KORIPAN NAMBUHA', 3, ''),
(65, 'PPDB2022011', 'ALESHA ZAHRA KHAIR', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2017-05-21', 'Nglarik, Kalongan', 2, 7, '', 'NGLARIK', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'NGLARIK', 2, ''),
(66, 'PPDB2022012', 'SAFIRA AZKA MARETIN', 'PAUD CITA KITA', 'PEREMPUAN', '', 'GROBOGAN', '2016-03-16', 'Dusun Pucang Selatan', 7, 4, '', 'TAMBIREJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'Sering mimisan', '', 'TAMBIREJO TOROH', 2, 'Menggambar'),
(67, 'PPDB2022013', 'KHANZA AZKADINA RAMADHANI', 'RA IT AL FIRDAUS GUBUG', 'PEREMPUAN', '', 'GROBOGAN', '2017-06-08', 'Dusun Ngrojo', 4, 4, 'NGROJO', 'SAMBUNG', 'GODONG', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'solehulfa2527@gmail.com', 'ISLAM', 'Tidak ada', 'Tidak', 'DUSUN NGROJO 4/', 2, 'Menggambar,menyanyi'),
(68, 'PPDB2022014', 'AQIB MUCHTAR HAKIM', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2016-05-31', 'Gading', 2, 17, '', 'KURIPAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'GADING', 3, 'Menyanyi'),
(69, 'PPDB2022015', 'SHANUM ARUNA NUGROHO', 'TK ABA 3', 'PEREMPUAN', '3178907704', 'GROBOGAN', '2017-03-08', 'Jl. ANILA BLOK K NO. 11', 4, 20, '', 'KURIPAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'rifajocil@gmail.com', 'ISLAM', '', '', 'AYODYA 1 JL. AN', 3, 'MENGGAMBAR'),
(70, 'PPDB2022016', 'AZALEA AILANI DZAHIN', 'TK TUNAS MELATI', 'PEREMPUAN', '-', 'GROBOGAN', '2016-08-07', 'JL. BOGASARI 1', 5, 4, '-', 'DANYANG', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'renyariestya@gmail.com', 'ISLAM', '-', '-', 'JL.BOGASARI 1 R', 2, 'GAMBAR'),
(71, 'PPDB2022017', 'FADHIL ABQARI RAJENDRA HI', 'PAUD CITA KITA', 'LAKI-LAKI', '', 'GROBOGAN', '2016-12-14', 'Dsn. Depok Selatan 7/2 Depok Toroh', 7, 2, 'DEPOK', 'DEPOK', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'erisetianingsih7@gmail.co', 'ISLAM', '', '', 'DSN. DEPOK SELA', 1, 'Membaca'),
(72, 'PPDB2022018', 'AKMAL FAHLEFI ABIPUTRA', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2016-06-17', 'Monggot, Geyer', 5, 2, '', 'MONGGOT', 'GEYER', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'TIMONGO RT 05 R', 2, 'Bermain'),
(73, 'PPDB2022019', 'ALESHA PUTRI OKTAVIA', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2016-10-29', 'Danyang Utara RT 2 RW 2', 2, 2, '', 'DANYANG', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DANYANG UTARA R', 3, 'Menggambar/Mewarnai'),
(74, 'PPDB2022020', 'KHAYLA NISA AZZAHRA', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2016-06-02', 'Desa Candisari', 1, 4, 'CANDISARI', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DESA CANDISARI', 2, 'Mengaji'),
(75, 'PPDB2022021', 'NARENDRA AZKA PUTRA SETIA', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'JEPARA', '2016-04-11', 'Perumahan Griya Semesta No 29 Nglarik Danyang', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'PERUMAHAN GRIYA', 2, ''),
(76, 'PPDB2022022', 'MUHAMMAD RAFFA ARJUNA PUT', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'SEMARANG', '2016-07-03', 'Jalan Usaha No.10', 3, 7, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JALAN USAHA NO.', 2, 'Menggambar/Mewarnai'),
(77, 'PPDB2022023', 'ABID AQILA RAJENDRA', 'TK IT ISLAMIC CENTER', 'LAKI-LAKI', '', 'JAKARTA', '2016-05-02', 'Jalan Ampera No.4', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'PURWODADI', 2, 'Bermain lego'),
(78, 'PPDB2022024', 'ARFAN SEINYA ALFARIZI', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2016-11-18', 'Desa Krangganharjo', 4, 5, '', 'KRANGGANHARJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DESA KRANGGANHA', 2, 'Menggambar/Mewarnai'),
(79, 'PPDB2022025', 'GAIZKA SHANUM DECALLYSTA ', 'RAIT AL FIRDAUS', 'PEREMPUAN', '', 'GROBOGAN', '2017-01-07', 'Jl. Hayam Wuruk No.2 Purwodadi', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. HAYAM WURUK', 3, 'Bernyanyi'),
(80, 'PPDB2022026', 'SALSABILA AZZAHRA GUSTAV', 'TK CITA KITA - GENDINGAN', 'PEREMPUAN', '', 'GROBOGAN', '2016-09-06', 'DS.Boloh', 4, 6, 'BOLOH', 'BOLOH', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'meita.wulandari47@gmail.c', 'ISLAM', '', '', 'DS.BOLOH,RT.004', 1, 'Membaca'),
(81, 'PPDB2022027', 'LATIFA RAYLIA SAHELDA', 'TK SEKOLAH ALAM AL AKBAR ', 'PEREMPUAN', '', 'SEMARANG', '2016-10-16', 'Jl DI PANJAITAN NO. 33', 4, 14, '', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'WILDANI.OKE@GMAIL.COM', 'ISLAM', '', '', 'PURWODADI', 1, ''),
(82, 'PPDB2022028', 'VELDA SADINA LITUHAYU', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'SEMARANG', '2016-08-05', 'Jrobang', 4, 8, '', 'NGESREP', 'BANYUMANIK', 'KOTA SEMARANG', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DS KELING RT 03', 1, ''),
(83, 'PPDB2022029', 'MUHAMMAD ABDULLAH CAHYA B', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2017-05-06', 'Dusun Sumberagung', 3, 1, '', 'SUMBERAGUNG', 'GODONG', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN SUMBERAGU', 3, ''),
(84, 'PPDB2022030', 'RALINE AOZORA GHASSANI AD', 'TK DHARMA WANITA DEPOK 5', 'PEREMPUAN', '', 'GROBOGAN', '2016-09-07', 'Dusun Planjetan', 2, 14, '', 'DEPOK', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN PLANJETAN', 2, 'Membaca'),
(85, 'PPDB2022031', 'KELLEN RAFANDRA NAYAKA', 'TK FASTABIQ', 'LAKI-LAKI', '', 'GROBOGAN', '2016-08-07', 'Ayodya 1 Jln. Sugriwo Blok P No.19 Purwodadi', 7, 20, '', 'KURIPAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'AYODYA 1 JLN. S', 3, 'Aktifitas fisik'),
(86, 'PPDB2022032', 'NABILA PUTRI NUR ANNISAA', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2013-03-11', 'Desa Jangkungharjo', 7, 3, '', 'JANGKUNGHARJO', 'BRATI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DESA JANGKUNGHA', 2, 'Aktifitas fisik'),
(87, 'PPDB2022033', 'HANAAIRA IZZATUNNISA WARD', 'RAIT AL FIRDAUS', 'PEREMPUAN', '', 'GROBOGAN', '2016-09-10', 'JL USAHA NO 11', 4, 7, 'PURWODADI', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'diahizza90@gmail.com', 'ISLAM', '', '', 'JENGGLONG BARAT', 1, ''),
(88, 'PPDB2022034', 'ZOE ALESSANDRA THAMRIN', 'TK TUNAS MELATI', 'PEREMPUAN', '', 'JAKARTA', '2016-04-12', 'Jl Flamboyan No 4 , Rss Sambak Indah, Purwodadi', 0, 0, 'DANYANG', 'DANYANG', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'dyahamelia.prat016@gmail.', 'ISLAM', '', '', 'PURWODADI', 1, 'Menggambar, bernyanyi, bermain'),
(89, 'PPDB2022035', 'ARKAN AL FATIH ZABRAN', 'RAIT AL FIRDAUS', 'LAKI-LAKI', '3174059033', 'SURAKARTA', '2017-04-23', 'Jl. Harjuna IV no. 10 Simpang Lima Utara', 2, 19, '', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'dr.yanuarrezano@gmail.com', 'ISLAM', '', '', 'JL. HARJUNA IV ', 1, 'Melukis, Sepatu Roda'),
(90, 'PPDB2022036', 'KALILA ASSAFFAT', 'TK ISLAM TUNAS MELATI', 'PEREMPUAN', '', 'BOJONEGORO', '2017-06-20', 'Perumahan Griya Sambak Jl. Aisyiyah Gg II', 5, 9, '', 'DANYANG', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'PERUMAHAN GRIYA', 2, 'Bersepeda'),
(91, 'PPDB2022037', 'ALESIA KHANZA PUTRI', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2017-04-26', 'Dusun Sukoharjo', 9, 5, '', 'KRANGGANHARJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN SUKOHARJO', 2, 'Menari'),
(92, 'PPDB2022038', 'AIDAH INARA NISA', 'TK IT KARIMA', 'PEREMPUAN', '', 'GROBOGAN', '2016-07-04', 'Jl. Ksatrian', 2, 4, '', 'GROBOGAN', 'GROBOGAN', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. KSATRIAN RT', 3, ''),
(93, 'PPDB2022039', 'CAKRA MULIA PAMUNGKAS', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'BENGKALIS', '2017-07-03', 'Lingkungan Majenang', 7, 19, '', 'KURIPAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JLN. NGEMBAK KU', 3, 'Bermain dan belajar'),
(94, 'PPDB2022040', 'NATHANIA ANANDARA PASTIKA', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '1017-03-04', 'Jl. Glugu No 52', 7, 14, '', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. GLUGU NO 52', 2, ''),
(95, 'PPDB2022041', 'AZKA CANTIKA PUTRI WANDAR', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2016-07-26', 'Dusun Sukoharjo', 5, 5, '', 'KRANGGANHARJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN SUKOHARJO', 2, ''),
(96, 'PPDB2022042', 'LOVIA AURELIA ASHADEWI', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2017-01-03', 'Dusun Kandangan', 2, 3, '', 'KANDANGAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN KANDANGAN', 2, 'Menyanyi dan mewarnai'),
(97, 'PPDB2022043', 'ZAVIRA WILDA FADILLAH', 'TK TUNAS MELATI', 'PEREMPUAN', '', 'GROBOGAN', '2016-11-04', 'Perumahan Sambak', 1, 9, '', 'DANYANG', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'PERUMAHAN SAMBA', 2, 'Menyanyi'),
(98, 'PPDB2022044', 'KIRANA HAYU PRAMUDITA', 'TK TAMAN PELANGI', 'PEREMPUAN', '', 'GROBOGAN', '2016-09-14', 'LINGKUNGAN KELING', 3, 2, '', 'KALONGAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'LINGKUNGAN KELI', 2, ''),
(99, 'PPDB2022045', 'AZZAHRA YUNA MUSTAQIM', 'TK ABA 2 PURWODADI', 'PEREMPUAN', '', 'GROBOGAN', '2016-08-26', 'DUSUN SUKOHARJO', 7, 4, '', 'KRANGGANHARJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN SUKOHARJO', 1, 'Mewarnai'),
(100, 'PPDB2022046', 'ARDEO MAULANA PRANANDITA', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2016-10-27', 'JL. R. SUPRAPTO GG KEPODANG 28', 13, 21, '', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. R. SUPRAPTO', 2, ''),
(101, 'PPDB2022047', 'AZKA ADHYASTHA', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2016-05-04', 'JL. R. SUPRAPTO GG DWOROWATI', 5, 21, '', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. R. SUPRAPTO', 2, ''),
(102, 'PPDB2022048', 'AZQIARA NAFIA HUSNA', 'RA IT USWATUN HASANAH', 'PEREMPUAN', '', 'GROBOGAN', '2016-08-25', 'DUSUN LAJER', 5, 1, '', 'LAJER', 'PENAWANGAN', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN LAJER RT ', 2, 'Menggambar/Mewarnai'),
(103, 'PPDB2022049', 'MUHAMMAD AZHAR DAUD', 'RAIT AL FIRDAUS PURWODADI', 'LAKI-LAKI', '', 'GROBOGAN', '2016-10-17', 'Jl. Kebondalem Utara No.47', 8, 14, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'PURWODADI', 2, ''),
(104, 'PPDB2022050', 'NAUZAN ADHITAMA PRASYA', 'RA IT AL FIRDAUS', 'LAKI-LAKI', '', 'GROBOGAN', '1981-10-04', 'Perumahan Ayodya 2 Blok F no 11', 2, 9, 'PENGANTEN', 'PUTAT', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'Tidak ada', 'Tidak', 'PERUMAHAN AYODY', 3, 'Berhitung'),
(105, 'PPDB2022051', 'RAJENDRA AHZA PRADIPTA GR', 'PAUDQU ALMAJIDA', 'LAKI-LAKI', '', 'GROBOGAN', '2016-04-13', 'Gang Dworowati 3 Purwodadi', 5, 21, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'nindyinsani@gmail.com', 'ISLAM', '', '', 'GANG DWOROWATI ', 1, 'Menggambar'),
(106, 'PPDB2022052', 'KAYYIS SULTON AULIYAK', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2017-01-15', 'Sukoharjo', 1, 5, 'SUKOHARJO', 'KRANGGANHARJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'SUKOHARJO RT 01', 5, 'main sepak bola'),
(107, 'PPDB2022053', 'ALBY ZAIDAN MIKAIL', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2016-07-01', 'Jalan Merapi No 30', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JALAN MERAPI NO', 2, 'menggambar'),
(108, 'PPDB2022054', 'BILQIS AQILA SANTOSO', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2016-04-12', 'Genuksuran RT 01 RW 01 Kecamatan Purwodadi', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'Kejang absan', '', 'GENUKSURAN RT 0', 2, ''),
(109, 'PPDB2022055', 'RAYENDRA SYARIF ZAM ZAMI', 'RA IT AL FIRDAUS', 'LAKI-LAKI', '', 'GROBOGAN', '2016-05-04', 'Jl kepodang 3 no 16, sambak', 1, 7, 'SAMBAK', 'DANYANG', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'jenahayu89@gmail.com', 'ISLAM', '', '', 'JL UNTUNG SUROP', 1, ''),
(110, 'PPDB2022056', 'MUHAMMAD TAUFIQUL HAKIM A', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN,JAWA TENGAH', '2017-01-26', 'SENDANGSARI,TAMBIREJO,TOROH,GROBOGAN', 4, 7, 'SENDANGSARI', 'TAMBIREJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'newbilqis3@gmail.com', 'ISLAM', '', '', 'SENDANGSARI,004', 1, ''),
(111, 'PPDB2022057', 'RAHIMA RISQI RAMADHAN', 'TK PGRI', 'LAKI-LAKI', '', 'GROBOGAN', '2016-06-18', 'Jl. Untung Suropati RT 05 RW 19 Simpang Lima Utara Purwodadi', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', 'Tangan seb', 'JL. UNTUNG SURO', 1, ''),
(112, 'PPDB2022058', 'PRANAWA SABRANG DYASTONO', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'KARANGANYAR', '2017-05-15', 'Klaster Ramayana No 100 Putat', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'KLASTER RAMAYAN', 1, 'Mewarnai'),
(114, 'PPDB2022060', 'SAFARAZ LUBI ARRAIS', 'TK DHARMA WANITA PULOREJO', 'LAKI-LAKI', '', 'GROBOGAN', '2016-08-12', 'DUSUN WINONG RT 003 RW 003 DESA PULOREJO', 3, 3, 'WINONG', 'PULOREJO', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN WINONG RT', 1, ''),
(115, 'PPDB2022061', 'FIOLA SHANUM ALMAHYRA', 'BA AISIYAH GODONG', 'PEREMPUAN', '', 'SEMARANG', '2016-09-01', 'Gang Bima karanganyar Rt 04 Rw 01 Godong', 4, 1, 'KARANGANYAR', 'GODONG', 'GODONG', 'KAB. GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', 'adynugroho001@gmail.com', 'ISLAM', '', '', 'GG BIMA RT 04 R', 3, 'MENGGAMBAR'),
(116, 'PPDB2022062', 'FARADIBA HANNA PRATIWI', 'TK WONDERKIDS', 'PEREMPUAN', '', 'GROBOGAN', '2016-10-01', 'Jl. Gajahmada No. 14 Purwodadi', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. GAJAHMADA N', 3, ''),
(117, 'PPDB2022063', 'KENZY PRADIPTA ADINATA', 'TK DHARMA WANITA 1 CINGKR', 'LAKI-LAKI', '', 'GROBOGAN', '2017-01-30', 'Dusun Tegal RT 01 RW 06 Cingkrong', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN TEGAL RT ', 2, ''),
(118, 'PPDB2022064', 'ALFA MARIO YUDHISTIRA', 'RA IT AL FIRDAUS PURWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2017-06-28', 'Samben RT 05 RW 05 Pilangpayung Toroh', 0, 0, '', '', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'SAMBEN RT 05 RW', 1, ''),
(119, 'PPDB2022065', 'NABILA VELMA AZZALEA', 'TK TUNAS MELATI SAMBAK', 'PEREMPUAN', '', 'GROBOGAN', '2016-03-30', 'Jl. Kepodang No. 26 RT 01 RW 07 Sambak, Danyang', 0, 0, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. KEPODANG NO', 3, 'Menggambar'),
(120, 'PPDB2022066', 'MUHAMMAD ARKHAN AL GHANI', 'PAUD TPA TAMAN PELANGI', 'LAKI-LAKI', '3174431624', 'GROBOGAN', '2017-07-13', 'Sendangsari RT 04 RW 07 Tambirejo Toroh', 4, 7, 'SENDANGSARI', 'TAMBIREJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'SENDANGSARI RT ', 3, ''),
(121, 'PPDB2022067', 'ANEZKA KHAIRA PUTRI', 'RAIT AL FIRDAUS', 'PEREMPUAN', '3176398489', 'GROBOGAN', '2017-01-06', 'DUSUN TUMENGGUNGAN', 9, 3, 'TUMENGGUNGAN', 'GENUKSURAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'TIDAK ADA', 'TIDAK', 'DSN TUMENGGUNGA', 1, 'MEWARNAI'),
(122, 'PPDB2022068', 'ALIFIA QURROTA AYUN', 'TKIT ISLAMIC CENTRE', 'PEREMPUAN', '', 'GROBOGAN', '2016-10-10', 'Jl. Untung Suropati Lingkungan Plendungan, Gg. Brumbung III', 3, 1, '', '', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. UNTUNG SURO', 1, 'mewarnai'),
(123, 'PPDB2023069', 'ZALFA NAQIYYA ANINDYA SUT', 'TK BA AISYIYAH DEPOK', 'PEREMPUAN', '', 'MERAUKE', '2017-05-09', 'Dusun Depok Utara', 7, 1, 'DEPOK UTARA', 'DEPOK', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DEPOK UTARA RT ', 2, ''),
(124, 'PPDB2023070', 'HIDAYAH BELA PRATIWI', 'HIDAY', 'PEREMPUAN', '3177001762', 'GROBOGAN', '2017-01-03', 'Plendungan RT 04 RW 03 Kuripan', 4, 3, 'PLENDUNGAN', 'KURIPAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'PLENDUNGAN RT 0', 4, 'Menggambar'),
(125, 'PPDB2023071', 'KHAIRINNISWA ANINDYA PUTR', 'TK PRIMADONA BANGSA', 'PEREMPUAN', '', 'SRAGEN', '2017-05-10', 'Dusun Krangganharjo', 7, 5, 'KRANGGANHARJO', 'KRANGGANHARJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'KRANGGANHARJO R', 1, ''),
(126, 'PPDB2023072', 'AISYATAZ ZAHRA', 'RA IT AL FIRDAUS PURWODAD', 'PEREMPUAN', '', 'GROBOGAN', '2016-08-24', 'Dusun Kepuh', 2, 9, 'KEPUH', 'TAMBIREJO', 'TOROH', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DSN KEPUH, DS T', 1, ''),
(127, 'PPDB2023073', 'FATHAN SHAKA RAFFASYA', 'RA IT AL FIRDAUS PIRWODAD', 'LAKI-LAKI', '', 'GROBOGAN', '2016-11-23', 'Dusun kebondalem', 1, 14, 'KEBONDALEM', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DUSUN KEBONDALE', 1, 'Bermain'),
(128, 'PPDB2023074', 'BIMAONE HASAN INDRIAS', 'KB AL AMIEN', 'LAKI-LAKI', '', 'GROBOGAN', '2016-08-05', 'Dusun Bugel', 5, 5, 'BUGEL', 'SAMBIREJO', 'WIROSARI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'SAMBIREJO RT 05', 3, ''),
(129, 'PPDB2023075', 'BIMATWO HUSEN INDRIAS', 'KB AL AMIEN', 'LAKI-LAKI', '', 'GROBOGAN', '2016-08-05', 'Dusun Bugel', 5, 5, 'BUGEL', 'SAMBIREJO', 'WIROSARI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'SAMBIREJO RT 05', 4, ''),
(130, 'PPDB2023076', 'MUHAMMAD RAFFI ABIYYU', 'TK SINAR BANGSA', 'LAKI-LAKI', '', 'GROBOGAN', '2016-05-27', 'Dusun Kemancan', 2, 2, 'KEMANCAN', 'CANDIWULAN', 'KEBUMEN', 'KEBUMEN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', 'Jalan jinj', 'SEKARAN RT 04 R', 1, ''),
(131, 'PPDB2023077', 'MUHAMAD ALI HABIBI', 'TK AL AKBAR', 'LAKI-LAKI', '3169876322', 'KOTAWARINGIN BARAT', '2016-11-03', 'Jl. Gajah Mada No. 20 B', 4, 8, '', 'KURIPAN', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'alergi', '', 'JL. GAJAH MADA ', 2, 'Mewarnai'),
(132, 'PPDB2023078', 'GENDIS CIKAL ASTAGINA', 'TK IT AL KAUTSAR', 'PEREMPUAN', '', 'SAMARINDA', '2017-04-19', 'JL. MADUKORO NO. 1', 8, 21, '', 'PURWODADI', 'PURWODADI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'JL. MADUKORO NO', 1, ''),
(133, 'PPDB2023079', 'LUCKY ZULIANT JR', 'TK SINAR BANGSA', 'LAKI-LAKI', '3176288043', 'GROBOGAN', '2017-02-09', 'DSN PEDAK DS MENDURAN RT 6/4 BRATI GROBOGAN', 5, 4, 'PEDAK', 'MENDURAN', 'BRATI', 'GROBOGAN', 'JAWA TENGAH', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DSN PEDAK DS ME', 2, ''),
(134, 'PPDB2023080', 'FSD', 'FDS', 'LAKI-LAKI', 'fdsfsfdsfd', 'DSFFFSDF', '2023-08-17', 'dsf', 11, 1, 'FSDFDS', 'FDSFDS', 'SDFDSF', 'DSF', 'FDSFDS', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'fdsfsf', 'fdsfsfs', 'FSDFSDFDSF', 1, ''),
(135, 'PPDB2023081', 'DSFSD', 'FDSF', 'PEREMPUAN', 'dsfsdf', 'DSFS', '2023-08-08', 'fdsfdsf', 1, 1, 'SDFS', 'FSDFS', 'FSDFS', 'FSDFS', 'DSFDSF', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'fsfds', 'fsdfdsf', 'FDSFSDF', 1, ''),
(136, 'PPDB2023082', 'FDS', 'DSF', 'LAKI-LAKI', 'dsfds', 'FSDFS', '2023-08-16', 'fsdfsdf', 1, 1, 'GFDGDGD', 'DFSFSF', 'FSD', 'FDSFS', 'SDFSDF', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'gfdgdfg', 'gdfgdg', 'GFDGFDG', 1, ''),
(137, 'PPDB2023083', 'DFDSF', 'FDSFS', 'LAKI-LAKI', 'fdsfsfdsfd', 'DSFSF', '2023-08-08', 'fsdfds', 1, 2, 'DSFSDF', 'SDFSDFDS', 'FDSFS', 'FSDFS', 'FSDFS', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'fsfd', 'dsfsdf', 'FSDFSF', 1, ''),
(138, 'PPDB2023084', 'ERTRET', 'ETE', 'PEREMPUAN', 'erte', 'TETE', '2023-08-23', 'tretert', 1, 1, 'RETERT', 'ERTET', 'TRETE', 'TRETE', 'RTETE', 'WARGA NEGARA AS', '6281548811047', '', 'ISLAM', 'fsdfsdf', 'fdsfsdf', 'DSFSFDS', 0, ''),
(139, 'PPDB2023085', 'FBF', 'DFGD', 'LAKI-LAKI', 'gdfgd', 'GDFGD', '2023-08-17', 'gdgd', 1, 1, 'GD', 'GDGDG', 'GDG', 'GDGD', 'GDFG', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'gdfgd', 'gdfgd', 'GDFGDG', 1, ''),
(140, 'PPDB2023086', 'HFHF', 'HFHFHGF', 'LAKI-LAKI', 'gfhfgh', 'HFGHFH', '2023-08-08', 'hfhfg', 1, 1, 'FDGDFG', 'GFDGD', 'GFDG', 'DFG', 'GFDGD', 'WARGA NEGARA AS', '6281548811047', '', 'ISLAM', 'gfdgdfg', 'dfgdgf', 'FDGDG', 1, ''),
(141, 'PPDB2023087', 'GRGD', 'FGDFG', 'LAKI-LAKI', 'gdfgd', 'GDFG', '2023-08-21', 'gdfgdg', 1, 1, 'DFGD', 'D', 'GD', 'FDGD', 'GDFGDF', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'fdgdfg', '', 'GDFGFDGD', 1, ''),
(142, 'PPDB2023088', 'FSDF', 'SDFS', 'LAKI-LAKI', 'sfdsdf', 'FSDFS', '2023-08-15', 'fsfsf', 1, 1, 'FDS', 'FSDF', 'FSDSFSDFS', 'FDSFS', 'FSDF', 'WARGA NEGARA AS', '6281548811047', '', 'ISLAM', 'adsasd', 'daads', 'DASD', 1, ''),
(143, 'PPDB2023089', 'SDFSDF', 'FSDF', 'LAKI-LAKI', 'fdsf', 'FDSFS', '2023-08-22', 'fsdfs', 1, 1, 'SDFSDF', 'FDSF', 'SFSDF', 'FDSFF', 'FSFS', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DADASDA', 1, ''),
(144, 'PPDB2023090', 'DADASD', 'ASDASD', 'PEREMPUAN', 'asdasd', 'DASDAD', '2023-08-15', 'dsadad', 1, 1, 'DSADASD', 'DASD', 'DASDA', 'DASD', 'DASDA', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'DASDASDA', 1, ''),
(145, 'PPDB2023091', 'ASDAS', 'DASDSA', 'LAKI-LAKI', 'dsad', 'SADSAD', '2023-08-29', 'dasdasd', 1, 1, 'ADASD', 'DSAD', 'DSADDAS', 'DSADA', 'DASDA', 'WARGA NEGARA AS', '6281548811047', '', 'ISLAM', '', '', 'DSADSAD', 1, ''),
(146, 'PPDB2023092', 'DADASD', 'DASDAD', 'LAKI-LAKI', 'dsada', 'DASDAD', '2023-08-14', 'dasdad', 1, 1, 'DADSA', 'ADSASD', 'DASD', 'DASDA', 'DASDA', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', 'sadasd', 'dsadsad', 'DADASDA', 1, ''),
(147, 'PPDB2023093', 'SDFDSFS', 'FSDFS', 'LAKI-LAKI', 'fdsfs', 'FDSFS', '2023-08-02', 'fdsfsdf', 1, 1, 'SDFDS', 'FDSFS', 'FDSFSD', 'FDSFF', 'FDSFDSF', 'WARGA NEGARA IN', '6281548811047', '', 'ISLAM', '', '', 'FDSFSDF', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `id_data_wali` int(11) NOT NULL,
  `nomor_pendaftaran` varchar(15) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(25) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `pendidikan` varchar(15) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT current_timestamp(),
  `pekerjaan` varchar(25) DEFAULT NULL,
  `penghasilan` varchar(30) DEFAULT NULL,
  `nomor_wa` varchar(15) DEFAULT NULL,
  `hubungan_pendaftar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_wali`
--

INSERT INTO `data_wali` (`id_data_wali`, `nomor_pendaftaran`, `nik`, `nama_lengkap`, `alamat`, `pendidikan`, `tempat_lahir`, `tanggal_lahir`, `pekerjaan`, `penghasilan`, `nomor_wa`, `hubungan_pendaftar`) VALUES
(48, 'PPDB2022001', '', '', '', 'PILIH PENDIDIKA', '', '2023-08-14', '', 'PILIH PENGHASILAN', '', ''),
(49, 'PPDB2022002', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(50, 'PPDB2022003', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(51, 'PPDB2022004', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(52, 'PPDB2022005', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(54, 'PPDB2022007', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(55, 'PPDB2022008', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(56, 'PPDB2022009', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(57, 'PPDB2022010', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(58, 'PPDB2022011', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(59, 'PPDB2022012', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(60, 'PPDB2022013', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(61, 'PPDB2022014', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(62, 'PPDB2022015', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(63, 'PPDB2022016', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(64, 'PPDB2022017', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(65, 'PPDB2022018', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(66, 'PPDB2022019', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(67, 'PPDB2022020', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(68, 'PPDB2022021', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(69, 'PPDB2022022', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(70, 'PPDB2022023', '', '', 'Jalan Ampera No.4 Purwodadi Grobogan', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(71, 'PPDB2022024', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(72, 'PPDB2022025', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(73, 'PPDB2022026', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(74, 'PPDB2022027', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(75, 'PPDB2022028', '', 'TRI RUKMINI', 'Ds Keling RT 03 RW 02 Kelurahan Kalongan Purwodadi', 'SMA Sederajat', 'PURWODADI', '0000-00-00', 'SWASTA', 'PILIH PENGHASILAN', '085713722817', 'Nenek'),
(76, 'PPDB2022029', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(77, 'PPDB2022030', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(78, 'PPDB2022031', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(79, 'PPDB2022032', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(80, 'PPDB2022033', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(81, 'PPDB2022034', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(82, 'PPDB2022035', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(83, 'PPDB2022036', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(84, 'PPDB2022037', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(85, 'PPDB2022038', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(86, 'PPDB2022039', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(87, 'PPDB2022040', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(88, 'PPDB2022041', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(89, 'PPDB2022042', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(90, 'PPDB2022043', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(91, 'PPDB2022044', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(92, 'PPDB2022045', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(93, 'PPDB2022046', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(94, 'PPDB2022047', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(95, 'PPDB2022048', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(96, 'PPDB2022049', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(97, 'PPDB2022050', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(98, 'PPDB2022051', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(99, 'PPDB2022052', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(100, 'PPDB2022053', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(101, 'PPDB2022054', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(102, 'PPDB2022055', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(103, 'PPDB2022056', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(104, 'PPDB2022057', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(105, 'PPDB2022058', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(107, 'PPDB2022060', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(108, 'PPDB2022061', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(109, 'PPDB2022062', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(110, 'PPDB2022063', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(111, 'PPDB2022064', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(112, 'PPDB2022065', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(113, 'PPDB2022066', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(114, 'PPDB2022067', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(115, 'PPDB2022068', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(116, 'PPDB2023069', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(117, 'PPDB2023070', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(118, 'PPDB2023071', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(119, 'PPDB2023072', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(120, 'PPDB2023073', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(121, 'PPDB2023074', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(122, 'PPDB2023075', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(123, 'PPDB2023076', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(124, 'PPDB2023077', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(125, 'PPDB2023078', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(126, 'PPDB2023079', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(127, 'PPDB2023081', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'PPDB2023082', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'PPDB2023083', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'PPDB2023085', '', '', '', 'PILIH PENDIDIKA', '', '2023-08-10', '', 'PILIH PENGHASILAN', '', ''),
(131, 'PPDB2023091', '', '', '', 'PILIH PENDIDIKA', '', '2023-08-29', '', 'PILIH PENGHASILAN', '', ''),
(132, 'PPDB2023092', '', '', '', 'PILIH PENDIDIKA', '', '0000-00-00', '', 'PILIH PENGHASILAN', '', ''),
(133, 'PPDB2023093', '', '', '', 'PILIH PENDIDIKA', '', '2023-08-08', '', 'PILIH PENGHASILAN', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `pengumuman`) VALUES
(1, '<p>PPDB diadakan pada tanggal 1-23 Desember 2023</p>');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `kode_pesan` varchar(20) NOT NULL,
  `isi_pesan` text NOT NULL,
  `sistem` varchar(20) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `kode_pesan`, `isi_pesan`, `sistem`) VALUES
(1, 'daftar', '_Assalamualaikum Wr wb._\r\n\r\nTerima kasih telah melakukan pendaftaran di *SDIT Al Firdaus Purwodadi*, data anda telah kami simpan\r\nUntuk selanjutnya mohon menunggu konfirmasi pembayaran anda.\r\n\r\nCetak bukti pendaftaran :\r\nhttp://www.localhost/ppdbsd/printdata.php?nomor=!nodaftar!\r\n\r\nInformasi status pendaftaran :  \r\nhttp://www.localhost/ppdbsd/?hal=status&nomor=!nodaftar!', 'yes'),
(3, 'bayar', '_Assalamualaikum Wr Wb._\r\nPembayaran Anda telah terkonfirmasi dengan\r\n\r\nNama	: !nama!\r\nNomor	: !nodaftar!\r\n\r\nUntuk tahap selanjutnya,kami harap untuk segera melakukan *verifikasi berkas beserta sesi wawancara bersama Ananda !nama!* dengan datang ke *SD IT Al Firdaus Purwodadi* yang akan dilaksanakan pada\r\n\r\nTanggal	: Selasa, 2 Agustus 2023\r\nWaktu	: 08.00 s/d Selesai\r\nTempat	: SDIT Al Firdaus Purwodadi\r\n\r\nAtas perhatianya kami ucapkan terima kasih.\r\n_Wassalamualaikum Wr Wb._', 'yes'),
(4, 'verifikasi', '_Assalamualaikum Wr Wb._\r\n\r\nBerkas telah *diverifikasi* oleh *panitia PPDB SDIT Al Firdaus Purwodadi*.\r\nUntuk tahap selanjutnya menunggu pengumuman seleksi yang akan diumumkan paling lambat pada\r\nTanggal	: Selasa, 2 Agustus 2023\r\nWaktu	: 00.00 WIB\r\n\r\nInformasi seleksi dapat klik link berikut :\r\nhttp://www.localhost/ppdbsd/?hal=status&nomor=!nodaftar!', 'yes'),
(5, 'terima', '_Assalamualaikum Wr Wb._\r\n\r\nSelamat calon siswa dengan \r\nNama	: !nama! \r\nNomor	: !nodaftar!\r\n\r\nTelah dinyatakan *LOLOS* dan selanjutnya agar segera melaksanakan daftar ulang pada\r\nTanggal	: Selasa, 2 Agustus 2022\r\nWaktu	: 08.00 WIB s/d Selesai\r\n\r\nInformasi data calon siswa diterima dapat klik link berikut :\r\nhttp://www.localhost/ppdbsd/?hal=status&nomor=!nodaftar!', 'yes'),
(6, 'tolak', '_Assalamualaikum Wr Wb._\r\n\r\nMohon maaf siswa dengan \r\nNama	: !nama! \r\nNomor	: !nodaftar!\r\n\r\nTelah dinyatakan *BELUM LOLOS* dan untuk berkas verifikasi dapat anda ambil pada\r\nTanggal	: Selasa, 2 Agustus 2022\r\nWaktu	: 08.00 WIB s/d Selesai\r\n\r\nTetap semangat dan terima kasih .\r\n\r\nInformasi data calon siswa diterima dapat klik link berikut :\r\nhttp://www.localhost/ppdbsd/?hal=status&nomor=!nodaftar!', 'yes'),
(7, 'HALO KAWAN', 'HALO KAWAN', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `usename` varchar(25) NOT NULL,
  `password` text NOT NULL,
  `repassword` text NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `usename`, `password`, `repassword`, `nama_lengkap`, `email`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin123', 'admin', 'admin@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id_bukti_pembayaran`),
  ADD KEY `bukti_pembayaran_foreign_siswa` (`nomor_pendaftaran`);

--
-- Indexes for table `data_ayah`
--
ALTER TABLE `data_ayah`
  ADD PRIMARY KEY (`id_data_ayah`),
  ADD KEY `ayah_foreign_siswa` (`nomor_pendaftaran`);

--
-- Indexes for table `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD PRIMARY KEY (`id_data_ibu`),
  ADD KEY `ibu_foreign_siswa` (`nomor_pendaftaran`);

--
-- Indexes for table `data_jalur`
--
ALTER TABLE `data_jalur`
  ADD PRIMARY KEY (`id_data_jalur`),
  ADD KEY `jalur_foreign_siswa` (`nomor_pendaftaran`);

--
-- Indexes for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD PRIMARY KEY (`id_data_pendaftaran`),
  ADD KEY `pendaftaran_foreign_siswa` (`nomor_pendaftaran`);

--
-- Indexes for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD PRIMARY KEY (`id_data_prestasi`),
  ADD KEY `prestasi_foreign_siswa` (`nomor_pendaftaran`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_data_siswa`),
  ADD UNIQUE KEY `nomor_pendaftaran` (`nomor_pendaftaran`);

--
-- Indexes for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id_data_wali`),
  ADD KEY `wali_foreign_siswa` (`nomor_pendaftaran`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id_bukti_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `data_ayah`
--
ALTER TABLE `data_ayah`
  MODIFY `id_data_ayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `data_ibu`
--
ALTER TABLE `data_ibu`
  MODIFY `id_data_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `data_jalur`
--
ALTER TABLE `data_jalur`
  MODIFY `id_data_jalur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  MODIFY `id_data_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  MODIFY `id_data_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_data_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `id_data_wali` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD CONSTRAINT `bukti_pembayaran_foreign_siswa` FOREIGN KEY (`nomor_pendaftaran`) REFERENCES `data_siswa` (`nomor_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_ayah`
--
ALTER TABLE `data_ayah`
  ADD CONSTRAINT `ayah_foreign_siswa` FOREIGN KEY (`nomor_pendaftaran`) REFERENCES `data_siswa` (`nomor_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_ibu`
--
ALTER TABLE `data_ibu`
  ADD CONSTRAINT `ibu_foreign_siswa` FOREIGN KEY (`nomor_pendaftaran`) REFERENCES `data_siswa` (`nomor_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_jalur`
--
ALTER TABLE `data_jalur`
  ADD CONSTRAINT `jalur_foreign_siswa` FOREIGN KEY (`nomor_pendaftaran`) REFERENCES `data_siswa` (`nomor_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_pendaftaran`
--
ALTER TABLE `data_pendaftaran`
  ADD CONSTRAINT `pendaftaran_foreign_siswa` FOREIGN KEY (`nomor_pendaftaran`) REFERENCES `data_siswa` (`nomor_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_prestasi`
--
ALTER TABLE `data_prestasi`
  ADD CONSTRAINT `prestasi_foreign_siswa` FOREIGN KEY (`nomor_pendaftaran`) REFERENCES `data_siswa` (`nomor_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD CONSTRAINT `wali_foreign_siswa` FOREIGN KEY (`nomor_pendaftaran`) REFERENCES `data_siswa` (`nomor_pendaftaran`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
