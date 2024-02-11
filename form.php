<?php 
include('config/db_connect.php');
$email=$title=$ingredients='';
$errors=array('email'=>'','title'=>'','ingredients'=>'');
//$_POST is the global array (email,title,ingrdients)
/*The isset($_POST['submit']) condition is often used to check if 
the form has been submitted, as it checks whether the "submit" button was present in the form data.
 If the form is submitted, the code inside the conditional block is executed to process the form data.*/
if(isset($_POST['submit'])){
    //echo htmlspecialchars($_POST['ingredients']);
    //check validation
    if(empty($_POST['email'])){
        $errors['email']="empty email";
    } else {
        //echo htmlspecialchars($_POST['email']);
      $email=$_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
          $errors['email']= "email not valid";
        }
    }

    if(empty($_POST['title'])){
        $errors['title']="empty title";
    } else {
        $title=$_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
            $errors['title']="title not valid";
        }
        //echo htmlspecialchars($_POST['title']);
    }
    if(empty($_POST['ingredients'])){
        $errors['ingredients']="empty ingredients";
    } else {
        $ingredients=$_POST['ingredients'];
        /*if(!preg_match('/^[a-zA-Z\s]+$/',$ingredients)){
            $errors['ingredients']="tingredients are not valid";
        }*/
        //echo htmlspecialchars($_POST['ingredients']);
    }
    if(array_filter($errors)){
      //echo "errors";
    } else{
        
        //protecting from sql injection protecting data going to the database
        //$_POST['email'] is the value we get from the user
        $email=mysqli_real_escape_string($conn,$_POST['email']);
        $title=mysqli_real_escape_string($conn,$_POST['title']);
        $ingredients=mysqli_real_escape_string($conn,$_POST['ingredients']);

        //create sql 
     $sql="INSERT INTO  pizzas(title,email,ingredients) VALUES('$title','$email','$ingredients')";

     //save to db and check
     if(mysqli_query($conn,$sql)){
        //success
        header("Location:about.php");
     }else{
        //error
        echo 'query failed'. mysqli_error($conn);
     }
   
    }
}
?>
<html>
    <?php 
    include('templates/header.php');?>
    
    <section class="container grey-text">
        <h4 class="center">Add Pizzas</h4>
        <form class="white" action="form.php" method="POST">
            <label>Your email :</label>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <div class="red-text"><?php echo $errors["email"]; ?></div>
            <label>Pizza Title :</label>
            <input type="text" name="title" value="<?php echo $title; ?>">
            <div class="red-text"><?php echo $errors["title"]; ?></div>
            <label>Ingredients :</label>
            <input type="text" name="ingredients" value="<?php echo $ingredients; ?>">
            <div class="red-text"><?php echo $errors["ingredients"];?></div>
            <div class="center">
              <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
        </form>
              
    </section>
    <?php include('templates/footer.php');?>
    </html>