<?php

    include('connection/db_conn.php');

//    Write query for all pizzas
    $sql = "SELECT title,ingredients,id FROM pizzas ORDER BY created_at";

//    make query & get result
    $result = mysqli_query($conn,$sql);

//    fetch the resulting row as an array

    $pizzas = mysqli_fetch_all($result,MYSQLI_ASSOC);

//    Free result from memory
    mysqli_free_result($result);


//    Close connections
mysqli_close($conn);

//    print_r($pizzas);
?>

<!doctype html>
<html lang="en">
    <?php include ('templates/header.php') ?>

    <h4 class="center grey-text">Pizzas</h4>
    <div class="container">
        <div class="row">
            <?php foreach ($pizzas as $singlePizza) : ?>
                <div class="col s6 md3">
                    <div class="card z-depth-0">
                        <div class="card-content center">
                            <h6><?php echo htmlspecialchars($singlePizza['title']) ?></h6>
                            <div><?php echo htmlspecialchars($singlePizza['ingredients']) ?></div>
                        </div>
                        <div class="card-action right-align">
                            <a href="" class="brand-text">more info</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <?php if(count($pizzas)  >= 2 ): ?>

            <p>There are 2 or more pizzas</p>

            <?php else: ?>
                <p>there are less than 2 pizza</p>

            <?php endif ?>


        </div>
    </div>


    <?php include ('templates/footer.php') ?>
</html>
