<?php
$username = $_POST['username']; 
$config = require 'config/local.config.php';
$dbconfig = $config['db_master'];
$hostname = $dbconfig['host'];
$db = $dbconfig['dbname'];
$user = $dbconfig['user'];
$pass = $dbconfig['pass'];
$con=mysqli_connect("$hostname","$user","$pass","$db");
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   }
else
{
$result = mysqli_query($con,"SELECT * FROM employee");
echo "<html><head><body align='center'><h1>Connected to Employee Database</h1>";
echo "<table border='1', align='center'><tr> <th><font color='red'>Employee ID</font></th> <th><font color='red'>Employee Name</font></th> <th><font color='red'>Address</font></th> <th><font color='red'>Email</font></th> <th><font color='red'>Salary</font></th></tr>";
while($row = mysqli_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>" . $row['emp_id'] . "</td>";
   echo "<td>" . $row['emp_name'] . "</td>";
   echo "<td>" . $row['emp_address'] . "</td>";
   echo "<td>" . $row['emp_email'] . "</td>";
   echo "<td>" . $row['emp_salary'] . "</td>";
   echo "</tr>";
   }
 echo "</table>";
 echo "</body></html>";
 mysqli_close($con);
}
echo "<br><br><a href='welcome.php'>Go Back</a>";
?>
