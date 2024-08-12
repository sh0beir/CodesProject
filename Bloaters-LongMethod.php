<?php

class OrderProcessor {

    public function processOrder($order) {
        // Validate order
        if (empty($order->customerName) || empty($order->customerAddress) || empty($order->items)) {
            throw new Exception("Order is missing required information.");
        }

        // Calculate total
        $total = 0;
        foreach ($order->items as $item) {
            if ($item->quantity <= 0) {
                throw new Exception("Invalid item quantity.");
            }
            $total += $item->price * $item->quantity;
        }

        // Apply discounts
        if ($order->couponCode) {
            if ($order->couponCode == "DISCOUNT10") {
                $total *= 0.9;
            } elseif ($order->couponCode == "DISCOUNT20") {
                $total *= 0.8;
            }
        }

        // Calculate shipping
        if ($total < 50) {
            $total += 5; // Flat shipping rate for orders under $50
        } else {
            $total += 2; // Reduced shipping rate for orders over $50
        }

        // Process payment
        if ($order->paymentMethod == 'credit_card') {
            $this->processCreditCardPayment($order->creditCardNumber, $total);
        } elseif ($order->paymentMethod == 'paypal') {
            $this->processPaypalPayment($order->paypalId, $total);
        } else {
            throw new Exception("Invalid payment method.");
        }

        // Generate invoice
        $invoice = "Invoice for " . $order->customerName . "\n";
        $invoice .= "Address: " . $order->customerAddress . "\n";
        $invoice .= "Items:\n";
        foreach ($order->items as $item) {
            $invoice .= $item->name . " x " . $item->quantity . " = $" . $item->price * $item->quantity . "\n";
        }
        $invoice .= "Total: $" . $total . "\n";

        // Send email
        mail($order->customerEmail, "Your Order Invoice", $invoice);

        return $invoice;
    }

    private function processCreditCardPayment($creditCardNumber, $amount) {
        // Dummy implementation for processing credit card payment
    }

    private function processPaypalPayment($paypalId, $amount) {
        // Dummy implementation for processing PayPal payment
    }
}

?>