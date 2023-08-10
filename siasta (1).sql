-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Agu 2023 pada 11.33
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siasta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstra`
--

CREATE TABLE `ekstra` (
  `id_ekstra` int(11) NOT NULL,
  `img_ekstra` text NOT NULL,
  `nama_ekstra` varchar(225) NOT NULL,
  `desc_ekstra` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ekstra`
--

INSERT INTO `ekstra` (`id_ekstra`, `img_ekstra`, `nama_ekstra`, `desc_ekstra`, `tgl_upload`, `id_user`) VALUES
(7, '_angel.png', 'ftes adfa', 'Fadiah 1f a\r\ns', '2022-09-28', 4),
(17, '1907616510_PA.jpg', 'Pencinta Alam ET Voema', 'kegiatan alam bebas dan banyak kegiatan di indoor maupun outdoor.', '2022-11-08', 1),
(18, '_pencinta alam.jpg', 'Pencinta Alam ET Voema', 'kegiatan alam bebas dan banyak kegiatan di indoor maupun outdoor', '2022-11-09', 1844354352),
(19, '993048865_JURNALIS.jpg', 'Jurnalistik', 'Ekstrakurikuler jurnalistik adalah ekstrakurikuler yang menjadikan jurnalistik sebagai pusat materi pembelajaran. Ia merupakan komunitas bagi peserta didik dalam mengembangkan potensi diri melalui karya-karya berbentuk tulisan maupun dalam bentuk relevan lainnya.', '2022-11-08', 1844354352),
(20, '_bdi.jpg', 'Badan Dakwah Islam', 'kegiatan keislaman (1) melaksanakan pembinaan (2) menyiarkan islam (3) menghidupkan fungsi masjid sebagai pusat belajar dan ibadah (4) mengoptimalisasi minat dan bakat siswa di bidang seni dan budaya yang bernafaskan islam.', '2022-11-09', 1844354352),
(21, '_futdal.jpg', 'Futsal ', 'diadakan dengan tujuan menyediakan wadah untuk siswa menyalurkan hobinya dan menghadirkan corak positif kepada para siswa yaitu sifat-sifat sportifitas serta mencetak bibit-bibit baru olahragawan yang berprestasi di tingkat lokal, nasional maupun internasional.', '2022-11-09', 1844354352),
(22, '_pmr.jpg', 'Palang Merah Remaja', 'Tujuan Usaha Kesehatan Sekolah bertujuan meningkatkan kesehatan, mutu pendidikan dan prestasi belajar peserta didik yang tercermin dalam kehidupan perilaku hidup bersih sehat (PHBS) dan lingkungan sekolah yang sehat sehingga memungkinkan peserta didik mengalami pertumbuhan dan perkembangan yang optimal.', '2022-11-09', 1844354352),
(23, '1647615217_robotic.jpg', 'Robotic', 'Ekstrakurikuler Robotik Kelas Inventor ini peserta didik akan diajarkan untuk menjadi seorang inventor alias penemu di bidang teknologi, terutama teknologi robotika sejak usia muda. Proses belajar robot di kelas inventor ini dilakukan dengan metode LEARNING BY MAKING, yaitu metode belajar sambil membuat.\r\n', '2022-11-09', 1844354352),
(24, '2142870186_paskibra.jpg', 'Paskibra', 'Paskibra ialah suatu ekstrakurikuler yang dapat menjadi media bagi anggotanya untuk membentuk nilai-nilai penting dalam diri.\r\n', '2022-11-09', 1844354352),
(25, '287607045_merpati putih.jpg', 'Merpati Putih', 'Ekskul beladiri pencak silat adalah wadah bagi siswa/i yang baru ingin mengenal dan yang telah memilikii kemampuan dalam beladiri Merpati Putih.', '2022-11-09', 1844354352),
(26, '1227135661_pramuka.jpg', 'Pramuka Arundaya', 'Gerakan Kepanduan Praja Muda Karana, lebih dikenal sebagai Gerakan Pramuka Indonesia, adalah nama organisasi pendidikan nonformal yang menyelenggarakan pendidikan kepanduan di Indonesia. Kata \"Pramuka\" merupakan singkatan dari Praja Muda Karana, yang memiliki arti Jiwa Muda yang Suka Berkarya.', '2022-11-09', 1844354352),
(27, '1039000478_tari.jpg', 'Tari', 'Tari adalah gerak tubuh yang ritmis sebahai ungkapan ekspresi jiwa pencipta gerak sehingga menghasilkan unsur keindahan dan makna yang mendalam. Tari menitik beratkan konsep dan koreografi yang bersifat kreatif. ', '2022-11-09', 1844354352),
(28, '401956881_voli.jpg', 'Bola Voli', 'Bola voli adalah permainan olahraga yang dimainkan oleh dua grup berlawanan. Masing-masing grup memiliki enam orang pemain. Terdapat pula variasi permainan bola voli pantai yang masing-masing timnya hanya memiliki dua orang pemain. ', '2022-11-23', 1844354352);

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `judul_news` varchar(225) NOT NULL,
  `img_news` text NOT NULL,
  `isi_news` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id_news`, `judul_news`, `img_news`, `isi_news`, `tgl_upload`, `id_user`) VALUES
(11, 'weee', '1773573657_your name.png', 'Fadiah', '2022-10-12', 4),
(12, 'yrdg', '1792911147_thankyou.png', 'xhfgd', '2022-11-08', 1),
(13, 'adinnnn', '1472179686_angga.1.png', 'asdffvl,jkl;', '2022-10-26', 1),
(14, 'ini pengumuman', '1271974456_Gambar1.png', 'iniiiiiiiiiiiiiiiiiiiiiiiiiiii', '2022-11-08', 1),
(15, 'Cross Culture Event SMKN 8 Malang', '1042019158_culture.jpg', 'SMKN 8 Malang mengadakan Cross Culture Event yang ditujukan untuk mengedukasi para siswa siswi mengenai budaya luar, pada tanggal 20 Oktober 2022, SMKN 8 malang mendatangkan Native Speaker dari negara Belanda dan Italia, disana mereka bercerita mengenai kehidupan mereka, dan pengalaman mereka selama berada di indonesia', '2022-11-09', 1844354352),
(16, 'Duka Warga Asta Arkananta insiden Kanjuruhan', '771786535_BERDUKA.jpg', 'Keluarga besar SMK Negeri 8 Malang turut berduka cita atas tragedi yang terjadi di Kanjuruhan. Tidak ada sepak bola yang sebanding dengan nyawa. Dan untuk teman dan saudara kita \"Gilang Surya Ramadhani\" dan para korban lainnya semoga di tempatkan di sisi Tuhan Yang Maha Esa.', '2022-11-09', 1844354352),
(17, 'Selamat atas kemenangan Tim Paskibra Paskadema', '1293123913_paskib.jpg', 'askibraka SMK Negeri 8 Malang ikut andil memeriahkan LPKBB PRASASSTI Fourth Generation  acara bergengsi ini diselenggarakan di bumi SMK Negeri 3 Malang. Untuk mengatur formasi mengerahkan 16 anggotanya untuk bersaing dengan yang lainnya. Penampilannya yang memukau mampu menyabet JUARA MADYA 1. Acara ini diikuti oleh berbagai kalangan antara lain diikuti oleh SD, SMP/MTS, SMA/SMK, MANAJEMEN Se-Malang Raya.', '2022-11-09', 1844354352),
(18, 'Congratulations Crew Taekwondo', '1030235214_taekwondo.jpg', 'Selamat dan Sukses untuk Siswa SMK Negeri 8 Malang atas Prestasi dalam Bidang Olahraga Taekwondo. Ekstrakulikuler Taekwondo SMK Negeri 8 Malang ikut andil memeriahkan UM CUP V yang dilaksanakan di Gor Gajah Mada Batu. Event ini diikuti oleh Peserta UM serta mengundang club lainnya juga.\r\nDalam event ini 7 siswa-siswi SMKN 8 Malang bersaing sengit dengan peserta lain dan berhasil memboyong 7 medali emas yang berkategorikan KYORUGI (SMK 8 Tingkat Junior / Club UM).', '2022-11-09', 1844354352),
(19, 'Penghargaan Medali Perak di World Invention Competition, Malaysia 2022', '1173582451_medali perak.jpg', 'LUAR BIASA!! Pada tanggal 31 October 2022, perwakilan murid dari SMKN 8 Malang memenangkan penghargaan medali perak di World Invention Competition and Exhitbition di Malaysia, selamat pada teman teman yang memenangkan lomba ini, teruslah kejar masa depanmu dan tetaplah semangatlah mengejar masa depan!!!', '2022-11-09', 1844354352),
(20, 'Bulan Bahasa Asta 2022', '298426726_bulan bahasa.jpg', 'Halo warga Asta Arkananta, seperti biasanya OSIS SMKN 8 Malang mengadakan acara tahunan yaitu, Bulan Bahasa yang bertemakan \"Gemilang Bahasa, Asta Arkananta Berkarya\". \r\n', '2022-11-09', 1844354352),
(22, 'percobaan', '712327452_merpati putih.jpg', 'percobaan', '2022-11-23', 1844354352);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(20) NOT NULL,
  `img_produk` text NOT NULL,
  `nama_produk` varchar(225) NOT NULL,
  `desc_produk` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `toko` varchar(225) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `img_produk`, `nama_produk`, `desc_produk`, `tgl_upload`, `toko`, `id_user`) VALUES
(10, '1536996941_exotic.png', 'hfhgjb', '123', '2022-10-24', '213', 1),
(15, '1042331205_donats.jpg', 'donatss', 'dtghjbkvjgguuuuuuu', '2022-11-21', 'thisisfaddd', 1844354353),
(17, '652428783_tas rajut.jpg', 'tas rajut', 'tas rajut made in home', '2022-11-23', 'toko adin', 1844354353),
(18, '1649250656_peyek.jpg', 'peyek adinn', 'peyek enakkkkkk', '2022-11-23', 'adinn', 1844354352),
(19, '2125371805_pashmina.jpeg', 'Pashmina', 'kerudungg', '2022-11-23', 'inii', 1844354353);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `img_user` text NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama_lengkap` varchar(225) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `img_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(2, '_anggun.jpg', 'anggunar', 'user', 'Anggun Amanda', 'user'),
(1844354352, '_fadiah.jpg', 'fadiahkhsnh', '123456', 'Fadiah Khusnah', 'admin'),
(1844354353, '2080558808_WIN_20220825_09_55_45_Pro.jpg', 'taniaptr', 'user', 'Tania Putri', 'user'),
(1844354354, '1222270679_03.jpg', 'cindinovv', 'user', 'Cindi Noviana', 'user'),
(1844354355, '_adinn.jpg', 'adin', 'user', 'adin santoso', 'admin'),
(1844354356, '_visitra.jpg', 'visitrad', 'user', 'visitra dewangga', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ekstra`
--
ALTER TABLE `ekstra`
  ADD PRIMARY KEY (`id_ekstra`);

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ekstra`
--
ALTER TABLE `ekstra`
  MODIFY `id_ekstra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1844354357;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
