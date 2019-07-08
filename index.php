
<?php

include("connection.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
    <script  src="message.js">
    </script>


<style>
</style>

</head>
<body>
<form action="action.php" class="container" method="POST">
<center>
<h1>Registration Form</h1>
<br><br>
       
       <font face="verdana" size="4" > FirstName </font> 
        <input type="text" name="firstname" placeholder="Enter your first Name" ><br><br>
        <font face="verdana" size="4"> LastName </font>   
        <input type="text" name="lastname" placeholder="Enter your Last Name"  maxlength="20"><br><br>
        <font face="verdana" size="4"> Password </font> 
        <input type="password" name="password" placeholder="Enter your password"><br><br>
        <font face="verdana" size="4"> Email </font>   
        <input type="email" name="email"><br><br>
        <font face="verdana" size="4"> Mobile </font> 
        <input type="number" name="mobile"><br><br>
        <font face="verdana" size="4"> Gender </font> 
      <input type="radio" name="gender" value="male">Male
      <input type="radio" name="gender" value="female">female <br><br>

        
        <font face="verdana" size="4"> Dob</font> 
        <input type="date" name="dob"><br><br>
     <font face="verdana"  size="4">I  <input type="checkbox"> all agree required filled</font> <br><br>,
     <br>
         <input type="submit" name="submit">  </input>
            
    
    </center>
    </form>

</body>
</html>





  