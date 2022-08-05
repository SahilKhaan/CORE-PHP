<?php
include 'my.php';
$id= $_GET['id'];
 $query = "DELETE FROM student WHERE id = '$id'";
 $data= mysqli_query($con,$query);
 if ($data){
    ?>
    <script type="text/javascript">
        alert("dte deleted successfully");
        window.open("http://localhost//new-php/view.php", "_self");
    </script>
<?php
 }

 else {
    ?>
    <script type="text/javascript">
        alert("please try again");
    </script>
    <?php
 }



?>


