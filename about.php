<?php
include('config/db_connect.php');

//write query for all pizzas from pizzas table
//$sql='SELECT * FROM pizzas'; to get all params from database tables
$sql='SELECT title,ingredients,email,id FROM pizzas';

//make query and get result
$result=mysqli_query($conn,$sql);

//fetch the result rows an array
$pizzas=mysqli_fetch_all($result,MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

//print_r($pizzas);
//htmlspecialchars to protect from malicious users xss attacks
//make array of ingredients
//print_r(explode(',',$pizzas[0]['ingredients']))
?>
<html>
    <?php 
    include('templates/header.php');?>
    <h4 class="center grey-text">Pizzas</h4>
    <div class="container">
     <div class="row">
        <?php foreach($pizzas as $pizza): ?>
            <div class="col s6 md3">
                <div class="card z-depth-0">
                    <div class="card-content center">
                        <h6><?php echo htmlspecialchars($pizza['title'])?></h6>
                        <div><?php echo htmlspecialchars($pizza['ingredients']) ?>
                        <ul>
                            <?php 
                            $ingredients=explode(',',$pizza['ingredients']);
                            foreach($ingredients as $ingredient):?>
                            <li><?php echo htmlspecialchars($ingredient)?></li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                        <div class="card-action right-align">
                            <a class="brand-text" href="details.php?id=<?php echo $pizza['id'];?>">more info</a>
                        </div>
                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

     </div>
    </div>
    <?php include('templates/footer.php');?>
</html>