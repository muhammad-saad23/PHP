<?php

include('config.php');


$user_id=$_GET['id'];

$update="UPDATE `form` set status='0' where id='$user_id'";
$run_query=mysqli_query($connection,$update);

if ($run_query) {
    echo "<script>alert('data added on trash')</script>";
    header('location:trashData.php');
}
else{
    echo"query failed" ;
}



?>