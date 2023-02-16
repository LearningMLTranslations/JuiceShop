<?php
$host = "localhost";
$username = "root";
$password = "L0g1n_P4s\$w0rd";
$dbname = "juiceshop";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["create"])) {
    $price = $_POST["price"];
    $servingSize = $_POST["servingSize"];
    $calories = $_POST["calories"];
    $ingredients = $_POST["ingredients"];
    $description = $_POST["description"];
    $name = $_POST["name"];
    $image = $_POST["image"];

    $sql = "INSERT INTO products (timestamp, price, servingSize, calories, ingredients, description, name, image)
            VALUES (NOW(), '$price', '$servingSize', '$calories', '$ingredients', '$description', '$name', '$image')";

    if (mysqli_query($conn, $sql)) {
        echo "New product created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $price = $_POST["price"];
    $servingSize = $_POST["servingSize"];
    $calories = $_POST["calories"];
    $ingredients = $_POST["ingredients"];
    $description = $_POST["description"];
    $name = $_POST["name"];
    $image = $_POST["image"];

    $sql = "UPDATE products SET price='$price', servingSize='$servingSize', calories='$calories', ingredients='$ingredients', description='$description', name='$name', image='$image'
            WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Product updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

if (isset($_POST["delete"])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM products WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "Product deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Timestamp</th><th>Price</th><th>Serving Size</th><th>Calories</th><th>Ingredients</th><th>Description</th><th>Name</th><th>Image</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["timestamp"]. "</td><td>$" . $row["price"]. "</td><td>" . $row["servingSize"]. "</td><td>" . $row["calories"]. "</td><td>" . $row["ingredients"]. "</td><td>" . $row["description"]. "</td><td>" . $row["name"]. "</td><td><img src='" . $row["image"] . "' width='100' height='100'></td></tr>";
    }
    echo "</table>";
} else {
    echo "No products found in the database.";
}

mysqli_close($conn);