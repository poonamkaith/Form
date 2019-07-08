<?php
include('connection.php');
$id = $_REQUEST['id'];
$sql = "DELETE FROM registration WHERE id=$id";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}


?>