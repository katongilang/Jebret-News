<?php
session_start();
    if(!isset($_SESSION["admin"])) //ngecek seseion username nya udah aktif belomm 
        header("Location: login.php");

  include("koneksi.php");
  $idku = $_GET['id'];

  $query = "select * from berita, kategori where id_kategori=idkategori and id_berita=".$idku;

  $hasil = mysqli_query($connect,$query);
  while($data = mysqli_fetch_assoc($hasil))
  {
?>


<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Ubah</title>
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
  <h1>Ubah Berita</h1>
</div><form id="tulis" action="edit-admin.php?id=<?php echo $idku ?>" method="post" enctype="multipart/form-data">
    <input type="text" value="<?php echo $data['judul']; ?>" name="judul" class="input-mode" />
  <br>
    <div><textarea class="isi" name="isi" cols="50" name="isi" rows="10" placeholder="Tulis berita anda disini..."><?php echo $data['isi']; ?></textarea></div>
  <br>
  <img width=100 src="upload/<?php echo $data['gambar']; ?>" ><br>
  <input name="foto" type="file" id="gambar"/>
  <br>
    <select name="kategori"> 
        <option value="<?php echo $data['idkategori']; ?>"> <?php echo $data['daftar_kategori']; ?></option>
         <?php
          $q = mysqli_query($connect,"select * from kategori");
          while ($data = mysqli_fetch_assoc($q)){
            echo "<option value='" . $data['idkategori'] . "'>" . $data['daftar_kategori'] . "</option>";
          }
        ?></select>
  <br/>
  <input type="submit" class="kirimadmin" name="edit" value="Ubah Berita"> 
</form>
</section>
</body>
</html>
<?php
  if (!empty($_POST['edit'])){
    $foto = $_FILES['foto']['name'];

    $uploadfile = "upload/" . $foto;

    if ($_FILES["foto"]["type"] == "image/jpeg" ||
    $_FILES["foto"]["type"] == "image/png")
    {
      if (move_uploaded_file($_FILES["foto"]["tmp_name"], $uploadfile)){

      }
      else{
        echo "bukan JPEG/PNG";
      }
    }
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];

    $query = "update berita set judul='$judul', isi='$isi', gambar = '$foto', id_kategori = '$kategori' where id_berita=" . $_GET['id'];
    if (mysqli_query($connect,$query)){
      header("location:admin.php");
  }

}
}

 ?>