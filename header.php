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
        <a href="https://www.juiceshop.com/index.php">Home</a>
        <a href="https://www.juiceshop.com/products.php">Products</a>
    <?php
    echo '<a href="https://www.juiceshop.com/list.php">View our Products!</a>';
    ?>
    <?php
    if(isset($_SESSION['username']) && $_SESSION['username'] != NULL) {
    echo '<a href="https://www.juiceshop.com/admin/logout.php">Logout</a> ';
    echo '<a href="https://www.juiceshop.com/create.php">Create</a>';
    echo '<a href="https://www.juiceshop.com/update.php">Update</a>';
    echo '<a href="https://www.juiceshop.com/delete.php">Delete</a>';
    } else {
    echo '<a href="https://www.juiceshop.com/admin/login.php">Login</a>';
        }
    ?>

      </div>
  </header>
