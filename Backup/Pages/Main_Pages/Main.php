<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Document</title>
</head>

<body>

    <header>
       <?php include '../../Templates/Header.php';?>
    </header>
   
    <navbar>
    <?php include '../../Templates/NavBar.php'; ?>
    </navbar>
    <?php include '../../Templates/slideshow.php';?>
    <?php include '../../Templates/Reservation.php';?>
    <?php include '../../Templates/KitchenSink.php';?>
    
    <?php include '../../Templates/LocationLine.php';?>
    <footer>
    <?php include '../../Templates/Footer.php'; ?>
    </footer>
</body>

</html>