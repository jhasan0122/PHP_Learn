<?php

//    Connect to database
$conn = mysqli_connect('localhost','root','','ninja_pizza');

//    check connection
if(!$conn){
    echo "Connection erro" . mysqli_connect_error();
}

?>
