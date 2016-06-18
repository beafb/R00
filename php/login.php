<?php
session_start();
include ('auth.php');
if ($_GET['passwd'] != NULL && $_GET['login'] != NULL) {
	if (auth($_GET['login'], $_GET['passwd'])) {
		$_SESSION["loggued_on_user"] = $_GET['login'];
		header("location: boutique.php");
	}
	else {
?>
		<p>
			Erreur <a href="sign_in.php">Réessayer</a>
		</p>
<?php
	}
}
else {
?>
	<p>
		login et/ou mot de passe incorect
	</p>
<?php
}
?>
