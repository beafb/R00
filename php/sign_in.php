<?php
include("exit_to.php");
include("login.php");
  if ($_POST['login'] && hash("whirlpool", $_POST['passwd'])) {
    if (login(hash("whirlpool", $_POST['passwd']), $_POST['login'])) {
        exit_to("./boutique.php");
      }
      else {
				$error = "username ou Mdp incorrect !!!";
      }
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/index.css">
		<meta charset="utf-8">
		<title>sign_in</title>
	</head>
	<body>
		<?php include("header.php");

		echo $error; ?>
		<form action="sign_in.php" method="POST">
			<p> login <input type="Text" name="login" value=""> </p>
			<p> Mot de passe <input type="password" name="passwd" value=""> </p>
			<p><input type="submit" name="submit" value="OK"> </p>
			<p>
				Vous n'avez pas de compte? <a href="sign_up.php">Insrcivez-vous</a> ou <a href="boutique.php">entrez sans vous connecter!</a>
			</p>
					<?php include("footer.php") ?>
		</form>
	</body>
</html>
