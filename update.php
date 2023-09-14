<?php

include('config.php');

$user_id=$_GET['id'];

$fetch="SELECT * FROM `form` where id= '$user_id' ";

$query=mysqli_query($connection,$fetch);

if (mysqli_num_rows($query)>0) {
   while($row=mysqli_fetch_assoc($query)){

    

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-4">
<form action="test.php" method='POST' class='form-group'>
        <label for="name">Name</label>
        <input type="hidden" name='name' required value='<?php echo $row['id']?>' class='form-control'>
        <input type="text" name='name' required class='form-control' value='<?php echo $row['Name']?>'>
        <br>
        <label for="email">Email</label>
        <input type="email" name='email' required class='form-control' value='<?php echo $row['Email']?>'>
       
        <br>
        <input type="submit" value="register" class='btn btn-success'>
        </div>

        <?php
        
    }
}
        ?>
</body>
</html>