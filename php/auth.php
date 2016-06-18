<?php
function auth($login, $passwd)
{
	$array = unserialize(file_get_contents("../private/passwd"));
	foreach ($array as $key => $value) {
		if ($login === $value['login'] &&
			hash("whirlpool", $passwd) === $value['passwd']){
			return TRUE;
		}
		else {
			return FALSE;
		}
	}
}
 ?>
