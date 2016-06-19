<?php
	session_start();
	if ($_SESSION["loggued_on_user"] === "admin") {
	    if ($_POST['item'] != NULL && $_POST['cat'] != NULL && $_POST['submit'] == 'OK')
	    {
	        if (!file_exists('./content'))
	        {
	            mkdir('./content');
	        }
	        if (file_exists('./content/list'))
	        {
	            $tab3 = file_get_contents('./content/list');
	            $list = unserialize($tab3);
	        }
	            $details['item'] = $_POST['item'];
	            $details['cat'] = $_POST['cat'];
				$details9['price'] = $_POST['price'];
	            $list[] = $details;
	            $list_serialized = serialize($list);
	            file_put_contents('./content/list', $list_serialized);
	    }
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="create_db.php" method="post">
			<p> Article <input type="Text" name="item" value=""> </p>
			<p> catégorie <input type="Text" name="cat" value=""> </p>
			<p> Prix <input type="Text" name="Price" value=""> </p>
			<p> <input type="submit" name="submit" value="OK"> </p>
		</form>
	</body>
</html>
<?php
}
?>
