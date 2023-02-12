<?php
$host = "localhost";
$username = "root";
$password = "password";
$dbname = "products_db";

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function createProduct($conn, $product_name, $product_price, $product_image) {
    $sql = "INSERT INTO products (product_name, product_price, product_image) VALUES ('$product_name', '$product_price', '$product_image')";
    if (mysqli_query($conn, $sql)) {
        return true;
    } else {
        return false;
    }
}

function readProducts($conn) {
    $sql = "SELECT * FROM products";
    $result = mysqli_query($conn, $sql);
    return $result;
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

mysqli_close($conn);
?>