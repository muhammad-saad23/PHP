<?php
include('header.php');
require('config.php');

$retriveData="SELECT * from `form` where status='0'";
$sqlQuery=mysqli_query($connection,$retriveData);
if ($sqlQuery) {
    // print_r($sqlQuery);
    if (mysqli_num_rows($sqlQuery)>0) {
        // $row =mysqli_fetch_assoc($sqlQuery);
        // echo $row['id'];
        // echo $row['Name'];
        // echo $row['Email'];
        // echo $row['password'];           
        
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>

    </div>
  </div>
</nav>
    <div class="container">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
    while ($row=mysqli_fetch_assoc($sqlQuery)) {
   
    ?>
    <tr>
      <th scope="row"><?php  echo $row['id']?></th>
      <td><?php  echo $row['name']?></td>
      <td><?php  echo $row['email']?></td>
      <td><a href="restore.php?id=<?php echo $row['id']?>">restore</a></td>
      <td><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></td>
      
      
      
    </tr>
<?php
 }
}
}
?>
</tbody>
</table>

    </div>

</body>
</html>