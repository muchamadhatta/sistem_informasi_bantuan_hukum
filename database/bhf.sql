-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2020 pada 00.17
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `telepon`, `alamat`) VALUES
(1, '081218114681', 'bukit pamulang indah 2'),
(67, '0893477', 'pamulang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id_agenda` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_agenda` varchar(100) NOT NULL,
  `isi_agenda` varchar(400) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id_agenda`, `id_user`, `judul_agenda`, `isi_agenda`, `tanggal`) VALUES
(2, 8, 'Sosialisasi Hukum Pertanahan', 'Penyelenggara : Bantuan Hukum Front\r\nTelpon/fax : (021) 7540095\r\nE-mail        : bhf@gmail.com\r\nLocation information\r\nGandul, Cinere, Depok City, West Java, Indonesia', '2019-12-12'),
(3, 8, 'Sosialisasi Hukum dan Perlindungan Masyarakat', 'Penyelenggara : Bantuan Hukum Front\r\nTelpon/fax : (021) 7540095\r\nE-mail        : bhf@gmail.com\r\nLocation information\r\nGandul, Cinere, Depok City, West Java, Indonesia', '2019-12-17'),
(4, 8, 'Sosialiasi Hukum Pidana', 'Penyelenggara : Bantuan Hukum Front\r\nTelpon/fax : (021) 7540095\r\nE-mail        : bhf@gmail.com\r\nLocation information\r\nGandul, Cinere, Depok City, West Java, Indonesia', '2019-12-18'),
(5, 8, 'Diskusi Publik Soal Hukum Pertanahan', 'Penyelenggara : Bantuan Hukum Front\r\nTelpon/fax : (021) 7540095\r\nE-mail        : bhf@gmail.com\r\nLocation information\r\nGandul, Cinere, Depok City, West Java, Indonesia', '2019-12-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `album`
--

CREATE TABLE `album` (
  `id_album` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_album` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `isi_artikel` varchar(400) NOT NULL,
  `image` varchar(100) NOT NULL,
  `tanggal_posting` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `id_user`, `id_kategori`, `judul_artikel`, `isi_artikel`, `image`, `tanggal_posting`) VALUES
