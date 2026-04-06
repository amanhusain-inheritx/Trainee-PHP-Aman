<?php
    class Car{
        public $brand;
        public $color;
        public function __construct($brand,$color){
            $this->brand = $brand;
            $this->color = $color;
        }
        public function get_drive(){
            echo"".$this->brand."".$this->color."";
            echo "Drive a Car";
        }
        public function stop(){
            echo "".$this->brand."".$this->color."\n";
            echo "Stop the Car";
        }
    }
    $car = new Car("Honda","Black");
?>