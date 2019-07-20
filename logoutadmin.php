 <?php
session_start();
unset($_SESSION['admin']); //logout admin buat matiin sesionnya admin
header('location:index.php');
?>