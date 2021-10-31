-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2021 pada 13.30
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testphp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'Fikri Zulfikar Kusmana', 'cueenaktau', 'cueenaktau123@gmail.com\r\n'),
(2, 'fikrizulfikark', 'cueenaktau12', 'cueenaktau1234@gmail.com'),
(3, 'fikrizk', '$2y$10$Z87Q44CbeV6k/mNjRpPABuFmP3C2pYRToQ.faUJU1Xcwwxu.d6aRW', 'cueenak1589@gmail.com'),
(4, 'kunt', '$2y$10$oUwgFGyn8vYW79DMlDlW3ehd0RrS.IgWkRkV6IYmlSgEuquFnLYNy', 'cueenak12345@gmail.com'),
(5, 'abil', '$2y$10$tu8IlAMAvVuMwRXLs.2d/uOInYd73f04go8l49sbwEpqLpm.EVPXO', 'abil@gmail.com'),
(6, 'abil', '$2y$10$ubl2xLYJm4gRBB3ubTUU3etEmMuWoQE/q9AWamIhn7fADA1x5eXX2', 'cueenak1234@gmail.com'),
(7, 'aa', '$2y$10$Of5kYFi1nbR7ZjXhb7MrI.bvJUY4gncoUa5mSinLSy/ZOzo.XPgoG', 'asd@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
