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
<<<<<<< HEAD

<form action="index2.php" method="post">
    <label> radius </label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">
</form> <br>
=======
<form action="index2.php" method="post">
    <label>Radius:</label>
    <input type="text" name="radius">
    <input type="submit" value="calculate">

</form>
>>>>>>> 57f5b695537e6ce9ce83a97ef7bdeaa0db5fd719

</body>
</html>

<<<<<<< HEAD
<?php
    $radius = $_POST["radius"];
    $circumference = null;
    $area = null ;
    $volume = null;

    $circumference= 2 * pi() * $radius;
    $circumference = round($circumference, 2);

    $area = pi() * pow($radius, 2);
    $area =round($area , 2);

    $volume = 4/3 * pi() * pow($radius,3);
    $volume = round($volume,2);

    echo "Circumerence = {$circumference}cm <br>";
    echo "Area = {$area}cm^2 <br> ";
    echo "Volume = {$volume}cm^3 <br>"
=======

<?php
    $radius =$_POST["radius"];
    $circumference = null;
    

    $circumference = 2 * pi() * $radius;

    echo "Circumference = {$circumference}cm <br>";


>>>>>>> 57f5b695537e6ce9ce83a97ef7bdeaa0db5fd719


?>
