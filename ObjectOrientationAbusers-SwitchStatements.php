<?php

class DiscountCalculator {

    public function calculateDiscount($customerType, $amount) {
        switch ($customerType) {
            case 'regular':
                // bunch of code and several operations
                return $amount * 0.05;
            case 'premium':
                // bunch of code and several operations
                return $amount * 0.10;
            case 'vip':
                // bunch of code and several operations
                return $amount * 0.20;
            default:
                throw new Exception("Invalid customer type.");
        }
    }
}

$calculator = new DiscountCalculator();
echo "Regular customer discount: " . $calculator->calculateDiscount('regular', 100) . "\n";
echo "Premium customer discount: " . $calculator->calculateDiscount('premium', 100) . "\n";
echo "VIP customer discount: " . $calculator->calculateDiscount('vip', 100) . "\n";

?>
