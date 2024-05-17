<?php
    $username = "Bro Code";

    $phone = "123-456-7890";

//    $username = strtolower($username);
//    $username =strtoupper($username);
//    $username = trim($username);
//    $username =str_pad($username,20,"0");
//    $username = strrev($username);
//    $username=str_shuffle($username);
//    $equal=strcmp($username,"Bro Code");
//    $count = strlen($username);
//    $index = strpos($username, " ");
//    $index = strpos($phone,"-");

    $firstname=substr($username,0,3);
    $lastName =substr($username,4);


//    Explde
    $fullname = "Bro The Code";
    $fullNameArr = explode(" ", $fullname);

//    Implode
    $fullNameArray = array("The","Bro","Code");
    $FULLNAME = implode(" ", $fullNameArray);



//    $phone =str_replace("-","/",$phone);

//    echo $username;
//    echo $phone;
//    echo $equal;
//    echo $count;
//    echo $index;
//    echo $firstname;
//    echo $lastName;

//    foreach ($fullNameArr as $name){
//        echo $name . "<br>";
//    }
    echo $FULLNAME;





?>
