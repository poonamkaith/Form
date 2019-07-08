
<?php

include("connection.php");

$sql = "SELECT id, firstname, lastname FROM  registration";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " ". $row["password"]." " . $row["mobile"]." " . $row["gender"]." ". $row["dob"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 

