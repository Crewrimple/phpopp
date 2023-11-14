<?php
require_once "CarActivity.php";

//create an object of class CarActivity to use the methods & properties
$car = new CarActivity("John Doe");

if(isset($_POST['submit'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $color = $_POST['color'];

    $car->setValues($brand, $model, $color);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Brand</label>
        <input type="text" name="brand"><br>
        <label>Model</label>
        <input type="text" name="model"><br>
        <label>Color</label>
        <input type="text" name="color"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <hr>
    <h2>Output</h2>
    <p>The brand is <?php echo $car->getBrand(); ?></p>
    <p>The model is <?php echo $car->getModel(); ?></p>
    <p>The color is <?php echo $car->getColor(); ?></p>
    <p>The hidden function is <?php echo $car->hiddenFunction(); ?></p>
    $ca
</body>
</html>