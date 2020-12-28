<?php error_reporting(E_ERROR | E_PARSE);?>
<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
<div class="header">
	<h2>inscription</h2>
</div>
<form enctype="multipart/form-data" method="post" action="register.php">
	<?php echo display_error(); ?>
	<div class="input-group">
		<label>nom d'utilisateur</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
	</div>
	<div class="input-group">
		<label>mot de passe</label>
		<input type="password" name="password_1">
	</div>
	<div class="input-group">
		<label>Confirmer mot de passe</label>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
	    <label for="image">photo d'identité</label>
        <input type="file" name="image"  onchange=loadFile(event)  />
	</div>
	<center>
	<img style="border-radius: 20%;height:200px;" src="" id="image" height="200"  />
	</center>
    <script>
    // image display
    function loadFile(event){
 	var output = document.getElementById('image');
	image.src = URL.createObjectURL(event.target.files[0]);
     }
    </script>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">s'inscrire</button>
	</div>
	<p>
		deja membre? <a href="login.php">Se connecter</a>
	</p>
</form>
</body>
</html>