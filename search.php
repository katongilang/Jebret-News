<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
	<title>Jebret News</title>
    <link href="style.css" rel="stylesheet" type="text/css" >    
    <link href="img/fav.png" rel="shortcut icon" /> 
</head>
<body>
<div id="art-main">
<div class="sub-main">

<?php include('header.php'); ?>
<div class="cat-head">
	<h2>Hasil Pencarian Berita</h2>
</div>
	<br>
	<hr>

<?php
include "koneksi.php";
$name= $_GET['name'];
if ($name!=NULL) {
	$query="SELECT b.id_berita,b.judul,b.status,b.tanggal, b.isi, b.gambar, u.username,k.daftar_kategori from berita b JOIN user u ON b.id_user=u.iduser JOIN kategori k ON b.id_kategori=k.idkategori WHERE b.status='diterima' AND ( b.judul like '%$name%' or b.isi like '%$name%') ORDER BY b.id_berita DESC ";//berdasarkan judul sama isi
	$result = mysqli_query($connect,$query);
	while ($data = mysqli_fetch_assoc($result)){ //fetch the result from query into an array
?>
		<div>
		<table class="thumbnail">	
			<tr>
				<td colspan="2">
					<p class="thumb-judul" ><strong><?php echo $data['judul'];?></strong></p><br>
				</td>
			</tr>
			<tr>
			<td>			
				<?php echo "<img class='thumb-gbr' src='upload/".$data['gambar']."' alt='gambar'";?>
			</td>			
			<td>
				<p><?php 
				$link= "post.php?id=".$data['id_berita'];
				$readmore = substr($data['isi'],0, 300);
				echo $data['tanggal']."<br>";
				echo "<em>".$data['daftar_kategori']."</em><strong> - ".$data['username']."</strong><br><br>";
				echo $readmore."...<br>
				<a class='black' href='".$link."'>Baca Selengkapnya>></a></p>
			</td>
			</tr>
		</table></div>";}
}
else echo "<h2><br><br><br><br><br>Maaf, yang anda cari tidak ditemukan !<br><br><br><br><br><br><br></h2>";
?>

<footer id="index-footer">
	<p>&copy; 2017 Jebret News Crew</p>
</footer>
</div>
</div>
</body>
</html>