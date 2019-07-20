<?php
  include("koneksi.php");

  $query = "update berita set status='diterima' where id_berita=".$_GET['id']; //diterima bos !
  if (mysqli_query($connect,$query)){
    header("location:admin.php");
  }


 ?>