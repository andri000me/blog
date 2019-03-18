-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 11:57 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_carousel`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) NOT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL,
  `id_privasi` int(5) NOT NULL,
  `visitor` int(10) NOT NULL,
  `downloaded` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `id_kategori`, `tanggal`, `gambar`, `judul`, `konten`, `id_privasi`, `visitor`, `downloaded`) VALUES
(1, 3, '2015-08-03', 'bn484-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 9 TAHUN 2016', 'PERUBAHAN KEDUA ATAS PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 18 TAHUN 2012 TENTANG TATA TERTIB KERJA PEGAWAI BADAN NARKOTIKA NASIONAL', 1, 12, 1),
(2, 3, '2015-08-17', 'bn483-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 08 TAHUN 2016', 'PERUBAHAN ATAS PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 3 TAHUN 2014', 1, 12, 1),
(3, 3, '2015-08-14', 'bn339-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 7 TAHUN 2016', 'PENYELIDIKAN DAN PENYIDIKAN TINDAK PIDANA PENCUCIAN UANG DARI TINDAK PIDANA ASAL NARKOTIKA DAN PREKURSOR NARKOTIKA', 1, 12, 1),
(4, 3, '2018-02-17', 'bn219-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 17 TAHUN 2016', 'TATA CARA PENINGKATAN KEMAMPUAN  LEMBAGA REHABILITASI MEDIS DAN LEMBAGA REHABILITASI SOSIAL BAGI PECANDU DAN KORBAN PENYALAHGUNAAN NARKOTIKA', 1, 12, 1),
(5, 4, '2018-02-24', '201610270849311477532971111-20171128092631.pdf', 'NOMOR: SE/68/X/SU/KP.02.00/2016/BNN', 'Pendelegasian wewenang pembuatan surat pemberitahuan kenaikan gaji berkala aparatur sipil negara di lingkungan Badan Narkotika Nasional', 1, 12, 1),
(6, 4, '2018-02-24', '201603221455531458633353785-20171128092645.pdf', 'KEPUTUSAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR: KEP/366/XI/KA/KP.02.00/2015/BNN', 'Pendelegasian sebagian wewenang pengangkatan, pemindahan dan pemberhentian dalam jabatan di wilayah kerja Badan Narkotika Nasional Provinsi', 1, 12, 1),
(7, 2, '2018-02-26', 'perpres232010.pdf', 'PERATURAN PRESIDEN REPUBLIK INDONESIA NOMOR  23  TAHUN  2010 TENTANG BADAN NARKOTIKA NASIONAL', 'Peraturan Presiden tentang Badan Narkotika Nasional', 1, 12, 1),
(8, 1, '2018-02-27', 'uu352009.pdf', 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 35 TAHUN 2009 TENTANG NARKOTIKA ', 'Narkotika merupakan zat atau obat yang sangat bermanfaat dan diperlukan untuk pengobatan penyakit tertentu. Namun, jika disalahgunakan atau digunakan tidak sesuai dengan standar pengobatan dapat menimbulkan akibat yang sangat merugikan bagi perseorangan atau masyarakat khususnya generasi muda.', 1, 12, 1),
(9, 3, '2018-03-01', 'bn485-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 10 TAHUN 2016', 'KELOMPOK AHLI BADAN NARKOTIKA NASIONAL', 1, 12, 1),
(10, 3, '2018-03-01', 'bn778-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 11 TAHUN 2016', 'PERUBAHAN KEDUA ATAS PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 3 TAHUN 2015 TENTANG ORGANISASI DAN TATA KERJA BADAN NARKOTIKA NASIONAL PROVINSI DAN BADAN NARKOTIKA NASIONAL KABUPATEN/KOTA\r\n', 1, 12, 1),
(11, 3, '2018-03-01', 'bn779-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 12 TAHUN 2016', 'PEMBINA FUNGSI JABATAN FUNGSIONAL PENYULUH NARKOBA, TATA KERJA TIM PENILAI KINERJA JABATAN FUNGSIONAL PENYULUH NARKOBA DAN TATA CARA PENILAIAN KINERJA JABATAN FUNGSIONAL PENYULUH NARKOBA', 1, 12, 1),
(12, 3, '2018-03-01', 'bn980-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 13 TAHUN 2016 ', 'LOGO DAN ATRIBUT UNIT DETEKSI K9 BADAN NARKOTIKA NASIONAL\r\n', 1, 12, 1),
(13, 3, '2018-03-01', 'bn1301-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 14 TAHUN 2016 ', 'PERUBAHAN KETIGA ATAS PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 3 TAHUN 2015 TENTANG ORGANISASI DAN TATA KERJA BADAN NARKOTIKA NASIONAL PROVINSI DAN BADAN NARKOTIKA NASIONAL KABUPATEN/KOTA\r\n', 1, 12, 1),
(14, 3, '2018-03-01', 'bn1499-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 15 TAHUN 2016', 'PAKAIAN DINAS HARIAN PEGAWAI DI LINGKUNGAN BADAN NARKOTIKA NASIONAL\r\n', 1, 12, 1),
(15, 3, '2018-03-01', 'bn1924-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 18 TAHUN 2016', 'PENGEMBANGAN KOMPETENSI PEGAWAI DI LINGKUNGAN BADAN NARKOTIKA NASIONAL\r\n', 1, 12, 1),
(16, 3, '2018-03-01', 'bn1925-2016.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 21 TAHUN 2016 ', 'PEDOMAN PENYELENGGARAAN PENDIDIKAN DAN/ATAU PELATIHAN JABATAN FUNGSIONAL PENYULUH NARKOBA', 1, 12, 1),
(17, 3, '2018-03-01', 'bn2096-2016', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 22 TAHUN 2016 ', 'PENGELOLAAN SENJATA API DI LINGKUNGAN BADAN NARKOTIKA NASIONAL', 1, 12, 1),
(18, 3, '2018-03-01', 'bn131-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL\r\nREPUBLIK INDONESIA\r\nNOMOR 2 TAHUN 2017', 'TATA UPACARA DI LINGKUNGAN BADAN NARKOTIKA NASIONAL\r\n', 1, 12, 1),
(19, 3, '2018-03-01', 'bn174-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR  3 TAHUN 2017 ', 'PETUNJUK TEKNIS PENGAWASAN PREKURSOR NARKOTIKA ', 1, 12, 1),
(20, 3, '2018-03-01', 'bn258-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL  REPUBLIK INDONESIA   NOMOR 05 TAHUN  2017 ', 'URUSAN DINAS DALAM DI LINGKUNGAN    BADAN NARKOTIKA NASIONAL 21', 1, 12, 1),
(21, 3, '2018-03-01', 'bn280-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL \r\nREPUBLIK INDONESIA \r\nNOMOR 4 TAHUN 2017 ', 'PEDOMAN PENYELESAIAN GANTI KERUGIAN NEGARA  \r\nAKIBAT KEKURANGAN PERBENDAHARAAN  \r\nDI LINGKUNGAN BADAN NARKOTIKA NASIONAL ', 1, 12, 1),
(22, 3, '2018-03-01', 'bn389-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR  6 TAHUN 2017 ', 'PEDOMAN KODEFIKASI SEGMEN AKUN BELANJA DI LINGKUNGAN BADAN NARKOTIKA NASIONAL ', 1, 12, 1),
(23, 3, '2018-03-01', 'bn395-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAl REPUBLIK INDONESIA NOMOR  7  TAHUN  2017 ', 'PERUBAHAN KEEMPAT ATAS PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 3 TAHUN 2015', 1, 12, 1),
(24, 3, '2018-03-01', 'bn396-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL  REPUBLIK INDONESIA NOMOR  8  TAHUN 2017', 'PERUBAHAN KEDUA ATAS PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 3 TAHUN 2014  TENTANG ORGANISASI DAN TATA KERJA LOKA REHABILITASI BADAN NARKOTIKA NASIONAL ', 1, 12, 1),
(25, 3, '2018-03-01', 'bn436-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR  9 TAHUN 2017 ', 'PEDOMAN PENANGANAN PELAPORAN PELANGGARAN  (WHISTLEBLOWING SYSTEM) ', 1, 12, 1),
(26, 3, '2018-03-01', 'bn604-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR 10  TAHUN 2017 ', 'PENANGANAN BENTURAN KEPENTINGAN DI LINGKUNGAN BADAN NARKOTIKA NASIONAL ', 1, 12, 1),
(27, 3, '2018-03-01', 'bn640-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR 11 TAHUN 2017 ', 'PENGENDALIAN GRATIFIKASI DI LINGKUNGAN BADAN NARKOTIKA NASIONAL ', 1, 22, 1),
(28, 3, '2018-03-01', 'bn814-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL REPUBLIK INDONESIA NOMOR  12  TAHUN 2017 ', 'PEDOMAN PEMANTAUAN TINDAK LANJUT  HASIL PEMERIKSAAN/PENGAWASAN BADAN PEMERIKSA KEUANGAN REPUBLIK INDONESIA DAN APARAT PENGAWASAN INTERN PEMERINTAH BADAN NARKOTIKA NASIONAL', 1, 22, 1),
(29, 3, '2018-03-01', 'bn884-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR  14  TAHUN 2017', 'PENGISIAN JABATAN OLEH PRAJURIT TENTARA NASIONAL INDONESIA ', 1, 22, 1),
(30, 3, '2018-03-01', 'bn924-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL NOMOR  13  TAHUN 2017 ', 'PENYELENGGARAAN SISTEM PENGENDALIAN INTERN PEMERINTAH ', 1, 22, 1),
(31, 3, '2018-03-01', 'bn976-2017.pdf', 'PERATURAN KEPALA BADAN NARKOTIKA NASIONAL                        REPUBLIK INDONESIA,\r\nNOMOR  15  TAHUN 2017 ', 'PENERAPAN MANAJEMEN RISIKO \r\nDI LINGKUNGAN BADAN NARKOTIKA NASIONAL ', 1, 22, 1),
(32, 3, '2018-03-14', 'bn979-2017.pdf', 'PERATURAN KEPALA BNN NOMOR 19 TAHUN 2017', 'PEDOMAN PELAKSANAAN PEMBAYARAN TUNJANGAN KINERJA BAGI PEGAWAI BADAN NARKOTIKA NASIONAL', 1, 24, 3),
(33, 2, '2018-03-19', '33.pdf', 'private', '<p>private<br></p>', 2, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `berita_kegiatan`
--

CREATE TABLE `berita_kegiatan` (
  `id` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `konten` text NOT NULL,
  `id_privasi` int(5) NOT NULL,
  `visitor` int(10) NOT NULL,
  `downloaded` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita_kegiatan`
