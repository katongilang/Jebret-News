<?php
include "koneksi.php"; //ambil koneksi ke db

$username = $_POST['username'];
$password     = $_POST['password'];
$pass = stripslashes($password);
$pass     = mysqli_real_escape_string($connect, $pass); //mencegah mysql injection
$pass = md5($pass); //enkripsi paswot

	
$login = mysqli_query($connect, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);

	if ($row['username'] == $username AND $row['password'] == $pass AND $row['level']=="user" ){ //ngecek kalo dia levelnya user/penulis maka masuk kesini
	 session_start(); 
	  $_SESSION['username'] = $row['username'];//nyimpen session username
	  $_SESSION['iduser'] = $row['iduser']; //nyimpen session iduser
	  echo "<script>alert('Anda login sebagai Penulis !');</script>";
	  header('location:penulis.php');}

	elseif ($row['username'] == $username AND $row['password'] == $pass AND $row['level']=="admin") { //kalo dia levelnya admin masuk sini
	session_start();
	  $_SESSION['admin'] = $row['username']; //nyimpen session admin
	   echo "<script>alert('Anda login sebagai Admin !');</script>";
	  header('location:admin.php');}
	
	else{ //kalo levelnya bukan user ato admin maka masuk sini
	  echo "<script>alert('Maaf, Pastikan Username dan Password anda benar!'); window.location=('login.php');</script>";}
?>