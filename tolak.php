<?php
  include("koneksi.php");

  $query = "update berita set status='ditolak' where id_berita=".$_GET['id']; //ditolak bos !
  if (mysqli_query($connect,$query)){
    header("location:admin.php");
  }


 ?>