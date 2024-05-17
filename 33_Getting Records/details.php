<?php

    include ('connection/db_conn.php');

//  Check GET request id parameter
    if(isset($_GET['id'])){
        $id = mysqli_real_escape_string($conn,$_GET['id']);

//        Make sql
        $sql = "SELECT *  FROM pizzas WHERE id = $id";

//        Get the query result
        $result = mysqli_query($conn,$sql);

//        Fetch result in the array format
        $singlePizza = mysqli_fetch_assoc($result);

        mysqli_free_result($result);
        mysqli_close($conn);

        print_r($singlePizza);
    }

?>

<!doctype html>
<html lang="en">
    <?php include ('templates/header.php') ?>

    <div class="container center">
        <?php if($singlePizza): ?>
            <h4><?php echo htmlspecialchars($singlePizza['title'])?></h4>
            <p>Created by:<?php echo htmlspecialchars($singlePizza['email'])?></p>
            <p><?php echo date($singlePizza['created_at'])?></p>
            <h5>Ingredients:</h5>
            <p><?php echo htmlspecialchars($singlePizza['ingredients'])?></p>
        <?php else: ?>

            <h1>No such pizza exist</h1>

        <?php endif; ?>
    </div>

    <?php include ('templates/footer.php') ?>

</html>
