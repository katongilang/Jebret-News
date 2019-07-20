<?php
include("koneksi.php");
  $sql = "update komentar set status_komen='diterima' where id_komentar=".$_GET['id'];
  if (mysqli_query($connect,$sql)){
    header("location:komentar.php");
  }
?>