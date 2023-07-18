-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jul 2023 pada 01.04
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lktitekno`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `pesan` text NOT NULL,
  `privil` varchar(10) NOT NULL,
  `sesipesan` varchar(60) NOT NULL,
  `timestamp` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `chat`
--

INSERT INTO `chat` (`id`, `user`, `pesan`, `privil`, `sesipesan`, `timestamp`) VALUES
(1, '1', 'Saya sedang mengalami permasalahan yang luar biasa mohon bantuannya. :)', '1', '1', 1689218283),
(2, '23', 'Memangnya masalahmu apa?', '2', '1', 1689218283),
(3, '1', 'Begini, kemarin aku dikhinati oleh sahabatku, dia merebut orang yang aku suka :(', '1', '1', 1689218283),
(4, '1', 'hahaha', '1', '1', 1689437465),
(8, '1', 'Umm', '1', '1', 1689439515),
(9, '1', 'Anu', '1', '1', 1689439521),
(10, '1', 'Halo?', '1', '1', 1689439626),
(11, '1', 'Halo?', '1', '1', 1689439643),
(12, '1', 'Halo? Kok ga kosong ya?', '1', '1', 1689439649),
(13, '1', 'Hmm', '1', '1', 1689439794),
(14, '1', 'Oh bisa yey', '1', '1', 1689439798),
(15, '1', 'Sebenernya....', '1', '1', 1689439831),
(16, '1', 'Kamu siapa seh', '1', '1', 1689439839),
(17, '1', 'Ndak ada notif udah dibaca atau belum pula', '1', '1', 1689439855),
(18, '1', 'Sedih amat aku chatan malem malem gini', '1', '1', 1689439865),
(19, '1', 'Pagi sih itungannya  ini', '1', '1', 1689439869),
(20, '1', 'Oh waw', '1', '1', 1689439896),
(21, '1', 'Nemu bug saia', '1', '1', 1689439902),
(22, '1', 'Babay', '1', '1', 1689439904),
(23, '1', 'tst lagi', '1', '1', 1689439946),
(24, '1', ':)', '1', '1', 1689466129),
(25, '1', '\"kan katanya dia gamau\"', '1', '1', 1689466137),
(26, '1', 'hehe\"', '1', '1', 1689466141),
(27, '1', '\'', '1', '1', 1689469529),
(28, '1', '\'\'\'', '1', '1', 1689469534),
(29, '1', '\'Nanana\'', '1', '1', 1689469541),
(30, '1', 'Lorem ipsum dolor sit amet 											consectetur adipisicing elit. 											Veritatis, laboriosam eveniet? 											Nostrum modi eum adipisci nesciunt 											corporis accusamus harum itaque 											neque temporibus. Assumenda ex 											laborum, quam praesentium similique 											delectus deserunt. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corrupti aut tempora deleniti facilis ipsa facere inventore, unde enim consequuntur doloremque, nihil pariatur porro at eveniet est itaque sapiente ullam exercitationem.', '1', '1', 1689469653),
(31, '23', 'Hai', '2', '1', 1689501609),
(32, '1', 'Hoi', '1', '1', 1689501699),
(33, '23', 'Yoo', '2', '1', 1689501714),
(34, '23', 'Kenapa?', '2', '1', 1689501719),
(35, '1', 'Hmm', '1', '1', 1689501725);

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `rating` varchar(15) NOT NULL,
  `komen` varchar(300) NOT NULL,
  `privil` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `comment`
--

INSERT INTO `comment` (`email`, `nama`, `rating`, `komen`, `privil`) VALUES
('admin@gmail.com', 'I Made Sandika Wijaya ', '5/5', 'efefaaegagaegeagaeg', '1'),
('admin@gmail.com', 'I Made Sandika Wijaya ', '2/5', 'Too bad for u\r\n', '1'),
('sans@gmail.com', 'Sandika Wijaya', '5/5', 'hahahahaahahah', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mood`
--

