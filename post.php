<?php
include("koneksi.php");
$idku = $_GET['id'];
?>
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
<br><br> 
<?php 	
	$query = "SELECT b.id_berita,b.judul,b.tanggal,b.status, b.isi, b.gambar, u.username,k.daftar_kategori from berita b JOIN user u ON b.id_user=u.iduser JOIN kategori k ON b.id_kategori=k.idkategori ORDER BY b.id_berita DESC";
          $hasil = mysqli_query($connect,$query);
          while ($data = mysqli_fetch_assoc($hasil)){
          	if ($data['id_berita']==$idku) { //cek id yang ingin dilihat 
          		?>
 
<div class="cat-head">
	<strong><a class="judul"><?php echo $data['judul'];?></a></strong>
</div>
<div>
	<h4>Category > <?php echo $data['daftar_kategori'];?></h4><hr><br>
	<p><?php echo $data['username'].", ".$data['tanggal']; ?></p>
</div>
<br>
<div>
	<?php echo "<img src='upload/".$data['gambar']."' alt='gambar' class='tigaratus'>" ?>
</div><br>
<div><?php echo $data['isi'];?></div><br>



<hr><br>
<table>
<tr>
<td class="limapuluh"><h3>Artikel Terkait</h3></td>
<td class="limapuluh"><h3>Artikel Acak</h3></td>
</tr>
<tr>
<td class="top">
<?php 

//ARTIKEL TERKAIT BERDASARKAN KATEGORI HANYA MENAMPILKAN 3 SECARA DESCENDING 
$sql = "SELECT * FROM berita WHERE id_berita=$idku";
$hasil = mysqli_query($connect,$sql);
          while ($data = mysqli_fetch_assoc($hasil)){
            $cat=$data['id_kategori'];
            $artikel="SELECT * FROM berita b JOIN kategori k ON b.id_kategori=k.idkategori WHERE id_kategori=$cat AND b.status='diterima' ORDER BY b.id_berita DESC LIMIT 3";
            $tampilin = mysqli_query($connect,$artikel);
            while ($data = mysqli_fetch_assoc($tampilin)){
              $potong = substr($data['isi'],0, 80);
              if ($data['id_berita']!=$idku) {
                echo "
              <table class='terkait'>
                <tr>
                  <td rowspan='3'> <img class='setelahpost' src='upload/".$data['gambar']."' alt='gambar'> </td>
                  <td><strong><a>".$data['judul']."</a></strong></td>
                </tr>
                <tr>
                    <td><em><a>".$data['daftar_kategori']."</a></em></td>
                </tr>
                <tr>
                    <td><div>".$potong."...</div><br><a class='black' href='post.php?id=".$data['id_berita']."'>Baca Selengkapnya>></a></td>
                </tr>
                </table>";
              }              
            }

          }
?>
</td>
<td>
<?php

//ARTIKEL RANDOM DARI SELURUH BERITA YG DITERIMA HANYA MENAMPILKAN 3 BERITA SECARA DESCENDING 
$random_record = "SELECT * FROM berita b JOIN kategori k ON b.id_kategori=k.idkategori WHERE b.status='diterima' ORDER BY rand() LIMIT 0, 3";
$hasil = mysqli_query($connect,$random_record);
          while ($data = mysqli_fetch_assoc($hasil)){
            $potong = substr($data['isi'],0, 80);
            echo "

              <table class='terkait'>
                <tr>
                  <td rowspan='3'><img class='setelahpost' src='upload/".$data['gambar']."' alt='gambar'></td>
                  <td><strong><a>".$data['judul']."</a></strong></td>
                </tr>
                <tr>
                    <td><em><a>".$data['daftar_kategori']."</a></em></td>
                </tr>
                <tr>
                    <td><div>".$potong."...</div><br><a class='black' href='post.php?id=".$data['id_berita']."'>Baca Selengkapnya>></a></td>
                </tr>
                </table>";

          }

?>
</td>
</tr>
</table>
<br>
<h3>Kolom Komentar</h3>
<br>
<form id="komen" action="post.php?id=<?php echo $idku ?>" method="post" enctype="multipart/form-data">
	<input type="text" name="pengomen" class="input-mode" placeholder="Masukan nama anda disini"/><br>
    <textarea class="isi" name="isi" cols="50" rows="7" placeholder="Tulis komentar anda disini..."></textarea>    
    <input type="submit" class="komen" name="send" value="Kirim Komentar"> 
</form>
<h3>Komentar yang sudah diterima</h3><br>
<?php
//MENAMPILKAN KOMENTAR YANG SUDAH DITERIMA OLEH ADMIN SECARA DESCENDING
          $x = "SELECT * FROM `komentar` where idberitaa='".$idku."' ORDER BY id_komentar DESC ";
          $hasil = mysqli_query($connect,$x);
          while ($data = mysqli_fetch_assoc($hasil)){
            if ($data['status_komen']=='diterima') {
              echo "
              <table class='kiri'>
              <tr><td><img class='tigapuluh' alt='user' src='img/user.png'></td>
              <td>
              <p><strong>".$data['komentator']."</strong> (".$data['tanggal_komen'].")<br>mengatakan : ".$data['isi_komentar']."</p>
              </td></tr>
              </table><br>
              ";
              
            }       
          }     

        ?>

<br><br>
<?php
}
}
?>
<footer id="index-footer">
	<p>&copy; 2017 Jebret News Crew</p>
</footer>

</div>
</div>
</body>

</html>

<?php
	if (!empty($_POST['send'])){
	$isi_komen = $_POST['isi'];
	$komentator = $_POST['pengomen'];
	$tanggal= date("Y-m-d");

	$q = "insert into komentar (isi_komentar, status_komen,  idberitaa, komentator, tanggal_komen) values ('$isi_komen','menunggu','$idku', '$komentator', '$tanggal')";
		if (mysqli_query($connect,$q)){ //lakukan proses insert bos !
     	 echo "<script>alert('Komentar dikirimkan, komentar akan muncul setelah melalui proses persetujuan');window.location='post.php?id=".$idku."';</script>"; 
    	}
		else{
      		echo "<script>alert ('Data tidak lengkap / masih kosong');window.location='post.php?id=".$idku."';</script>";
    	}
}
?>