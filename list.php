<head>
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
<?php include 'juiceshop.com/header.php'; ?>
	<h1>Product List</h1>

	<table>
		<tbody>
			<?php
			    include 'juiceshop.com/crud.php';
			?>
		</tbody>
	</table>
<br /><br /><br />
	<p>This site is sponsored by <a href="https://www.wctc.edu">www.wctc.edu</a></p>
</body>
</html>
