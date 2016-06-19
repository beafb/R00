<?php
include("exit_to.php");
include("login.php");
if ($_POST['login'] != NULL && $_POST['passwd'] && $_POST['submit'] === 'OK') {
  if (!file_exists("../private/passwd")) {
    if(!file_exists("../private")) {
      @mkdir("../private");
    }
      $login['login'] = $_POST['login'];
      $login['passwd'] = hash("whirlpool", $_POST['passwd']);
      $login['panier'] = "";
      $users[] = $login;
      file_put_contents("../private/passwd", serialize($users));
      exit_to("boutique.php");
  }
  else {
    $array = unserialize(file_get_contents("../private/passwd"));
    foreach ($array as $key => $value) {
      if ($value['login'] === $_POST['login']) {
        echo "ERROR\n";
        exit();
      }
    }
    $login['login'] = $_POST['login'];
    $login['passwd'] = hash("whirlpool", $_POST['passwd']);
    $login['panier'] = "";
    $array[] = $login;
    file_put_contents("../private/passwd", serialize($array));
    exit_to("boutique.php");
  }
}
else {
	echo "Les champs username et Mot de passe sont obligatoires !";
}
 ?>
