<?php session_start(); ?>
<?php include './header.php'; ?>
	<h1>Welcome to the Juice Shop!</h1>
	<img alt="My Logo" src="./images/my_logo.jpg" width="400" />
	<p>Thanks for stopping by the Juice Shop! If you're a returning customer, <a href="./admin/login.php">login here</a>.</p>
	<p>Please purchase our <a href="./products.php">products.</a> We have the best juices.</p>
	<?php
	    if($_SESSION['username'] != NULL) {
	        echo '<a href="./list.php">View</a>, <a href="./create.php">add</a>, <a href="./delete.php">remove</a>, or <a href="./update.php">update</a> products.';
	    }
	?>
    <p>This site is sponsored by <a href="https://www.wctc.edu">www.wctc.edu</a></p>
</body>
</html>
