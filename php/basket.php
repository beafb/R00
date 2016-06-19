<?php
  session_start();
  $tab = unserialize(file_get_contents("content/list"));
  foreach ($tab as $key => $value) {
    if ($value['qty']) {
    echo $value['item']." = ".$value["qty"]."$\n";
    }
  }
 ?>
