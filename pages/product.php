<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bashar Saadi - Product</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div id="dark-mode-toggle">
        <button id="dark-mode-btn">💡</button>
    </div>

    <div class="container">
        <div id="product-detail" class="product-detail">
            <?php
            require_once('db_operations.php');
            $productId = $_GET['id'];
            $products = getProducts();
            $product = array_filter($products, function($p) use ($productId) {
                return $p['id'] == $productId;
            });
            $product = reset($product);
            
            if ($product) {
                echo "
                    <h1>{$product['name']}</h1>
                    <div class='color-box' style='background-color: {$product['color']}; width: 300px; height: 300px;'></div>
                    <p class='item-price'>\${$product['price']}</p>
                    <p class='item-description'>{$product['description']}</p>
                    <button onclick='addToCart(\"{$product['name']}\", {$product['price']})'>Add to Cart</button>
                ";
            }
            ?>
        </div>
    </div>

    <script src="js/darkmode.js"></script>
    <script src="js/cart.js"></script>
</body>
</html>