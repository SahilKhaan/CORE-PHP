<?php
include  'my.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>newdata</title>
</head>
<body>
    <div>
        <form action="" method="post" >
        <input type="text" name="firstname" placeholder="lastname" >
        <br><br>
        <input type="text" name="lastname" placeholder="lastname" >
        <br><br>
        <input type="number" name="age" placeholder="age" >
        <br><br>
 
        <input type="radio" name="gender" placeholder="gender" >male
        <input type="radio" name="gender" placeholder="gender" >female
        <br><br>
        <input type="submit" name="save_btn" value="save" >
 
        <button> <a href="view.php">view </a>
        </button>
        </form>
        </div>

<?php
if(isset($_POST['save_btn'])) {
  $fname =  $_POST['firstname'];
  $lname =  $_POST['lastname'];
  $age =  $_POST['age'];


 $query = "insert into student (firstname,lastname,age)
  values ('$fname','$lname','$age') ";
  $data= mysqli_query($con,$query);
  
} 




?>

   
</body>
</html>