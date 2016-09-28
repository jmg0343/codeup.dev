<?php

require_once "Rectangle.php";
require_once "Square.php";

$rectangle = new Rectangle(15, 2);
echo $rectangle->area() . PHP_EOL;
echo $rectangle->perimeter() . PHP_EOL;

$square = new Square(6);
echo $square->perimeter() . PHP_EOL;
echo $square->area();



