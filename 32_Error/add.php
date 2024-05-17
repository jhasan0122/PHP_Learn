<?php
//    if(isset($_GET['submit'])){
//        echo $_GET['email'];
//        echo $_GET['title'];
//        echo $_GET['ingredient'];
//    }

    include('connection/db_conn.php');

    $title = $email = $ingredient = '';
    $error = array('email'=>'', 'title'=>'','ingredient'=>'');


    if(isset($_POST['submit'])){
        if(empty($_POST['email'])){
            $error['email'] = "Email is empty" . '<br>';
        }else{

            $email = $_POST['email'];
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $error['email'] = "email must be a valid email address". '<br>';
            }
        }

        if(empty($_POST['title'])){
            $error['title'] = "Title is empty" . '<br>';
        }else{
            $title = $_POST['title'];

            if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
                $error['title'] = "title must be comma and separated list". '<br>';
            }
        }

        if(empty($_POST['ingredient'])){
            $error['ingredient'] = "Ingredient is empty" . '<br>';
        }else{
            $ingredient = $_POST['ingredient'];
            if(!preg_match('/^([a-zA-Z\s]+)(,[a-zA-Z\s]*)*$/',$ingredient)){
                $error['ingredient'] = "Ingredient must be letter and space only". '<br>';
            }
        }

        if(array_filter($error)){
//            error in the form
        }
        else{

//            to save the database
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $title = mysqli_real_escape_string($conn,$_POST['title']);
            $ingredient = mysqli_real_escape_string($conn,$_POST['ingredient']);

//            create sql
            $sql = "INSERT INTO pizzas(title,email,ingredients) VALUES 
                    ('{$title}','{$email}','{$ingredient}')";

            if(mysqli_query($conn,$sql)){
//                success
                header('Location: index.php');
            }
            else{
//                error
                echo "Query error" . mysqli_error($conn);
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
    <input type="text" name="email" value="<?php echo htmlspecialchars($email)?>">
    <div class="red-text"><?php echo $error['email'] ?></div>
    <label>Pizza Title:</label>
    <input type="text" name="title" value="<?php echo htmlspecialchars($title)?>">
    <div class="red-text"><?php echo $error['title'] ?></div>
    <label>Ingredients(comma separated) :</label>
    <input type="text" name="ingredient" value="<?php echo htmlspecialchars($ingredient)?>">
    <div class="red-text"><?php echo $error['ingredient'] ?></div>
    <div class="center">
        <input type="submit" name="submit" class="btn brand z-depth-0">
    </div>
</form>


<?php include ('templates/footer.php') ?>
</html>
