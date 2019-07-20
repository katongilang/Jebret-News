<?php
    session_start();
    if(!isset($_SESSION["admin"]))
        header("Location: login.php");
    include("koneksi.php");
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Panel Admin</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="img/fav.png" rel="shortcut icon"/>
</head>
<body>
<header class='head-penulis'>
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
  <li class="sidebar-dua">
    <a href="daftar-diterima.php">DAFTAR DITERIMA</a>
  </li>
  <li class="sidebar-dua">
    <a href="daftar-ditolak.php">DAFTAR DITOLAK</a>
  </li><br>
  <hr class="hr"><br>
  <li class="navberita">
    <a>FILTER KOMENTAR</a>
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
  <h1>Daftar komentar menunggu persetujuan</h1>
</div>
<div id="tulis">
  <div class="filter">
    <table class="tabelfilter" border="1">
    <thead class="head-tabel">
      <td>Komentator</td>
      <td>Tanggal Komentar</td>
      <td>Judul Berita</td>
      <td>Isi</td>
      <td>Status</td>
      <td colspan="2">Aksi</td>
    </thead>
    <?php
    $halaman = 5;
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($connect,"SELECT * FROM komentar WHERE status_komen='menunggu'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman); 
    $sql = "SELECT * from komentar k JOIN berita b ON k.idberitaa=b.id_berita WHERE k.status_komen='menunggu' ORDER BY k.id_komentar DESC LIMIT $mulai, $halaman";
    $no =$mulai+1;
          $hasil = mysqli_query($connect,$sql);
          while ($data = mysqli_fetch_assoc($hasil)){
              echo "<tr>";

              echo "<td><strong>".$data['komentator']."</strong</td>";
              echo "<td>".$data['tanggal_komen']."</td>";
              echo "<td>".$data['judul']."</td>";
              echo "<td>".$data['isi_komentar']."</td>";
              echo "<td>".$data['status_komen']."</td>";
              //postfilter cuma nampilin status yang masih menunggu
              echo "<td><a class='red' href=deletekomen.php?id=".$data['id_komentar'].">Hapus</a></td>";
              echo "<td><a class='green' href=terimakomen.php?id=".$data['id_komentar'].">Terima</a></td>";

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

    <div>
  <h1>Daftar komentar yang sudah diterima</h1>
  </div>
    <table class="tabelfilter" border="1">
    <thead class="head-tabel">
      <td>Komentator</td>
      <td>Tanggal Komentar</td>
      <td>Judul Berita</td>
      <td>Isi</td>
      <td>Status</td>
      <td colspan="3">Aksi</td>
    </thead>
   <?php
    $halaman = 5;
    $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($connect,"SELECT * FROM komentar WHERE status_komen='diterima'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman); 
    $sql = "SELECT * from komentar k JOIN berita b ON k.idberitaa=b.id_berita WHERE k.status_komen='diterima' ORDER BY k.id_komentar DESC LIMIT $mulai, $halaman";
    $no =$mulai+1;
    
          $hasil = mysqli_query($connect,$sql);
          while ($data = mysqli_fetch_assoc($hasil)){
              echo "<tr>";

              echo "<td><strong>".$data['komentator']."</strong></td>";
              echo "<td>".$data['tanggal_komen']."</td>";
              echo "<td>".$data['judul']."</td>";
              echo "<td>".$data['isi_komentar']."</td>";
              echo "<td><img src='img/ok.png' width=20</td>";
              //postfilter cuma nampilin status yang masih diterima
              echo "<td><a class='red' href=deletekomen.php?id=".$data['id_komentar'].">Hapus</a></td>";
              echo "<td><a class='black' href=post.php?id=".$data['id_berita'].">Lihat</a></td>";

              echo "</tr>";
          }
          ?>
    </table>
<div>
    <a>Halaman </a>
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a class="paging" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php } ?>
  </div>
  </div>
</div>
</section>
</body>
</html>