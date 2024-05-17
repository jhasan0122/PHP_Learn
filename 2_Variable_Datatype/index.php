<?php
  $name = "Jehan Hasan";
  echo $name;
  echo '<br>';
  echo "Hello {$name} <br>";

  $food= "Pizza";
  echo "You like {$food}<br>";

  $email = "fake123@gmail.com";
  echo "Your email is {$email}<br>";

  $age = 21;
  echo "You are {$age} years old";

  $users = 2;
  echo "There are {$users} online.<br>";

  $quantity = 3;
  echo "You would like to buy {$quantity} items<br>";

  $gpa = 2.5;
  echo "Your gpa is {$gpa} <br>";

  $price = 4.99;
  echo "Yours pizza is \${$price} <br>";

  $tax_rate = 5.1;
  echo "You would tax rate is : {$tax_rate}% <br>";

  $employed = true;
  $online = false;
  $for_sale = true;

  echo "Online status: {$online}<br>";
  echo "Employed: {$employed}<br>";
  echo "You hav eorderd {$quantity} x {$food}<br>";

  $total = null;
  $total = $quantity * $price;
  echo "Your total is \${$total}"










?>
