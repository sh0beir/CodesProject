<?php

class Account {
    private $balance;

    public function __construct($balance) {
        $this->balance = $balance;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        $this->balance -= $amount;
    }
}

class Customer {
    private $account;

    public function __construct($balance) {
        $this->account = new Account($balance);
    }

    public function getBalance() {
        return $this->account->getBalance();
    }

    public function deposit($amount) {
        $this->account->deposit($amount);
    }

    public function withdraw($amount) {
        $this->account->withdraw($amount);
    }
}

// Usage example
$customer = new Customer(1000);
$customer->deposit(500);
$customer->withdraw(200);
echo "Current balance: " . $customer->getBalance(); // Output: Current balance: 1300

?>
