<?php

    $foods = array("apple","orange","banana","coconut");

    $foods[0] = "pinepple";

    array_push($foods,"apple");
    array_pop($foods);
    array_shift($foods);
    $rev_food = array_reverse($foods);

//    echo $foods[0] . "<br>";
//    echo $foods[1] . "<br>";
//    echo $foods[2] . "<br>";
//    echo $foods[3] . "<br>";
//    foreach ($foods as $x){
//        echo $x . "<br>";
//    }

    foreach ($rev_food as $y){
        echo $y . "<br>";
    }

    echo count($foods) ."<br>";


?>
