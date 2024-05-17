<?php

    $capitals =array("USA"=>"Washington D. C.",
                    "Japan"=>"Tokyo",
                    "South Korea"=>"Seoul",
                    "India"=>"New Delhi");

//    echo $capitals["USA"] . "<br>";

    $capitals["USA"] = "Las Vegas";
    $capitals["China"] = "Beijing";

    array_pop($capitals);
    array_shift($capitals);


//    Keys
    $keys =  array_keys($capitals);
    foreach ($keys as $key){
        echo "{$key} <br>";
    }
    echo "<br>";

//    Value
    $values =  array_values($capitals);
    foreach ($values as $value){
        echo "{$value} <br>";
    }
    echo "<br>";

//    Full Array

    echo count($capitals) . "<br>";
    $capitals = array_reverse($capitals);

    foreach ($capitals as $key=> $value){
        echo "{$key}'s capital is {$value} <br>";
    }
    echo "<br>";

//    FLip
    $capitals = array_flip($capitals);
    foreach ($capitals as $key=> $value){
        echo "{$key} is {$value}'s capital <br>";
    }


?>
