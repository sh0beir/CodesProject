<?php

class Calculator {

    // Unused variable
    private $history = [];

    public function add($a, $b) {
        return $a + $b;
    }

    // This method is never called anywhere
    public function subtract($a, $b) {
        return $a - $b;
    }
}

$calculator = new Calculator();
echo $calculator->add(5, 3);  // Output: 8

?>
