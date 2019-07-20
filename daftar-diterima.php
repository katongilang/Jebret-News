<?php
    session_start();
    if(!isset($_SESSION["admin"]))
        header("Location: login.php");
      else include("koneksi.php");
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Daftar Berita Diterima</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="img/fav.png" rel="shortcut icon"/>
</head>
<body>
<header class='head-penulis' >
<img class='bola' src="img/fav.png">
<a href="index.php"><span class="judul-head">Panel Admin</span></a>
</a>
<a href="logoutadmin.php"><span class="keluar"><b>Keluar</b></span></a>
</header>
<aside id="sidebar">
<ul>

  <li class="sidebar-dua">
    <a href="admin.php">FILTER BERITA</a>
  </li>
  <li class="navberita">
    <a>DAFTAR DITERIMA</a>
  </li>
  <li class="sidebar-dua">
    <a href="daftar-ditolak.php">DAFTAR DITOLAK</a>
  </li><br>

  <hr class="hr"><br>

  <li class="sidebar-dua">
    <a href="komentar.php">FILTER KOMENTAR</a>
  </li>
  <li class="sidebar-dua">
    <a href="daftar-penulis.php">DAFTAR PENULIS</a>
  </li>
  <li class="sidebar-dua">
    <a href="info-admin.php">INFORMASI</a>
  </li>

</ul>
</aside>
<section class="tulis-satu">
<div class="tulis-dua">
  <p>
    &nbsp;
  </p>
  <h1>Daftar Berita yang Sudah Diterima</h1>
</div>
<div id="tulis">
  <div class="filter">
    <table class="tabelfilter" border="1">
    <thead class="head-tabel">
      <td>Username</td>
      <td>Judul</td>
      <td>Tanggal</td>
      <td>Kategori</td>
      <td>Gambar</td>
      <td>Isi</td>     
      <td>Status</td> 
      <td colspan="2" >Aksi</td>
    </thead>
    <?php
    $halaman = 5;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($connect,"SELECT * FROM berita WHERE status='diterima'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman); 


    $query = mysqli_query($connect,"SELECT b.id_berita,b.judul,b.status,b.tanggal, b.isi, b.gambar, u.username,k.daftar_kategori from berita b 
      JOIN user u ON b.id_user=u.iduser JOIN kategori k ON b.id_kategori=k.idkategori WHERE b.status='diterima' ORDER BY b.id_berita DESC LIMIT $mulai, $halaman");
    $no =$mulai+1; //freak


    while ($data = mysqli_fetch_assoc($query)) {
              $readmore = substr($data['isi'],0, 200);
              echo "<tr>";

              echo "<td><strong>".$data['username']."</strong></td>";
              echo "<td>".$data['judul']."</td>";
              echo "<td>".$data['tanggal']."</td>";
              echo "<td>".$data['daftar_kategori']."</td>";
              echo "<td> <img src='upload/".$data['gambar']."' width=80</td>";
              echo "<td>".$readmore.". . .</td>";
              echo "<td><img src='img/ok.png' width=20</td>";
              echo "<td><a class='black' href=post.php?id=".$data['id_berita'].">Lihat</a></td>";
              echo "<td><a class='red' href=delete1.php?id=".$data['id_berita'].">Hapus</a></td>";

              echo "</tr>";
          }
        ?>
    </table>
    <div>
    <a>Halaman </a>
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a class="paging" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

  <?php } ?>

  </div>
  </div>
</div>
</section>
</body>
</html>