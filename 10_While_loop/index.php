
<?php
//    $counter = 0;
//    while ($counter<10){
//        echo $counter . "<br>";
//        $counter++;
//    }

    $second = 0;
    $running =true;

    while ($running){
        if($second>20 && $second<25){
            continue;
        }

        if($second > 50){
            break;
        }
        $second++;
        echo $second . "<br>";
    }

?>
