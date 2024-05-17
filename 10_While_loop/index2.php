
<?php
    $second = 0;
    $running = true;

    while ($running){

        if(isset($_POST["stop"])){
            $running=false;
        }
        else{
            $second++;
            echo $second . "<br>";
        }
    }
?>
