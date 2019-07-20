<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="utf-8">
<title>Masuk</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/jquery.js"></script>
<script type="text/javascript" src="script/jquery.validate.js"></script>
<link href="img/fav.png" rel="shortcut icon"/>
<script type="text/javascript">
$(document).ready(function() {
  $("#frm").validate({
    errorPlacement: function(error, element) {
      error.appendTo(element.parent("div"));
    }
  });
})
</script>
</head>
<body id="reg-log">
<form id="frm" action="proseslogin.php" method="POST">
  <div class="mburi-logo">
    <a href="index.php"><img class="logo" src="img/logo.png" alt="logo"></a>
  </div>
  <h2>Masuk</h2>
  <br/>
  <div class="form-group">
    <input id="username" name="username" type="text" class="required" title="Username tidak boleh kosong" placeholder="Username"/>
  </div>
  <div class="form-group">
    <input id="pw" name="password" type="password" class="required" title="Password tidak boleh kosong" placeholder="Password"/>
  </div>
  <div class="form-group">
    <button type="submit" name="login" value="login" class="submit-regis">Masuk</button>
  </div>
  <hr class="haer">
  <br/>
   <a href="register.php"><h4>Daftar></h4></a>
</form>
</body>
</html>