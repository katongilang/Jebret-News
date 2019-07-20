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
<title>Daftar Penulis</title>
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
<aside id="sidebar"><ul>

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

  <li class="sidebar-dua">
    <a href="komentar.php">FILTER KOMENTAR</a>
  </li>
  <li class="navberita">
    <a>DAFTAR PENULIS</a>
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
  <h1>Daftar Penulis</h1>
</div>
<div id="tulis">
  <div class="filter">
    <table class="tabelfilter" border="1">
    <thead class="head-tabel">
      <td>Username</td>
      <td>Nama Lengkap</td>
      <td>Email</td>
      <td>Alamat</td>
      <td>No Hp</td>
      <td>Aksi</td>
    </thead>
    <?php
          $halaman = 10;
      $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $result = mysqli_query($connect,"SELECT * from user WHERE level='user'");
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman); 
      $sql = "SELECT * from user WHERE level='user' LIMIT $mulai, $halaman";
      $no =$mulai+1;
             $hasil = mysqli_query($connect,$sql);
              while ($data = mysqli_fetch_assoc($hasil)){
                  echo "<tr>";
                  echo "<td>".$data['username']."</td>";        
                  echo "<td>".$data['nama_lengkap']."</td>";
                  echo "<td>".$data['email']."</td>";
                  echo "<td>".$data['alamat']."</td>";
                  echo "<td>".$data['nohp']."</td>";
                  echo "<td><a class='red' href=deletepenulis.php?id=".$data['iduser'].">Hapus Penulis</a></td>";

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