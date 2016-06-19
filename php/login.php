<?php
session_start();
include ('auth.php');
function login($passwd, $login) {
	if ($passwd != NULL && $login != NULL) {
		if (auth($login, $passwd)) {
			$_SESSION["loggued_on_user"] = $login;
			return TRUE;
		}
	}
	else {
		return FALSE;
}
}

?>
