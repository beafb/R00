<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../css/index.css">
		<title></title>
	</head>
	<body>
		<?php include("header.php")
		$path = "./content/";
		$file = $path . "list";
		if (file_exists($file)) {
			$auth = unserialize(file_get_contents($file));
			foreach ($auth as $key => $value) {
				<table> echo <tr><td>$value[$key]</td></tr></table>
			}
				?>

		<?php include("footer.php") ?>
	</body>
</html>
