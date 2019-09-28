-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 11:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `handinha_db_hih`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` int(10) NOT NULL,
  `judul_event` varchar(50) NOT NULL,
  `deskripsi_event` text NOT NULL,
  `foto_event` varchar(3000) NOT NULL,
  `kategori` varchar(3000) NOT NULL,
  `tgl_event` date NOT NULL,
  `tgl_post` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status_event` enum('coming_soon','completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `judul_event`, `deskripsi_event`, `foto_event`, `kategori`, `tgl_event`, `tgl_post`, `status_event`) VALUES
(7, 'Fun Day for Orphans 2019', '<p>s</p>', 'hih3.jpg', 'Dunia Fantasi with Hope Learning Center', '2019-09-28', '2019-09-15 12:04:04', 'coming_soon'),
(8, 'Buka Puasa Bersama 2019', '<p>asdiasdjasldka</p><p><br></p><p>sakjhdkasjkd</p><p>acnkjsncjkancjknc</p><p><br></p><p><br></p><p>nyoba ubah</p>', 'hih5.jpg', '', '2019-09-28', '2019-09-15 16:33:43', 'coming_soon'),
(9, 'Bilik Pintar 2019', '<p>asdasjkdhaskjdashdasjk</p>', 'money.png', '', '2019-09-03', '2019-09-28 08:03:55', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(10) NOT NULL,
  `judul_foto` varchar(100) NOT NULL,
  `deskripsi_foto` varchar(300) NOT NULL,
  `foto` varchar(3000) NOT NULL,
  `id_event` varchar(3000) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_galeri`
--

INSERT INTO `tb_galeri` (`id_galeri`, `judul_foto`, `deskripsi_foto`, `foto`, `id_event`, `tgl_upload`) VALUES
(30019, 'bilik pintar ke 2', '', 'intern1.png', '9', '2019-09-28 08:04:54'),
(30020, 'Fun Day ', '', 'sb.png', '7', '2019-09-28 08:24:56'),
(30021, 'bukber', '', 'pb1.png', '8', '2019-09-28 09:16:21'),
(30022, 'bilik', '', 'kame_(1).png', '9', '2019-09-28 09:25:51'),
(30023, 'bukber lah', '', 'money.png', '8', '2019-09-28 09:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Bilik Pintar'),
(2, 'Fun Day for Orphans'),
(3, 'Dunia Fantasi with Hope Learning Center'),
(4, 'Buka Puasa Bersama Pesantren'),
(5, 'Assisted Kids Program Signing Ceremony'),
(6, 'PAUD Kencana & PAUD Mewar Adoption Ceremony');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kontak`
--

CREATE TABLE `tb_kontak` (
  `id_kontak` int(10) NOT NULL,
  `no_telp` varchar(300) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kontak`
--

INSERT INTO `tb_kontak` (`id_kontak`, `no_telp`, `alamat`) VALUES
(50005, '08973827482', '<p>testing added contactt</p><p>-</p><p>-</p><p>-</p><p>-</p><p>still testing</p>'),
(50006, '0872787823', '<p>st.nksadbjkasd</p><p><br></p><p>asdsd</p>'),
(50007, '08921898321', '<p>tess add</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_misi`
--

CREATE TABLE `tb_misi` (
  `id_misi` int(11) NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_misi`
--

INSERT INTO `tb_misi` (`id_misi`, `misi`) VALUES
(10020, 'To do one service activity per quarter <br> To expose kids to a variety of projects that are “kids 4 kids” driven <br> To eventually identify individual members’ specific interests or causes and pursue activities accordingly <br> To fund raise and understand the value of money and what it costs to organize projects <br> To eventually be able to negotiate with various fund-raising vendors and organize activities on their own by e.g. write proposals, negotiate and lead <div><br></div><div><br></div><div><br></div>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_preview`
--

CREATE TABLE `tb_preview` (
  `id_preview` int(10) NOT NULL,
  `konten_prev` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_preview`
--

INSERT INTO `tb_preview` (`id_preview`, `konten_prev`) VALUES
(20001, 'Founded in August 2018 by a group of 10-12 elementary who want to help other kids in Indonesia. Hand in Hand is a Community service youth group based in Jakarta.&nbsp;');

-- --------------------------------------------------------

--
-- Table structure for table `tb_salesforce`
--

CREATE TABLE `tb_salesforce` (
  `id_salesforce` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_salesforce`
--

INSERT INTO `tb_salesforce` (`id_salesforce`, `deskripsi`) VALUES
(4, '<p>coba nambah lagi</p>'),
(5, '<p>nmabahadsa</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sejarah`
--

CREATE TABLE `tb_sejarah` (
  `id_sejarah` int(10) NOT NULL,
  `sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sejarah`
--

INSERT INTO `tb_sejarah` (`id_sejarah`, `sejarah`) VALUES
(70001, '<p>History of HiH</p><p>-</p><p>-</p><p>-</p><p>Content Testt</p><p><br></p><p>asas</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id_sosmed` int(10) NOT NULL,
  `logo_sosmed` varchar(30) NOT NULL,
  `nama_sosmed` varchar(30) NOT NULL,
  `jenis_sosmed` varchar(30) NOT NULL,
  `link_sosmed` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sosmed`
--

INSERT INTO `tb_sosmed` (`id_sosmed`, `logo_sosmed`, `nama_sosmed`, `jenis_sosmed`, `link_sosmed`) VALUES
(60006, '580b57fcd9996e24bc43c5432.png', 'testing add social media', 'whatsapp', 'http://wa.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `no_hp`, `username`, `password`, `level`) VALUES
(90005, 'aku', '0872198347821', 'namamasteradmin', '7b20ce373288a30fdeb8e49e2851e561', '2'),
(90009, 'adminbaru', '08726372367', 'adminbaru', 'dbcddd2b55ec5b104a2a1a64b8707d4a', '1'),
(90011, 'masteradmin', '08762376712', 'masteradmin', '9f706ab85924bd1aa5f9b3c79f7490bd', '2'),
(90012, 'adminnew', '08978127812', 'adminnew', 'd3698036132b78ae31c3f03d377758d8', '1'),
(90013, 'Alladmin', '08918278127811', 'alladminmastera', '8f12688452cf74d43a01442914c292e6', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_video`
--

CREATE TABLE `tb_video` (
  `id_video` int(10) NOT NULL,
  `judul_video` varchar(30) NOT NULL,
  `deskripsi_video` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_video`
--

INSERT INTO `tb_video` (`id_video`, `judul_video`, `deskripsi_video`, `video`, `tgl_upload`) VALUES
(80080, 'test vid add', '<p>test</p><p><br></p><p><br></p><p>test</p>', '190728HIH preview.mp4', '2019-07-28 19:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_visi`
--

CREATE TABLE `tb_visi` (
  `id_visi` int(11) NOT NULL,
  `visi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_visi`
--

INSERT INTO `tb_visi` (`id_visi`, `visi`) VALUES
(10010, 'To teach compassion and empathy and to encourage others to do similarly&nbsp;');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tb_misi`
--
ALTER TABLE `tb_misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indexes for table `tb_preview`
--
ALTER TABLE `tb_preview`
  ADD PRIMARY KEY (`id_preview`);

--
-- Indexes for table `tb_salesforce`
--
ALTER TABLE `tb_salesforce`
  ADD PRIMARY KEY (`id_salesforce`);

--
-- Indexes for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  ADD PRIMARY KEY (`id_sosmed`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `tb_video`
--
ALTER TABLE `tb_video`
  ADD PRIMARY KEY (`id_video`);

--
-- Indexes for table `tb_visi`
--
ALTER TABLE `tb_visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_event`
--
ALTER TABLE `tb_event`
  MODIFY `id_event` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30024;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kontak`
--
ALTER TABLE `tb_kontak`
  MODIFY `id_kontak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50008;

--
-- AUTO_INCREMENT for table `tb_misi`
--
ALTER TABLE `tb_misi`
  MODIFY `id_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;

--
-- AUTO_INCREMENT for table `tb_preview`
--
ALTER TABLE `tb_preview`
  MODIFY `id_preview` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20002;

--
-- AUTO_INCREMENT for table `tb_salesforce`
--
ALTER TABLE `tb_salesforce`
  MODIFY `id_salesforce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_sejarah`
--
ALTER TABLE `tb_sejarah`
  MODIFY `id_sejarah` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70002;

--
-- AUTO_INCREMENT for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id_sosmed` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60007;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90014;

--
-- AUTO_INCREMENT for table `tb_video`
--
ALTER TABLE `tb_video`
  MODIFY `id_video` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80081;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
