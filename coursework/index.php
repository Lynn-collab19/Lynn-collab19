<!DOCTYPE html>
<html lang="en">
<head>
   <title>Employees</title>
</head>
<body>
   <h1>Employees</h1>
   <?php
   // Only connect to database, do not insert
   $conn = new mysqli("localhost", "root", "", "employees");
   if($conn->connect_error){
      die("connection failed". $conn->connect_error);
   }
   $sql = "SELECT id,firstname,email,position FROM details";
   $result = $conn->query($sql);
   if (!$result) {
      die("Query failed: " . $conn->error);
   }
   if ($result->num_rows > 0) {
      echo "<table border='1' cellpadding='5'><tr><th>ID</th><th>First Name</th><th>Email</th><th>Position</th><th>Actions</th></tr>";
      while($row = $result->fetch_assoc()) {
         echo "<tr>";
         echo "<td>" . $row["id"] . "</td>";
         echo "<td>" . $row['firstname'] . "</td>";
         echo "<td>" . $row['email'] . "</td>";
         echo "<td>" . $row['position'] . "</td>";
         echo "<td><a href='update.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
         echo "</tr>";
      }
      echo "</table>";
   } else {
      echo "<p>No employees found.</p>";
   }
   $conn->close();
   ?>
   <br><a href='form.php'>Add an Employee</a><br>
</body>
   
</html>