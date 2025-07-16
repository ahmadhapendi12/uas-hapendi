-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2025 pada 08.07
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `year`, `created_at`, `updated_at`) VALUES
(9, 'LASKAR PELANGI', 'Andrea Hirata', 2005, '2025-07-15 20:21:29', '2025-07-15 20:21:29'),
(10, 'BUMI MANUSIA', 'Pramoedya Ananta Toer', 1980, '2025-07-15 20:22:22', '2025-07-15 20:22:22'),
(11, 'CANTIK ITU LUKA', 'Eka Kurniawan', 2002, '2025-07-15 20:22:58', '2025-07-15 20:22:58'),
(12, 'NEGRI 5 MENARA', 'Ahmad Fuadi', 2009, '2025-07-15 20:23:32', '2025-07-15 20:23:32'),
(13, 'SAMAN', 'Ayu Utami', 1998, '2025-07-15 20:24:03', '2025-07-15 20:24:03'),
(17, 'BUMI', 'Tere Liye', 2014, '2025-07-15 22:12:28', '2025-07-15 22:12:28'),
(18, 'AYAT AYAT CINTA', 'Habiburrahman  El-Shirazy', 2004, '2025-07-15 22:13:55', '2025-07-15 22:13:55'),
(19, 'GARIS CINTA', 'Fiersa Besari', 2016, '2025-07-15 22:14:43', '2025-07-15 22:14:43'),
(20, 'HUJAN', 'Tere Liye', 2016, '2025-07-15 22:24:08', '2025-07-15 22:24:08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
