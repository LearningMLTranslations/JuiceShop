<?php
$host = "localhost";
$username = "root";
$password = "L0g1n_P4s\$w0rd";
$dbname = "juiceshop";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["update"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $serving_size = $_POST["servingSize"];
    $calories = $_POST["calories"];
    $ingredients = $_POST["ingredients"];
    $price = $_POST["price"];

    $sql = "UPDATE products SET name='$name', servingSize='$serving_size', calories='$calories', ingredients='$ingredients', price='$price' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "The product has been updated.";
    } else {
        echo "Error updating product: " . mysqli_error($conn);
    }
}

$sql = "SELECT * FROM juices";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Product ID</th><th>Name</th><th>Serving size</th><th>Calories</th><th>Ingredients</th><th>Price</th></tr>";
    // Output the data for each product
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["servingSize"]. "</td><td>" . $row["calories"]. "</td><td>" . $row["ingredients"]. "</td><td>$" . $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No products found in the database.";
}

mysqli_close($conn);
?>

/*
function createProduct($conn, $product_name, $product_price, $product_image) {
    $sql = "INSERT INTO juices (name, image, timestamp, price, servingSize, calories, ingredients, description) VALUES ('$product_name', '$product_price', '$product_image')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function updateProduct($conn, $product_id, $product_name, $product_price, $product_image) {
    $sql = "UPDATE products SET product_name='$product_name', product_price='$product_price', product_image='$product_image' WHERE product_id=$product_id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function deleteProduct($conn, $product_id) {
    $sql = "DELETE FROM products WHERE product_id=$product_id";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}
*/