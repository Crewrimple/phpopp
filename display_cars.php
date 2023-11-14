<?php
require_once "Car.php";

//create an object/instance of the class
$mercedes = new Car;
$bmw = new Car;
$audi = new Car;

$mercedes->color = "green";
echo "The color of mercedes is " . $mercedes->color;
echo "<br>";
$bmw->color = "red";
echo "The color of bmw is " . $bmw->color;
echo "<br>";
echo "The color of audi is " . $audi->color;

$audi->setColor("Yellow");

echo "<br>";
echo $audi->getColor();

echo "<br>";
echo $bmw->getColor();


$car = new Car;

$car->setValues();

$car->getBrand();

$car->getModel();

$car->getColor();