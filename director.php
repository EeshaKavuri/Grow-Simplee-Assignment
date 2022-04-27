<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}
else{
    echo "Connection was successful<br>";
}
if(isset($_POST['director'])){
    $str = mysqli_real_escape_string($con,$_POST['str']);
    $sql = "SELECT director, rating FROM `search` WHERE name LIKE '%$str%';";
    $res = mysqli_query($con,$sql);
    echo $sql;
    if(mysqli_query($res)>0){
      while($row=mysqli_fetch_assoc($res)){
        echo $sql;
      }
    }

  }
?>
