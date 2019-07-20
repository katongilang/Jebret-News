<?php
    session_start();
    if(!isset($_SESSION["username"])) //ngecek seseion username nya udah aktif belomm 
        header("Location: login.php");
         else include("koneksi.php");
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Panel Penulis</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="img/fav.png" rel="shortcut icon"/>
</head>
<body>
<header class='head-penulis' >
<img class='bola' src="img/fav.png">
<a href="index.php"><span class="judul-head">Panel Penulis</span></a>
</a><a href="logout.php" class="keluar"><b>Keluar</b></a>
<?php 
  echo "<strong><a class='keluar'>Hallo, ".$_SESSION['username']."</a></strong>"; //coba coba
 ?>
</header>
<aside id="sidebar">
<ul>
  <li class="navberita">
    <a>DASHBOARD</a>
  </li>
  <li class="sidebar-dua">
    <a href="tulis.php">TULIS BERITA</a>
  </li>
  <li class="sidebar-dua">
    <a href="daftarberita-penulis.php">DAFTAR BERITA</a>
  </li>
  <li class="sidebar-dua">
    <a href="info.php" >INFO AKUN</a>
  </li>
</ul>
</aside>
<section class="section-sa">
<p>
  &nbsp;
</p>
<h1>Informasi dari admin</h1>
<p>
  &nbsp;
</p>
<p>
  &nbsp;
</p>
<p>
  &nbsp;
</p>
<div class="left">
<?php
          $query = "select * from informasi";
          $hasil = mysqli_query($connect,$query);

          while ($data = mysqli_fetch_assoc($hasil)){
            echo "<p>".$data['isi_informasi']."</p>";
            }
            
        ?>
</div>
</section>
</body>
</html>