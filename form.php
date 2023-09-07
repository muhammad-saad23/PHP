<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style>
    /* h1{
        text-align:center;
    } */
</style>
</head>
<body>
    <div class="container mt-4">
        <h1 style='text-align:center';>REGISTER FORM</h1>
        
    <form action="test.php" method='POST' class='form-group'>
        <label for="name">Name</label>
        <input type="text" name='name' required class='form-control'>
        <br>
        <label for="email">Email</label>
        <input type="email" name='email' required class='form-control'>
        <br>
        <label for="pass">password</label>
        <input type="password" name='pass' required class='form-control'>
        <br>
        <input type="submit" name='submit' class='btn btn-success' value="register">
    </form>
    </div>
</body>
</html>