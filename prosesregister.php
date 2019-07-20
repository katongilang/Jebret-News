<?php
include "koneksi.php";//ambil koneksi ke db
 
// Deklarasi variable
$username = $_POST['username'];
$alamat =$_POST['alamat'];
$nohp =$_POST['nohp'];
$password = $_POST['pw2'];
$email = $_POST['email'];
$namalengkap = $_POST['nama'];
$submit =$_POST['submit'];

$password = mysqli_real_escape_string($connect, $password); //menghindari SQL Injection
$password = md5($password); //enkripsi pake MD5
 
if(isset($submit)){//ngecek waktu klik submit kosong tidak 
  mysqli_query($connect,"insert into user(username,alamat,nohp,password,email,nama_lengkap,level) values ('$username','$alamat','$nohp','$password','$email','$namalengkap','user')");
  echo "<script>alert('Trimakasih sudah mendaftar, Silahkan Login'); window.location=('login.php');</script>";
 }
 else {
 	echo "gagal tambah";
 }
?>