(2, 8, 1, 'Penegakan Hukum dan Reformasi Sektor Keamanan', 'Pembicaraan mengenai sektor keamanan pada awalnya terfokus pada militer, tetapi kemudian terjadi perkembangan penting yang membuat definisi sektor keamanan menjadi lebih luas dan dalam. Sektor keamanan diartikan sebagai gabungan antara aktor keamanan tradisional, misalnya unit pertahanan, polisi, penjaga perbatasan, badan intelijen, lembaga peradilan, angkatan pertahanan yang tidak resmi seperti p', 'artikel-200114-717a33096b.jpg', '2019-12-23'),
(3, 8, 1, 'Bantuan Hukum Struktural: Sejarah, Teori, dan Pemb', 'dimaksudkan untuk menemukan kembali BHS dari asal teori yang melahirkannya dan mencari konstektualisasinya dalam situasi sosial, politik, budaya saat ini. Untuk itu, penulis mendasarkan pada perkembangan teori yang terkait dengan strukturalisme yaitu poststrukturalis dan teori yang berupaya mendamaikan perdebatan antara tindakan dengan struktur.\r\n\r\nSejarah, Model NGO, dan Asumsi Di Baliknya\r\n\r\nLBH', 'artikel-200114-3496f14828.jpeg', '2019-12-25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id_foto` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id_foto`, `id_album`, `image`) VALUES
(7, 1, 'foto-191224-9898a49238.jpg'),
(9, 1, 'foto-191224-c43c043bda.jpg'),
(10, 1, 'foto-191224-d83878e54c.jpg'),
(11, 1, 'foto-191224-ad32f4a528.jpg'),
(12, 1, 'foto-200114-0a0c3d80c5.jpg'),
(13, 2, 'foto-200114-aa70f54b8f.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat_pertemuan` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `tanggal` date NOT NULL,
  `hasil_pertemuan` varchar(400) NOT NULL,
  `status` varchar(40) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_konsultasi`, `id_user`, `alamat_pertemuan`, `jam`, `tanggal`, `hasil_pertemuan`, `status`, `keterangan`) VALUES
(8, 26, 82, 'Komplek Bukit Pamulang Indah Blok B14 No 2', '16:00:00', '2020-02-12', 'Mahasiswa akan dilacak', 'Selesai', 'Belum lapor ke polisi'),
(9, 27, 83, 'belum ditentukan', '00:00:00', '0000-00-00', 'masih kosong', '', 'masih kosong'),
(10, 28, 84, 'belum ditentukan', '00:00:00', '0000-00-00', 'masih kosong', '', 'masih kosong');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis`) VALUES
(1, 'Artikel'),
(2, 'Berita'),
(3, 'Lain-Lain');

-- --------------------------------------------------------

--
-- Struktur dari tabel `klien`
--

CREATE TABLE `klien` (
  `id_klien` int(11) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `klien`
--

INSERT INTO `klien` (`id_klien`, `alamat`, `tanggal_lahir`, `telepon`) VALUES
(74, 'ciputat', '2019-12-27', '234232'),
(79, 'Jl. Dharma 16 No. 48, RT/RW. 010/003, Kel. Baru, kec. Pasar ', '1993-12-24', '0817223213'),
(83, ' Jl. Raya Jatipadang No.1c RT.6/RW.9, Jati Padang Kec. Ps. M', '1992-07-03', '08121277744'),
(84, ' Jl. Raya Jatipadang No.1c RT.6/RW.9, Jati Padang Jakarta Se', '1996-03-15', '08121812233');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultan_hukum`
--

CREATE TABLE `konsultan_hukum` (
  `id_konsultan_hukum` int(11) NOT NULL,
  `spesialisasi` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pengalaman` varchar(60) NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `kampus` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `keahlian` varchar(40) NOT NULL,
  `telepon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultan_hukum`
--

INSERT INTO `konsultan_hukum` (`id_konsultan_hukum`, `spesialisasi`, `alamat`, `email`, `pengalaman`, `gelar`, `kampus`, `tanggal_lahir`, `keahlian`, `telepon`) VALUES
(10, 'Pidana', 'Komplek Bukit Pamulang Indah Blok B14 No 2', 'dwiheriadi@gmail.com', '2 tahun', 'MH', 'Universitas Pamulang', '1996-11-13', 'Non litigasi dan Litigasi', '0812313223233'),
(29, 'Pidana, Perdata', 'Kabupaten Tangerang', 'baihaqisyihab@gmail.com', '3 tahun', 'Sarjana Hukum', 'Universitas Pamulang', '1994-10-18', 'Non litigasi dan Litigasi', '08983511148');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `kebangsaan` varchar(20) NOT NULL,
  `umur` int(10) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `rata_rata_pengeluaran` varchar(30) NOT NULL,
  `jumlah_tanggungan` int(11) NOT NULL,
  `jenis_masalah` varchar(30) NOT NULL,
  `masalah_kasus` varchar(800) NOT NULL,
  `penanganan` varchar(400) NOT NULL,
  `status` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL,
  `ditanganioleh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konsultasi`
--

INSERT INTO `konsultasi` (`id_konsultasi`, `id_user`, `nama_lengkap`, `agama`, `alamat`, `kelurahan`, `kota`, `kebangsaan`, `umur`, `jenis_kelamin`, `status_perkawinan`, `pendidikan`, `pekerjaan`, `rata_rata_pengeluaran`, `jumlah_tanggungan`, `jenis_masalah`, `masalah_kasus`, `penanganan`, `status`, `tanggal_input`, `ditanganioleh`) VALUES
(26, 82, 'Hendri', 'islam', 'Unpam Buaran', 'Buaran', 'Tangerang Selatan', 'WNI', 40, 'L', 'kawin', 'Magister', 'Pengajar di Unpam', '5000000', 3, 'Hutang Piutang', 'mahasiswa berhutang ke bpk Hendri dan tidak mau bayar ', 'Selalu meminta ke mahasiswa bersangkutan untuk membayar hutang, tapi tidak digubris selama dua tahun', 'Ditangani', '2020-01-28', 29),
(27, 83, 'Nurbainah', 'islam', ' Jl. Raya Jatipadang No.1c RT.6/RW.9, Jati Padang ', 'Ps. Minggu', ' Jakarta Selatan', 'WNI', 27, 'P', 'kawin', 'SMA', 'ibu rumah tangga', '3000000', 2, 'Keluarga', 'Saya ibu rumah tangga dengan tiga anak. Saya telah menikah selama 16 tahun dengan hanya mempunyai surat nikah siri. Sekarang saya ingin berpisah dengan suami karena hampir setiap hari kami bertengkar. Suami saya penjudi kelas berat. Dia tidak mau berusaha untuk mencari pekerjaan secara halal. Kami sudah tidak punya harta lagi, sertifikat rumah sudah dipegang orang, utang suami saya banyak. Kami kesulitan membiayai sekolah anak dan kebutuhan rumah tangga. Apakah saya bisa mendapatkan surat cerai untuk menyatakan bahwa kami sudah berpisah secara hukum?', '', 'Ditangani', '2020-07-06', 29),
(28, 84, 'Anisa Dewi', 'islam', ' Jl. Raya Jatipadang No.1c RT.6/RW.9, Jati Padang ', 'Jati Padang', 'Jakarta Selatan', 'WNI', 41, 'P', 'kawin', 'SMA', 'Ibu Rumah Tangga', '3000000', 3, 'Keluarga', 'Saya ibu rumah tangga dengan tiga anak. Saya telah menikah selama 16 tahun dengan hanya mempunyai surat nikah siri. Sekarang saya ingin berpisah dengan suami karena hampir setiap hari kami bertengkar. Suami saya penjudi kelas berat. Dia tidak mau berusaha untuk mencari pekerjaan secara halal. Kami sudah tidak punya harta lagi, sertifikat rumah sudah dipegang orang, utang suami saya banyak. Kami kesulitan membiayai sekolah anak dan kebutuhan rumah tangga. Apakah saya bisa mendapatkan surat cerai untuk menyatakan bahwa kami sudah berpisah secara hukum?', '', 'Ditangani', '2020-07-13', 29);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_hukum`
--

CREATE TABLE `produk_hukum` (
  `id_produk_hukum` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `file_upload` varchar(100) NOT NULL,
  `judul_produk_hukum` varchar(200) NOT NULL,
  `jenis_keputusan` varchar(30) NOT NULL,
  `nomor` varchar(40) NOT NULL,
  `tahun` int(11) NOT NULL,
  `tentang` varchar(300) NOT NULL,
  `tanggal_perundangan` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk_hukum`
--

INSERT INTO `produk_hukum` (`id_produk_hukum`, `id_user`, `file_upload`, `judul_produk_hukum`, `jenis_keputusan`, `nomor`, `tahun`, `tentang`, `tanggal_perundangan`, `status`) VALUES
(3, 0, 'produkhukum-191218-bfff91d980.pdf', 'PERATURAN DAERAH KOTA SERANG TENTANG PENCEGAHAN, PEMBERANTASAN DAN PENANGGULANGAN PENYAKIT MASYARAKA', 'PERATURAN DAERAH KOTA SERANG', 'NOMOR 2 TAHUN 2010', 2010, 'PENCEGAHAN, PEMBERANTASAN DAN PENANGGULANGAN PENYAKIT MASYARAKAT', '2010-07-19', 'Aktif'),
(8, 0, 'produkhukum-200114-bb241cd40e.pdf', 'PERATURAN MENTERI PARIWISATA REPUBLIK INDONESIA NOMOR 18 TAHUN 2016 TENTANG PENDAFTARAN USAHA PARIWI', 'PERATURAN MENTERI', 'NOMOR 18 TAHUN 2016', 2016, 'PENDAFTARAN USAHA PARIWISATA', '0206-10-14', 'Aktif'),
(14, 8, 'produkhukum-200114-80ce92b0ad.pdf', 'UNDANG-UNDANG REPUBLIK INDONESIA NOMOR 16 TAHUN 2011 TENTANG BANTUAN HUKUM', 'UNDANG-UNDANG REPUBLIK INDONES', 'NOMOR 16 TAHUN 2011', 2011, 'BANTUAN HUKUM', '2011-10-31', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekretariat`
--

CREATE TABLE `sekretariat` (
  `id_sekretariat` int(11) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sekretariat`
--

INSERT INTO `sekretariat` (`id_sekretariat`, `telepon`, `alamat`) VALUES
(8, '12345', 'tangerang'),
(53, '08312334', 'pamulang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `id_konsultasi` int(11) NOT NULL,
  `isi_tanggapan` varchar(400) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_user`, `nama_lengkap`, `id_konsultasi`, `isi_tanggapan`, `tanggal_input`) VALUES
(78, 8, 'sekretariat', 26, 'Halo, Ada yang bisa saya bantu ', '2020-01-28'),
(79, 82, 'Sujiwo Tejo', 26, 'Saya sudah menghubungi mahasiswa tersebut lewat WA tapi tidak dibalas', '2020-01-28'),
(80, 8, 'sekretariat', 26, 'Telpon saja terus, pak. Mungkin saja dia lama-lama lunak dan mau bayar hutangnya.', '2020-01-28'),
(81, 82, 'Sujiwo Tejo', 26, 'Sudah ditelpon terus-terusan. Sudah di WA dan SMS. Tapi tidak ada tanggapan dari mahasiswanya. ', '2020-01-28'),
(82, 8, 'sekretariat', 26, 'Bapak kurang berusaha tuh', '2020-01-28'),
(83, 82, 'Sujiwo Tejo', 26, 'Sumpan, sudah berusaha, pak ', '2020-01-28'),
(84, 29, 'H Baihaqi Heriyanto, S.H.', 26, 'Selamat Siang Pak Tejo, Saya akan mendampingi anda untuk permasalahan ini', '2020-01-28'),
(85, 29, 'H Baihaqi Heriyanto, S.H.', 24, 'Tolong segera ditanggapi', '2020-02-02'),
(86, 29, 'H Baihaqi Heriyanto, S.H.', 24, 'Segera ya pak. Soalnya saya mau ke Korea.', '2020-02-02'),
(87, 83, '', 27, 'Halo, Ada yang bisa saya bantu', '2020-07-06'),
(88, 83, 'Nurbainah Ma\'ruf', 27, 'Saya membutuhkan bantuan hukum pak', '2020-07-06'),
(89, 8, 'sekretariat', 27, 'Mohon ditunggu kami akan segera menghubungkan kepada konsultan hukum kami', '2020-07-06'),
(90, 83, 'Nurbainah Ma\'ruf', 27, 'baik pak', '2020-07-06'),
(91, 29, 'H Baihaqi Heriyanto, S.H.', 27, 'Assamualaikum dengan Baihaqi S.H. apa yang bisa saya bantu', '2020-07-06'),
(92, 83, 'Nurbainah Ma\'ruf', 27, 'Waalaikumsalam.. jadi gini', '2020-07-06'),
(93, 83, 'Nurbainah Ma\'ruf', 27, 'Saya ibu rumah tangga dengan tiga anak. Saya telah menikah selama 16 tahun dengan hanya mempunyai surat nikah siri.', '2020-07-06'),
(94, 83, 'Nurbainah Ma\'ruf', 27, 'Sekarang saya ingin berpisah dengan suami karena hampir setiap hari kami bertengkar. Suami saya penjudi kelas berat. Dia tidak mau berusaha untuk mencari pekerjaan secara halal. Kami sudah tidak punya harta lagi, sertifikat rumah sudah dipegang orang, utang suami saya banyak. Kami kesulitan membiayai sekolah anak dan kebutuhan rumah tangga.', '2020-07-06'),
(95, 83, 'Nurbainah Ma\'ruf', 27, 'Apakah saya bisa mendapatkan surat cerai untuk menyatakan bahwa kami sudah berpisah secara hukum?', '2020-07-06'),
(96, 29, 'H Baihaqi Heriyanto, S.H.', 27, 'Terima kasih atas pertanyaan yang Ibu ajukan. Kami ikut bersimpati atas permasalahan yang dihadapi. Inti permasalahan Ibu terkait dapat atau tidaknya diterbitkan surat perceraian yang diakui secara hukum terhadap perkawinan siri.', '2020-07-06'),
(97, 29, 'H Baihaqi Heriyanto, S.H.', 27, 'Secara umum perkawinan siri atau perkawinan di bawah tangan hanya dilakukan berdasarkan ketentuan hukum agama dan tidak dicatatkan atas ketentuan hukum negara. Karena itu, perkawinan siri sah secara agama, namun belum sah secara hukum negara.', '2020-07-06'),
(98, 29, 'H Baihaqi Heriyanto, S.H.', 27, 'Menurut pasal 2 UU No. 1 Tahun 1974 tentang Perkawinan (UUP), syarat sahnya suatu perkawinan selain dilakukan menurut hukum masing-masing agama dan kepercayaan, juga harus dicatatkan menurut perundang-udangan yang berlaku. Perkawinan bagi muslim harus dicatatkan di Kantor Urusan Agama (KUA), sedangkan non-muslim di Dinas Pencatatan sipil.', '2020-07-06'),
(99, 29, 'H Baihaqi Heriyanto, S.H.', 27, 'Berdasarkan penjelasan di atas, Ibu tidak dapat memperoleh surat perceraian resmi dari Negara ketika pernikahan belum tercatat di Dinas Pencatatan Sipil. Oleh karena itu, untuk dapat memperoleh surat perceraian yang memiliki legalitas hukum, Ibu harus mencatatkan pernikahan siri di pencatatan sipil dan selanjutnya mengajukan gugatan perceraian. ', '2020-07-06'),
(100, 29, 'H Baihaqi Heriyanto, S.H.', 27, 'Selain itu, Ibu juga dapat mengajukan permohonan penetapan sahnya pernikahan melalui Pengadilan Negeri setempat untuk selanjutnya mengurus gugatan perceraian. Hal ini, sebagaimana perceraian bagi pasangan suami istri muslim yang menikah siri melalui Itsbat nikah yang dapat diajukan ke Pengadilan Agama berkenaan pembuktian adanya perkawinan siri dalam rangka penyelesaian perceraian. ', '2020-07-06'),
(101, 83, 'Nurbainah Ma\'ruf', 27, 'owh jadi seperti itu pak, terimakasih penjelasannya', '2020-07-06'),
(102, 84, '', 28, 'Halo, Ada yang bisa saya bantu', '2020-07-13'),
(103, 84, 'Anisa Dewi', 28, 'Saya Ingin Mendapatkan Bantuan Hukum', '2020-07-13'),
(104, 84, 'Anisa Dewi', 28, 'Terkait masalah Saya', '2020-07-13'),
(105, 8, 'sekretariat', 28, 'Baik bu, Kami akan tindak lanjuti permasalah anda', '2020-07-13'),
(106, 29, 'H Baihaqi Heriyanto, S.H.', 28, 'Selamat Siang, saya akan menangani permasalahan anda', '2020-07-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','klien','sekretariat','konsultan_hukum') NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `username`, `password`, `level`, `image`) VALUES
(1, 'hata', 'hata', '202cb962ac59075b964b07152d234b70', 'admin', 'profil-191214-8f930990a1.png'),
(8, 'sekretariat', 'sekretariat', '202cb962ac59075b964b07152d234b70', 'sekretariat', 'profil-200114-60a3ab0f52.JPG'),
(10, 'Dwi Heriadi SH.', 'dwiheriadi', '202cb962ac59075b964b07152d234b70', 'konsultan_hukum', 'profil-200122-f40adaa0a5.jpg'),
(29, 'H Baihaqi Heriyanto, S.H.', 'Baihaqi', '202cb962ac59075b964b07152d234b70', 'konsultan_hukum', 'profil-200122-85b6e6d6fe.jpg'),
(67, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', 'admin', 'profil-191213-d071640e7b.png'),
(83, 'Nurbainah Ma\'ruf', 'nurbainah@gmail.com', '202cb962ac59075b964b07152d234b70', 'klien', 'profil-200706-fee8bf10d1.jpg'),
(84, 'Anisa Dewi', 'Anisa@gmail.com', '202cb962ac59075b964b07152d234b70', 'klien', 'profil-200713-aad14582b8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id_agenda`);

--
-- Indeks untuk tabel `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_album`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id_klien`);

--
-- Indeks untuk tabel `konsultan_hukum`
--
ALTER TABLE `konsultan_hukum`
  ADD PRIMARY KEY (`id_konsultan_hukum`);

--
-- Indeks untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `produk_hukum`
--
ALTER TABLE `produk_hukum`
  ADD PRIMARY KEY (`id_produk_hukum`);

--
-- Indeks untuk tabel `sekretariat`
--
ALTER TABLE `sekretariat`
  ADD PRIMARY KEY (`id_sekretariat`);

--
-- Indeks untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id_agenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id_foto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `produk_hukum`
--
ALTER TABLE `produk_hukum`
  MODIFY `id_produk_hukum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tanggapan`
--
ALTER TABLE `tanggapan`
  MODIFY `id_tanggapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
