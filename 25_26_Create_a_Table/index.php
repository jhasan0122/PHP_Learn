<?php
    include("database.php");

//    $username = "Spongebob";
//    $password = "pineapple1";

//    $username = "Squidward";
//    $password = "clarinet2";

    $username = "pattric";
    $password = "rock3";



    $hash =password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (user,password)
            values ('$username','$hash')";

    try {
        mysqli_query($conn,$sql);
        echo "Users is now registered";
    }
    catch (mysqli_sql_exception){
        echo "Could not register user";
    }

    mysqli_close($conn);
?>




