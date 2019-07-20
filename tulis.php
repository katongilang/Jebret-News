<?php
    session_start();
    if(!isset($_SESSION["username"])) //ngecek seseion username nya udah aktif belomm 
        header("Location: login.php");

    include_once("koneksi.php");
    if (!empty($_POST['tambah'])){ //apa data form sudah ada?
    $foto = $_FILES['foto']['name'];
    $uploadfile = "upload/" . $foto; //asumsikan direktori upload sudah ada
    $data = file_get_contents($_FILES['foto']['tmp_name']);
//proses upload file
    if ($_FILES["foto"]["type"] == "image/jpeg" || $_FILES["foto"]["type"] == "image/png")
    {
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadfile)){
      }
      else{
        echo "bukan JPEG/PNG";
      }
    }

    $judul = $_POST['judul']; //ngambil dari form atas yang pake name judul
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];
    $iduser= $_SESSION['iduser']; //kayaknya pake sesion
    $tanggal= date("Y-m-d"); //tanggal otomatis saat penulis mengirim berita
    
    $data = mysqli_real_escape_string($connect,$data); //supaya ga sql injekt
    $query = "insert into berita (judul,tanggal,id_kategori,gambar,isi,status,id_user) values ('$judul', '$tanggal','$kategori', '$foto','$isi','menunggu', '$iduser')";
    
    if (mysqli_query($connect,$query)){ //lakukan proses insert bos !
      echo "<script>alert('Selamat, Data berhasil dikirim keadmin');window.location='daftarberita-penulis.php';</script>"; 
    }
    else{
      echo "<script>alert ('Data tidak lengkap / masih kosong');window.location='tulis.php';</script>";
    }
  }

    ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Tulis Berita</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="img/fav.png" rel="shortcut icon"/>

<!--Tinymce semacam plugin untuk membuat isi didatabase bisa dimasukin segalam macam tag, contoh = misal berita nya mau ditampilkan dengan BOLD/rata kiri kanan,dll-->
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>
<!--Tinymce -->

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
  <li class="navberita">
    <a>TULIS BERITA</a>
  </li>
  <li class="sidebar-dua">
    <a href="daftarberita-penulis.php">DAFTAR BERITA</a>
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
  <h1>Tulis Berita</h1>
</div>
<form id="tulis" action="tulis.php" method="post" enctype="multipart/form-data">
    <input type="text" name="judul" class="input-mode" placeholder="Judul"/>
  <br>
    <div><textarea class="isi" name="isi" cols="50" name="isi" rows="10" placeholder="Tulis berita anda disini..."></textarea></div>
  <br><div>   <input name="foto" type="file" id="gambar" value="#"/></div>
  <br>
    <select name="kategori"> 
        <option value="-1">--Pilih Kategori--</option> 
        <?php //dinamis
          $q = mysqli_query($connect,"select * from kategori");
          while ($data = mysqli_fetch_assoc($q)){
            echo "<option value='" . $data['idkategori'] . "'>" . $data['daftar_kategori'] . "</option>";
          }
        ?>
      </select>
  <br/>
  <input type="submit" class="kirimadmin" name="tambah" value="Kirim Admin"> 
</form>
</section>
</body>
</html>