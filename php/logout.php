<?php
include("exit_to.php");
function logout() {
	$_SESSION['loggued_on_user'] == NULL;
}
logout();
exit_to("sign_in.php");
 ?>
