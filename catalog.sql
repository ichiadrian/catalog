-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2019 pada 14.04
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `catalog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catalog_list`
--

CREATE TABLE `catalog_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `gambar1` varchar(50) NOT NULL,
  `gambar2` varchar(50) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `panjang` float NOT NULL DEFAULT '0',
  `lebar` float NOT NULL DEFAULT '0',
  `tebal` float NOT NULL DEFAULT '0',
  `diameter` float NOT NULL DEFAULT '0',
  `berat` float NOT NULL DEFAULT '0',
  `tonase` int(11) NOT NULL DEFAULT '0',
  `kadar` float NOT NULL DEFAULT '0',
  `tanggal_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tanggal_edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catalog_list`
--

INSERT INTO `catalog_list` (`id`, `nama_barang`, `gambar1`, `gambar2`, `deskripsi`, `panjang`, `lebar`, `tebal`, `diameter`, `berat`, `tonase`, `kadar`, `tanggal_input`, `tanggal_edit`) VALUES
(6, 'Test', 'IMG-20170526-WA0001.jpg', '', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium, voluptas consequatur nihil quasi repellat quaerat fugiat eum odit eos, voluptatem pariatur magnam laborum voluptate repudiandae incidunt quibusdam et temporibus eligendi?', 80.4, 12, 12, 0, 12, 0, 0, '2019-11-24 08:43:20', '2019-12-01 11:53:22'),
(8, 'Logo Unbor', 'unbor_Logo.png', NULL, 'alskdjfaklsjdfkjaskljfkfajsdkljasdfaskdf  alskdfkajsdklfaklsdjfkjasdkjfkajsdkfj', 12, 12, 12, 0, 12, 0, 0, '2019-11-24 08:48:00', '2019-11-24 13:21:04'),
(9, 'Test', 'Bottom.png', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 23, 23, 23, 0, 23, 0, 12.03, '2019-11-24 08:50:31', '2019-11-30 14:33:59'),
(10, 'Geblek', 'IMG-20170526-WA0002.jpg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 33, 34, 34, 0, 34, 0, 0, '2019-11-24 08:56:24', '2019-11-24 13:21:04'),
(11, 'Apa Aja', '2_digit_up-down.PNG', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 23, 23, 23, 0, 23, 0, 0, '2019-11-24 08:59:20', '2019-11-24 13:21:04'),
(12, 'Ke Bawah', 'motherboard-1.jpg', NULL, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 34, 34, 34, 0, 34, 0, 0, '2019-11-24 08:59:48', '2019-11-24 13:21:04'),
(13, 'Test Emassss', 'Picture2.jpg', 'photography-logo-design_(7).png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet purus at nisi convallis facilisis. Nunc dolor ex, finibus quis tincidunt at, faucibus ut neque. Aenean aliquam et velit laoreet mattis. Duis sit amet ligula nec risus suscipit efficitur. Duis vitae ipsum quis purus eleifend ullamcorper sit amet laoreet elit. Quisque maximus urna et tellus viverra pretium. Duis efficitur bibendum ligula, et viverra ipsum vulputate nec. Suspendisse euismod est metus, non pharetra tortor fringilla a. Maecenas egestas aliquam erat, eget interdum mauris fermentum id. Donec placerat auctor neque quis aliquam. Mauris a lorem id magna aliquam varius. Aenean bibendum velit sed tortor venenatis tempus. ', 32, 32, 4, 0, 99.99, 0, 0, '2019-11-27 14:25:09', '2019-11-27 14:25:09'),
(14, 'Test Barang Baru', 'Petani-Bajak-Sawah.jpg', 'Print_256x2561.png', 'Test tambahan tonase', 25, 25, 25, 0, 99.99, 503, 10.02, '2019-11-27 14:38:06', '2019-11-30 14:22:29'),
(15, 'Test Data Baru', 'Stokes-Hello-Kitty2-1200.jpg', 'brick-clipart-printable-3.jpg', 'Lorem Ipsum', 50, 50, 50, 50, 99.99, 12, 12.02, '2019-11-30 14:25:10', '2019-11-30 15:14:20'),
(16, 'Data ke-10', '9e86810d85ef6a0793dfa854dc33cef7.jpg', '35958.png', 'LoReM IbSum', 32, 65, 98, 47, 99.99, 124, 5.12, '2019-11-30 14:36:00', '2019-11-30 14:39:00'),
(18, 'baru baru', 'medali22.jpg', 'emas4.jpg', '12', 12.1, 12.12, 12.12, 12.12, 12.12, 123, 99.99, '2019-12-01 12:08:14', '2019-12-01 12:18:36'),
(19, 'emas', 'emas5.jpg', 'medali23.jpg', 'emas batang', 20.01, 10.1, 10.1, 10.1, 100.05, 120, 99.99, '2019-12-01 12:22:11', '2019-12-01 12:53:11'),
(20, 'Medali', 'medali24.jpg', 'emas6.jpg', '12', 12.12, 12.12, 12.12, 0.13, 12.99, 123, 99.99, '2019-12-01 12:56:48', '2019-12-01 12:56:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `username`, `password`) VALUES
(2, 'Ryan Septianto', 'ryan', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'wahyu', 'wahyu', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Armand Iskandarsyah', 'armand', 'd138f04ec7016a21acc2ae19ddc708bc');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `catalog_list`
--
ALTER TABLE `catalog_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `catalog_list`
--
ALTER TABLE `catalog_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
