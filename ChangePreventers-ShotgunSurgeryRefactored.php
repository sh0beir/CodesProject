<?php

// Centralized Discount Service
class DiscountService {
    public function applyDiscount($amount, $percentage) {
        return $amount - ($amount * ($percentage / 100));
    }
}

class Order {
    private $totalAmount;
    private $discountService;

    public function __construct($totalAmount, DiscountService $discountService) {
        $this->totalAmount = $totalAmount;
        $this->discountService = $discountService;
    }

    public function applyDiscount($percentage) {
        $this->totalAmount = $this->discountService->applyDiscount($this->totalAmount, $percentage);
    }

    public function getTotalAmount() {
        return $this->totalAmount;
    }
}

class Invoice {
    private $amountDue;
    private $discountService;

    public function __construct($amountDue, DiscountService $discountService) {
        $this->amountDue = $amountDue;
        $this->discountService = $discountService;
    }

    public function applyDiscount($percentage) {
        $this->amountDue = $this->discountService->applyDiscount($this->amountDue, $percentage);
    }

    public function getAmountDue() {
        return $this->amountDue;
    }
}

class Cart {
    private $items = [];
    private $totalPrice = 0;
    private $discountService;

    public function __construct(DiscountService $discountService) {
        $this->discountService = $discountService;
    }

    public function addItem($price) {
        $this->items[] = $price;
        $this->totalPrice += $price;
    }

    public function applyDiscount($percentage) {
        $this->totalPrice = $this->discountService->applyDiscount($this->totalPrice, $percentage);
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }
}

class Product {
    private $price;
    private $discountService;

    public function __construct($price, DiscountService $discountService) {
        $this->price = $price;
        $this->discountService = $discountService;
    }

    public function applyDiscount($percentage) {
        $this->price = $this->discountService->applyDiscount($this->price, $percentage);
    }

    public function getPrice() {
        return $this->price;
    }
}

// Usage example
$discountService = new DiscountService();

$order = new Order(100, $discountService);
$order->applyDiscount(10);
echo "Order total after discount: " . $order->getTotalAmount() . "\n";

$invoice = new Invoice(200, $discountService);
$invoice->applyDiscount(10);
echo "Invoice amount due after discount: " . $invoice->getAmountDue() . "\n";

$cart = new Cart($discountService);
$cart->addItem(50);
$cart->addItem(100);
$cart->applyDiscount(10);
echo "Cart total after discount: " . $cart->getTotalPrice() . "\n";

$product = new Product(75, $discountService);
$product->applyDiscount(10);
echo "Product price after discount: " . $product->getPrice() . "\n";

?>
