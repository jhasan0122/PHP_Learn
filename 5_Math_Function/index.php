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
<form action="index.php" method="post">
    <label >x: </label>
    <input type="text" name="x">
    <label ><br>y: </label>
    <input type="text" name="y">
    <label ><br>z: </label>
    <input type="text" name="z">
    <input type="submit" value="total">
</form>

</body>
</html>
<?php
    $x =  $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null;
//    $total = abs($x);
//    $total=round($x);
//    $total=floor($x);
//    $total=ceil($x);
//    $total=pow($x,$y);
//    $total=sqrl($x);
//    $total=max($x,$y,$z);
//    $total=min($x,$y,$z);
//    $total=pi();
//    $total=rand(1,100);

    echo $total;

?>