CREATE TABLE `mood` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `mood` varchar(15) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mood`
--

INSERT INTO `mood` (`id`, `email`, `waktu`, `tanggal`, `mood`, `pesan`) VALUES
(1, 'admin@gmail.com', '08:07', '09-07-2023', '0', 'Huhehehee'),
(2, 'admin@gmail.com', '08:07', '09-07-2023', '0', 'Huhehehee'),
(3, 'admin@gmail.com', '09:07', '09-07-2023', '0', 'Noooo'),
(4, 'admin3@gmail.com', '10:07', '13-07-2023', '0', 'Aku sedang bertengkar sama sahabat'),
(5, 'admin3@gmail.com', '10:07', '13-07-2023', '0', 'Buruk'),
(6, 'admin3@gmail.com', '10:07', '13-07-2023', '0', 'Buruk'),
(7, 'admin3@gmail.com', '10:07', '13-07-2023', '0', 'Buruk'),
(8, 'admin3@gmail.com', '12:07', '13-07-2023', '0', 'Perasaanku hari ini cukup baik. Tidak sedih, tapi juga tidak terlalu bahagia. Jadi secukupnya. Beberapa hal sudah terjadi hari ini, tapi masih menanti hal-hal lainnya yang hari ini belum usai. Semoga semuanya semakin menyenangkan'),
(9, 'admin3@gmail.com', '12:07', '13-07-2023', '0', 'tes'),
(10, 'admin3@gmail.com', '12:07', '13-07-2023', '0', ''),
(11, 'admin3@gmail.com', '12:07', '13-07-2023', '0', ''),
(12, 'admin3@gmail.com', '12:07', '13-07-2023', '0', 'ekjfoiejofejoifje'),
(13, 'admin3@gmail.com', '12:07', '13-07-2023', '0', 'tes'),
(14, 'admin3@gmail.com', '12:07', '13-07-2023', '0', 'Jieifhiejfoijeoifjoiejfoe'),
(15, 'admin3@gmail.com', '12:07', '13-07-2023', '0', 'Jieifhiejfoijeoifjoiejfoe'),
(16, 'admin3@gmail.com', '15:07', '13-07-2023', '0', 'dwdawfafeafaafaef'),
(17, 'admin3@gmail.com', '15:07', '13-07-2023', '0', 'dwdawfafeafaafaef'),
(18, 'admin3@gmail.com', '22:07', '13-07-2023', '0', 'mfeejfiejfioejofef'),
(19, 'admin3@gmail.com', '22:07', '13-07-2023', '0', 'efafafaef'),
(20, 'admin3@gmail.com', '22:07', '13-07-2023', '0', 'aweawdadafaefaefaef'),
(21, 'admin3@gmail.com', '22:07', '13-07-2023', '0', 'hehehehe'),
(22, 'admin3@gmail.com', '02:07', '14-07-2023', '0', ''),
(23, 'admin3@gmail.com', '02:07', '14-07-2023', '0', 'iefejifjaoifjaiofaefoiaefjaief'),
(24, 'admin3@gmail.com', '02:07', '14-07-2023', '0', 'Hi nama'),
(25, 'admin3@gmail.com', '03:07', '14-07-2023', '0', 'y'),
(26, 'sans@gmail.com', '04:07', '19-07-2023', '0', 'hahhahhahhaa'),
(27, 'sans@gmail.com', '04:07', '19-07-2023', '0', 'hahhahhahhaa'),
(28, 'sans@gmail.com', '04:07', '19-07-2023', '0', 'hohoho'),
(29, 'sans@gmail.com', '1689717562', '', '0', 'huahahahha'),
(30, 'sans@gmail.com', '1689718292', '', 'humble', 'gagaga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `umur` int(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privil` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `email`, `nama`, `umur`, `telp`, `gender`, `password`, `privil`) VALUES
(1, ' admin@gmail.com', ' I Made Sandika Wijaya ', 18, ' 08970299632', ' laki-laki', '$2y$10$fUJLVIMKfERzindjpF4dtuu566ud6OBCOB5QtiKPwySyHXcttHH1y', '1'),
(21, 'sandikakadek2018@gmail.com', 'I Made Sandika Wijaya ', 18, '086565656565', 'perempuan', '$2y$10$bzfPs8R0qouFVBwd2MF/xeIyYG/qT0mWcGPyfPcXaDHlRsvZRRhNq', '1'),
(23, 'admin2@gmail.com', 'Mario', 17, '086565656565', 'laki-laki', '$2y$10$ueMpjCi4cMpI.Ze6h8aVze2HfYa8Li4fMpMh4xBP2D9BPOaccZB7u', '2'),
(25, ' admin3@gmail.com', ' SuperMarioo', 19, ' 086565656565', ' laki-laki', '$2y$10$8io20a6CC/NW6lfyv73eI.zXqWv5Lj8v8gnKd37G7yypEOAEElf5a', '1'),
(26, 'admin4@gmail.com', 'I Made Sandika Wijaya ', 18, '086565656565', 'laki-laki', '$2y$10$OTUJLl2giQPPEYeqU5vt6OvPhWm1xFNQqkUGYgKjnoHDiEI.JcOUm', '1'),
(27, 'admin5@gmail.com', 'I Made Sandika Wijaya ', 18, '086565656565', 'laki-laki', '$2y$10$Hl8EyTarisXPLnKyoFQ8eeDZ90auQr5GIQ3BI1BhR/AEMnlEdAbsO', '1'),
(28, 'admin7@gmail.com', 'I Made Sandika Wijaya ', 18, '086565656565', 'laki-laki', '$2y$10$Armdj47S5QELbzJKrjTKx./JwtS4j02Q5Eo6kevcHqtOJhkc3cs5q', '1'),
(29, 'sans@gmail.com', 'Sandika Wijaya', 19, '08970299632', 'laki-laki', '$2y$10$QCn2G3R1V1VwdTiBh4YjGeXSPcLB.Ft21XQQviVAT1LtRT1lbhJuC', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mood`
--
ALTER TABLE `mood`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `mood`
--
ALTER TABLE `mood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
