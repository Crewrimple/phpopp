<?php

class Car {
    //properties - are variables inside the class
    public $comp; //property without a value
    public $color = "blue";
    
    //methods - functions inside a class
    public function setColor($car_color) {
        $this->color = $car_color;
    }

    public function setValues($brand, $model, $color){
        
    }
    //access anywhere
    public function getColor() {
        return $this->color;
    }
    //access in this class only
    private function getPrivate() {
        return "I am a private function";
    }
    //access in this class and child classes
    protected function getProtected() {
        return "I am a protected function";
    }
}

?>