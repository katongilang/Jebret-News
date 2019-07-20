 <?php
session_start();
unset($_SESSION['username']); //matiin session username nya penulis
header('location:index.php'); //direct ke index.php
?>