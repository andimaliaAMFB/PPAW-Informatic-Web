-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2021 pada 07.15
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppaw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `course`
--

CREATE TABLE `course` (
  `id_course` varchar(10) NOT NULL,
  `nama_course` varchar(255) NOT NULL,
  `lama_course` int(11) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `course`
--

INSERT INTO `course` (`id_course`, `nama_course`, `lama_course`, `deskripsi`) VALUES
('1', 'Big Data Engineer Master\'s Program', 14, '<p>Enter the world of big data engineering with this certification course. It features masterclasses and Ask me anything sessions by IBM experts. Learn job critical skills like Big Data & Hadoop frameworks, leverage the functionality of AWS services.</p> '),
('10', 'AWS SysOps Associate Certificate Training', 14, '<p>Get hands-on exposure to the highly scalable Amazon Web Services (AWS) cloud platform with the AWS SysOps Associate certification training program. This course will help you attain valuable technical expertise in deploying, managing, and operating </p>'),
('11', 'AWS Developer Associate Certification Training', 14, '<p>Enhance your proficiency with the Amazon Web Services (AWS) cloud platform to develop and deploy robust cloud applications with an AWS Developer Associate Certification. This course helps you implement cloud security best practices and understand </p>'),
('12', 'Certified Ethical Hacking Course — CEH (v10)', 14, '<p>Learn advanced processes in this (CEH)Certified Ethical Hacking course. In this online ethical hacking certification training, you will master advanced network packet analysis and system penetration testing techniques to build your network security</p>'),
('13', 'Angular Training Course', 14, '<p>This Angular Certification Training Course will help you master front-end web development with Angular. Gain in-depth knowledge of concepts like facilitating the development of single-page web applications, dependency injection, typescript, compone</p>'),
('14', 'Selenium Training Course', 14, '<p>This Selenium Certification Training enables you to master the complete Selenium suite. The Selenium Training is designed to train developers and manual testers to learn how to automate web applications with a robust framework, and integrate it wit</p>'),
('15', 'Java Certification Training Course', 14, '<p>If you’re looking to master web application development for virtually any computing platform, this Java Certification Training course is for you. This training course will give you a firm foundation in Java, the most commonly used programming langu</p>'),
('2', 'Big Data Hadoop Certification Training Course', 14, '<p>Simplilearn\'s Big Data Hadoop certification training lets you master the concepts of the Hadoop framework, Big Data tools, and methodologies to prepare you for success in your role as a Big Data Developer. In this Big Data Hadoop course, you will l</p>'),
('3', 'Data Scientist Master’s Program', 21, '<p>This Data Science course, in collaboration with IBM, features exclusive IBM hackathons, masterclass, and Ask-me-anything sessions for the best training experience. This Data Science certification training provides hands-on exposure to key technolo</p> '),
('4', 'Data Analyst Master’s Program', 21, '<p>This Data Analyst course in collaboration with IBM will make you an expert in Data Analytics. In this Data Analyst certification course, you\'ll learn analytics tools and techniques, how to work with SQL databases, the languages of R and Python, ho</p> '),
('5', 'Data Science with Python Training Course', 14, '<p>The Data Science with Python certification course online training provides a complete overview of Python\'s Data Analytics tools and techniques. Learning Python is a crucial skill for many Data Science roles. Acquiring knowledge in Python will be th</p>'),
('6', 'Data Science with R Certification Training', 14, '<p>Simplilearn’s Data Science with R certification course makes you an expert in data analytics using the R programming language. This online R training enables you to take your Data Science skills into a variety of companies, helping them analyze dat</p>'),
('7', 'Artificial Intelligence Engineer Master’s Program', 21, '<p>Ensure career success with this Artificial Intelligence course, in collaboration with IBM. Featuring exclusive IBM hackathons, masterclasses, & Ask me anything sessions, this AI certification online training helps you master key concepts including </p>'),
('8', 'Machine Learning Certification Course', 14, '<p>Ensure career success with this Machine Learning course. Learn this exciting branch of Artificial Intelligence with a program featuring 58 hrs of Applied Learning, interactive labs, 4 hands-on projects, and mentoring. With our Machine Learning trai</p>'),
('9', 'AWS Solutions Architect Certification Training Course', 14, '<p>AWS certification training is essential for every aspiring AWS certified solutions architect. You will master AWS architectural principles and services such as IAM, VPC, EC2, EBS and elevate your career to the cloud, and beyond with this AWS solu</p>');

-- --------------------------------------------------------

--
-- Struktur dari tabel `course_pilih`
--

CREATE TABLE `course_pilih` (
  `id_pilih` int(10) UNSIGNED NOT NULL,
  `id_user` varchar(12) NOT NULL,
  `id_course` varchar(10) NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `tanggal_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `course_pilih`
--

INSERT INTO `course_pilih` (`id_pilih`, `id_user`, `id_course`, `tanggal_ambil`, `tanggal_selesai`) VALUES
(1, '2', '2', '2017-05-14', '2017-05-28'),
(2, '1', '1', '2017-06-01', '2017-06-15'),
(3, '1', '3', '2017-07-10', '2017-07-31'),
(4, '1', '6', '2017-08-28', '2017-09-11'),
(5, '2', '6', '2017-08-30', '2017-09-13'),
(6, '1', '9', '2017-10-20', '2017-11-03'),
(7, '2', '7', '2017-11-05', '2017-11-26'),
(8, '2', '10', '2018-03-04', '2018-03-18'),
(9, '1', '2', '2018-03-16', '2018-03-30'),
(10, '2', '5', '2018-04-10', '2018-04-24'),
(11, '2', '9', '2018-04-28', '2018-05-12'),
(12, '1', '7', '2018-05-01', '2018-05-22'),
(13, '2', '5', '2018-05-30', '2018-06-13'),
(14, '1', '12', '2018-06-03', '2018-06-17'),
(15, '2', '11', '2018-06-24', '2018-07-08'),
(23, '2', '1', '2021-12-03', '2021-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(10) UNSIGNED NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Rekayasa Perangkat Lunak'),
(3, 'Teknik Komputer'),
(4, 'Manajemen Informatika'),
(5, 'Jurusan Ilmu Komputer'),
(6, 'Ilmu Komputer'),
(7, 'Information Technology'),
(8, 'Teknik Komputer Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(255) UNSIGNED NOT NULL,
  `nama_kota` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'Banda Aceh'),
(2, 'Langsa'),
(3, 'Lhokseumawe'),
(4, 'Sabang'),
(5, 'Subulussalam'),
(6, 'Denpasar'),
(7, 'Pangkalpinang'),
(8, 'Cilegon'),
(9, 'Serang'),
(10, 'Tangerang Selatan'),
(11, 'Tangerang'),
(12, 'Bengkulu'),
(13, 'Yogyakarta'),
(14, 'Gorontalo'),
(15, 'Kota Administrasi Jakarta Barat'),
(16, 'Kota Administrasi Jakarta Pusat'),
(17, 'Kota Administrasi Jakarta Selatan'),
(18, 'Kota Administrasi Jakarta Timur'),
(19, 'Kota Administrasi Jakarta Utara'),
(20, 'Sungai Penuh'),
(21, 'Jambi'),
(22, 'Bandung'),
(23, 'Bekasi'),
(24, 'Bogor'),
(25, 'Cimahi'),
(26, 'Cirebon'),
(27, 'Depok'),
(28, 'Sukabumi'),
(29, 'Tasikmalaya'),
(30, 'Banjar'),
(31, 'Magelang'),
(32, 'Pekalongan'),
(33, 'Salatiga'),
(34, 'Semarang'),
(35, 'Surakarta'),
(36, 'Tegal'),
(37, 'Batu'),
(38, 'Blitar'),
(39, 'Kediri'),
(40, 'Madiun'),
(41, 'Malang'),
(42, 'Mojokerto'),
(43, 'Pasuruan'),
(44, 'Probolinggo'),
(45, 'Surabaya'),
(46, 'Pontianak'),
(47, 'Singkawang'),
(48, 'Banjarbaru'),
(49, 'Banjarmasin'),
(50, 'Palangkaraya'),
(51, 'Balikpapan'),
(52, 'Bontang'),
(53, 'Samarinda'),
(54, 'Tarakan'),
(55, 'Batam'),
(56, 'Tanjungpinang'),
(57, 'Bandar Lampung'),
(58, 'Metro'),
(59, 'Ternate'),
(60, 'Tidore Kepulauan'),
(61, 'Ambon'),
(62, 'Tual'),
(63, 'Bima'),
(64, 'Mataram'),
(65, 'Kupang'),
(66, 'Sorong'),
(67, 'Jayapura'),
(68, 'Dumai'),
(69, 'Pekanbaru'),
(70, 'Makassar'),
(71, 'Palopo'),
(72, 'Parepare'),
(73, 'Palu'),
(74, 'Baubau'),
(75, 'Kendari'),
(76, 'Bitung'),
(77, 'Kotamobagu'),
(78, 'Manado'),
(79, 'Tomohon'),
(80, 'Bukittinggi'),
(81, 'Padang'),
(82, 'Padang Panjang'),
(83, 'Pariaman'),
(84, 'Payakumbuh'),
(85, 'Sawahlunto'),
(86, 'Solok'),
(87, 'Lubuklinggau'),
(88, 'Pagar Alam'),
(89, 'Palembang'),
(90, 'Prabumulih'),
(91, 'Sekayu'),
(92, 'Gunungsitoli'),
(93, 'Medan'),
(94, 'Padang Sidempuan'),
(95, 'Pematangsiantar'),
(96, 'Sibolga'),
(97, 'Tanjungbalai'),
(98, 'Tebing Tinggi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(12) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `notlp` varchar(30) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `kodepos` varchar(5) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `universitas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `notlp`, `email`, `alamat`, `kota`, `provinsi`, `kodepos`, `jurusan`, `universitas`) VALUES
('1000000001', 'Dono Saputra', '+62-818-5559-27', 'dono@example.com', 'Jalan MErdeka 105', 'Kota Bandung', 'Provinsi Jawa Barat', '66111', 'Ilmu Komputer', 'Institut Teknologi Bandung/Institute of Technology Bandung'),
('1000000002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1000000003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1000000004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1000000005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1000000006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1000000007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1000000008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1000000009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('1000000010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2000000010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('3000000010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000002', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000003', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000004', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000005', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000006', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000007', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000008', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000009', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('4000000010', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(255) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatra Utara'),
(3, 'Sumatra Barat'),
(4, 'Riau'),
(5, 'Kepulauan Riau'),
(6, 'Jambi'),
(7, 'Bengkulu'),
(8, 'Sumatra Selatan'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Lampung'),
(11, 'Daerah Khusus Ibukota Jakarta'),
(12, 'Banten'),
(13, 'Jawa Barat'),
(14, 'Jawa Tengah'),
(15, 'Daerah Istimewa Yogyakarta'),
(16, 'Jawa Timur'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Tengah'),
(22, 'Kalimantan Selatan'),
(23, 'Kalimantan Timur'),
(24, 'Kalimantan Utara'),
(25, 'Sulawesi Utara'),
(26, 'Gorontalo'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Barat'),
(29, 'Sulawesi Selatan'),
(30, 'Sulawesi Tenggara'),
(31, 'Maluku Utara'),
(32, 'Maluku'),
(33, 'Papua Barat'),
(34, 'Papua');

-- --------------------------------------------------------

--
-- Struktur dari tabel `universitas`
--

CREATE TABLE `universitas` (
  `id_kampus` int(10) UNSIGNED NOT NULL,
  `nama_kampus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `universitas`
--

INSERT INTO `universitas` (`id_kampus`, `nama_kampus`) VALUES
(1, 'Universitas Indonesia'),
(2, 'IPB University:Peringkat'),
(3, 'Institut Teknologi Sepuluh Nopember'),
(4, 'Universitas Brawijaya'),
(5, 'Universitas Airlangga'),
(6, 'Telkom University / Universitas Telkom'),
(7, 'Universitas Bina Nusantara'),
(8, 'Universitas Gadjah Mada'),
(9, 'Institut Teknologi Bandung/Institute of Technology Bandung'),
(10, 'Universitas Muhammadiyah Yogyakarta'),
(11, 'Universitas Islam Indonesia'),
(12, 'Universitas Sebelas Maret UNS Surakarta'),
(13, 'Universitas Diponegoro'),
(14, 'Universitas Gunadarma'),
(15, 'Universitas Hasanuddin'),
(16, 'Universitas Pendidikan Indonesia'),
(17, 'Universitas Padjadjaran Bandung'),
(18, 'Universitas Kristen Satya Wacana'),
(19, 'Universitas Syiah Kuala'),
(20, 'Politeknik Elektronika Negeri Surabaya'),
(21, 'Universitas Negeri Malang'),
(22, 'Universitas Negeri Yogyakarta'),
(23, 'Universitas Narotama UNNAR Surabaya'),
(24, 'Universitas Sumatera Utara'),
(25, 'Universitas Lampung'),
(26, 'Universitas Andalas'),
(27, 'Universitas Negeri Semarang'),
(28, 'Universitas Atma Jaya Yogyakarta'),
(29, 'Universitas Dian Nuswantoro'),
(30, 'Universitas Malikussaleh'),
(31, 'Universitas Ahmad Dahlan Yogyakarta'),
(32, 'Universitas Jember'),
(33, 'Universitas Sriwijaya'),
(34, 'Universitas Negeri Padang'),
(35, 'Universitas Mulawarman'),
(36, 'Universitas Riau'),
(37, 'Universitas Mercu Buana'),
(38, 'Universitas Islam Negeri UIN Sunan Gunung Djati Bandung'),
(39, 'Universitas Mataram'),
(40, 'Universitas Negeri Surabaya'),
(41, 'Petra Christian University'),
(42, 'Universitas Widyatama UTAMA Bandung'),
(43, 'Universitas Halu Oleo Kendari'),
(44, 'Universitas Sultan Ageng Tirtayasa'),
(45, 'Universitas Udayana'),
(46, 'Universitas Negeri Makassar'),
(47, 'Universitas Jenderal Soedirman'),
(48, 'Universitas Terbuka'),
(49, 'Universitas Negeri Medan'),
(50, 'Universitas Muhammadiyah Surakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nim`, `nama`, `email`, `password`) VALUES
('1', '1000000001', 'Dono Saputra', 'dono@example.com', '38b3eff8baf56627478ec76a704e9b52'),
('2', '2000000001', 'mahasiswa2', '2000000001@student.uinsgd.ac.id', '757b505cfd34c64c85ca5b5690ee5293');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indeks untuk tabel `course_pilih`
--
ALTER TABLE `course_pilih`
  ADD PRIMARY KEY (`id_pilih`),
  ADD KEY `id_course` (`id_pilih`),
  ADD KEY `course_pilih_ibfk_2` (`id_course`),
  ADD KEY `course_pilih_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `universitas`
--
ALTER TABLE `universitas`
  ADD PRIMARY KEY (`id_kampus`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `course_pilih`
--
ALTER TABLE `course_pilih`
  MODIFY `id_pilih` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `universitas`
--
ALTER TABLE `universitas`
  MODIFY `id_kampus` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `course_pilih`
--
ALTER TABLE `course_pilih`
  ADD CONSTRAINT `course_pilih_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `course_pilih_ibfk_2` FOREIGN KEY (`id_course`) REFERENCES `course` (`id_course`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
