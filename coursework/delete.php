<?php
include("db_connection.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM details WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Employee deleted successfully<br>";
        echo "<a href='index.php'>Back to Employee List</a>";
    } else {
        echo "Error: " . $conn->error;
    }
    
    $conn->close();
}
?>