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

// Usage example
$account = new Account(1000);
$account->deposit(500);
$account->withdraw(200);
echo "Current balance: " . $account->getBalance(); // Output: Current balance: 1300

?>
