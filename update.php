<html>
<head>
  <title>Update Product</title>
</head>
<body>
  <h1>Update Product</h1>
  <form action="crud.php" method="post">
    <input type="hidden" name="id" value="<?php echo $product_id; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php echo $product_name; ?>">
    <br>
    <label for="servingSize">Serving Size:</label>
    <input type="text" id="servingSize" name="servingSize" value="<?php echo $product_serving_size; ?>">
    <br>
    <label for="calories">Calories:</label>
    <input type="text" id="calories" name="calories" value="<?php echo $product_calories; ?>">
    <br>
    <label for="ingredients">Ingredients:</label>
    <input type="text" id="ingredients" name="ingredients" value="<?php echo $product_ingredients; ?>">
    <br>
    <label for="price">Price:</label>
    <input type="text" id="price" name="price" value="<?php echo $product_price; ?>">
    <br>
    <input type="submit" name="update" value="Update">
  </form>
</body>
</html>
