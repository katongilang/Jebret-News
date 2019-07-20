-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2017 at 02:53 PM
-- Server version: 10.0.32-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gn16c4`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(255) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `id_kategori` int(6) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `status` varchar(30) NOT NULL,
  `id_user` int(50) NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `tanggal`, `id_kategori`, `gambar`, `isi`, `status`, `id_user`) VALUES
(2, 'mengejar cinta', '2017-04-27', 2, '3.jpg', 'asldkhsaldhaslhdjasasldkhsaldhaslhaslhdjasasldkhsaldhaslhdjas', 'ditolak', 1),
(3, 'mengejar ciasanta1', '2017-04-27', 1, '3.jpg', 'asldkhsaldhaslhdjasasldkhsaldhaslhaslhdjasasldkhsaldhaslhdjas', 'ditolak', 3),
(4, 'United Kembali Gelar Negosiasi dengan Lindelof', '2017-04-23', 6, 'lindelof_2e0cba1.jpg', '<p><strong>Manchester United</strong> dikabarkan kembali membuka negosiasi anyar soal transfer 40 juta pounds untuk bek <strong>Benfica</strong>, <strong>Victor Lindelof</strong>, sebagaimana dilansir<em> The Mirror. </em><br /><br />Presiden Benfica, Luis Filipe Vieira, disebut meminta tak kurang dari 50 juta pounds, yang merupakan nilai klausul kontrak sang pemain, namun United yakin mereka mampu merayu klub Portugal untuk menurunkan tuntutannya.<br /><br />United sempat mendekati pemain 22 tahun di Januari silam, namun mereka tak berhasil mencapai kesepakatan dan masih terus tertarik untuk merekrut yang bersangkutan.</p>\r\n<p>&nbsp;</p>\r\n<p>Namun Benfica disebut sedikit lagi akan mencapai kata setuju dengan mantan klub Lindeof, Vasteras, sebanyak 3,5 juta pounds sebagai bagian dari penjualan sang pemain.<br /><br />Bos United, Jose Mourinho, amat ingin memperkuat lini belakang timnya dan Lindelof bisa menjadi satu dari dua bek yang mungkin akan mendarat di Old Trafford di musim panas nanti.<br /><br />Mourinho kabarnya juga tertarik dengan pemain Burnley, Michael Keane, yang baru meninggalkan United dua tahun silam.</p>', 'diterima', 3),
(5, 'Perancis Butuh Gol Lebih Banyak', '2017-04-23', 5, '1_422b98c.jpg', '<p>Perancis harus mengakhiri masa paceklik goal yang mengkhawatirkan pada Minggu saat harus berhadapan dengan Korea Selatan atau menghadapi kemungkinan tersingkir lebih cepat lagi di Piala Dunia.</p>\r\n<p>Setelah hasil imbang 0-0 yang tidak bersemangat saat melawan Swiss dalam pertandingan pembuka mereka di Grup G, Perancis belum memenangkan satu pertandingan pun atau bahkan mencetak satu gol dalam putaran final Piala Dunia sejak mengalahkan Brazil untuk mengangkat trofi Piala Dunia delapan tahun lalu.</p>\r\n<p>Tim Perancis terpaksa mengepak barang mereka lebih cepat pada Piala Dunia 2002 setelah tidak menang atau mencetak satu gol pun dalam babak penyisihan grup dan saat ini mengakhirinya dalam rekor yang tidak diinginkan dengan lima pertandingan final tanpa satu gol pun.</p>\r\n<p>Tim yang terdiri atas para pemain yang sudah berumur asuhan pelatih <strong>Raymond Domenech</strong> tampak melempem saat melawan Swiss dan harus meningkatkan upaya mereka saat berhadapan dengan Korsel yang bermain cepat dan kondisi sangat fit.</p>\r\n<p>Semi finalis 2002 yang mengejutkan itu mencoba berjuang kembali dari ketertinggalan gol untuk mengalahkan Togo 2-1 dalam pertandingan pembuka mereka dan meningkatkan peluang mereka untuk juga mengalahkan tim Perancis, Les Bleus.</p>\r\n<p>\"Mungkin tidak akan mudah tetapi kami harus menang,\" ujar striker Perancis <strong>Thierry Henry</strong>, \"Mereka (Korea) masuk semifinal pada waktu lalu tetapi mereka tidak lah se-<em>defensif</em> Swiss dan mereka hendaknya memberi kami lebih banyak ruang.\"</p>', 'diterima', 4),
(6, 'mengejar cinta2', '2017-04-27', 3, '3.jpg', 'asldkhsaldhaslhdjasasldkhsaldhaslhaslhdjasasldkhsaldhaslhdjas', 'ditolak', 4),
(7, 'mengejar cinta3', '2017-04-27', 4, '2.png', 'asldkhsaldhaslhdjasasldkhsaldhaslhaslhdjasasldkhsaldhaslhdjas', 'ditolak', 1),
(30, 'menulis berita', '2017-04-23', 2, '3.png', 'asdkagdjsagdajskdadhsaldahdasdkadlahkd', 'ditolak', 4),
(31, 'Kata Andrea Belotti tentang Klausul Rp 1,4 T Dirinya', '2017-04-23', 6, 'efa94320-80c0-4bb1-aaec-522b035b614c_169.jpg', '<p>Penyerang Torino Andrea Belotti, yang kabarnya diminati klub-klub top Premier League, bicara soal klausul pelepasan (<em>buyout clause</em>) Rp 1,4 triliun dirinya.<br /><br />Pemain internasional Italia itu kini sedang mencuri perhatian berkat performa apiknya di lapangan, yang salah satunya ditandai dengan 25 gol di Serie A 2016-17 sejauh ini.<br /><br />Apa yang ditunjukkan Belotti tersebut sudah membuat dirinya disebut-sebut akan hijrah ke Premier League musim panas nanti, dengan Arsenal dan Chelsea konon termasuk jadi peminat. <br /><br />Pun begitu, Belotti baru teken kontrak baru dengan Torino bulan Desember tahun lalu. Bagian dari kontrak baru itu adalah klausul pelepasan sebesar 85 juta poundsterling (sekitar Rp 1,44 triliun). Belotti yakin tingginya nilai klausul pelepasan tersebut tidak bakal berdampak pada dirinya di bursa transfer musim panas.</p>', 'diterima', 3),
(32, 'asassasasa', '2017-04-26', 1, '3.png', 'sasasasasa', 'ditolak', 8),
(33, 'sasa', '2017-04-26', 5, '4.jpg', 'assdssdasda', 'diterima', 8),
(34, 'Periode Negatif Nerazzurri', '2017-04-26', 3, '1_52c78e1.jpg', '<p><strong>Inter Milan </strong>tanpa kemenangan dalam enam laga terakhirnya. Rentetan hasil buruk ini membuat misi <em>Nerazzurri </em>untuk finis di zona Eropa kembali terhambat.<br /><br />Inter kalah 0-1 menjamu <strong>Napoli </strong>di <em>giornata </em>34 Serie A 2016/17, Senin (01/5). Gol tunggal Napoli dicetak oleh Jose Callejon memanfaatkan kesalahan Yuto Nagatomo pada menit 43.<br /><br />Empat kekalahan dan dua hasil imbang membuat Inter hanya bisa meraup dua poin dalam enam laga terakhirnya. Ini benar-benar periode negatif bagi mereka.<br /><br /><strong>6 Laga terakhir Inter (Serie A)</strong><br />19-03-2017 Torino 2-2 Inter<br />04-04-2017 <span style=\"color: #ff0000;\">Inter </span>1-2 Sampdoria<br />09-04-2017 Crotone 2-1 <span style=\"color: #ff0000;\">Inter</span><br />15-04-2017 Inter 2-2 Milan<br />23-04-2017 Fiorentina 5-4 <span style=\"color: #ff0000;\">Inter</span><br />01-05-2017 <span style=\"color: #ff0000;\">Inter </span>0-1 Napoli.<br /><br />\"Kami harus segera keluar dari periode negatif ini,\" kata gelandang Inter <strong>Roberto Gagliardini </strong>seperti dikutip <em>Football Italia</em>.<br /><br />\"Sayangnya, ucapan itu selalu muncul hampir setiap pekan. Kami harus mengurangi bicara dan lebih banyak bekerja. Ini bulan yang sangat negatif, tapi kami berusaha tetap kompak dan memberikan yang terbaik.\"<br /><br />\"Para suporter telah memberikan begitu banyak dukungan, dan kami harus memberi lebih untuk mereka. Kami harus keluar dari periode buruk ini.\"<br /><br /><br />Kekalahan dari Napoli membuat Inter berada di peringkat tujuh dengan selisih tiga poin dari <strong>AC Milan</strong>, tapi tertinggal delapan poin dari <strong>Atalanta </strong>di posisi lima. Meski begitu, dengan empat <em>giornata </em>tersisa, pelatih Inter <strong>Stefano Pioli </strong>belum menyerah mengejar Eropa.<br /><br />\"Saat ini, hasil-hasilnya negatif. Namun, kami masih bisa finis peringkat enam. Itulah target kami,\" kata Pioli seperti dikutip <em>AFP</em>.<br /><br />Italia bisa mengirimkan enam wakil ke Eropa musim depan jika dua finalis Coppa Italia (Juventus dan Lazio) lolos lewat klasemen liga. Artinya, jatah juara Coppa akan diserahkan pada peringkat lima, sedangkan sisanya menyesuaikan. Itulah situasinya sekarang.<br /><br />Untuk itu, <em>Nerazzurri</em> terlebih dahulu harus bisa keluar dari periode negatif mereka dan coba menembus enam besar di empat <em>giornata </em>yang tersisa</p>', 'diterima', 8),
(35, 'Bailly Nyaris Gabung City Musim Panas Lalu', '2017-04-26', 6, 'ce8f9ffa-bdbf-4d06-a71b-65a3b641c85f_169.jpg', '<p><strong>Manchester</strong> - Manchester United patut berterima kasih kepada Jose Mourinho atas kedatangan Eric Bailly. Pasalnya Bailly nyaris saja bergabung ke Manchester City.</p>\r\n<p><br />Cerita itu muncul di bursa transfer musim panas lalu ketika Bailly jadi incaran beberapa klub besar Eropa menyusul performa okenya bersama Villarreal.</p>\r\n<p><br />Pada akhirnya MU yang mendapatkan jasa pemain 23 tahun itu setelah membayar 30 juta poundsterling kepada Villarreal. Uang besar itu sepadan dengan penampilan Bailly di atas lapangan.</p>\r\n<p><br />Dia jadi pilihan utama Mourinho di lini belakang dan mampu tapi 31 kali di seluruh kompetisi. Padahal dia sempat absen dua bulan karena cedera lutut.</p>\r\n<p><br />Tentu saja performa oke itu sebagai balas jasa Bailly kepada Mourinho yang begitu ngotot mendatangkannya ke Old Trafford di bursa transfer lalu. Pasalnya Bailly saat itu juga tengah bernegosiasi dengan City serta Barcelona.</p>', 'diterima', 8),
(36, 'Sempat memiliki peluang lewat Wayne Rooney dan Anthony Martial', '2017-04-27', 2, 'Capture.JPG', '<p>Menyusul kekalahan 2-0 dari Arsenal dalam lanjutan Liga Primer Inggris, Minggu (7/5) malam WIB, <em>playmaker</em> Manchester United Juan Mata berusaha <em>move on</em> dan mengalihkan fokus untuk <em>leg</em> kedua semi-final Liga Europa melawan Celta Vigo pada pertengahan pekan ini.</p>\r\n<p>Di pertandingan semalam, United terpaksa menyerah dari tuan rumah Arsenal berkat go-gol yang dicetak Granit Xhaka dan Danny Welbeck, dan kekalahan tersebut membuat Setan Merah semakin sulit menembus zona empat besar Liga Primer.</p>\r\n<p>Meski begitu, pasukan Jose Mourinho mampu menampilkan perlawanan dan sempat memiliki peluang lewat Wayne Rooney dan Anthony Martial, namun upaya keduanya bisa dimentahkan kiper Petr Cech.</p>\r\n<p>Mengenai itu, Mata mengatakan: &ldquo;Di babak pertama kami punya dua peluang bagus untuk mencetak gol sebelum mereka, namun kami gagal,&rdquo; ujarnya kepada <em>MUTV</em>. &ldquo;Dan kemudian di babak kedua kami mencoba lagi. Namun kami keobolan gol [Xhaka] tersebut, yang mana itu berasal dari tendangan bagus dan mengecoh David.</p>\r\n<p>&ldquo;Itu adalah momen menentukan dari pertandingan ini dan kemudian setelah gol kedua tercipta, itu jauh lebih sulit.&rdquo;</p>\r\n<p><strong>SIMAK JUGA: Arsene Wenger Tolak Rayakan Kemenangan Atas Jose Mourinho</strong></p>\r\n<p>Kini United harus beristirahat untuk persiapan melawan Vigo di Old Trafford, Jumat (14/5) dini hari WIB mendatang, dan Mata menegaskan bahwa timnya, yang memiliki keunggulan satu gol tandang, akan berupaya lolos ke final dan menjuarai kompetisi kasta kedua Eropa tersebut.</p>\r\n<p>&ldquo;Yang berikutnya kami lawan adalah Celta dan kami harus fokus untuk itu mulai saat ini,&rdquo; lanjut Mata. &ldquo;Kami harus memulihkan diri dan fokus pada <em>leg</em> kedua karena kami punya kesempatan untuk bermain di final kejuaraan Eropa.</p>\r\n<p>&ldquo;Kami bertarung demi satu tiket ke Liga Champions lewat Liga Europa, namun juga berusaha di Liga Primer dan kami datang ke sini [markas Arsenal] dengan tujuan itu namun sayangnya kami tidak bisa menang.</p>\r\n<p>&ldquo;Kami punya kesempatan yang sangat bagus untuk bermain di Liga Champions melalui Liga Europa namun di Liga Primer apa pun bisa terjadi. Kami akan mencoba untuk memenangkan laga tersisa dan mungkin [kami akan] finis di empat besar,&rdquo; imbuhnya optimistis.</p>', 'diterima', 8),
(37, 'baru banget masih anget ndul', '2017-04-27', 1, 'katon.png', 'asdsasadsad\r\n\r\n                                   jauh aku merindu diantara sukma kau sisihkan air mata\r\nmenusuk relung hati yang paling dalam\r\nsadarlah aku mencintaimu dengan terengah engah\r\n                kau tahu apa arti rindu ?\r\n\r\nkaton', 'ditolak', 8),
(42, 'Montella Minta Rumor Transfer Seputar Milan Dihentikan', '2017-04-29', 6, 'df884a39-7d32-4a18-a208-02eb2e73a295_169.jpg', '<p>Pelatih AC Milan, Vincenzo Montella, tak mau fokus timnya terganggu pada pekan-pekan penting menjelang akhir musim. Montella berharap semua rumor transfer menyangkut timnya dihentikan.<br /><br />Setelah diakuisisi oleh investor China baru-baru ini, Milan diisukan siap menggelontorkan dana yang sangat besar di bursa transfer musim panas nanti. <em>Rossoneri</em> dihubung-hubungkan dengan sejumlah pemain top.<br /><br />Milan kabarnya mengincar gelandang Chelsea, Cesc Fabregas. Selain itu, mereka juga dilaporkan membidik striker Real Madrid, Karim Benzema, dan penyerang Borussia Dortmund, Pierre-Emerick Aubameyang.</p>', 'diterima', 9),
(43, 'PS TNI Ganti Pelatih Demi Target Juara', '2017-04-29', 1, 'liga-gojek_182ffd8.jpg', '<p>PS TNI telah resmi berganti pelatih. Pergantian dilakukan agar PS TNI bisa memenuhi targetnya menjadi kampiun Liga 1 musim 2017.<br /><br />Hari Senin (5/1/2017) kemarin, PS TNI resmi berganti nahkoda. Kontrak Laurent Hatton distop meski baru direkrut di awal musim dan posisinya sekarang digantikan oleh Ivan Kolev.<br /><br />\"Proses pergantian pelatih yang lama bapak Laurent sudah clear. Jadi masalah kontrak dengan pelatih maupun pemainnya sudah selesai. Sekarang kita gunakan Ivan Kolev dan beliau bersedia menukangi PS TNI,\" ujar Presiden Klub PS TNI, Brigjen A AB Maliogha.<br /><br />\"Target tetap juara. Harus jadi nomor satu, dan harus jadi yang terbaik,\" sambungnya.<br /><br />Sebelumnya, rumor bahwa Hatton akan didepak dan digantikan Kolev sudah menyeruak sejak beberapa hari lalu. Itu setelah Kolev hadir menyaksikan laga antara PS TNI versus Bhayangkara FC akhir pekan kemarin.<br /><br />Hatton sendiri baru tiga kali menukangi Manahati Lestusen dan kawan-kawan di Liga 1. Pertama imbang melawan Borneo FC, kedua imbang kontra Persib Bandung dan akhirnya menang atas Bhayangkara</p>', 'diterima', 10),
(45, 'Gabi: Atletico Sudah Siap Mental', '2017-04-29', 4, '1_ea2d0e8.jpg', '<p>Sebuah <em>derby</em>, terutama di pentas sekelas Liga Champions, membutuhkan lebih dari sekadar kesiapan teknis. Kesiapan mental juga sangat diperlukan.<br /><br /><strong>Atletico Madrid </strong>akan melawan tuan rumah <strong>Real Madrid </strong>di leg pertama babak semifinal Liga Champions 2016/17, Rabu (03/5). Kapten Atletico <strong>Gabi </strong>menegaskan bahwa timnya sudah siap mental untuk laga ini.<br /><br />Atletico selalu dikandaskan sang rival sekota di kompetisi ini dalam tiga musim terakhir. Dua di antaranya mereka alami di babak final. Gabi berharap di <em>derby </em>kali ini Atletico bisa meraih hasil lebih baik.<br /><br />\"Semua laga melawan Madrid berbeda. Kami mendapatkan tambahan pengalaman di kompetisi ini dan melangkah semakin jauh. Semoga hasilnya kali ini beda dari beberapa pertemuan sebelumnya,\" kata Gabi seperti dilansir <em>UEFA.com</em>.<br /><br />\"Kami berada dalam kondisi bagus. Kami juga siap mental untuk laga berat yang akan memaksa kami memberikan segalanya ini.\"<br /><br />\"Kami ingin meneruskan apa yang sudah kami lakukan selama ini, dan melangkah lebih jauh di kompetisi ini,\" tegasnya.<br /><br />Leg kedua akan digelar pekan depan. Itu akan menjadi pertandingan Eropa terakhir di Vicente Calderon</p>', 'diterima', 10),
(46, 'Falcao Semangat Bakal Duel Lawan Buffon', '2017-04-29', 2, 'falcao_97c25ab.jpg', '<p>Penyerang AS Monaco, Radamel Falcao mengungkapkan bahwa kemungkinan bertemu melawan Gianluigi Buffon menjadi motivasi tambahan yang besar baginya.<br /><br />Falcao memang memiliki kesempatan untuk head to head melawan kiper milik Juventus itu saat kedua tim bertemu di semifinal Liga Champions leg pertama tengah pekan ini.<br /><br />Dan jelang pertemuan tersebut, penyerang asal Kolombia tersebut mengatakan bahwa dirinya bersemangat untuk melawan Juventus dan mencoba membobol gawang yang dikawal Buffon.<br /><br />\"Mencetak gol melawan Juve tka mudah karena mereka tim yang sangat seimbang. Mereka punya pemain yang hebat di belakang, tapi yang terpenting adalah bertahan sebagai sebuah tim,\" ujarnya.<br /><br />\"Memang benar bahwa Barcelona tak mampu mencetak gol melawan mereka, tapi Atalanta mencetak dua gol. Di sepakbola, segalanya mungkin,\" sambungnya.<br /><br />\"Buffon? Dia adalah kiper yang hebat, kami semua mengaguminya. Saya belum pernah bertemu dengannya, jadi untuk mencetak gol melawannya akan jadi motivasi ekstra,\" tandasnya.<strong>(foti/dzi)</strong></p>', 'diterima', 8),
(48, 'HARRY KANE MENGANCAM ARSENAL DI WHITE HART LANE', '2017-04-30', 2, 'harry-kane-tottenham-premier-league_j62qkr8joluz1oplply4m9awe.jpg', '\r\n\r\n\r\nHARRY KANE MENGANCAM ARSENAL DI WHITE HART LANE\r\nTegar Paramartha\r\n09:49FAKTA #TERUSGERAK PEKAN INI!BAGIKAN\r\n0 Getty/Goal\r\nKane selalu mencetak gol dalam empat pertandingan EPL terakhir melawan Arsenal, membukukan total lima gol. Mampukah Gunners meredam sang striker?\r\n\r\nOLEH   TEGAR PARAMARTHA     Ikuti di twitter\r\n\r\n\r\nDerby London Utara antara Tottenham Hotspur dan Arsenal malam ini akan berjalan dengan sangat sengit, selain gengsi sekota, kedua kubu sama-sama memiliki pertaruhan penting pada pertandingan nanti.\r\n\r\n\r\nTottenham mengincar poin sempurna di White Hart Lane dengan membidik gelar juara Liga Primer Inggris, mengejar defisit poin dari Chelsea di puncak klasemen sementara. Di sisi lain, The Gunners diwajibkan merengkuh kemenangan guna memperlebar kesempatan kembali ke zona Eropa.\r\n\r\nSpurs memiliki catatan bagus atas Arsenal dengan tidak pernah kalah dalam lima laga EPL terakhir melawan The Gunners (M1 S4), namun mereka tidak pernah menjalani enam pertandingan EPL beruntun tanpa kekalahan saat menghadapi rival mereka.\r\n\r\nKLASEMEN LIGA PRIMER INGGRIS\r\n\r\nBagaimanapun juga, mereka bisa mengandalkan Mauricio Pochettino untuk menerapkan taktik yang tepat pada laga nanti, dengan sosok asal Spanyol itu menjadi manajer Spurs pertama yang tidak pernah kalah saat menjalani lima laga derby London Utara perdana.\r\n\r\nSelain itu, Spurs juga memiliki sosok striker buas dalam diri Harry Kane. Pemain yang telah pulih dari cidera itu  selalu mencetak gol dalam setiap empat pertandingan EPL terakhir melawan Arsenal, dengan mencetak lima gol dalam prosesnya. Tidak ada pemain Spurs yang mencetak gol lebih banyak ke gawang Arsenal di EPL daripada Kane (5 - selevel dengan Gareth Bale).\r\n\r\nDalam gambaran lebih besar, Kane juga menjadi pemain Inggris pertama yang mencetak 20+ gol dalam tiga musim beruntun EPL sejak Alan Shearer (empat musim dari 1993/94 hingga 1996/97).\r\n', 'diterima', 12);

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `idinformasi` int(100) NOT NULL AUTO_INCREMENT,
  `isi_informasi` text NOT NULL,
  PRIMARY KEY (`idinformasi`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`idinformasi`, `isi_informasi`) VALUES
(1, '<p><strong>Syarat menulis berita yang baik :</strong></p>\r\n<p>1. Tulis dengan bijak dan menggunakan hati</p>\r\n<p>2. Berpikirlah dahulu sebelum mengetik</p>\r\n<p>3. Jangan bersaksi dusta</p>\r\n<p>4. jangan menulis sembarangan</p>');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idkategori` int(30) NOT NULL AUTO_INCREMENT,
  `daftar_kategori` varchar(30) NOT NULL,
  PRIMARY KEY (`idkategori`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `daftar_kategori`) VALUES
