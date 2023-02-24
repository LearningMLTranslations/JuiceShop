<?php
session_start();

if(!$_SESSION['username']) {
	header("Location: juiceshop.com/admin/login.php");
	exit();
}
?>
