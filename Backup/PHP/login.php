<?php
require_once("connection.php");
require_once("User.php");

$user = new User();

$user->login();
?>