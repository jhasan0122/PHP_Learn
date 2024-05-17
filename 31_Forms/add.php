<?php
//    if(isset($_GET['submit'])){
//        echo $_GET['email'];
//        echo $_GET['title'];
//        echo $_GET['ingredient'];
//    }
    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            echo "Email is empty" . '<br>';
        }else{

            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "email must be a valid email address". '<br>';
            }
//            echo htmlspecialchars($_POST['email']) . '<br>' ;
        }

        if(empty($_POST['title'])){
            echo "Title is empty" . '<br>';
        }else{
            $title = $_POST['title'];

            if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
                echo "title must be comma and separated list". '<br>';
            }
//            echo htmlspecialchars($_POST['title']) . '<br>' ;
        }

        if(empty($_POST['ingredient'])){
            echo "Ingredient is empty" . '<br>';
        }else{
            $ingredient = $_POST['ingredient'];
            if(!preg_match('/^([a-zA-Z\s]+)(,[a-zA-Z\s]*)*$/',$ingredient)){
                echo "Ingredient must be letter and space only". '<br>';
            }
        }
    }
?>

<!doctype html>
<html lang="en">
<?php include ('templates/header.php') ?>

<section class="container grey-text">Add a Pizza</section>
<form action="add.php" method="POST" class="white">
    <label>Your Email:</label>
    <input type="text" name="email">
    <label>Pizza Title:</label>
    <input type="text" name="title">
    <label>Ingredients(comma separated) :</label>
    <input type="text" name="ingredient">
    <div class="center">
        <input type="submit" name="submit" class="btn brand z-depth-0">
    </div>
</form>


<?php include ('templates/footer.php') ?>
</html>
