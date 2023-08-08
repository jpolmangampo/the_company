<?php
include "../classes/User.php";

// create an object of User class
$user = new User;

// call login method of user object
$user->login($_POST);
