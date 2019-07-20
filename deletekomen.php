<?php
  include("koneksi.php");

  $query = "delete from komentar where id_komentar=" . $_GET['id'];
  if (mysqli_query($connect,$query)){
    header("location:komentar.php");
  }
 ?>
