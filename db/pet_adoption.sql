-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2020 at 11:09 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_petnitipan`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id_administrator` int(20) NOT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `id_shelter` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id_administrator`, `nama`, `username`, `password`, `id_shelter`) VALUES
(1, 'Wawan Santoso', 'Wanan19', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 7),
(2, 'Dimasqi Alifudin', 'mdhimasqi', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 5),
(3, 'Renald Eka', 'renald45', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 10),
(4, 'Thoriq Sujibdo', 'thrq89', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 1),
(5, 'Mamat Perwara', 'mmt12', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 3),
(6, 'Tora Mahmudi', 'tora_m', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 8),
(7, 'Riza Hamdani', 'riiiza', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 6),
(8, 'Puja tobiro', 'puja_puja', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 4),
(9, 'Gambang Tinanjar', 'tinanjar_19', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 2),
(10, 'Satriya Wibowo', 'sty_wbw', ' $2y$10$CyuJSoO.XkjY9mw9O1WRJOQIYp9MN.ER25qtUAXhCvuLdBihyn1L2', 9);

-- --------------------------------------------------------

--
-- Table structure for table `hewan`
--

CREATE TABLE `hewan` (
  `id_hewan` int(20) NOT NULL,
  `nama_hewan` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `panjang` int(20) NOT NULL,
  `berat` double NOT NULL,
  `id_jenis_hewan` int(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1 = belum adopsi,\r\n2 = sudah diadopsi',
  `foto` text NOT NULL,
  `id_kandang` int(20) DEFAULT NULL,
  `id_shelter` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan`
--

