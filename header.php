<header class="ndas">
			<span class="tanggal">
			<?php 
			$today = date("d M Y");
			$d= date("D");
			if($d=="Sun"){echo "Minggu";} 
			elseif ($d=="Mon") {echo "Senin";} 
			elseif ($d=="Tue") {echo "Selasa";} 
			elseif ($d=="Wed") {echo "Rabu";} 
			elseif ($d=="Thu") {echo "Kamis";
			}elseif ($d=="Fri") {echo "Jumat";
			}elseif ($d=="Sat") {echo "Sabtu";}
			echo ", ".$today;
			 ?>
			</span>
			<?php
				session_start();
				if(!isset($_SESSION["username"])){
					echo "<a href='register.php'>Daftar</a> | <a href='login.php'>Masuk</a>";
				}
				else echo "Selamat datang, ".$_SESSION["username"]."<a href='tulis.php'> >></a>";
			?>	
</header>
<div>
<form class="pencarian" name="formcari" method="get" action="search.php" enctype="multipart/form-data">
		<table>
		<tr>
		<td><input class="kolom-cari" type="text" name="name" placeholder="Masukkan kata" > </td>
		<td> <input class="cari" type="SUBMIT" id="SUBMIT" > </td>
		</tr>
		</table>
</form>	
	<div class="ndas-logo">
		<a href="index.php"><img src="img/logo.png" alt="logo"></a> 
	</div>
	<nav  id="nav-utama">
		<div  class="sub-navig">		
		<a href="indonesia.php" class="nav-utama"> <span data-text="Indonesia">Indonesia</span></a>
		<a href="inggris.php" class="nav-utama"><span data-text="Inggris">Inggris</span></a>
		<a href="italia.php" class="nav-utama"><span data-text="Italia">Italia</span></a>
		<a href="spanyol.php" class="nav-utama"><span data-text="Spanyol">Spanyol</span></a>
		<a href="prancis.php" class="nav-utama"><span data-text="Prancis">Prancis</span></a>	
		<a href="zonatransfer.php" class="nav-utama"><span data-text="Zona Transfer">Zona Transfer</span></a>	
		</div>			
	</nav>
	</div>