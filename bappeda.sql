-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2022 pada 02.00
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bappeda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lpn`
--

CREATE TABLE `lpn` (
  `id` int(10) NOT NULL,
  `id_srt_msk` int(10) DEFAULT NULL,
  `doc` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `srt_klr`
--

CREATE TABLE `srt_klr` (
  `id` int(10) NOT NULL,
  `no_urut` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `klasifikasi` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `srt_klr`
--

INSERT INTO `srt_klr` (`id`, `no_urut`, `tanggal`, `no_surat`, `klasifikasi`, `unit`, `file`, `created_at`, `updated_at`) VALUES
(1, '001', '2022-02-03', 'kldgkangkankgn', 'pppppppppppppppppp', 'Bappeda', NULL, '2022-02-15 02:15:05', '2022-02-15 09:22:47'),
(2, '002', '2022-02-11', '123455mmoa/pafm./pafm', 'ddddddd', 'Bappeda', NULL, '2022-02-15 02:21:45', '2022-02-15 09:22:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `srt_msk`
--

CREATE TABLE `srt_msk` (
  `id` int(10) NOT NULL,
  `no_urut` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `no_surat` varchar(255) DEFAULT NULL,
  `perihal` varchar(255) DEFAULT NULL,
  `uraian` text DEFAULT NULL,
  `asal` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `srt_msk`
--

INSERT INTO `srt_msk` (`id`, `no_urut`, `tanggal`, `no_surat`, `perihal`, `uraian`, `asal`, `file`, `created_at`, `updated_at`) VALUES
(7, '0269', '2022-02-14', 'P/0103/Bappeda-C.005/II/2021', 'Undangan', 'Rangka koordinasi dan sinkronisasi penyusunan dokumen', 'Bappeda', 'app/file/surat-masuk/-1644895481-4X6IG.pdf', '2022-02-14 20:24:42', '2022-02-14 20:24:42'),
(8, '0268', '2022-02-14', 'P/0322/050/BAPPEDA-E.1/II/2022', 'Undangan', 'Sosialisasi, rencana mapping 050-5889 Tahun 2021', 'Sekretariat Daerah', 'app/file/surat-masuk/-1644895985-csozC.pdf', '2022-02-14 20:33:05', '2022-02-14 20:33:05'),
(9, '0267', '2022-02-11', 'P/O3O7/Ekbang-A.005/II/2022', 'Undangan', 'Pembahasan Penyusunan Rencana Kerja dan Anggaran', 'Sekretariat Daerah', 'app/file/surat-masuk/-1644898850-8qvNn.pdf', '2022-02-14 21:20:50', '2022-02-14 21:20:50'),
(11, '0266', '2022-02-14', 'B/26/TU.B-050/II/2022', 'Permohonan', 'Permohonan Tenaga Pendamping', 'RSUD Dr. Agoesdjam', 'app/file/surat-masuk/-1644899009-KES91.pdf', '2022-02-14 21:23:29', '2022-02-14 21:23:29'),
(12, '0265', '2022-02-11', '0309 Tahun 2022', 'Surat Edaran', 'Pedoman Pemberian Hibah dan Bantuan Sosial', 'Bupati Ketapang', 'app/file/surat-masuk/-1644899147-e2lTw.pdf', '2022-02-14 21:25:47', '2022-02-14 21:25:47'),
(14, '0264', '2022-02-14', '001/TS3D-KTP/A/II/22', 'Undangan', 'Penyusunan Rencana Kerja TP3D Tahun 2022', 'TP3D', 'app/file/surat-masuk/-1644899508-F7B5l.pdf', '2022-02-14 21:31:50', '2022-02-14 21:31:50'),
(15, '0263', '2022-01-24', '001/AAN.JKT-PBI/P&L/1/22', 'Tanggapan', 'Menanggapi Surat dari PT Putra Berlian', 'PT ARRTU AGRO NUSANTARA', 'app/file/surat-masuk/-1644899612-JPNZL.pdf', '2022-02-14 21:33:33', '2022-02-14 21:33:33'),
(16, '0262', '2022-02-10', 'P/0251/BPKAD-E.005/II/2022', 'Usulan', 'Penyampaian usulan RKBMD, Pengadaan dan Usulan', 'Sekretariat Daerah', 'app/file/surat-masuk/-1644899818-gyeGP.pdf', '2022-02-14 21:36:58', '2022-02-14 21:36:58'),
(17, '0261', '2022-02-11', 'B/186/DPUTR-E.590/II/2022', 'Undangan', 'Menindaklanjuti Surat Direktur PT Phoenix Alumina', 'Bupati Ketapang', 'app/file/surat-masuk/-1644899964-iiCUG.pdf', '2022-02-14 21:39:24', '2022-02-14 21:39:24'),
(18, '0259', '2022-02-11', 'P/005/0100/BAPPEDA-B/2022', 'Undangan', 'Persiapan Rapat Sinkronisasi Pemenuhan Kuota', 'Bappeda', 'app/file/surat-masuk/0260-1644940151-izCer.pdf', '2022-02-14 21:40:56', '2022-02-17 00:10:50');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `lpn`
--
ALTER TABLE `lpn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `srt_klr`
--
ALTER TABLE `srt_klr`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `srt_msk`
--
ALTER TABLE `srt_msk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `lpn`
--
ALTER TABLE `lpn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `srt_klr`
--
ALTER TABLE `srt_klr`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `srt_msk`
--
ALTER TABLE `srt_msk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
