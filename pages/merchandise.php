<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bashar Saadi - Merchandise</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
        .merchandise-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 2rem;
            padding: 2rem 0;
        }
        .merchandise-item {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        .merchandise-item:hover {
            transform: translateY(-5px);
        }
        .merchandise-item a {
            text-decoration: none;
            color: inherit;
        }
        .color-box {
            height: 200px;
            width: 100%;
        }
        .item-info {
            padding: 1rem;
        }
        .item-name {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .item-price {
            font-size: 1.1rem;
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="header-container">
        <h1>Merchandise</h1>
        <div id="dark-mode-toggle">
            <button id="dark-mode-btn">💡</button>
        </div>
    </div>

    <div class="container">
        <div id="merchandise-container" class="merchandise-container">
            <?php
            require_once('db_operations.php');
            $products = getProducts();
            foreach ($products as $product) {
                echo "
                    <div class='merchandise-item'>
                        <a href='product.php?id={$product['id']}'>
                            <div class='color-box' style='background-color: {$product['color']};'></div>
                            <div class='item-info'>
                                <div class='item-name'>{$product['name']}</div>
                                <div class='item-price'>\${$product['price']}</div>
                            </div>
                        </a>
                    </div>
                ";
            }
            ?>
        </div>
    </div>

    <script src="js/darkmode.js"></script>
</body>
</html>