INSERT INTO `hewan` (`id_hewan`, `nama_hewan`, `jenis_kelamin`, `panjang`, `berat`, `id_jenis_hewan`, `tanggal_masuk`, `status`, `foto`, `id_kandang`, `id_shelter`) VALUES
(1, 'Shintaro', 'Laki Laki', 40, 3.6, 1, '2020-12-24', 1, '', 3, 10),
(2, 'Tobama', 'Perempuan', 25, 6, 7, '2020-12-24', 1, '', NULL, 3),
(3, 'Koko', 'Laki Laki', 90, 8.7, 2, '2020-12-25', 1, '', 4, 7),
(4, 'Katty', 'Perempuan', 70, 10.3, 1, '2020-12-25', 2, '', 5, 9),
(5, 'Rata', 'Laki Laki', 20, 4.5, 4, '2020-12-23', 1, '', 1, 2),
(6, 'Kirito', 'Laki Laki', 60, 9.5, 2, '2020-12-16', 1, '', 4, 1),
(7, 'Nekoma', 'Perempuan', 40, 6.9, 1, '2020-12-26', 1, '', 3, 9),
(8, 'Bull Frek', 'Laki Laki', 12, 15.6, 2, '2020-12-20', 1, '', 8, 6),
(10, 'Ashuna', 'Perempuan', 30, 5.9, 1, '2020-12-23', 1, '', 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `hewan_mendapatkan_makanan`
--

CREATE TABLE `hewan_mendapatkan_makanan` (
  `id_hewan_mendapatkan_makanan` int(20) NOT NULL,
  `id_hewan` int(20) DEFAULT NULL,
  `id_makanan` int(20) DEFAULT NULL,
  `jumlah` int(100) NOT NULL COMMENT '/gram',
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan_mendapatkan_makanan`
--

INSERT INTO `hewan_mendapatkan_makanan` (`id_hewan_mendapatkan_makanan`, `id_hewan`, `id_makanan`, `jumlah`, `waktu`) VALUES
(4, 4, 1, 1000, '2020-12-27 00:00:00'),
(5, 5, 8, 30, '2020-12-30 14:37:26'),
(7, 5, 8, 12, '2020-12-31 12:29:00');

--
-- Triggers `hewan_mendapatkan_makanan`
--
DELIMITER $$
CREATE TRIGGER `hewan_dapat_makanan` AFTER INSERT ON `hewan_mendapatkan_makanan` FOR EACH ROW UPDATE makanan SET jumlah = jumlah-NEW.jumlah
WHERE id_makanan = NEW.id_makanan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `hewan_mendapatkan_vaksin`
--

CREATE TABLE `hewan_mendapatkan_vaksin` (
  `id_hewan_mendapatkan_vaksin` int(20) NOT NULL,
  `id_hewan` int(20) DEFAULT NULL,
  `id_vaksin` int(20) DEFAULT NULL,
  `jumlah` int(100) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hewan_mendapatkan_vaksin`
--

INSERT INTO `hewan_mendapatkan_vaksin` (`id_hewan_mendapatkan_vaksin`, `id_hewan`, `id_vaksin`, `jumlah`, `waktu`) VALUES
(2, 3, 1, 5, '2020-12-23 00:00:00'),
(5, 5, 8, 1, '2020-12-30 14:38:12'),
(7, 5, 8, 2, '2020-12-31 12:29:00');

--
-- Triggers `hewan_mendapatkan_vaksin`
--
DELIMITER $$
CREATE TRIGGER `hewan_dapat_vaksin` AFTER INSERT ON `hewan_mendapatkan_vaksin` FOR EACH ROW UPDATE vaksin SET jumlah = jumlah - NEW.jumlah WHERE id_vaksin = NEW.id_vaksin
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_hewan`
--

CREATE TABLE `jenis_hewan` (
  `id_jenis_hewan` int(20) NOT NULL,
  `nama_jenis_hewan` varchar(200) NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_hewan`
--

INSERT INTO `jenis_hewan` (`id_jenis_hewan`, `nama_jenis_hewan`, `icon`) VALUES
(1, 'Kucing', 'fas fa-cat'),
(2, 'Anjing', 'fas fa-dog'),
(4, 'Kelinci', 'fas fa-paw'),
(5, 'Monyet', 'fas fa-paw'),
(6, 'Burung', 'fas fa-crow'),
(7, 'Kura Kura', 'fas fa-paw');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kandang`
--

CREATE TABLE `jenis_kandang` (
  `id_jenis_kandang` int(20) NOT NULL,
  `luas` int(30) DEFAULT NULL COMMENT '(m2)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kandang`
--

INSERT INTO `jenis_kandang` (`id_jenis_kandang`, `luas`) VALUES
(3, 30),
(4, 35),
(5, 40),
(6, 45),
(7, 50);

-- --------------------------------------------------------

--
-- Table structure for table `kandang`
--

CREATE TABLE `kandang` (
  `id_kandang` int(20) NOT NULL,
  `nama_kandang` varchar(100) DEFAULT NULL,
  `id_shelter` int(20) DEFAULT NULL,
  `id_jenis_kandang` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kandang`
--

INSERT INTO `kandang` (`id_kandang`, `nama_kandang`, `id_shelter`, `id_jenis_kandang`) VALUES
(1, 'Kandang Kelinci medium', 1, 4),
(2, 'Kandang Tupaai Besar', 1, 5),
(3, 'Kandang Kucing medium', 2, 4),
(4, 'Kandang Anjing Medium', 4, 3),
(5, 'Kandang Kucing Besar', 10, 5),
(7, 'Kandang Ular Besar', 3, 5),
(8, 'Kandang Anjing Besar', 10, 6),
(9, 'Kandang Anjing Super Besar', 4, 7);

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_makanan` int(20) NOT NULL,
  `nama_makanan` varchar(200) NOT NULL,
  `jumlah` int(100) NOT NULL COMMENT '/gram',
  `harga_satuan` int(100) NOT NULL COMMENT '/gram',
  `id_jenis_hewan` int(20) DEFAULT NULL,
  `id_shelter` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama_makanan`, `jumlah`, `harga_satuan`, `id_jenis_hewan`, `id_shelter`) VALUES
(1, 'Whiskas', 11000, 300, 1, 8),
(2, 'Proplan', 10000, 240, 1, 5),
(3, 'Pedigree', 20000, 500, 2, 10),
(4, 'Dog Choize Beef', 10000, 340, 2, 1),
(5, 'Milet Campur', 9000, 370, 6, 4),
(6, 'Mazuri Tortoise', 12000, 250, 7, 2),
(7, 'Daisu Tusukan Bento Food', 15000, 350, 5, 3),
(8, 'Rabbit Alfafa', 15928, 254, 4, 2),
(9, 'Pur 551', 17000, 210, NULL, 7),
(10, 'SUN', 25000, 430, NULL, 9);

-- --------------------------------------------------------

--
-- Table structure for table `pengadopsi`
--

CREATE TABLE `pengadopsi` (
  `id_pengadopsi` int(20) NOT NULL,
  `nama_pengadopsi` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengadopsi`
--

INSERT INTO `pengadopsi` (`id_pengadopsi`, `nama_pengadopsi`, `alamat`, `no_telepon`, `email`) VALUES
(1, 'Reynaldi Ramadhani', 'jl Wonorejo Kabupaten Lumajang', '081234567890', 'reynal12@gmail.com'),
(2, 'Dama Dame', 'jl kahuripan Kota Kediri', '087678534276', 'DamaDam@gmail.com'),
(7, 'Genadi Dharma', 'Jalan Ahmad Yani', '085238831025', 'genadi.alba@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pengadopsi_mengadopsi_hewan`
--

CREATE TABLE `pengadopsi_mengadopsi_hewan` (
  `id_pengadopsi_mengadopsi_hewan` int(20) NOT NULL,
  `id_pengadopsi` int(20) DEFAULT NULL,
  `id_hewan` int(20) DEFAULT NULL,
  `biaya` int(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengadopsi_mengadopsi_hewan`
--

INSERT INTO `pengadopsi_mengadopsi_hewan` (`id_pengadopsi_mengadopsi_hewan`, `id_pengadopsi`, `id_hewan`, `biaya`, `tanggal`) VALUES
(3, 1, 4, 800000, '2020-12-30 19:23:39'),
(4, 1, 5, 80000, '2020-12-30 19:23:39'),
(5, 7, 5, 80000, '2020-12-30 19:23:39');

--
-- Triggers `pengadopsi_mengadopsi_hewan`
--
DELIMITER $$
CREATE TRIGGER `perubahan_status` AFTER INSERT ON `pengadopsi_mengadopsi_hewan` FOR EACH ROW UPDATE hewan SET status = 2
WHERE id_hewan=NEW.id_hewan
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `shelter`
--

CREATE TABLE `shelter` (
  `id_shelter` int(20) NOT NULL,
  `nama_shelter` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shelter`
--

INSERT INTO `shelter` (`id_shelter`, `nama_shelter`, `alamat`, `foto`, `keterangan`, `latitude`, `longitude`) VALUES
(1, 'Pejanten Shelter', 'Jalan Pejaten Barat No. 45T, RT.2/RW.8, West Pejaten, Pasar Minggu, South Jakarta City, Jakarta 12540', 'https://lh5.googleusercontent.com/p/AF1QipOTNh_H4Xo5tSvqdMcXXxoGMEc7ecy64OzYR462=w408-h544-k-no', 'Salah Satu Shelter Hewan terbaik Dijakarta , Dapat Menampung berbagai macam hewan', -6.277038643852861, 106.82554477579782),
(2, 'Cambeal Shelter', 'Larangan, Jumoyo, Kec. Salam, Magelang, Jawa Tengah 56484', 'https://lh5.googleusercontent.com/p/AF1QipP4Aa9KqUCWAbfVqay3b3sOJtR6KrVULXaGM4CX=w408-h544-k-no', '', -7.574394835081535, 110.32106231286363),
(3, 'Kenimal Shelter', 'Jl. Musholla No.22, RT.5/RW.4, Cilandak Tim., Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12560', 'https://lh5.googleusercontent.com/p/AF1QipND8Cg-Ksx6yTxPVXSh3hIdN26vpF-Wg3bGXW7N=w408-h306-k-no', '', -6.275511998031204, 106.81811901997993),
(4, 'Puskeswan Shelter', 'Jl. Harsono RM No.36-28, RT.9/RW.4, Ragunan, Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12550', 'https://lh5.googleusercontent.com/p/AF1QipM47zNyIlRT1q7jUq-cNKx8Rt7xZt4Oaswhmgam=w408-h306-k-no', '', -6.297682290133579, 106.82019927554076),
(5, 'Kucing Depok', 'Jl. Singosari Raya No.5, Mekar Jaya, Kec. Sukmajaya, Kota Depok, Jawa Barat 16411', 'https://lh5.googleusercontent.com/p/AF1QipPP8BrfRkUDn9sU7AHBQT3Lpa-B3oQ_xtFu4Qrn=w408-h408-k-no', '', -6.389653668987451, 106.83551573572099),
(6, 'Van Dhegol Pets Home', 'Jl. Atma Asnawi No.32, Gn. Sindur, Kec. Gn. Sindur, Bogor, Jawa Barat 16340', 'https://lh5.googleusercontent.com/p/AF1QipMpPNvSf9TWB4Mu5xIkSsqvh_bbxANNtfxcEPaS=w408-h721-k-no', '', -6.382881828639392, 106.67326836268883),
(7, 'Animal Defenders Adoption Center', 'Palem Ganda Asri 2 Cluster CC Blok U No. 9, Jl. Barito Raya, RT.001/RW.014, Karang Mulya, Karang Tengah, Tangerang City, Banten 15159', 'https://lh5.googleusercontent.com/p/AF1QipM4wLiSzQOIDH_kEHSzGrOXu0WnfiagUnuRyGsV=w408-h725-k-no', '', -6.191995160996139, 106.71893028781831),
(8, 'Chaca Cathouse', 'Jalan Raya, Sidomulyo, Kec. Selorejo, Blitar, Jawa Timur 66192', 'https://lh5.googleusercontent.com/p/AF1QipPecCF11qA2z10TNPGp7dRToRh1hanFfcy-YeEs=w408-h408-k-no', '', -8.08476181427598, 112.44889803907165),
(9, 'Figoz Cat House', 'Jl. Nuri No.22, Tembokrejo, Kec. Purworejo, Kota Pasuruan, Jawa Timur 67118', 'https://lh5.googleusercontent.com/p/AF1QipMvPAjqwfp3u_GUEMmMMa91imGNIlZ7-Id0jxhO=w426-h240-k-no', '', -7.671222389399245, 112.89521760800704),
(10, 'PoodleGuguk', 'Nginden Intan Timur I No.33, Ngenden Jangkungan, Kec. Sukolilo, Kota SBY, Jawa Timur 60118', 'https://lh5.googleusercontent.com/p/AF1QipM9ywV-cJHsFpSD-fjztyTChzc88cAJr7WrtQjx=w425-h240-k-no', '', -7.30595285838376, 112.77573983852182);

-- --------------------------------------------------------

--
-- Table structure for table `vaksin`
--

CREATE TABLE `vaksin` (
  `id_vaksin` int(20) NOT NULL,
  `nama_vaksin` varchar(200) NOT NULL,
  `harga_satuan` int(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `id_jenis_hewan` int(20) DEFAULT NULL,
  `id_shelter` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vaksin`
--

INSERT INTO `vaksin` (`id_vaksin`, `nama_vaksin`, `harga_satuan`, `jumlah`, `id_jenis_hewan`, `id_shelter`) VALUES
(1, 'Immune Booster Cat', 80000, 40, 1, 2),
(2, 'f4 AntiVirus', 261000, 30, 1, 3),
(3, 'Rabisin', 70000, 25, 2, 1),
(4, 'Eurican 6 Plus', 350000, 20, 2, 6),
(5, 'Wooku Wooku', 120000, 35, 2, 5),
(6, 'KitTenfat', 147900, 34, 1, 7),
(7, 'Pruvax vaksin tricat', 180000, 40, 1, 4),
(8, 'Medoxy LA', 32000, 44, 4, 2),
(9, 'Fluffy', 120000, 50, 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_administrator`),
  ADD KEY `id_shelter` (`id_shelter`);

--
-- Indexes for table `hewan`
--
ALTER TABLE `hewan`
  ADD PRIMARY KEY (`id_hewan`),
  ADD KEY `id_jenis_hewan` (`id_jenis_hewan`),
  ADD KEY `id_kandang` (`id_kandang`),
  ADD KEY `id_shelter` (`id_shelter`);

--
-- Indexes for table `hewan_mendapatkan_makanan`
--
ALTER TABLE `hewan_mendapatkan_makanan`
  ADD PRIMARY KEY (`id_hewan_mendapatkan_makanan`),
  ADD KEY `id_hewan` (`id_hewan`),
  ADD KEY `id_makanan` (`id_makanan`);

--
-- Indexes for table `hewan_mendapatkan_vaksin`
--
ALTER TABLE `hewan_mendapatkan_vaksin`
  ADD PRIMARY KEY (`id_hewan_mendapatkan_vaksin`),
  ADD KEY `id_hewan` (`id_hewan`),
  ADD KEY `id_vaksin` (`id_vaksin`);

--
-- Indexes for table `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  ADD PRIMARY KEY (`id_jenis_hewan`);

--
-- Indexes for table `jenis_kandang`
--
ALTER TABLE `jenis_kandang`
  ADD PRIMARY KEY (`id_jenis_kandang`);

--
-- Indexes for table `kandang`
--
ALTER TABLE `kandang`
  ADD PRIMARY KEY (`id_kandang`),
  ADD KEY `id_shelter` (`id_shelter`),
  ADD KEY `id_jenis_kandang` (`id_jenis_kandang`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_makanan`),
  ADD KEY `id_jenis_hewan` (`id_jenis_hewan`),
  ADD KEY `id_shelter` (`id_shelter`);

--
-- Indexes for table `pengadopsi`
--
ALTER TABLE `pengadopsi`
  ADD PRIMARY KEY (`id_pengadopsi`);

--
-- Indexes for table `pengadopsi_mengadopsi_hewan`
--
ALTER TABLE `pengadopsi_mengadopsi_hewan`
  ADD PRIMARY KEY (`id_pengadopsi_mengadopsi_hewan`),
  ADD KEY `id_hewan` (`id_hewan`),
  ADD KEY `id_pengadopsi` (`id_pengadopsi`);

--
-- Indexes for table `shelter`
--
ALTER TABLE `shelter`
  ADD PRIMARY KEY (`id_shelter`);

--
-- Indexes for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD PRIMARY KEY (`id_vaksin`),
  ADD KEY `id_jenis_hewan` (`id_jenis_hewan`),
  ADD KEY `id_shelter` (`id_shelter`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_administrator` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hewan`
--
ALTER TABLE `hewan`
  MODIFY `id_hewan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hewan_mendapatkan_makanan`
--
ALTER TABLE `hewan_mendapatkan_makanan`
  MODIFY `id_hewan_mendapatkan_makanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hewan_mendapatkan_vaksin`
--
ALTER TABLE `hewan_mendapatkan_vaksin`
  MODIFY `id_hewan_mendapatkan_vaksin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_hewan`
--
ALTER TABLE `jenis_hewan`
  MODIFY `id_jenis_hewan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jenis_kandang`
--
ALTER TABLE `jenis_kandang`
  MODIFY `id_jenis_kandang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kandang`
--
ALTER TABLE `kandang`
  MODIFY `id_kandang` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_makanan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengadopsi`
--
ALTER TABLE `pengadopsi`
  MODIFY `id_pengadopsi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengadopsi_mengadopsi_hewan`
--
ALTER TABLE `pengadopsi_mengadopsi_hewan`
  MODIFY `id_pengadopsi_mengadopsi_hewan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shelter`
--
ALTER TABLE `shelter`
  MODIFY `id_shelter` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `vaksin`
--
ALTER TABLE `vaksin`
  MODIFY `id_vaksin` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`id_shelter`) REFERENCES `shelter` (`id_shelter`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `hewan`
--
ALTER TABLE `hewan`
  ADD CONSTRAINT `hewan_ibfk_2` FOREIGN KEY (`id_kandang`) REFERENCES `kandang` (`id_kandang`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `hewan_ibfk_3` FOREIGN KEY (`id_shelter`) REFERENCES `shelter` (`id_shelter`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `hewan_mendapatkan_makanan`
--
ALTER TABLE `hewan_mendapatkan_makanan`
  ADD CONSTRAINT `hewan_mendapatkan_makanan_ibfk_1` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `hewan_mendapatkan_makanan_ibfk_2` FOREIGN KEY (`id_makanan`) REFERENCES `makanan` (`id_makanan`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `hewan_mendapatkan_vaksin`
--
ALTER TABLE `hewan_mendapatkan_vaksin`
  ADD CONSTRAINT `hewan_mendapatkan_vaksin_ibfk_1` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `hewan_mendapatkan_vaksin_ibfk_2` FOREIGN KEY (`id_vaksin`) REFERENCES `vaksin` (`id_vaksin`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `kandang`
--
ALTER TABLE `kandang`
  ADD CONSTRAINT `kandang_ibfk_1` FOREIGN KEY (`id_shelter`) REFERENCES `shelter` (`id_shelter`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `kandang_ibfk_2` FOREIGN KEY (`id_jenis_kandang`) REFERENCES `jenis_kandang` (`id_jenis_kandang`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `makanan`
--
ALTER TABLE `makanan`
  ADD CONSTRAINT `makanan_ibfk_2` FOREIGN KEY (`id_shelter`) REFERENCES `shelter` (`id_shelter`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `makanan_ibfk_3` FOREIGN KEY (`id_jenis_hewan`) REFERENCES `jenis_hewan` (`id_jenis_hewan`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `pengadopsi_mengadopsi_hewan`
--
ALTER TABLE `pengadopsi_mengadopsi_hewan`
  ADD CONSTRAINT `pengadopsi_mengadopsi_hewan_ibfk_1` FOREIGN KEY (`id_hewan`) REFERENCES `hewan` (`id_hewan`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `pengadopsi_mengadopsi_hewan_ibfk_2` FOREIGN KEY (`id_pengadopsi`) REFERENCES `pengadopsi` (`id_pengadopsi`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `vaksin`
--
ALTER TABLE `vaksin`
  ADD CONSTRAINT `vaksin_ibfk_1` FOREIGN KEY (`id_jenis_hewan`) REFERENCES `jenis_hewan` (`id_jenis_hewan`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `vaksin_ibfk_2` FOREIGN KEY (`id_shelter`) REFERENCES `shelter` (`id_shelter`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
