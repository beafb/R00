<?php
	session_start();
	if (isset($_GET['item'])) {
		if (!isset($_SESSION['basket'])) {
			$basket['item'] = $_GET['item'];
			$basket['qty'] = 1;
			$_SESSION['basket'][] = $basket;
			print_r($_SESSION['basket']);
			exit ;
		}
		else {
			foreach ($_SESSION['basket'] as $key => $value) {
				if ($value['item'] == $_GET['item']) {
						$_SESSION['basket'][$key]['qty'] += 1;
					print_r($_SESSION);
					exit;
					}
			}
			$basket['item'] = $_GET['item'];
			$basket['gty'] = 1;
			$_SESSION['basket'][] = $basket;
			print_r($basket);
		}
	}
 ?>
