<?php
include 'my.php';
?>
<a href="index.php">home </a>
<table border="1px"cellpadding="10px" >
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th colspan="2">Action</th>
    </tr>
    <?php
$query=" select* from student ";
$data = mysqli_query($con,$query);
$result = mysqli_num_rows($data);
if($result){
    while ($row=mysqli_fetch_array($data)){
        ?>
        <tr>
        <td> <?php  echo $row['firstname'] ?></td>
        <td><?php  echo $row['lastname'] ?></td>
        <td><?php  echo $row['age'] ?></td>
        <td><a href="update.php?id=<?php  echo $row['id'] ?>"</a>edit</td>

        <td> <a onclick="return confirm('are you sure,you want to delete? ')" href="delete.php?id=<?php echo $row['id']         ?>">delete</a></td>
        </tr>
        <?php

    }

}





?>
</table>
