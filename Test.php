<?php
require_once "Car.php";

//create a class inhereting Car class
class Test extends Car {
    
    //override/replace the function with the same name from parent class
    public function getColor() {
    
        $this->getProtected();
        return "Orange";
    }
}