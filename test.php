<?php
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";
// echo "welcome to my website" . "<br>";
// echo $_REQUEST['name'] . "<br>";
// echo $_REQUEST['email'] . "<br>";
// echo $_REQUEST['pass'] . "<br>";

include('config.php');

if (isset($_POST['submit'])) {
    $name =$_POST['name'];
    $email =$_POST['email'];
    $pass =$_POST['pass'];

    $query="INSERT INTO `register-form` (`name`,`email`,`password`) VALUES ('$name','$email','$pass') ";

    $result=mysqli_query($connection,$query);
}

?>