<?php
    session_start();
    if(!isset($_SESSION["admin"]))
        header("Location: login.php");
    include("koneksi.php");
    $query = "select * from informasi where idinformasi=1";
    $hasil = mysqli_query($connect,$query);
    $data = mysqli_fetch_assoc($hasil)
    ?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Informasi</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="img/fav.png" rel="shortcut icon"/>
<!--Tinymce -->
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

  <li class="sidebar-dua">
    <a href="komentar.php">FILTER KOMENTAR</a>
  </li>
  <li class="sidebar-dua">
    <a href="daftar-penulis.php">DAFTAR PENULIS</a>
  </li>
  <li class="navberita">
    <a>INFORMASI</a>
  </li>

</ul>
</aside>
<section class="tulis-satu">
<div class="tulis-dua">
  <p>
    &nbsp;
  </p>
  <h1>Edit Informasi</h1>
</div>
<div id="tulis">
  <div class="filter">

  <form method="post" enctype="multipart/form-data">
    <textarea class="isi" name="informasi" cols="50" name="isi" rows="10"><?php echo $data['isi_informasi']; ?></textarea>
    <br>
 <input type="submit" class="kirimadmin" name="edit" value="Kirim Info"> 
</form>

  </div>
</div>
</section>
</body>
</html>

<?php
  if (!empty($_POST['edit'])){
    $info = $_POST['informasi'];
    $query = "update informasi set isi_informasi='$info' where idinformasi=1"; //id 1 kenapa ? karena cuma ada 1 record saja dan id nya 1
    if (mysqli_query($connect,$query)){
      echo "<script>alert('Selamat, berhasil kirim informasi ke user');window.location='info-admin.php';</script>"; 
    }
  }

 ?>