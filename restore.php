<?php

include('config.php');

$user_id=$_GET['id'];

$restore="UPDATE `form` set status='1' where id='$user_id'";
$run_query=mysqli_query($connection,$restore);
if ($run_query) {
    echo '<script> alert(restored)</script>';
    header('location:read.php');
}
else{
    echo "query failed";
}

?>