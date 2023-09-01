<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="styles" href="styles.css">
  <title>Inventory</title>
</head>
<body>
  <div class="inventory">
    <h2>Inventory</h2>
   <form class="item-form" action="compute.php" method="post">
     <label for="Product_name" class="form-label"><h2>Product Name:</h2></label>
      <input type="text" id="Product_name" name="product_name" required>
      </select>
      <label for="initial-quantity">Quantity:</label>
      <input type="number" id="initial-quantity" name="initial_quantity" min="0" required>
      <label for="out-quantity">Out:</label>
      <input type="number" id="out-quantity" name="out_quantity" min="0">
      <button type="submit">Add</button>
    </form>
    <div class="item-list">
    </div>
  </div>
</body>
</html>
