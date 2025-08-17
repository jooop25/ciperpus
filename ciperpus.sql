-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2022 pada 09.30
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(2) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `user_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nis`, `nama`, `jk`, `ttl`, `kelas`, `image`, `username`, `password`, `user_akses`) VALUES
('123456789', 'Eduardo Nicholas Tua', 'L', '2001-08-18', 'Teknik Informatika', 'eduardo-nicholas-tua.jpg', 'eduardo', '$2y$05$2OhHFbDegAdGL1hQ11rfEu1GYy.Rb29WSfBTpF5inkJGzUHqFAipW', 2),
('415123141', 'Panji ', 'L', '2005-05-12', 'Teknik Informatika', 'panji-.jpg', 'panji', '$2y$05$GMXc4O2u9/6.XA/Cz..HB.0jxCY4jtOecW4SUBHWAS6r7XMq6LXLW', 2),
('4151921001', 'Seto Pri Anggoro', 'L', '1996-09-09', 'Teknik Mesin', 'seto-pri-anggoro.jpg', 'seto', '$2y$05$EvHtR0iWiNrSN/4J8OkMoOEt4PaP3/PRqkVb5Qt2Nk3M1QCDeUH9K', 2),
('4151921002', 'Adam', 'L', '2000-05-19', 'Teknik Informatika', 'adam.jpg', 'adam', '$2y$05$q9uVU9r8CiCaCxk1DCej0ebIY8Jbwjsdwtfvbs97KLDovziatxJ4y', 2),
('4151921012', 'Nuraini Setia', 'P', '1998-02-13', 'Psikologi', 'nuraini-setia.jpg', 'nuraini', '$2y$05$tRgiqo06GgzMgmz9iQYsg.yUokj2AxNDNJA2IkowMEDQdlJbkSLFW', 2),
('4151921019', 'Cristiano Ronaldo', 'L', '1999-08-07', 'Olahraga', 'cristiano-ronaldo.jpg', 'ronaldo', '$2y$05$iiNuaGmV2zCe4UbkDlDj9OF5aRyKqRs5nD8JvCJI.GWOlHmIb3lUC', 2),
('4151921020', 'Andi Lasmen', 'L', '2000-12-18', 'Teknik Sipil', 'andi-lasmen.jpg', 'andi', '$2y$05$wNc0RVErAMV0oNHXIwRse.5rY.FJrL9wOvkpWKh6Ebmtz9tywvSiq', 2),
('4151921024', 'Angelo Lapenangga', 'L', '2001-07-09', 'Sastra Inggris', 'angelo-lapenangga.jpg', 'angelo', '$2y$05$k7fLB0UzhMst2HlCIEaTDuZc4P72EEi5D5c1FjNGMmsC6qh0CThEW', 2),
('4151921037', 'Hong Gil Dong', 'L', '2006-06-15', 'Teknik Industri', 'hong-gil-dong.jpg', 'hong', '$2y$05$Rus0q1qUuBOUOj2rqlShXuYXlueM1rClshg/ENcCoXus8WMR3/sNO', 2),
('4151921045', 'Erza Farandi', 'L', '2002-05-22', 'Tataboga', 'erza-farandi.jpg', 'erza', '$2y$05$hy/LcIs45MH1NqhjoC/JNucGHWHZ6VGiFr94MeXk8DZ9JsPsyNtbG', 2),
('4151921066', 'Rudi Yanto', 'L', '2000-08-08', 'Teknik Informatika', 'rudi-yanto.jpg', 'rudi', '$2y$05$6lBJWkdJIeHdyWJoOZ8QpeWPcUTD49r8itcEczwoWd3GJYLGgvi12', 2),
('4151921081', 'Diki Wahyudi', 'L', '2000-04-15', 'Broadcasting', 'diki-wahyudi.jpg', 'diki', '$2y$05$pvBz50jM4eNB8e6/IFvg3.k8ZMGpVI0IbxLx.Er6R5PFXucVXmwd.', 2),
('4151921099', 'Leony Augustine', 'P', '2003-12-11', 'Akutansi', 'leony-augustine.jpg', 'leony', '$2y$05$4.8iz7ilmgRCDm0i80uPoOtOlDJMdgF9XhfQOjYERWG1ynfZv19dW', 2),
('4151921100', 'Leonardo', 'L', '2000-02-20', 'Teknik Informatika', 'leonardo.jpg', 'leonardo', '$2y$05$jyxn6eIIu/qyXJ7q5brEwuwe.xRxEPeL88P1zkod9wyClbsfTQFQa', 2),
('4151921341', 'Hanna Anisa', 'P', '2003-03-14', 'Manajemen', 'hanna-anisa.jpg', 'hanna', '$2y$05$9wuJ56gLf0t4lha09egfZ.RKlpdgsX450D.QAgpIcSyiA0OWJ1uUi', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `klasifikasi` varchar(1000) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `pengarang`, `klasifikasi`, `image`) VALUES
('7500', 'Psikologi Kepribadian', 'alwisol', '<p>psikologi</p>', 'psikologi-kepribadian.jpg'),
('7540', 'Akuntansi Intermediate', 'Donald Kieso', '<p>akuntansi</p>', 'akuntansi-intermediate.jpg'),
('7611', 'Desain Kreatif Dengan Adobe Photoshop', 'Wawan', '<p>Belajar photoshop</p>', 'dseain-kreatif-dengan-adobe-potoshop.jpg'),
('7633', 'HTML CSS', 'Edo', 'css', 'html-css.jpg'),
('7689', 'Logika Pemrograman Python', 'Abdul Kadir', '<p>Python </p>', 'logika-pemrograman-python.jpg'),
('7706', 'Membuat Website Portal Berita Dengan Laravel', 'Agus', '<p>Belajar website dengan laravel</p>', 'membuat-website-portal-berita-dengan-laravel.jpg'),
('7707', 'Trik seo & Security CodeIgniter', 'Anhar', '<p>Belajar CodeIgniter</p>', 'trik-seo--security-codeigniter1.jpg'),
('7711', 'CSS & HTML Web Design', 'Budi', '<p>CSS & HTML</p>', 'css--html-web-design.jpg'),
('7712', 'HTML, CSS & JavaScript', 'Lukman', '<p>Belajar HTML, CSS & JavaScript</p>', 'html-css--javascript.jpg'),
('7714', 'Seminggu Belajar Laravel', 'Rahmat', '<p>Laravel</p>', 'seminggu-belajar-laravel.JPG'),
('7715', 'Menyelami Framework Laravel', 'Seto ', '<p>Buku tentang Laravel</p>', 'menyelami-framework-laravel.JPG'),
('7723', 'Computer Graphic Design', 'Rudi', '<p>Computer graphic design combines skills in technology, business and art<</p>', 'computer-graphic-design1.jpg'),
('7726', 'Responsive Web Design With Bootstrap', 'Eduardo', '<p>Bootstrap adalah kerangka kerja CSS yang sumber terbuka dan bebas untuk meranca</p>', 'responsive-web-design-with-bootstrap.jpg'),
('7745', 'PHP Advanced', 'Agus salim', '<p>PHP adalah salah satu bahasa pemrograman yang wajb dipelajari dalam hal pengembangan website</p>', 'php-advanced1.jpg'),
('7751', 'Belajar Pemrograman dengan Visual Studio', 'Jubilee Enterprise', '<p>visual studio code</p>', 'belajar-pemrograman-dengan-visual-studio.jpg'),
('7777', 'Dasar-Dasar Pemrograman Dengan Python', 'Wenty Dwi Yuniarti', '<p>Python</p>', 'dasardasar-pemrograman-dengan-python.jpg'),
('7792', 'Buku Sakti Pemrograman Web', 'Didik Setiawan', '<p>HTML, CSS, PHP, MySQL & Javascript</p>', 'buku-sakti-pemrograman-web1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengembalian`
--

CREATE TABLE `pengembalian` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `denda` varchar(2) DEFAULT NULL,
  `nominal` double DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengembalian`
--

INSERT INTO `pengembalian` (`id_transaksi`, `tgl_pengembalian`, `denda`, `nominal`, `id_petugas`) VALUES
('20220426001', '2022-04-26', 'N', 0, 9),
('20220426002', '2022-04-26', 'N', 0, 9),
('20220517003', '2022-05-17', 'N', 0, 2),
('20220524005', '2022-05-24', 'Y', 10000, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `user_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `full_name`, `password`, `user_akses`) VALUES
(1, 'admin', 'Admin Perpus', '$2y$05$dCQw9cQ64MNVNht5hAE4tuLgOtkiApIMWIG9oRiJ.kQsWY6PD6J9.', 1),
(2, 'admin2', 'Eduardo Nicholas', '$2y$05$NOFCFcf3jHyjPYEcCbIVdO3XRWTOngSkloHnB6yEAaPuJ2f4jRVVm', 1),
(17, 'admin3', 'Seto Pri Anggoro', '$2y$05$GDT.d3Q1TDLlzZ9DJSG2HeKg0uegkQLtwzlruZvebRp9QEoelJPzG', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp`
--

CREATE TABLE `tmp` (
  `kode_buku` varchar(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(12) DEFAULT NULL,
  `nis` varchar(10) DEFAULT NULL,
  `kode_buku` varchar(5) DEFAULT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nis`, `kode_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `id_petugas`) VALUES
('20220426001', '4151921001', '7745', '2022-04-26', '2022-05-03', 'Y', 9),
('20220426002', '4151921001', '7711', '2022-04-26', '2022-05-03', 'Y', 9),
('20220517003', '4151921002', '7633', '2022-05-17', '2022-05-24', 'Y', 2),
('20220517004', '4151921002', '7712', '2022-05-17', '2022-05-24', 'N', 2),
('20220524005', '123456789', '7726', '2022-05-24', '2022-05-31', 'Y', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
