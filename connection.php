<?php
     
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="form";
  

 //create connection
 
 $con = mysqli_connect($servername, $username, $password, $dbname);

 // create connection

 if($con->connect_error) {
 	die("connection Error:" .$con->connect_error);
 }





?>