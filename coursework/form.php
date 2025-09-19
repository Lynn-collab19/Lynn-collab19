<!DOCTYPE HTML>
<html lang="en">
  <head>
  
  <title>EmployeeRecords</title>
  </head>
  <body>
    <h1>New Employee</h1>
    <form action="add.php"  method="post">
      <label>firstname</label><br>
      <input type="text" name="firstname" required><br>
       <label>lastname</label><br>
      <input type="text" name="lastname" required><br>
      <label>email</label><br>
      <input type="text" name="email" required><br>
      <label>phonecontact</label><br>
      <input type="integer" name="phonecontact" required><br>
      <label>Position</label><br>
      <input type="text" name="position" required><br>
       <label>department</label><br>
      <input type="text" name="department" required><br>
       <label>salary</label><br>
      <input type="integer" name="salary" ><br>
      <label>Join_date</label><br>
      <input type="date" name="join_date" required><br><br>
      <input type="submit" name="submit">
    </form>
  </body>
</html>