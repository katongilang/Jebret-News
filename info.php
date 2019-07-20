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
	<title>Info Akun</title>
	<link href="style.css" rel="stylesheet" type="text/css" >
	<link href="img/fav.png" rel="shortcut icon" /> 
</head>
<body>
<header class= head-penulis>
	<img class=bola src="img/fav.png">
<a href="index.php"><span class="judul-head">Panel Penulis</span></a>	
	<a href="logout.php" class="keluar"><b>Keluar</b></a>
<?php 
  echo "<strong><a class='keluar'>Hallo, ".$_SESSION['username']."</a></strong>"; //coba coba
 ?>
</header>
<aside id="sidebar">
    <ul >
      <li class="sidebar-dua">
    <a href="penulis.php">DASHBOARD</a>
  </li>
  <li class="sidebar-dua">
    <a href="tulis.php">TULIS BERITA</a>
  </li>
  <li class="sidebar-dua">
    <a href="daftarberita-penulis.php">DAFTAR BERITA</a>
  </li>
  <li class="navberita">
    <a>INFO AKUN</a>
  </li>
    </ul>
  </aside>
  <section class="tulis-satu">
    <div class="tulis-dua">
        <p>&nbsp;</p>
        <h1>Info Akun Anda</h1>
    </div>
    <div id="tulis">
    	<div class="profile">
    		<img src="img/profile.png">
    		<br>
        <?php
          $query = "select * from user"; //query buat select tabel user
          $hasil = mysqli_query($connect,$query); //jalanin querinya
          $user = $_SESSION["iduser"]; //nyimpen session ke variable

          while ($data = mysqli_fetch_assoc($hasil)){ //mengambil isi tabel
            if ($user==$data['iduser']) { //ngecek sesion sama gak dengan iduser yang ditabel user 
            echo "<h3>".$data['nama_lengkap']."</h3>"; //menampilkan nama lengkap
            echo "<p>Sebagai Penulis</p>";
            echo "<br><br>";
            echo "<form id='akun' action='editakun.php' method='post' enctype='multipart/form-data'>
            <table border='2';>
          <tr>
            <td class='head-tabel'>Nama Lengkap</td>
            <td>".$data['nama_lengkap']."</td>
          </tr>
          <tr>
            <td class='head-tabel'>Username</td>
            <td>".$data['username']."</td>
          </tr>
          <tr>
            <td class='head-tabel'>Email</td>
            <td>".$data['email']."</td>
          </tr>
          <tr>
            <td class='head-tabel'>Alamat</td>
            <td>".$data['alamat']."</td>
          </tr>
          <tr>
            <td class='head-tabel'>No HP</td>
            <td>".$data['nohp']."</td>
          </tr>
          <tr>
            <td class='head-tabel'>Level</td>
            <td>".$data['level']."</td>
          </tr>
        </table>
        <br>
                <input type='submit' class='ubah' name='ubah' value='Ubah Data'></form>";       
            }
            
          }

        ?>
    		
    	</div>
    	
    </div>
    </section>
<body>

</body>
</html>