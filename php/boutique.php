<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
		<link rel="stylesheet" href="../css/index.css">
    <meta charset="utf-8">
    <title>Boutique</title>
  </head>
  <body>
<?php include("header.php"); ?>
    <p>Bienvenue sur ma belle boutique <?php echo $_SESSION["loggued_on_user"] ?>!!!</p>
<?php include("footer.php"); ?>
  </body>
</html>
