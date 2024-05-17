<?php
    session_start();
?>

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
    This is the login page<br>
    <a href="home.php">This goes to the home page</a>
</body>
</html>

<?php
    $_SESSION['username'] = "BroCode";
    $_SESSION['password'] = 'pizza123';

    echo $_SESSION['username'] . "<br>";
    echo $_SESSION['password'] . "<br>";
?>