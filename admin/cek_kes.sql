-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 05:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cek_kes`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(11) NOT NULL,
  `nama_gejala` varchar(45) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `kategori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `nama_gejala`, `deskripsi`, `kategori_id`) VALUES
(1, ' Flue', 'Kenaikan suhu tubuh di atas suhu normal', 1),
(2, 'Batuk', 'infeksi saluran pernapasan', 2),
(3, 'Sesak Nafas', 'Kesulitan bernapas', 3),
(4, 'Nyeri Dada', ' ketidaknyamanan di dada', 4),
(5, 'Muan dan Muntah', '  Perasaan ingin muntah ', 5);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` int(11) NOT NULL,
  `pertanyaan_id` int(11) NOT NULL,
  `hasil_jawaban` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `pertanyaan_id`, `hasil_jawaban`, `user_id`) VALUES
(1, 1, 'ya ada, Anda memiliki infeksi virus. Minum banyak cairan, beristirahat, dan ambil obat penurun panas jika suhu tubuh Anda terlalu tinggi. ', 1),
(2, 2, 'jika iya, Batuk Anda kemungkinan disebabkan oleh infeksi saluran pernapasan atas. Istirahat dan minum banyak cairan.', 2),
(3, 3, 'Jika sesak napas disebabkan oleh infeksi saluran pernapasan seperti pneumonia atau bronkitis, dokter mungkin meresepkan antibiotik atau obat antiinflamasi, dan akan menyarankan istirahat dan banyak minum cairan.', 3),
(4, 4, 'jika iya, Nyeri dada tajam bisa disebabkan oleh berbagai masalah, termasuk gangguan otot atau tulang rusuk, masalah pernapasan, atau masalah lainnya.  ', 4),
(5, 5, 'Muntah berulang-ulang bisa menjadi gejala dari berbagai masalah kesehatan, termasuk infeksi saluran pencernaan, gangguan pencernaan, gangguan makan, penyakit perut, atau masalah lainnya.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `deskripsi`, `user_id`) VALUES
(1, 'Demam', 'Kenaikan suhu tubuh yang biasanya disertai dengan menggigil, sakit kepala, dan kelemahan.', 1),
(2, 'Batuk Dan Pilek', ' Tanda umum infeksi saluran pernapasan atas, seperti pilek, batuk, bersin, dan tenggorokan sakit.', 2),
(3, 'Nyeri Dada', 'Gejala umum penyakit jantung, termasuk angina atau serangan jantung.', 3),
(4, 'Mual dan Muntah', 'Gejala umum infeksi lambung atau keracunan makanan.', 4),
(5, 'Diare', 'Peningkatan buang air besar dengan tinja yang cair, yang bisa disebabkan oleh infeksi bakteri, virus, atau penyakit lainnya.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id` int(11) NOT NULL,
  `hasil_pertanyaan` text DEFAULT NULL,
  `gejala_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id`, `hasil_pertanyaan`, `gejala_id`) VALUES
(1, 'Apakah ada gejala lain yang menyertai demam, seperti batuk, pilek, atau sakit kepala?', 1),
(2, 'Apakah batuk Anda berdahak atau kering?', 2),
(3, 'Apakah sesak napas terjadi saat istirahat atau saat beraktivitas fisik?', 3),
(4, 'Apakah nyeri dada Anda terasa berat, tajam, atau seperti tekanan?', 4),
(5, 'Seberapa sering Anda muntah, dan apa yang dikeluarkan saat muntah?', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `umur` varchar(45) DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `umur`, `jenis_kelamin`, `email`, `password`, `role`) VALUES
(1, 'Merry Wulandari', '20', 'P', 'wulan@gmail.com', '12345', NULL),
(2, 'Yohan', '20', 'L', 'yohan@gmail.com', '23456', NULL),
(3, 'try wahyudi', '20', 'L', 'try@gmail.com', '89012', NULL),
(4, 'Agus', '20', 'L', 'agus@gmail.com', '14567', NULL),
(5, 'Tiara', '20', 'P', 'tiara@gmail.com', '90762', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_gejala_kategori1_idx` (`kategori_id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_jawaban_pertanyaan1_idx` (`pertanyaan_id`),
  ADD KEY `fk_jawaban_user1_idx` (`user_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kategori_user1_idx` (`user_id`);

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pertanyaan_gejala1_idx` (`gejala_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gejala`
--
ALTER TABLE `gejala`
  ADD CONSTRAINT `fk_gejala_kategori1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `fk_jawaban_pertanyaan1` FOREIGN KEY (`pertanyaan_id`) REFERENCES `pertanyaan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jawaban_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `fk_kategori_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `fk_pertanyaan_gejala1` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
