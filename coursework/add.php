<?php
include("db_connection.php");

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phonecontact = $_POST['phonecontact'];
    $position = $_POST['position'];
    $department = $_POST['department'];
    $salary = $_POST['salary'];

    $sql = "INSERT INTO details (firstname, lastname, email, phonecontact, position, department, salary) 
    VALUES('$firstname', '$lastname', '$email', '$phonecontact', '$position', '$department', '$salary')";
    
    if(mysqli_query($conn, $sql)){
        echo "Employee added<br>";
        echo "<br><a href='form.php'>Add Another</a><br>";
        echo "<a href='index.php'>View All</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
    
    mysqli_close($conn);
}
?>