<?php
$config = require 'config/local.config.php';
$dbconfig = $config['db_master'];
$hostname = $dbconfig['host'];
$db = $dbconfig['dbname'];
$user = $dbconfig['user'];
$pass = $dbconfig['pass'];
$con=mysql_connect("$hostname","$user","$pass","$db");
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }

$result = mysqli_query($con,"SELECT * FROM employee");
echo "Connected to Employee Database";
echo "<table border='1'> <tr> <th>Employee ID</th> <th>Employee Name</th> <th>Address</th> <th>Email</th> <th>Salary</th></tr>";
while($row = mysqli_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>" . $row['emp_ID'] . "</td>";
   echo "<td>" . $row['emp_name'] . "</td>";
   echo "<td>" . $row['emp_address'] . "</td>";
   echo "<td>" . $row['emp_email'] . "</td>";
   echo "<td>" . $row['emp_salary'] . "</td>";
   echo "</tr>";
   }
 echo "</table>";
 mysqli_close($con);
?>
