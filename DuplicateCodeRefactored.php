<?php

abstract class Shape {
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
}

class Rectangle extends Shape {
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

class Circle extends Shape {
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
function displayShapeDetails(Shape $shape) {
    echo "Area: " . $shape->calculateArea() . "\n";
    echo "Perimeter: " . $shape->calculatePerimeter() . "\n";
}

$rectangle = new Rectangle(5, 10);
displayShapeDetails($rectangle);

$circle = new Circle(7);
displayShapeDetails($circle);

?>
