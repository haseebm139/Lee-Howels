<?php
    require_once('../vendor/autoload.php'); // Adjust the path based on your project structure

    \Stripe\Stripe::setApiKey('sk_test_51LKqZFGSNjIJ6i2QWrp0oAbJqzy5bpyXZxG0JnxSHakMb1AOPCQYc19EHEzxdkfTtDbOwa79MVEof02se0vtaGs900jFR9rvMk');

    // Create a PaymentIntent on the server
    $intent = \Stripe\PaymentIntent::create([
        'amount' => 1099, // Adjust the amount as needed
        'currency' => 'usd',
        // Other payment intent parameters...
    ]);

    // Return the client secret as a JSON response
    header('Content-Type: application/json');
    echo json_encode(['client_secret' => $intent->client_secret]);
    ?>
