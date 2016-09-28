
<?php 
class Rectangle { 
    public $height = 'aMemberVar Member Variable'; 
    public $width = 'aMemberFunc'; 
    
    public function __construct($height, $width) {
    	$this->height = $height;
    	$this->width = $width;
    }

    public function area() {
    	return $this->height * $this->width;
    }

    public function perimeter() {
		return ($this->height * 2) + ($this->width * 2);
	}
} 

 
?>





<!-- Add a perimeter() method to your Rectangle class, and an area() method to your Square class. Neither of these should call a parent. Which method is overriding? Which one is a base method? -->