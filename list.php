<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product List</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th, td {
			padding: 8px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>
<body style="background-color:#f9fafc;">
	<h1>Product List</h1>

	<table>
		<tbody>
			<?php
			    include 'crud.php';
			?>
		</tbody>
	</table>

	<p>Navigate back  <a href="./index.html">home.</a> We still have the best juices.</p>
	<p><a href="./list.php">View</a>, <a href="./create.php">add</a>, <a href="./delete.php">remove</a>, or <a href="./update.php">update</a> products.</p>
	<p>This site is sponsored by <a href="https://www.wctc.edu">www.wctc.edu</a></p>
</body>
</html>