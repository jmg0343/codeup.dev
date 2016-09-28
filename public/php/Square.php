<?php

require_once "Rectangle.php";

class Square extends Rectangle
{

	public function __construct($height) {
		// $this->height = $height;
		// $this->width = $height;
		parent::__construct($height, $height);
	}

	public function perimeter() {
		return ($this->height * 2) + ($this->width * 2);
	}

	public function area() {
    	return $this->height * $this->width;
    }
}




