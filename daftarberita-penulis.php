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
<title>Daftar Berita</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="img/fav.png" rel="shortcut icon"/>
</head>
<body>
<header class='head-penulis'>
<img class='bola' src="img/fav.png">
<a href="index.php"><span class="judul-head">Panel Penulis</span></a>
<a href="logout.php" class="keluar"><b>Keluar</b></a>
<?php 
  echo "<strong><a class='keluar'>Hallo, ".$_SESSION['username']."</a></strong>"; //coba coba
 ?>
 </header>
<aside id="sidebar">
<ul>
  <li class="sidebar-dua">
    <a href="penulis.php">DASHBOARD</a>
  </li>
  <li class="sidebar-dua">
    <a href="tulis.php">TULIS BERITA</a>
  </li>
  <li class="navberita">
    <a>DAFTAR BERITA</a>
  </li>
  <li class="sidebar-dua">
    <a href="info.php" >INFO AKUN</a>
  </li>
</ul>
</aside>
<section class="tulis-satu">
<div class="tulis-dua">
  <p>
    &nbsp;
  </p>
  <h1>Daftar Berita Anda</h1>
</div>
<div id="tulis">
  <div class="filter">
    <table class="tabelfilter" border="1">
    <thead class="head-tabel">
      <td>Judul</td>
      <td>Gambar</td>
      <td>Tanggal</td>
      <td>Status</td>
      <td colspan="3">Aksi</td>
    </thead>  
    <?php
    /*-----------------paging----------------*/
      $halaman = 5;
      $user = $_SESSION["iduser"];
      $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
      $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
      $sql ="SELECT * from berita WHERE id_user=".$user;
      $result = mysqli_query($connect,$sql);
      $total = mysqli_num_rows($result);
      $pages = ceil($total/$halaman); 
      /*-----------------paging----------------*/
          $query = "SELECT b.id_berita,b.id_user,b.judul,b.status,b.tanggal, b.isi, b.gambar, u.username,k.daftar_kategori from berita b JOIN user u ON b.id_user=u.iduser JOIN kategori k ON b.id_kategori=k.idkategori WHERE b.id_user=".$user." ORDER BY b.id_berita DESC LIMIT $mulai, $halaman";
          //sql diatas join 3 table , secara descending jadi yang terakhir input pasti paling atas, 
          $hasil = mysqli_query($connect,$query);
          
          while ($data = mysqli_fetch_assoc($hasil)){
            echo "<tr>";

            echo "<td>".$data['judul']."</td>";
            echo "<td> <img src='upload/".$data['gambar']."' width=80</td>";
            echo "<td>".$data['tanggal']."</td>";

            if ($data['status']=='menunggu') {
              echo "<td><img src='img/wait.png' width=40</td>";
            }
            elseif($data['status']=='diterima'){
              echo "<td><img src='img/ok.png' width=30</td>";
            }
            else{
              echo "<td><img src='img/no.jpg' width=30</td>";
            }

            

            if ($data['status']=='diterima') {
            echo "<td><a class='red' href=delete.php?id=".$data['id_berita'].">Hapus</a></td>";
            echo "<td><a class='black'> - </a></td>"; 
            echo "<td><a class='black' href=post.php?id=".$data['id_berita'].">Lihat</a></td>";
            }
            elseif ($data['status']=='menunggu') {
              echo "<td><a class='red' href=delete.php?id=".$data['id_berita'].">Hapus</a></td>"; 
              echo "<td><a class='black' href=edit.php?id=".$data['id_berita'].">Ubah</a></td>";
              echo "<td><a class='black'> - </a></td>"; 
            }
            else{                       
            echo "<td><a class='red' href=delete.php?id=".$data['id_berita'].">Hapus</a></td>";
            echo "<td><a class='black'> - </a></td>"; 
            echo "<td><a class='black'> - </a></td>"; 
            echo "</tr>";
            }
            }?>
    </table>
    <div>
    <a>Halaman </a>
  <?php 
  /*-----------------buat nampilin paging----------------*/
  for ($i=1; $i<=$pages ; $i++){ ?>
  <a class="paging" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php } ?>
  </div>
    <div>
</div>
  </div>
</div>
</section>
</body>
</html>
