<?php

class OrderService
{
    public function createOrder($customerId, $productId, $quantity, $price, $shippingAddress, $billingAddress, $orderDate, $deliveryDate, $discount, $tax)
    {
        // Code to create the order
        echo "Order created with the following details:\n";
        echo "Customer ID: $customerId\n";
        echo "Product ID: $productId\n";
        echo "Quantity: $quantity\n";
        echo "Price: $price\n";
        echo "Shipping Address: $shippingAddress\n";
        echo "Billing Address: $billingAddress\n";
        echo "Order Date: $orderDate\n";
        echo "Delivery Date: $deliveryDate\n";
        echo "Discount: $discount\n";
        echo "Tax: $tax\n";
    }

    public function printOrder($orderId, $customerId, $productId, $quantity, $price, $shippingAddress, $billingAddress, $orderDate, $deliveryDate, $discount, $tax)
    {
        // Code to print the order
        echo "Order with ID: $orderId, printed with the following details:\n";
        echo "Print Customer ID: $customerId\n";
        echo "Print Product ID: $productId\n";
        echo "Print Quantity: $quantity\n";
        echo "Print Price: $price\n";
        echo "Print Shipping Address: $shippingAddress\n";
        echo "Print Billing Address: $billingAddress\n";
        echo "Print Order Date: $orderDate\n";
        echo "Print Delivery Date: $deliveryDate\n";
        echo "Print Discount: $discount\n";
        echo "Print Tax: $tax\n";
    }
}

// Usage example
$orderService = new OrderService();
$orderService->createOrder(
    1,
    101,
    2,
    50.00,
    "123 Main St",
    "456 Elm St",
    "2024-08-12",
    "2024-08-19",
    5.00,
    8.50
);

$orderService->printOrder(
    1,
    1,
    101,
    2,
    50.00,
    "123 Main St",
    "456 Elm St",
    "2024-08-12",
    "2024-08-19",
    5.00,
    8.50
);
?>