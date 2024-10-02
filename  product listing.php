<?php
// Fetch products from database
$products = $db->query("SELECT * FROM products");

// Display products
foreach ($products as $product) {
    echo "<div class='product'>";
    echo "<h3>{$product['name']}</h3>";
    echo "<p>{$product['description']}</p>";
    echo "<p>Price: {$product['price']}</p>";
    echo "<button>Add to Cart</button>";
    echo "</div>";
}
?>
