<?php
function error(){
  echo "error\n";
  exit();
}

if ($_POST['submit'] !== "OK") {
  error();
}
if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"]) {
  error();
}
$path = "../private/passwd";
$file = @file_get_contents($path);
if (!$file)
  error();
$auth = unserialize($file);
$max_key = 0;
foreach ($auth as $key => $element) {
  if ($element["login"] === $_POST["login"]){
    $max_key = $key;
    break ;
  }
}
if (!isset($max_key) || $auth[$max_key]['passwd'] !== hash("whirlpool", $_POST['oldpw']))
		error();
$auth[$max_key]["passwd"] = hash("whirlpool", $_POST["newpw"]);
file_put_contents($path, serialize($auth));
echo "OK\n";
?>
