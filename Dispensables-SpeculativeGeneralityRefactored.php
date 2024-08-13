<?php

class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

class Square {
    private $sideLength;

    public function __construct($sideLength) {
        $this->sideLength = $sideLength;
    }

    public function calculateArea() {
        return pow($this->sideLength, 2);
    }
}

// Usage example
$circle = new Circle(5);
echo "Circle area: " . $circle->calculateArea() . "\n";

$square = new Square(4);
echo "Square area: " . $square->calculateArea() . "\n";

?>
