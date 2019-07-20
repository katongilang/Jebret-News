<?php
  include("koneksi.php");

  $query = "delete from user where iduser=" . $_GET['id'];
  if (mysqli_query($connect,$query)){
  	echo "<script>alert('Penulis berhasil dihapus dari database');window.location='daftar-penulis.php';</script>";
  }
 ?>