(1, 'Indonesia'),
(2, 'Inggris'),
(3, 'Italia'),
(4, 'Spanyol'),
(5, 'Prancis'),
(6, 'Zona Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
  `id_komentar` int(100) NOT NULL AUTO_INCREMENT,
  `isi_komentar` text NOT NULL,
  `tanggal_komen` date NOT NULL,
  `komentator` varchar(255) NOT NULL,
  `status_komen` varchar(30) NOT NULL,
  `idberitaa` int(100) NOT NULL,
  PRIMARY KEY (`id_komentar`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `isi_komentar`, `tanggal_komen`, `komentator`, `status_komen`, `idberitaa`) VALUES
(21, 'makasih yahhh ðŸ˜', '2017-04-29', 'asik mania', 'diterima', 47),
(22, 'mantap', '2017-04-30', 'fiktor', 'diterima', 49),
(23, 'persija harus menanggggg !!!', '2017-04-30', 'dody ivana', 'diterima', 51),
(24, 'hahaha 10 - 0 pasti persija menang boss!!!!', '2017-04-30', 'katon gilang', 'diterima', 51),
(25, 'halah malah kalah :(', '2017-04-30', 'katon gilang', 'diterima', 51),
(26, 'Aku jomblo', '2017-05-02', 'Dio', 'diterima', 47),
(27, 'apaan nihh', '2017-05-11', 'simad', 'diterima', 51),
(28, 'wah bagus ....!', '2017-05-11', 'antoni a', 'diterima', 51),
(29, 'halo halo bandung', '2017-05-15', 'halo', 'diterima', 47),
(30, 'nyoba-nyoba ton', '2017-05-15', 'nyobaton', 'menunggu', 47),
(31, 'wokowkokokw', '2017-05-16', 'Siti', 'menunggu', 52),
(32, 'bikin kotor saja', '2017-05-16', 'katon ', 'diterima', 52),
(33, 'oke bos', '2017-05-16', 'katons', 'diterima', 49),
(34, 'well', '2017-05-16', 'dariel', 'menunggu', 51),
(36, 'Jelek', '2017-05-17', 'Utha', 'diterima', 51),
(37, 'wahhh bagus juga yaw', '2017-05-17', 'katon', 'diterima', 51),
(38, 'selamat sore gan !!!!\r\nSitusnya anda memberikan informasi yang bermanfaat\r\nterimakasih sudah berkenan membagi informasinya kepada kami semua\r\ndi tunggu terus informasi terbaru lainnya\r\n\r\n<a href=\"berbagi-chord.com\">berbagi chord</a>', '2017-07-10', 'berbagi chord', 'diterima', 50),
(40, '456454', '2017-09-24', '56646', 'menunggu', 48);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(140) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `email`, `nohp`, `alamat`, `nama_lengkap`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@jebret.com', '088122132131', '1sdafaf', 'Admin Jebret News', 'admin'),
(3, 'korban', 'f4e7acaea6720ca674d5eaf66c11c8c4', 'korasda.as@asda.com', '088122132131', 'dasdssa', 'korban', 'user'),
(4, 'bagaskara', '827ccb0eea8a706c4c34a16891f84e7b', 'bagaskara@gmail.com', '088122132131', 'asdassa', 'Bagaskara Gilang Katon', 'user'),
(5, 'korban2', '2d4a8632b60ad1817a158f4d4a8fd897', 'korasd2a.as@asda.com', '088122132131', 'sdasasa', 'korban2', 'user'),
(8, 'user1', '24c9e15e52afc47c225b757e7bee1f9d', 'sadsa2112@asdsdasda.com', '0812129999967', 'yogyakarta iromejan', 'user 1 barus', 'user'),
(9, 'lee', 'b0f8b49f22c718e9924f5b1165111a67', 'lee@gmail.com', '21113455', 'guangzo', 'Lee Jong Sun', 'user'),
(10, 'iromejan', 'ab67f44af16cfe7e7e697f6edd1ca31b', 'ktnzsaglg@gmail.com', '086744599234', 'iromejan ', 'user ganteng', 'user'),
(11, 'Katongilang', 'aca93a6a474396b86761ec02dea84b7b', 'Gilang@gmail.com', '081804071', 'Iromejan', 'Katon', 'user'),
(12, 'park', 'fb45615cea1183af03479d88ad4da5cd', 'parklee@gmail.com', '086744599234', 'korea selatan, rt01 rw 10, klitren', 'Lee Park Jun', 'user'),
(13, 'fiktor', 'b1bdab43745ee00a68d71491562c9c31', 'fiktor27mijoro@gmail.com', '082135299851', 'yogyakarta', 'fiktor Mijoro', 'user'),
(14, 'katon', 'aca93a6a474396b86761ec02dea84b7b', 'katon@asdasd.com', '0816152768798', 'purbalingga', 'katon gilang bagaskara', 'user'),
(15, 'nyobaton', '81dc9bdb52d04dc20036dbd8313ed055', 'nyobaton@gmail.com', '085852025852', 'jalan jalan', 'nyobaton', 'user'),
(17, 'siti', '5c2e4a2563f9f4427955422fe1402762', 'sitidi@gmail.com', '012312032103021', 'asd', 'sitidi', 'user'),
(18, 'rian', 'cb2b28afc2cc836b33eb7ed86f99e65a', 'rian68@gmail.com', '08674469234', 'yogyakarta', 'rian', 'user'),
(19, 'audri', '95bb2c66b36187d29f27b8994fd05c19', 'asjhdas@ilasjhdlas.com', '08125615243412', 'jogja bos', 'audriew', 'user'),
(20, 'awdea', '47bce5c74f589f4867dbd57e9ca9f808', 'ahdjahj@gmail.com', '058785', 'dawsea', 'berdi', 'user'),
(21, 'qwe', '47bce5c74f589f4867dbd57e9ca9f808', 'adsawad@gmail.com', '089056', 'wadwas', 'berdu', 'user'),
(22, 'aaa', 'b2ca678b4c936f905fb82f2733f5297f', 'seansuyasa@gmail.com', '0548', 'dawe', 'aswa', 'user'),
(23, 'putu', 'b9e40850e07d354ba4b1a8dbd8e1f2b6', 'raka@dasjdasda.com', '10298712121', 'bali', 'raka putra', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
