<?php
    class Rectangle
    {
        //Khai bao thuoc tinh
        public $height;
        public $width;
        
        public function __construct() {
            $this -> width = 100;
            $this -> height = 200;
        }
        
        public function getPerimeter(){
            return 2*($this->width + $this->height);
        }
        
        public function getArea(){
            return $this->width * $this->height;
        }
    }
    
    $rec01 = new Rectangle();
    $perimeter01 = $rec01 ->getPerimeter();
    $area01 = $rec01 ->getArea();
    echo "Perimeter of rectangle is $perimeter01"; 
    echo "<br>";
    echo "Area of rectangle is $area01"; 
//    echo $rec01 ->getArea();
?>

