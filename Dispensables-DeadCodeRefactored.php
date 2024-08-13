<?php

class Calculator {

    public function add($a, $b) {
        return $a + $b;
    }
}

$calculator = new Calculator();
echo $calculator->add(5, 3);  // Output: 8

?>
