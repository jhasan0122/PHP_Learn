<?php
    function happy_birthday($first_name,$age){
        echo "Happy Birthday dear {$first_name} <br>";
        echo "Happy Birthday to you <br>";
        echo "Happy Birthday dear you <br>";
        echo "You are {$age} years old <br><br>";
    }

//    happy_birthday("Jehan", 24);
//    happy_birthday("Hasan",45);

    function is_even($number){
        if($number%2==0){
            return "Even";
        }
        return "Odd";
    }

    echo is_even(33);





?>
