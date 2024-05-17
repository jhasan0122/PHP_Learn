<?php
    $age = 15 ;

    if($age >=18){
        echo "You may enter this site";
    }
    elseif ($age == 0){
        echo "You wre just born";
    }
    else{
        echo "You must be 18+ to enter";
    }

    echo "<br>";

    $adult = true;
    if($adult){
        echo "You may enter this site";
    }
    else{
        echo "You must be 18+ to enter";
    }
?>
