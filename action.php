<?php

include("connection.php");

if (isset($_POST ['submit'])){
 

	
	$f = $_POST['firstname'];
	$l = $_POST['lastname'];
	$p = $_POST['password'];
	$e = $_POST['email'];
	$m = $_POST['mobile'];
	$g = $_POST['gender'];
	$b = $_POST['dob'];

  $a= "INSERT INTO registration(firstname, lastname, password, email, mobile, gender, dob)
         VALUES ('".$f."','".$l."','".$p."','".$e."','".$m."','".$g."','".$b."')";


if ($con->query($a) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $a . "<br>" . $con->error;
}

}
?>

