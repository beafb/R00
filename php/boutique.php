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
    <p> Bienvenue sur ma belle boutique <?php echo $_SESSION["loggued_on_user"] ?> !!! </p>
    <br>
    <br>
    <br>
    <table id="tablo">
      <tr>
        <td>
          <div class="img">
            <img class="fruits" src="../img/fruit/Apple.png" alt="pom" title="une pomme mec"/>
          </div>
          <div class="price">
            <p>1$<br><a href="add_basket.php?item=apple"> + </a><a href="red_basket.php?item=apple"> - </a></p>
          </div>
        </td>
        <td>
          <div class="img">
          <img class="fruits" src="../img/fruit/Kiwi.png" alt="Kiwi" title="un kiwi"/>
        </div>
          <div class="price">
            <p>1$<br><a href="add_basket.php?item=kiwi"> + </a><a href="red_basket.php?item=kiwi"> - </a></p>
          </div>
        </td>
        <td>
          <div class="img">
            <img class="fruits" src="../img/fruit/Pear.png" alt="poir" title="La poire nom de dieu"/>
          </div>
          <div class="price">
            <p>1$<br><a href="add_basket.php?item=pear"> + </a><a href="red_basket.php?item=pear"> - </a></p>
          </div>
        </td>
      </tr>
      <tr>
        <td>
          <div class="img">
            <img class="fruits" src="../img/fruit/Peach.png" alt="pom" title="zeubi"/>
          </div>
          <div class="price">
            <p>1$<br><a href="add_basket.php?item=peach"> + </a><a href="red_basket.php?item=peach"> - </a></p>
          </div>
        </td>
        <td>
          <div class="img">
            <img class="fruits" src="../img/fruit/Coconut.png" alt="Kiwi" title="bounty"/>
          </div>
          <div class="price">
            <p>1$<br><a href="add_basket.php?item=coco"> + </a><a href="red_basket.php?item=coco"> - </a></p>
          </div>
        </td>
        <td>
          <div class="img">
            <img class="fruits" src="../img/fruit/Mangue.png" alt="Mang" title="mannngggg"/></a>
          </div>
          <div class="price">
            <p>1$<br><a href="add_basket.php?item=mango"> + </a><a href="red_basket.php?item=mango"> - </a></p>
          </div>
        </td>
      </tr>
    </table>
    <br>
<?php include("footer.php"); ?>
  </body>
</html>
