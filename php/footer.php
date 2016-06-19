<div id="footer">
	<?php
		include("logout.php");
	if ($_SESSION['login'] === "admin" && $_SESSION['passwd'] === "admin") {
		echo '<a href="../admin.php"><img title="admin" alt="admin" src="../img/admin.png"></a>';
	}?>
	<a href="logout.php"><img src="../img/logout.png"/></a>
	<?php
	?>
	</div>
