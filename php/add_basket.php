<?php
	session_start();
	function is_item($item){
		if ($item === 'peer' || $item === "peach" || $item === "apple"
			|| $item === 'kiwi' || $item === 'coco' || $item === 'mango') {
				return TRUE ;
			}
		else {
			return FALSE ;
		}
	}
	if (isset($_GET['item']) && is_item($_GET['item'])) {
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
