-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 06:06 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `wajibpajak` varchar(255) NOT NULL,
  `npwp` varchar(255) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `catatan` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id`, `wajibpajak`, `npwp`, `notelp`, `catatan`) VALUES
(21, 'Andreas Thio', '03.282.700.8.732.000', '-', 'Tanggal Terdaftar : 24-09-2013\r\n'),
(22, 'PT. Andifa Perkasa', '-', '085248839998', 'Nomor Telepon punya Andry-Supervisor\r\nAlamat : Batulicin (Niaga) khusus Industri\r\nPKP : 2017'),
(23, 'Amin Husin', '-', '082192885169', ''),
(24, 'Ahmad Rosyadi', '08.371.950.0-731.00', '-', 'WP tidak paham tentang PKP\r\n'),
(25, 'Anthony Yusuf', '73.827.987.6-731.000', '0811515980', ''),
(26, 'PT.BOSTON MAKMUR LESTARI', '84.449.361.9.372.000', '08125109478', 'Bidang usaha : Bahan Bangunan'),
(27, 'Agus Mulyanto', '72.151.801.7.727.000', '', ''),
(29, 'PT. Sandy Tantri Jaya', '-', '', ''),
(30, 'Andreas Tjitradi', '-', '0811518460', ''),
(31, 'PT. Asia Surya Prima Kencana', '-', '', ''),
(32, 'Andry Wenas', '-', '', ''),
(33, 'CV. Alpha Omega Borneo', '-', '081250006053', ''),
(34, 'PT. Awkang Barito Nusapesada', '02.361.938.0-731.000', '08123195033', 'Bidang Usaha : Penglola Aloi\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsul` int(11) NOT NULL,
  `id_klien` int(11) NOT NULL,
  `konsul_ke` int(11) NOT NULL,
  `hari_tanggal` date NOT NULL,
  `Tujuan` varchar(255) NOT NULL,
  `hasil_konsul` mediumtext NOT NULL,
  `catatan_konsul` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsul`, `id_klien`, `konsul_ke`, `hari_tanggal`, `Tujuan`, `hasil_konsul`, `catatan_konsul`) VALUES
(31, 21, 1, '2020-07-01', '-', 'yang bantu sebelumnya evelyn yang datang bantuin. Lapor bulanan atas PPN untuk Tahunan Wijaya Tanjung.\r\n-Penjualan bahan bangunan\r\n-Ibu Unce mamanya andreas\r\n-buatkan email khusus\r\n-coba 3 bulan dulu pendampingan\r\n-konsultasi 5juta/tahun\r\n-Ikut TA atas W yang pribadi tidak ikut, Tahunan pribadi pak wijaya, dapat surat dan lain&quot;, infokan ke pak wijaya\r\nMinta : \r\n-SPT tahunan 2016-2018 Badan + OP\r\n-SPT PPN\r\n-Akte pendirian\r\n-PKP dan NPWP', ''),
(32, 22, 1, '0000-00-00', '-', 'Sudah pernah ada konsultan &quot;Ibu Ber&quot; di Batulicin, laporan keuangan dan pajak masih s/d 2018\r\npertengahan 2019 tidak lagi dengan ibu ber karena tidak cocok, sekarang lapor sendiri\r\nSPT Tahun 2019 rencananya minta buatkan\r\nBeli + 5 perusahaan\r\nJual + 30 perusahaan\r\npendaan/kebutuhan dicafe/kebun ambil dari Andhifa\r\nHLP minta data : Biaya dan SPT 2018\r\nHLP menyediakan : Konsultasi, tax review, SPT Tahunan\r\nLawan transaksinya ditangkap salah satunya kharisma(fiktif) sudah terlapor PMnya, rencananya mau dibetulkan PPNnya ( mei dan juni 2019), harganya include\r\narmada di group sendiri\r\nTransportir : laut 15: dan darat pph 25', '-'),
(33, 23, 1, '0000-00-00', '', 'Jumat 18-1-2018\r\nCV.POWER BAN INDONESIA ( tidak PKP)\r\nDirektur : Amin Husin\r\nKomanditer Lidu Iskandar\r\n\r\nCV.CIPTA FORTUNA MOTOR\r\nDirektur : Amin Husin\r\nKomanditer : Tety Suliawan\r\n\r\nBeli Mobil avansa pakai CV.POWER BAN INDONESIA\r\n\r\nSenin 18-2-2018\r\nCV.POWER BAN INDONESIA : jual lampu mobil dan jasa cuci mobil (Devisi/unit)\r\n\r\n', '-'),
(34, 23, 2, '2019-12-12', '', 'Rencana non PKP karena diwajibkan oleh distributor\r\nMasih mempertimbangkan CV/PT untuk PKO', ''),
(35, 24, 1, '2019-08-27', '', 'WP OP\r\ndiperiksa tahun pajak 2016 dan 2017 dikirim surat SP2DK Tahun 2018\r\nKeluar SP Tahun 2019\r\nSPT Tahunan 2015 : PP46 Rp.63.000.000\r\n(harta rumah tanpa nominal) karena ikut ortu\r\nSPT Tahunan 2017 ( Pembukuan )\r\nOmzet jual : Rp.14.605.785.600\r\nPembelian : Rp.14.198.312.019\r\nLaba bersih : Rp.169.167.600\r\n(harta bertambah )\r\n-ada utang', 'WP belum PKP Tahun 2018\r\nWP tidak paham tentang PKP'),
(36, 25, 1, '2019-03-25', '', 'Yang diminta untuk SPT Tahunan\r\n-Tabungan\r\nSaldo Bank 2015,2016,2017,2018\r\n-Saham di PT.BASTON MAKMUR LESTARI\r\nSKT BOSTON MAKMUR LESTARI (PT) Belum\r\n-Pembelian barangnya oleh\r\nPT.PUTERA JAYA KALIMANTAN, dari PT.PUTERA JAYA KALIMANTAN ke PT.BOSTON MAKMUR LESTARI, PT.BOSTON MAKMUR LESTARI jual tanpa PPN\r\n\r\nPT.PUTERA JAYA KALIMANTAN\r\nTahun 2018\r\nBeli mobil L300\r\nCicilan Rp.6.916.700\r\nDP Rp.20.000.000', ''),
(37, 26, 1, '2019-03-26', '', 'Akta no.22\r\nTanggal 19-1-2018\r\nNPWP tidak PKP\r\nModal Pasar : 2.000.000.000\r\nAnthony Yusuf :  450.000.000\r\nHarsono Yusuf : 50.000.000\r\n', ''),
(38, 27, 1, '2019-02-27', '', 'Bidang Usaha : Peternakan\r\nPakan,Obat,,Sembako,Alat Pancing, Jagung giling(beras jagung), DOCPeralatan\r\nPabrik -> Comfeed,Suri tani pamuka,sentral protein prima\r\nObat -> PT.Medion, PT.Pridam\r\nPeralatan -> PT.MedianT.Suria tani Pramuka', 'Saran: Cari TA Pribadi , Cari rp pembelian selama 2018'),
(39, 29, 1, '2022-03-23', '', 'Ada pinjaman bank di BRI sebesar 5M. Uangnya dipakai semua, angsurannya belum tau apakah flat atau tidak?\r\nUsaha : Besi Bekas(Exvatir bekas)\r\nKeputusan pa yasin Pinjaman bank tidak perlu diakui di PT ini.\r\nModal 250JT dianggap piutang 250JT. \r\nSemua grup cv dab pt ini dianggap piutang\r\n- PT. indolokal mandiri pratama.\r\n- PT. sandy mandiri jaya.\r\n- PT. sandy tantry jaya.\r\n- PT. setiadi perdana putra.\r\n- PT. sandy sinar abadi.', ''),
(40, 30, 1, '2018-09-04', '', 'Tahun 2010 sdh di Samarinda, Tahun 2016 di Grogot\r\nAlamat Jl A.Yani KM 8,5 dulu, Sekarang Jl. Tanah periuk No.34 RT 1000\r\nOmzet s.d 2016 adalah usaha digrogot \r\nNPWP cetak ulang\r\nSKT cetak ulang', 'Cyntya Dewi Setiawan (istri) \r\n73.871.702.4-726.000\r\nNIK : 6472034103660006\r\nJl Negara No 34 Rt 009 Tanah Periuk,Grogot\r\nSKT Cetak Ulang\r\n-> setelah perpindahan dan dapat izin baru akan menggunakan nama pak andreas\r\n-> setelah menggunakan pak andreas lagi, maka npwp istri dicabut\r\n-> Npwp diterbitkan secara jabatan \r\nKartu keluarga'),
(41, 31, 1, '2018-09-21', '', '1. Jual ke distributor(asia kencana) tunggal masalahnyaa lupa NSFP bulan juli 2018 ,kurang lebih 2M untuk transaksi di bula Agustus 2018\r\n- Bulan 8 mau, tanpa fp\r\n- Jual ke lain (bukan grup yang tdak pkp)\r\n- perjanjian yang semua tunggal nanti di adedum\r\n- dianggap tidak ada jualan \r\n\r\n2. Asia Kencana (Distributor)\r\n- dianggap bukan jual\r\n- gunggung\r\n- penjualannya dialihkan', 'Usulan mba Ar :\r\nKenapa tidak dibuatkan aja fp meskipun terlambat membuat tapi psl 14(4) aman, tapi dikenakan 2% karena terlambat membuatkan fp.\r\nuntuk penjualan Agustus masuk ke September semua'),
(42, 32, 1, '2017-12-05', '', 'NPWP op diurus pindah kpp bulan januari kurang lebih tanggal 10, setelah dibayar pp46', 'CV. masa depan kita (Non PKP) yang dibanjarmasin dirubah kedudukannya di kab. banjar dibulan januari \r\n\r\nCV.Terus Maju Bersama (PKP)'),
(43, 33, 1, '2022-01-14', '', 'Usaha Cathering\r\nPembukaan di Banjarmasin\r\nUsaha di Kalteng\r\nCV didirikan pada tahun 2020, sudah ada laporan\r\nAKTC-> Abdul Basid, bedudukan di Banjarmasin, kegiatan di Puruk Cahu\r\n2020 sudah ada lapor ( Data tidak real )\r\ndikerjakan PPT tahunan, sama orang\r\n', ''),
(44, 34, 1, '2017-04-25', '', 'Alur Bruto (kedudukan di Banjarmasin)\r\nTerdaftar + PKP\r\n', 'Saran : ke KPP (tertulis)\r\nKelas Pajak khusus di RC');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `notelp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `notelp`) VALUES
(1, 'Admin Tugas', 'admin', 'admin', 'admin', '089898761234'),
(2, 'Aldo Savero', 'aldo', 'aldo', 'pegawai', '081231231234'),
(4, 'Charvia 123', 'charvia', 'charvia', 'pegawai', '081231231235'),
(9, 'Charvia Wijaya1', 'Charvia', 'charvia123', 'pegawai', '087814555012'),
(10, 'Gerhard', 'gerhard', '123', 'pegawai', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsul`),
  ADD KEY `id_klien` (`id_klien`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`id_klien`) REFERENCES `klien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
