
<?php
include("db_connection.php");
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "UPDATE details 
            SET position='Manager' 
            WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Employee promoted to Manager successfully<br>";
        echo "<a href='index.php'>Back to Employee List</a>";
    } else {
        echo "Error: " . $conn->error;
    }
    
    $conn->close();
}
?>