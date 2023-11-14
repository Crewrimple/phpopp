<?php
require_once "User.php";

//get the user id from the url
$user_id = $_GET['user_id'];

//create an object of class User
$user = new User;

//delete the user
$user->deleteUser($user_id);

?>