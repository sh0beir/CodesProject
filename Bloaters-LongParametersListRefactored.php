<?php

class OrderDetails
{
    public $orderId;
    public $customerId;
    public $productId;
    public $quantity;
    public $price;
    public $shippingAddress;
    public $billingAddress;
    public $orderDate;
    public $deliveryDate;
    public $discount;
    public $tax;

    public function __construct($orderId = null, $customerId, $productId, $quantity, $price, $shippingAddress, $billingAddress, $orderDate, $deliveryDate, $discount, $tax)
    {
        $this->orderId = $orderId;
        $this->customerId = $customerId;
        $this->productId = $productId;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->shippingAddress = $shippingAddress;
        $this->billingAddress = $billingAddress;
        $this->orderDate = $orderDate;
        $this->deliveryDate = $deliveryDate;
        $this->discount = $discount;
        $this->tax = $tax;
    }
}

class OrderService
{
    public function createOrder(OrderDetails $orderDetails)
    {
        // Code to create the order
        echo "Order created with the following details:\n";
        echo "Customer ID: " . $orderDetails->customerId . "\n";
        echo "Product ID: " . $orderDetails->productId . "\n";
        echo "Quantity: " . $orderDetails->quantity . "\n";
        echo "Price: " . $orderDetails->price . "\n";
        echo "Shipping Address: " . $orderDetails->shippingAddress . "\n";
        echo "Billing Address: " . $orderDetails->billingAddress . "\n";
        echo "Order Date: " . $orderDetails->orderDate . "\n";
        echo "Delivery Date: " . $orderDetails->deliveryDate . "\n";
        echo "Discount: " . $orderDetails->discount . "\n";
        echo "Tax: " . $orderDetails->tax . "\n";
    }

    public function printOrder(OrderDetails $orderDetails)
    {
        // Code to print the order
        echo "Order with ID: $orderDetails->orderId, printed with the following details:\n";
        echo "Print Customer ID: " . $orderDetails->customerId . "\n";
        echo "Print Product ID: " . $orderDetails->productId . "\n";
        echo "Print Quantity: " . $orderDetails->quantity . "\n";
        echo "Print Price: " . $orderDetails->price . "\n";
        echo "Print Shipping Address: " . $orderDetails->shippingAddress . "\n";
        echo "Print Billing Address: " . $orderDetails->billingAddress . "\n";
        echo "Print Order Date: " . $orderDetails->orderDate . "\n";
        echo "Print Delivery Date: " . $orderDetails->deliveryDate . "\n";
        echo "Print Discount: " . $orderDetails->discount . "\n";
        echo "Print Tax: " . $orderDetails->tax . "\n";
    }
}

// Usage example
$orderDetails = new OrderDetails(
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

$orderService = new OrderService();
$orderService->createOrder($orderDetails);
$orderService->printOrder($orderDetails);

?>