<?php
require('config.php');

$retriveData="SELECT * from `register-form`";
$sqlQuery=mysqli_query($connection,$retriveData);
if ($sqlQuery) {
    // print_r($sqlQuery);
    if (mysqli_num_rows($sqlQuery)>0) {
        $row =mysqli_fetch_assoc($sqlQuery);
        echo $row['id'];
        echo $row['Name'];
        echo $row['Email'];
        echo $row['password'];

        // $a=1;
        // while ($a > 0) {
        //   $result= mysqli_free_result($retriveData);
        //   echo $result[$a];
        //     $a++;
        // }
            
        
    }
}


?>