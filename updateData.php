<?php

include('header.php');
include('config.php');

if (isset($_POST['update'])) {
    $user_id =$_POST['id'];
    $user_name =$_POST['name'];
    $user_email =$_POST['email'];

    $update ="UPDATE `form` set name = '$user_name',email='$user_email' where id='$user_id'";

    $result=mysqli_query($connection,$update);
    if ($result) {
        echo 'ok';
    }
}

?>