-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2022 pada 03.05
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `email_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_biaya_kirim`
--

CREATE TABLE `tb_biaya_kirim` (
  `id_biaya_kirim` int(11) NOT NULL,
  `id_jenis_pengiriman` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `biaya_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pemesanan`
--

CREATE TABLE `tb_detail_pemesanan` (
  `id_detail_pms` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jmlh_item` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pemesananp`
--

CREATE TABLE `tb_detail_pemesananp` (
  `id_detail_pmsp` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pemesananp` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `jmlh_item` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_produk`
--

CREATE TABLE `tb_detail_produk` (
  `id_detailpr` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_testimoni` int(11) NOT NULL,
  `berat` double NOT NULL,
  `harga` double NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jasa_pengiriman`
--

CREATE TABLE `tb_jasa_pengiriman` (
  `id_jasa_pengiriman` int(11) NOT NULL,
  `nama_jasa_pengiriman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jenis_pengiriman`
--

CREATE TABLE `tb_jenis_pengiriman` (
  `id_jenis_pengiriman` int(11) NOT NULL,
  `id_jasa_pengiriman` int(11) NOT NULL,
  `id_biaya_kirim` int(11) NOT NULL,
  `nama_jenis_pengiriman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konfirmasi_pembayaran`
--

CREATE TABLE `tb_konfirmasi_pembayaran` (
  `id_konf` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `tgl_konf` date NOT NULL,
  `no_rek` int(11) NOT NULL,
  `nama_bank` varchar(20) NOT NULL,
  `nama_member_bank` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE `tb_kota` (
  `id_kota` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_kota` varchar(20) NOT NULL,
  `biaya_kirim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id_member` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kodepos` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id_member`, `email`, `password`, `nama_lengkap`, `alamat`, `kodepos`, `telp`) VALUES
(1, 'admin@gmail.com', 'admin', 'Admin', 'Padang', '2500', '08123456789');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelapak`
--

CREATE TABLE `tb_pelapak` (
  `id_pelapak` int(11) NOT NULL,
  `password_pelapak` varchar(255) NOT NULL,
  `nama_pelapak` varchar(20) NOT NULL,
  `alamat_pelapak` varchar(30) NOT NULL,
  `telp_pelapak` varchar(20) NOT NULL,
  `email_pelapak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_pelapak` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nama_member` varchar(30) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `kodepos` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `biaya_kirim` int(11) NOT NULL,
  `biaya_pemesanan` int(11) NOT NULL,
  `no_resi_pengiriman` varchar(30) NOT NULL,
  `jenis_pengiriman` varchar(100) NOT NULL,
  `nama_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemesanan_publik`
--

CREATE TABLE `tb_pemesanan_publik` (
  `id_pemesananp` int(11) NOT NULL,
  `id_publik` int(11) NOT NULL,
  `id_pelapak` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `tgl_pemesananp` date NOT NULL,
  `nama_publik` varchar(30) NOT NULL,
  `alamat_publik` varchar(20) NOT NULL,
  `kodepos_publik` varchar(20) NOT NULL,
  `telp_publik` varchar(20) NOT NULL,
  `biaya_kirim` int(11) NOT NULL,
  `biaya_pemesananp` int(11) NOT NULL,
  `no_resi_pengiriman` varchar(30) NOT NULL,
  `jenis_pengiriman` varchar(100) NOT NULL,
  `nama_produk` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `id_testimoni` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(30) NOT NULL,
  `stok` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_provinsi`
--

CREATE TABLE `tb_provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_publik`
--

CREATE TABLE `tb_publik` (
  `id_publik` int(11) NOT NULL,
  `email_publik` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat_publik` varchar(30) NOT NULL,
  `kodepos` varchar(20) NOT NULL,
  `telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_testimoni`
--

CREATE TABLE `tb_testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `isi_testimoni` varchar(144) NOT NULL,
  `jumlah_bintang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_toko`
--

CREATE TABLE `tb_toko` (
  `id_toko` int(11) NOT NULL,
  `id_pelapak` int(11) NOT NULL,
  `nama_toko` varchar(30) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `a.n_rekening` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_biaya_kirim`
--
ALTER TABLE `tb_biaya_kirim`
  ADD PRIMARY KEY (`id_biaya_kirim`);

--
-- Indeks untuk tabel `tb_detail_pemesanan`
--
ALTER TABLE `tb_detail_pemesanan`
  ADD PRIMARY KEY (`id_detail_pms`);

--
-- Indeks untuk tabel `tb_detail_pemesananp`
--
ALTER TABLE `tb_detail_pemesananp`
  ADD PRIMARY KEY (`id_detail_pmsp`);

--
-- Indeks untuk tabel `tb_detail_produk`
--
ALTER TABLE `tb_detail_produk`
  ADD PRIMARY KEY (`id_detailpr`);

--
-- Indeks untuk tabel `tb_jasa_pengiriman`
--
ALTER TABLE `tb_jasa_pengiriman`
  ADD PRIMARY KEY (`id_jasa_pengiriman`);

--
-- Indeks untuk tabel `tb_jenis_pengiriman`
--
ALTER TABLE `tb_jenis_pengiriman`
  ADD PRIMARY KEY (`id_jenis_pengiriman`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `tb_pelapak`
--
ALTER TABLE `tb_pelapak`
  ADD PRIMARY KEY (`id_pelapak`);

--
-- Indeks untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indeks untuk tabel `tb_pemesanan_publik`
--
ALTER TABLE `tb_pemesanan_publik`
  ADD PRIMARY KEY (`id_pemesananp`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `tb_publik`
--
ALTER TABLE `tb_publik`
  ADD PRIMARY KEY (`id_publik`);

--
-- Indeks untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indeks untuk tabel `tb_toko`
--
ALTER TABLE `tb_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_biaya_kirim`
--
ALTER TABLE `tb_biaya_kirim`
  MODIFY `id_biaya_kirim` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_pemesanan`
--
ALTER TABLE `tb_detail_pemesanan`
  MODIFY `id_detail_pms` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_pemesananp`
--
ALTER TABLE `tb_detail_pemesananp`
  MODIFY `id_detail_pmsp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_produk`
--
ALTER TABLE `tb_detail_produk`
  MODIFY `id_detailpr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jasa_pengiriman`
--
ALTER TABLE `tb_jasa_pengiriman`
  MODIFY `id_jasa_pengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_jenis_pengiriman`
--
ALTER TABLE `tb_jenis_pengiriman`
  MODIFY `id_jenis_pengiriman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kota`
--
ALTER TABLE `tb_kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_pelapak`
--
ALTER TABLE `tb_pelapak`
  MODIFY `id_pelapak` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pemesanan_publik`
--
ALTER TABLE `tb_pemesanan_publik`
  MODIFY `id_pemesananp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_provinsi`
--
ALTER TABLE `tb_provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_publik`
--
ALTER TABLE `tb_publik`
  MODIFY `id_publik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_testimoni`
--
ALTER TABLE `tb_testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_toko`
--
ALTER TABLE `tb_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
