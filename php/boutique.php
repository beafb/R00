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
    <div class="market">
      <img class="fruits" src="../img/fruit/Apple.png" alt="pom" title="une pomme mec"/>
      <img class="fruits" src="../img/fruit/Kiwi.png" alt="Kiwi" title="un kiwi"/>
      <img class="fruits" src="../img/fruit/Pear.png" alt="poir" title="La poire nom de dieu"/>
    </div>
<?php include("footer.php"); ?>
  </body>
</html>
