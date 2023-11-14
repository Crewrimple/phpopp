<?php
require_once "CarActivity.php";

//create an object of class CarActivity to use the methods & properties
$car = new CarActivity;

if(isset($_POST['submit'])) {
    $date = $_POST['myDate'];

    $car->setDate($date);
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
        <label>Date</label>
        <input type="date" name="myDate"><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <hr>
    <h2>Output</h2>
    <p>The date is <?php echo $car->getDate(); ?></p>
</body>
</html>