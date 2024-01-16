-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220817.de1eb66dbf
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2024 pada 07.51
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil_vikriramadhan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mobil_vikri`
--

CREATE TABLE `tbl_mobil_vikri` (
  `no_plat_vikri` varchar(10) NOT NULL,
  `nama_mobil_vikri` varchar(25) NOT NULL,
  `brand_mobil_vikri` varchar(25) NOT NULL,
  `tipe_transmisi_vikri` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_mobil_vikri`
--

INSERT INTO `tbl_mobil_vikri` (`no_plat_vikri`, `nama_mobil_vikri`, `brand_mobil_vikri`, `tipe_transmisi_vikri`) VALUES
('Z 1232 FE', 'Grand Vitara', 'SUZUKI', 'Manual'),
('Z 1276 HR', 'Agya', 'TOYOTA', 'Otomatis K'),
('Z 3326 FR', 'Sigra', 'DAIHATSU', 'Manual'),
('Z 3544 SA', 'L 300', 'MITSUBISHI', 'Manual'),
('Z 4321 RS', 'All New Xenia', 'DAIHATSU', 'Automated '),
('Z 5546 HF', 'Avanza', 'TOYOTA', 'Otomatis K'),
('Z 5566 AS', 'Pajero Sport', 'MITSUBISHI', 'Manual'),
('Z 6435 AR', 'Xpander', 'MITSUBISHI', 'Automated '),
('Z 6545 HE', 'Avanza', 'TOYOTA', 'Manual'),
('Z 7676 RF', 'All New Ertiga', 'SUZUKI', 'Otomatis K'),
('Z 9687 HA', 'New Calya', 'TOYOTA', 'Manual');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan_vikri`
--

CREATE TABLE `tbl_pelanggan_vikri` (
  `nik_ktp_vikri` varchar(16) NOT NULL,
  `nama_vikri` varchar(35) NOT NULL,
  `no_hp_vikri` varchar(15) NOT NULL,
  `alamat_vikri` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pelanggan_vikri`
--

INSERT INTO `tbl_pelanggan_vikri` (`nik_ktp_vikri`, `nama_vikri`, `no_hp_vikri`, `alamat_vikri`) VALUES
('320282000', 'Vikri Ramadhan', '089527701407', 'Jl.Salamnunggal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_rental_vikri`
--

CREATE TABLE `tbl_rental_vikri` (
  `no_trx_vikri` varchar(20) NOT NULL,
  `nik_ktp_vikri` varchar(16) NOT NULL,
  `no_plat_vikri` varchar(10) NOT NULL,
  `tgl_rental_vikri` date NOT NULL,
  `jam_rental_vikri` time NOT NULL,
  `harga_vikri` int(11) NOT NULL COMMENT 'harga per hari',
  `lama_vikri` int(11) NOT NULL COMMENT 'lama per hari',
  `total_bayar_vikri` int(11) NOT NULL COMMENT 'harga * lama'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_rental_vikri`
--

INSERT INTO `tbl_rental_vikri` (`no_trx_vikri`, `nik_ktp_vikri`, `no_plat_vikri`, `tgl_rental_vikri`, `jam_rental_vikri`, `harga_vikri`, `lama_vikri`, `total_bayar_vikri`) VALUES
('TRX-20240106041951', '32028201100', 'Z 7676 RE', '2024-01-08', '19:59:00', 250000, 2, 500000),
('TRX-20240107023447', '220312640900', 'Z 1232 FE', '2024-01-09', '10:16:00', 175000, 2, 350000),
('TRX-20240109021707', '3322112233212', 'Z 3326 FR', '2024-01-09', '08:23:00', 250000, 1, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user_vikri`
--

CREATE TABLE `tbl_user_vikri` (
  `id_user_vikri` int(11) NOT NULL,
  `username_vikri` varchar(35) NOT NULL,
  `password_vikri` varchar(100) NOT NULL,
  `nama_lengkap_vikri` varchar(35) NOT NULL,
  `level_vikri` varchar(5) NOT NULL COMMENT 'admin/user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user_vikri`
--

INSERT INTO `tbl_user_vikri` (`id_user_vikri`, `username_vikri`, `password_vikri`, `nama_lengkap_vikri`, `level_vikri`) VALUES
(1, 'admin', 'admin', 'administrator', 'admin'),
(2, 'vikri', '123', 'Vikri Ramadhan', 'user'),
(5, 'widi', '123', 'widi nurfatwa', 'user'),
(7, 'user1', '123', 'user1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_mobil_vikri`
--
ALTER TABLE `tbl_mobil_vikri`
  ADD PRIMARY KEY (`no_plat_vikri`);

--
-- Indeks untuk tabel `tbl_pelanggan_vikri`
--
ALTER TABLE `tbl_pelanggan_vikri`
  ADD PRIMARY KEY (`nik_ktp_vikri`);

--
-- Indeks untuk tabel `tbl_rental_vikri`
--
ALTER TABLE `tbl_rental_vikri`
  ADD PRIMARY KEY (`no_trx_vikri`);

--
-- Indeks untuk tabel `tbl_user_vikri`
--
ALTER TABLE `tbl_user_vikri`
  ADD PRIMARY KEY (`id_user_vikri`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_user_vikri`
--
ALTER TABLE `tbl_user_vikri`
  MODIFY `id_user_vikri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
