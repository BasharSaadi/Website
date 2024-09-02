<?php
require_once('stripe-php/init.php');
\Stripe\Stripe::setApiKey('your_stripe_secret_key');

$input = json_decode(file_get_contents('php://input'), true);
$cart = $input['cart'];

$line_items = array_map(function($item) {
    return [
        'price_data' => [
            'currency' => 'usd',
            'product_data' => [
                'name' => $item['item'],
            ],
            'unit_amount' => $item['price'] * 100,
        ],
        'quantity' => 1,
    ];
}, $cart);

$session = \Stripe\Checkout\Session::create([
    'payment_method_types' => ['card'],
    'line_items' => $line_items,
    'mode' => 'payment',
    'success_url' => 'https://yourwebsite.com/success.php',
    'cancel_url' => 'https://yourwebsite.com/cart.html',
]);

echo json_encode(['id' => $session->id]);