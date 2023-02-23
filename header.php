<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>Welcome to the Juice Shop!</title>
		<style>
		form {
			width: 400px;
			margin: 0 auto;
			margin-top: 50px;
		}

		label {
			display: block;
			margin-top: 10px;
			float: left;
			clear: left;
			width: 100px;
			text-align: right;
			padding-right: 10px;
		}

		input[type=text] {
			width: 250px;
			padding: 5px;
			border: 1px solid #ccc;
			border-radius: 3px;
			box-sizing: border-box;
			float: left;
		}

		button[type=submit] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 20px;
			float: left;
			clear: left;
		}
	</style>
</head>
<body style="background-color:#f9fafc;">
    <header>
      <div class="header-left">
        <a href="./index.php">Home</a>
        <a href="./products.php">Products</a>

    <?php
    if($_SESSION['username'] != NULL) {
    echo '<a href="./admin/logout.php">Logout </a>';
    echo '<a href="./create.php">Create</a>';
    } else {
    echo '<a href="./admin/login.php">Login</a>';
        }
    ?>

      </div>
  </header>
