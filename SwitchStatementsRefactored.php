<?php

interface DiscountStrategy {
    public function calculate($amount);
}

class RegularCustomerDiscount implements DiscountStrategy {
    public function calculate($amount) {
        return $amount * 0.05;
    }
}

class PremiumCustomerDiscount implements DiscountStrategy {
    public function calculate($amount) {
        return $amount * 0.10;
    }
}

class VIPCustomerDiscount implements DiscountStrategy {
    public function calculate($amount) {
        return $amount * 0.20;
    }
}

class DiscountCalculator {

    private $strategy;

    public function __construct(DiscountStrategy $strategy) {
        $this->strategy = $strategy;
    }

    public function calculateDiscount($amount) {
        return $this->strategy->calculate($amount);
    }
}

// Usage
$regularDiscount = new DiscountCalculator(new RegularCustomerDiscount());
echo "Regular customer discount: " . $regularDiscount->calculateDiscount(100) . "\n";

$premiumDiscount = new DiscountCalculator(new PremiumCustomerDiscount());
echo "Premium customer discount: " . $premiumDiscount->calculateDiscount(100) . "\n";

$vipDiscount = new DiscountCalculator(new VIPCustomerDiscount());
echo "VIP customer discount: " . $vipDiscount->calculateDiscount(100) . "\n";

?>
