<?php
    session_start();
    if(!isset($_SESSION["username"])){ //ngecek seseion username nya udah aktif belomm 
        header("Location: login.php");}
  include("koneksi.php");
  $idku = $_SESSION['iduser']; //ngambil dari get id yang dikirim dari halaman sebelumnya
  $query = "select * from user where iduser=".$idku;

  $hasil = mysqli_query($connect,$query);
  while($data = mysqli_fetch_assoc($hasil)) //perulangan
  {
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
  <li class="sidebar-dua">
    <a href="info.php">INFO AKUN</a>
  </li>
    </ul>
  </aside>
  <section class="tulis-satu">
    <div class="tulis-dua">
        <p>&nbsp;</p>
        <h1>Ubah Akun Anda</h1>
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
            ?>
            <form id="akun" action="editakun.php?id=<?php echo $idku; ?>" method="post" enctype="multipart/form-data">
            <h4 class="left">Nama Lengkap : </h4><input class="edit-akun" type="text" value="<?php echo $data['nama_lengkap']; ?>" name="naleng"></input>
            <h4 class="left">Email : </h4><input class="edit-akun" value="<?php echo $data['email']; ?>" name="email" cols="50" rows="10"></input>
          <h4 class="left">Alamat : </h4><input class="edit-akun" value="<?php echo $data['alamat']; ?>" name="alamat" cols="50" rows="10"></input>
          <h4 class="left">No HP : </h4><input class="edit-akun" value="<?php echo $data['nohp']; ?>" name="nohp" cols="50" rows="10"></input>
          <br/>
        <input type="submit" class="ubah" name="edit" value="Ubah Data"> 
      </form>
            <?php
            }
          }
        ?>
        
      </div>
      
    </div>
    </section>
<body>

</body>
</html>

<?php
  if (!empty($_POST['edit'])){ //waktu klik ubah    
    $naleng = $_POST['naleng']; 
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];

    //ngupdate info akun di database
    $query = "update user set nama_lengkap='$naleng', email = '$email', alamat = '$alamat', nohp = '$nohp' where iduser=" . $idku;
    if (mysqli_query($connect,$query)){
      header("location:info.php"); //direct ke info
    }
  }

}
?>