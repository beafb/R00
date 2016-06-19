<?php
	session_start();
	if (isset($_GET['item']) && isset($_SESSION['basket'])
		&& !isset($_GET['del'])) {
		foreach ($_SESSION['basket'] as $key => $value) {
				if ($value['item'] == $_GET['item']
					&& $_SESSION['basket'][$key]['qty']) {
					$_SESSION['basket'][$key]['qty'] -= 1;
				echo $_SESSION['basket'][$key]['qty'];
				}
		}
	}
	else if (isset($_GET['item']) && isset($_GET['del'])
		&& isset($_SESSION['basket'])) {
		foreach ($_SESSION['basket'] as $key => $value) {
			if ($value['item'] == $_GET['item']
			&& $_SESSION['basket'][$key]['qty']) {
				$_SESSION['basket'][$key]['qty'] = 0;
			}
				echo $_SESSION['basket'][$key]['qty'];
		}
	}
 ?>
