<?php

require_once "Rectangle.php";

class Square extends Rectangle
{

	public function __construct($height) {
		parent::__construct($height, $height);
	}

	public function perimeter() {
		return ($this->height * 2) + ($this->width * 2);
	}

    public function privatePerimeter() {
    	return ($this->getHeight() * 2) + ($this->getWidth() * 2);
    }

	public function area() {
    	return $this->height * $this->width;
    }

    public function privateArea() {
    	return $this->getHeight() * $this->getWidth();
    }

}