--

INSERT INTO `berita_kegiatan` (`id`, `tanggal`, `gambar`, `judul`, `konten`, `id_privasi`, `visitor`, `downloaded`) VALUES
(3, '2018-03-22', '1', 'Kepala BNN Mengingatkan bahwa narkoba adalah musuh kita bersama', '<p>Memberantas peredaran narkoba di Indonesia memerlukan kerja bersama. Sindikat jaringan narkoba baik nasional dan internasional terus mencari kelengahan para penegak hukum hingga bisa berhasil meloloskan barang haram tersebut.<br><br>â€œKita saat ini lebih pada bertahan terus, kita sekarang seperti dipukulin, hal tersebut disampaikan Kepala BNN Irjen Pol Heru Winarko dalam Forum Merdeka Barat 9 (FMB 9) dengan tema&nbsp; â€œPemerintah Serius Tangani Narkobaâ€, yang diselenggarakan di Ruang Serba Guna Kemkominfo, Jakarta, Selasa (20/3/2018).<br><br>Ada tiga pendekatan yang dipakai dalam&nbsp; menangani masalah narkoba yaitu melalui pendekatan Supply Reduction, Demand Reduction dan Harm Reduction.&nbsp; Pendekatan Supply Reduction bertujuan memutus mata rantai pemasok Narkotika mulai dari produsen sampai pada jaringan pengedarnya, pendekatan&nbsp; Demand Reduction adalah memutus mata rantai para pengguna,&nbsp; sedangkan pendekatan Harm Reduction merupakan pendekatan pengurangan dampak buruk terkait&nbsp; narkoba.<br><br>Terkait penyalahgunaan narkoba di lembaga pemasyarakat (Lapas), Badan Narkotika Nasional (BNN) bersama Kementerian Hukum dan HAM (Kemenkumham) saat ini tengah menyiapkan area khusus napi narkoba di lembaga pemasyarakatan (lapas) Nusakambangan, guna mencegah mereka tetap bisa beroperasi meski berada di dalam penjara.<br><br>Saya sudah bertemu pihak lapas, ada beberapa hal yang kita samakan, bahwa BNN tidak hanya pemberantasan tapi juga pencegahan dan pemberdayaan. Di lapas pun kita akan ke sana. Selain memberantas oknum, kita juga akan memperbaiki akar masalahnya dengan melakukan rehabilitasi napi narkoba,â€ ungkap Kepala BNN.<br><br>Turut hadir mendampingi Kepala BNN, Dirjen Bea dan Cukai, Heru Pambudi serta Arteria Dahlan anggota komisi III DPR RI. &nbsp;<br><br>Heru pambudi memaparkan bahwa Bea dan cukai focus melakukan pegawasan di perbatasan terkait lalu lintas perdagangan. Kami Memiliki Teknologi Solid State yaitu kemampuan radar yang dapat deteksi target kecil misalnya jetski, mendeteksi Pergerakan target dalam kondisi apapun karena tidak terpengaruh akan medan magnet, dapat mendeteksi pergerakan target yang berada didaratan, kemampuan untuk berintegrasi dengan integrator system, dan anti jamming.<br><br>Teknologi ini dapat memisahkan mana kapal niaga, penumpang, dan kapal tanker serta akurasi data identifikasi dari kapal yang menggunakan AIS dan menyajikan secara realtime. Ini sudah digunakan pada joint operation bersama-sama dengan BNN, ungkap Pak Dirjen.<br><br>â€œKita prihatin pemakaian narkoba begitu luar biasanya. Indonesia adalah pasar yang sangat krusial. Sebanyak 3,3 juta penduduk Indonesia sampai lebih dari 5 juta mengkonsumsi narkoba. Estimasi kerugian ekonomi dari narkoba adalah Rp74,4 triliun,â€ jelas Arteria Dahlan anggota komisi III DPR RI.<br><br>Menurut Arteria, lewat fakta seperti ini pihaknya ingin menggugah masyarkat bahwa kejahatan narkoba ini harus disikapi dengan serius.<br><br>DPR dan pemerintah akan segera merevisi UU Narkoba untuk memperkuat posisi BNN dan memperberat hukuman untuk para pengedar â€œMasih banyak hal yang perlu dibenahi dari sisi SDM, namun kemampuan dan integritas Bea Cukai dan BNN tidak perlu diragukan meski dengan anggaran terbatas.â€ungkap Arteria.<br></p>', 1, 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `browser`
--

CREATE TABLE `browser` (
  `id` int(11) NOT NULL,
  `browsername` varchar(30) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `browser`
--

INSERT INTO `browser` (`id`, `browsername`, `total`) VALUES
(1, 'Chrome', 700),
(2, 'Firefox', 450),
(3, 'Safari', 220),
(4, 'Opera', 180),
(5, 'UC Browser', 200);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `kategori` varchar(50) NOT NULL DEFAULT '',
  `align` varchar(6) NOT NULL DEFAULT '',
  `VIEW` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `align`, `VIEW`) VALUES
(1, 'UNDANG-UNDANG NARKOTIKA', 'left', 0),
(2, 'PERATURAN PRESIDEN', 'left', 0),
(3, 'PERATURAN KEPALA BNN', 'left', 0),
(4, 'PERATURAN LAINNYA', 'left', 0);

-- --------------------------------------------------------

--
-- Table structure for table `privasi`
--

CREATE TABLE `privasi` (
  `id_privasi` int(5) NOT NULL,
  `tampilan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privasi`
--

INSERT INTO `privasi` (`id_privasi`, `tampilan`) VALUES
(1, 'umum'),
(2, 'private');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `os` varchar(30) NOT NULL,
  `browser` varchar(130) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id_statistik`, `ip`, `os`, `browser`, `date_create`) VALUES
(2, '::1', 'Unknown', 'Google Chrome v.31.0.1612.2', '2018-03-20 22:44:04'),
(3, '::1', 'Unknown', 'Mozilla Firefox v.59.0', '2018-03-23 05:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `photo`) VALUES
(1, 'admin', 'admin@admin.co', '$2y$10$q3j2q6rQazUImpO71TsoMOPTm0LLVrKv4pxTOSXh5ZE4VZ0Wvp8Wa', 'admin', 'default.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita_kegiatan`
--
ALTER TABLE `berita_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `browser`
--
ALTER TABLE `browser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `berita_kegiatan`
--
ALTER TABLE `berita_kegiatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `browser`
--
ALTER TABLE `browser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
