<div id="header">
	<a href="index.php">
		<img id="home" src="../img/home.png"/>
	</a>
	<span id="website_name">
		BUY-ME
	</span>
	<a href="sign_in.php">
		<img id="account" src="../img/account.png"/>
	</a>
	<a href="shop.php">
		<img id="shop" src="../img/shop.png"/>
	</a>
	<?php if (isset($_SERVER['login'])) echo "<img id=\"logout\" src=\"./img/logout.png\"/>"; ?>
</div>
