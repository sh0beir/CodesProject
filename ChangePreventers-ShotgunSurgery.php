<?php

class Order {
    private $totalAmount;
    
    public function __construct($totalAmount) {
        $this->totalAmount = $totalAmount;
    }

    public function applyDiscount($percentage) {
        $this->totalAmount -= $this->totalAmount * ($percentage / 100);
    }

    public function getTotalAmount() {
        return $this->totalAmount;
    }
}

class Invoice {
    private $amountDue;
    
    public function __construct($amountDue) {
        $this->amountDue = $amountDue;
    }

    public function applyDiscount($percentage) {
        $this->amountDue -= $this->amountDue * ($percentage / 100);
    }

    public function getAmountDue() {
        return $this->amountDue;
    }
}

class Cart {
    private $items = [];
    private $totalPrice = 0;
    
    public function addItem($price) {
        $this->items[] = $price;
        $this->totalPrice += $price;
    }

    public function applyDiscount($percentage) {
        $this->totalPrice -= $this->totalPrice * ($percentage / 100);
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }
}

class Product {
    private $price;
    
    public function __construct($price) {
        $this->price = $price;
    }

    public function applyDiscount($percentage) {
        $this->price -= $this->price * ($percentage / 100);
    }

    public function getPrice() {
        return $this->price;
    }
}

// Usage example
$order = new Order(100);
$order->applyDiscount(10);
echo "Order total after discount: " . $order->getTotalAmount() . "\n";

$invoice = new Invoice(200);
$invoice->applyDiscount(10);
echo "Invoice amount due after discount: " . $invoice->getAmountDue() . "\n";

$cart = new Cart();
$cart->addItem(50);
$cart->addItem(100);
$cart->applyDiscount(10);
echo "Cart total after discount: " . $cart->getTotalPrice() . "\n";

$product = new Product(75);
$product->applyDiscount(10);
echo "Product price after discount: " . $product->getPrice() . "\n";

?>
