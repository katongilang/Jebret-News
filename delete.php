<?php
  include("koneksi.php");

  $query = "delete from berita where id_berita=" . $_GET['id'];
  if (mysqli_query($connect,$query)){
    header("location:daftarberita-penulis.php");
  }
 ?>
