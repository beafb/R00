<?php
if ($_POST['login'] != NULL && $_POST['passwd'] && $_POST['submit'] === 'OK') {
  if (!file_exists("../private/passwd")) {
    if(!file_exists("../private")) {
      mkdir("../private");
    }
      $login['login'] = $_POST['login'];
      $login['passwd'] = hash("whirlpool", $_POST['passwd']);
	  $login['age'] = $_POST['age'];
	  $login['mail'] = $_POST['mail'];
      $users[] = $login;
      file_put_contents("../private/passwd", serialize($users));
	  ?>
      <p>
      	Inscription reussi ! <br>
		<a href="sign_in.php"> Entrer dans la boutique </a>
      </p>
	  <?php
  }
  else {
	  echo "zeubi";
    $array = (unserialize(file_get_contents("../private/passwd")));
    foreach ($array as $value) {
      if ($value['login'] === $_POST['login']) {
        echo "ERROR\n";
        exit();
      }
    }
    $login['login'] = $_POST['login'];
    $login['passwd'] = hash("whirlpool", $_POST['passwd']);
	$login['age'] = $_POST['age'];
	$login['mail'] = $_POST['mail'];
    $array[] = $login;
    file_put_contents("../private/passwd", serialize($users), FILE_APPEND);
	?>
	<p>
	  Inscription reussi ! <br>
	  <a href="sign_in.php"> connectez vous </a>
	</p>
	<?php
  }
}
else {
	echo "Les chams username et Mot de passe sont obligatoires !";
}
 ?>
