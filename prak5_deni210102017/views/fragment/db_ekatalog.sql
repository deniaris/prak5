-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 03:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `db_ekatalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id` int(11) NOT NULL,
  `isbn` char(13) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `tanggal_rilis` date NOT NULL,
  `jumlah_halaman` int(7) NOT NULL,
  `sinopsis` text NOT NULL,
  `id_penerbit` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tersedia` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id`, `isbn`, `judul`, `pengarang`, `tanggal_rilis`, `jumlah_halaman`, `sinopsis`, `id_penerbit`, `gambar`, `tersedia`) VALUES
(1, '9786230036439', 'Mastering AutoCAD 3D Modeling', 'Hari Aria Soma', '2022-11-09', 245, 'Berisi kumpulan soal latihan dari berbagai model 3D termasuk langkah-langkah penyelesaiannya. Materi soal mencakup hampir semua perintah yang diperlukan, mulai dari pemodelan 3D (Extrude, Sweep, Presspull, Subtract, Union, Revolve, dan sebagainya), UCS, Dimensioning 3D, Profiling & Proyeksi, dan Layouting. Langkah-langkah penyelesaian yang diberikan di buku ini dapat menuntun Anda menghadapi kasus-kasus 3D serupa yang mungkin dijumpai dalam pekerjaan. Buku ini dibuat untuk memenuhi kebutuhan para pengguna yang sudah menguasai AutoCAD 2D dan ingin mengembangkan skill menjadi seorang 3D Modeler, juga bagi para desainer yang memiliki minat dalam modeling 3D. Buku ini juga bisa dipakai sebagai buku pegangan sekaligus latihan dan evaluasi di lembaga-lembaga pendidikan komputer yang membuka kelas AutoCAD Advance (3D Modeling). Sistematikanya disusun berdasarkan pengalaman penulis dalam mengajar AutoCAD di berbagai Lembaga Pendidikan Komputer dan perusahaan-perusahaan Manufaktur di Jakarta.', 2, 'autocad.jpg', 1),
(2, '9789790766549', 'Manajemen Evaluasi Program Pendidikan Konsep Prinsip dan Aplikasinya di Sekolah/Madrasah', 'Rusdiana', '2017-07-01', 246, '', 2, 'mmevalusasip.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penerbit`
--

CREATE TABLE `tbl_penerbit` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telpon` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_penerbit`
--

INSERT INTO `tbl_penerbit` (`id`, `nama`, `alamat`, `telpon`, `email`) VALUES
(1, 'PT.Elex Media Komputindo', 'Gedung Kompas-Gramedia I Lantai 2', '+62-21-53650110', 'redaksi@elex.media'),
(2, 'Pustaka Setia', 'Jalan BKR (Lingkar Selatan) No. 162 – 164, Bandung 40253', '(022) 521 0588', 'pustaka_seti@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_isbn_unique` (`isbn`);

--
-- Indexes for table `tbl_penerbit`
--
ALTER TABLE `tbl_penerbit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_penerbit`
--
ALTER TABLE `tbl_penerbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
