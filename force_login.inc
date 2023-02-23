<?php
session_start();

if(!$_SESSION['username']) {
	header("Location: https://juiceshop.com/admin/login.php");
	exit();
}
?>
