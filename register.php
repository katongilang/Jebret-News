<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Daftar</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/jscript.js"></script>
<script type="text/javascript" src="script/jquery.js"></script>
<script type="text/javascript" src="script/jquery.validate.js"></script>
<link href="img/fav.png" rel="shortcut icon"/>
<script type="text/javascript">
$(document).ready(function() {
	$("#frm").validate({
		messages: {
			email: {
				required: "E-mail harus diisi",
				email: "Masukkan E-mail yang valid"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo(element.parent("div"));
		}
	});
})
</script>
</head>
<body id="reg-log">
<form id="frm" name="myForm" action="prosesregister.php" method="POST">
	<div class="mburi-logo">
		<a href="index.php"><img class="logo" src="img/logo.png" alt="logo"></a>
	</div>
	<h2>Pendaftaran</h2>
	<br/>
	<div class="form-group">
		<input id="nama-lengkap" name="nama" type="text" class="required" title="Nama Lengkap harus diisi" placeholder="Nama Lengkap"></div>
	<div class="form-group">
		<input id="email" name="email" type="text" class="required email" placeholder="Email"></div>
	<div class="form-group">
		<input id="alamat" name="alamat" type="text" class="required" title="Alamat harus diisi" placeholder="Alamat"></div>
	<div class="form-group">
		<input id="nohp" name="nohp" type="text" class="required" title="No Hp harus diisi" placeholder="No Hp"></div>
	<div class="form-group">
		<input id="username" name="username" type="text" class="required" title="Username harus diisi" placeholder="Username"></div>
	<div class="form-group">
		<input type="password" id="pw1" name="pw1" class="required" title="Password harus diisi" placeholder="Password"></div>
	<div class="form-group">
		<input type="password" id="pw2" name="pw2" class="required" title="Ketik Ulang Password harus diisi" placeholder="Ketik Ulang Password"></div>
	<div class="form-group">
		<button class="submit-regis" name="submit" type="submit" id="submit">Daftar Sekarang</button>
	</div>
	<hr class="haer">
  <br/>
   <a href="login.php"><h4>Masuk></h4></a>
</form>
</body>
</html>