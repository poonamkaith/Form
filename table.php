<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<table style="width:100%" id="a">
  <tr>
    <th id="a"> id </th>
    <th id="a">firstname</th>
    <th id="a">lastname</th> 
    <th id="a">password</th>
    <th id="a">email</th>
    <th id="a">mobile</th>
    <th id="a">gender</th>
    <th id="a">dob</th>
    <th id="a">button</th>
    
    
  </tr>
<?php
include('connection.php');
$sql = "SELECT * FROM registration order by id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
          $i=0;
    while($row = $result ->fetch_assoc()) {
            $i++;
            ?>
          <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $row['firstname'];?></td>
          <td><?php echo $row['lastname'];?></td>
          <td><?php echo $row['password'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['mobile'];?></td>
          <td><?php echo $row['gender'];?></td>
          <td><?php echo $row['dob'];?></td>


         <td> <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-primary">edit</a>
          <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-primary">delete</a>
          <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-primary">Update</a>

         </td>


          

        </tr>
          <?php

    }
} else {
    echo "<tr><td>No data found  </td></tr>";
}
?> 


<?php



$sql = "UPDATE registration SET lastname='kaith' WHERE id=2";

if ($con->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $con->error;
}



?>
</table>
</body>
</html>


