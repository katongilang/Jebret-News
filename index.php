<?php 
include"koneksi.php";?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
	<title>Jebret News</title>
    <link href="style.css" rel="stylesheet" type="text/css" >    
	<script type="text/javascript" src="script/jquery.js"></script>
    <link href="img/fav.png" rel="shortcut icon" /> 
    <link rel="stylesheet" href="css/default.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
<script type="text/javascript" src="script/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="script/jquery.nivo.slider.js"></script>
<script type="text/javascript">
$(window).load(function() {
$('#slider').nivoSlider();
});
</script>

<div id="art-main">
<div class="sub-main">

<?php include('header.php'); ?> 

	<!-- start images slideshow -->
<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">

	<?php $result = mysqli_query($connect, "SELECT * FROM berita WHERE status='diterima' order by berita.id_berita DESC LIMIT 3"); //SQL buat nampilin 3 berita terakhir yang statusnya ditrima
	while($row = mysqli_fetch_assoc($result)) {
	$images_slider = strip_tags($row['gambar']);
	$description_slider = strip_tags($row['judul']);
	$id=$row['id_berita'];
	$readmore = substr($row['isi'],0, 300);  //menampilkan sebagian suku kata ke 0 sampe ke 300

			echo'<a href ="post.php?id='.$id.'"><img src="upload/'.$images_slider.'" data-thumb="upload/'.$images_slider.'" alt="" title="'.$description_slider.'<br>'.$readmore.'"/></a>';
			
			}?>
</div>
</div>
<!-- end images slideshow -->

<?php
include("koneksi.php");
//buat pagging
	$halaman = 5; //nampilin 5 halaman di index pake paging
    $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($connect,"SELECT * FROM berita WHERE status='diterima'");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman); 
		
		//SQL join 3 tabel, nampilin berita yang stattusnya diterima secara descending
          $query = "SELECT b.id_berita,b.judul,b.status,b.tanggal, b.isi, b.gambar, u.username,k.daftar_kategori from berita b JOIN user u ON b.id_user=u.iduser JOIN kategori k ON b.id_kategori=k.idkategori WHERE b.status='diterima' ORDER BY b.id_berita DESC LIMIT $mulai, $halaman";
          $hasil = mysqli_query($connect,$query);
          
          while ($data = mysqli_fetch_assoc($hasil)){
          	?>
		<div>
		<table class="thumbnail">	
			<tr>
				<td colspan="2"><p class="thumb-judul" ><strong><?php echo $data['judul'];?></strong></p><br></td>
			</tr>
			<tr>
			<td>			
				<?php echo "<img class='thumb-gbr' src='upload/".$data['gambar']."' alt='gambar'>";?>
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
			?>

<!--Munculin Pagging -->
		<div class="pag">
    <a>Halaman </a>
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a class="paging" href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php } ?>
  </div>
<!--Munculin Pagging -->
<footer id="index-footer">
	<p>&copy; 2017 Jebret News Crew</p>
</footer>

</div>
</div>
</body>

</html>
