<?php

class OrderProcessor {

    public function processOrder($order) {
        $this->validateOrder($order);
        $total = $this->calculateTotal($order);
        $total = $this->applyDiscount($order->couponCode, $total);
        $total = $this->calculateShipping($total);
        $this->processPayment($order->paymentMethod, $order, $total);
        $invoice = $this->generateInvoice($order, $total);
        $this->sendInvoice($order->customerEmail, $invoice);

        return $invoice;
    }

    private function validateOrder($order) {
        if (empty($order->customerName) || empty($order->customerAddress) || empty($order->items)) {
            throw new Exception("Order is missing required information.");
        }
    }

    private function calculateTotal($order) {
        $total = 0;
        foreach ($order->items as $item) {
            if ($item->quantity <= 0) {
                throw new Exception("Invalid item quantity.");
            }
            $total += $item->price * $item->quantity;
        }
        return $total;
    }

    private function applyDiscount($couponCode, $total) {
        if ($couponCode == "DISCOUNT10") {
            return $total * 0.9;
        } elseif ($couponCode == "DISCOUNT20") {
            return $total * 0.8;
        }
        return $total;
    }

    private function calculateShipping($total) {
        if ($total < 50) {
            return $total + 5;
        }
        return $total + 2;
    }

    private function processPayment($paymentMethod, $order, $total) {
        if ($paymentMethod == 'credit_card') {
            $this->processCreditCardPayment($order->creditCardNumber, $total);
        } elseif ($paymentMethod == 'paypal') {
            $this->processPaypalPayment($order->paypalId, $total);
        } else {
            throw new Exception("Invalid payment method.");
        }
    }

    private function generateInvoice($order, $total) {
        $invoice = "Invoice for " . $order->customerName . "\n";
        $invoice .= "Address: " . $order->customerAddress . "\n";
        $invoice .= "Items:\n";
        foreach ($order->items as $item) {
            $invoice .= $item->name . " x " . $item->quantity . " = $" . $item->price * $item->quantity . "\n";
        }
        $invoice .= "Total: $" . $total . "\n";

        return $invoice;
    }

    private function sendInvoice($customerEmail, $invoice) {
        mail($customerEmail, "Your Order Invoice", $invoice);
    }

    private function processCreditCardPayment($creditCardNumber, $amount) {
        // Dummy implementation for processing credit card payment
    }

    private function processPaypalPayment($paypalId, $amount) {
        // Dummy implementation for processing PayPal payment
    }
}

?>
