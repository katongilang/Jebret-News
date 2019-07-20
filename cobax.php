<?php
    include_once("koneksi.php");
    if (!empty($_POST['tambah'])){ //apa data form sudah ada?
    $fileType = $_FILES['file_sk']['name'];
    $uploadfile = "katonupload/" . $fileType; //asumsikan direktori upload sudah ada
    $data = file_get_contents($_FILES['file_sk']['tmp_name']);
//proses upload file
    if ($_FILES["file_sk"]["type"] == "image/jpeg" || $_FILES["file_sk"]["type"] == "image/png")
    {
      if (move_uploaded_file($_FILES["file_sk"]["tmp_name"], $uploadfile)){
      }
      else{
        echo "bukan JPEG/PNG";
      }
    }

  
    $data = mysqli_real_escape_string($conn,$data); //supaya ga sql injekt
    $query = "insert into coba (file_coba) values ('$fileType')";
    
    if (mysqli_query($conn,$query)){ //lakukan proses insert bos !
      echo "<script>alert('Selamat, Data berhasil dikirim keadmin');</script>"; 
    }
    else{
      echo "<script>alert ('Data tidak lengkap / masih kosong');</script>";
    }
  }

    ?>
<!DOCTYPE html>
<html>
<head>
	<title>xxxxxxxxxx</title>
</head>
<body>
	<form id="tulis" action="coba.php" method="post" enctype="multipart/form-data">
  <input name="file_sk" type="file" id="gambar" value="#"/>
  <input type="submit" class="kirimadmin" name="tambah" value="Kirim Admin"> 
</form>
</body>
</html>