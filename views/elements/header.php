<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title?></title>
</head>
<body>
<?php 
        foreach($links as $link){
            echo $link;
        }
    ?>
    <div class="header">
        <div class="menu">
            <a href="index.php">Home</a>
            <a href="cart.php">Cart</a>
        </div>
    </div>
