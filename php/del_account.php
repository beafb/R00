<?php
	session_start();
	if ($_SESSION['loggued_on_user']) {
		echo "zeubi";
		if ($_GET['sup']) {
			var_dump($_SESSION['loggued_on_user']);
			$tab = unserialize(file_get_contents("../private/passwd"));
			foreach ($tab as $key => $value) {
				echo $tab[$key];
				if ($value['login'] == $_SESSION['loggued_on_user']) {
					echo "popo";
					unset($tab[$key]);
				}
			}
			$_SESSION['loggued_on_user'] = "";
			file_put_contents("../private/passwd", serialize($tab));
		}
	}
 ?>
 <a href="http://e1r3p4.42.fr:8080/R00/php/del_account.php?sup=1" title="supression definitive">cliquez ici pour suprimmer votre compte</a>
