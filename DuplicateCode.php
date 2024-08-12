
<?php

class Rectangle {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }

    public function calculatePerimeter() {
        return 2 * ($this->width + $this->height);
    }
}

class Circle {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}

// Usage example
$rectangle = new Rectangle(5, 10);
echo "Rectangle Area: " . $rectangle->calculateArea() . "\n";
echo "Rectangle Perimeter: " . $rectangle->calculatePerimeter() . "\n";

$circle = new Circle(7);
echo "Circle Area: " . $circle->calculateArea() . "\n";
echo "Circle Perimeter: " . $circle->calculatePerimeter() . "\n";

?>
