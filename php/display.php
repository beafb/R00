<?php
include("header.php");
$tab = unserialize(file_get_contents("./content/list"));
foreach ($tab as $key => $value) {
	# code...
}
include("footer");
?>
