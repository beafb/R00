<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/index.css">
		<meta charset="utf-8">
		<title>Sing up</title>
	</head>
	<body>
		<?php include("header.php") ?>
		<form action="create.php" method="post">
			<p>Username *: <input type="Text" name="login" value=""></p>
			<p>Mot de passe *: <input type="password" name="passwd" value=""></p>
			<p><input type="submit" name="submit" value="OK"></p>
		</form>
		Les champs (*) sont obligatoires.
			<?php include("footer.php"); ?>
	</body>
</html>
