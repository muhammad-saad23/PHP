<?php
include('header.php');
include('config.php');

$user_id=$_GET['id'];

$delete="DELETE from `form` where id='$user_id'";
$result=mysqli_query($connection,$delete);

if ($result) {
    echo 'ok';
}


?>