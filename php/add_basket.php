<?php
	session_start();
	if (isset($_GET['item'])) {
		if (!isset($_SESSION['basket'])) {
			echo "toz";
			$basket['item'] = $_GET['item'];
			$basket['qty'] = 1;
			$_SESSION['basket'][] = $basket;
			print_r($_SESSION['basket']);
		}
		else {
			foreach ($_SESSION['basket'] as $key => $value) {
				var_dump($value);
					if ($value['item'] == $_GET['item']) {
						$_SESSION['basket'][$key]['qty'] += 1;
					echo $_SESSION['basket'][$key]['qty'];
					}
			}
		}
	}
 ?>
