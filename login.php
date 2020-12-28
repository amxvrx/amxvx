<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="header">
		<h2>se connecter</h2>
	</div>
	<form method="post" action="login.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Nom d'utilisateur</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>mot de passe</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_btn">se connecter</button>
		</div>
		<p>
			Pas encore membre ? <a href="register.php">s'inscrire</a>
		</p>
	</form>
</body>
</html>