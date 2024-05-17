<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    username:<br>
    <input type="text" name="username"><br>
    Age:<br>
    <input type="text" name="age"><br>
    Email:<br>
    <input type="email" name="email"><br>
    <input type="submit" name="login" value="login">
</form>

</body>
</html>

<?php
    if(isset($_POST['login'])){
        $username = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST,"age",
        FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST,'email',FILTER_SANITIZE_EMAIL);

        echo "Hello {$username}, Your are {$age} old.
        Your email is {$email} <br><br>";




        $age = filter_input(INPUT_POST,"age",
        FILTER_VALIDATE_INT);

        if(empty($age)){
            echo "That number wasn't valid <br>";
        }
        else{
            echo "You are {$age} years old <br>";
        }

        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

        if(empty($email)){
            echo "That Email wasn't valid <br>";
        }
        else{
            echo "Your email is {$email}<br>";
        }

    }

?>
