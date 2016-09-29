<?php

require_once "Square.php";

$rectangle = new Rectangle(15, 2);
echo "Rectangle area: " . $rectangle->area() . PHP_EOL;
echo "Rectangle perimeter: " . $rectangle->perimeter() . PHP_EOL;

$square = new Square(6);
echo "Square perimeter: " . $square->privatePerimeter() . PHP_EOL;
echo "Square area: " . $square->privateArea() . PHP_EOL;
