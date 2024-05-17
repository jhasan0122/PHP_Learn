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
    <input type="radio" name="credit_card" value="Visa">
    Visa<br>
    <input type="radio" name="credit_card" value="Mastercard">
    Mastercard<br>
    <input type="radio" name="credit_card" value="American Express">
    American Express<br>
    <input type="submit" name="confirm" value="Confirm">
</form>

</body>
</html>

<?php

    if(isset($_POST["confirm"])) {

        $credit_card = null;

        if(isset($_POST['credit_card'])) {
            $credit_card = $_POST["credit_card"];
        }

        if($credit_card == "Visa"){
            echo "You selected Visa";
        }
        elseif($credit_card == "Mastercard"){
            echo "You selected Mastercard";
        }
        elseif($credit_card == "American Express"){
            echo "You selected American Express";
        }
        else {
            echo "Please make a selection";
        }
    }

?>
