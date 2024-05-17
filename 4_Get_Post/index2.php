<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index2.php" method="get">
    <label >Quantity:</label>
    <input type="text" name="quantity">
    <input type="submit" value="total">
</form>

</body>
</html>

<?php
    $item = 'Pizza';
    $price =5.99;
    $quantity =  $_GET["quantity"];
    $total = $quantity * $price;

    echo "You have orderd {$quantity} x {$item}/s <br>";
    echo "Your total is: \${$total}";

?>
