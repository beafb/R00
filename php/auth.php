<?php
function auth($login, $passwd)
{
	$array = unserialize(file_get_contents("../private/passwd"));

	foreach ($array as $key => $value) {
		if ($login === $value['login'] &&
			$passwd === $value['passwd']){
			return TRUE;
		}
		}
		return FALSE;
}
 ?>
