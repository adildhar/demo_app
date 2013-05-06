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
$check = mysqli_query($con,"SELECT user_name FROM user where user_name='$username'") or die(mysql_error()); 
$uvalue =mysqli_fetch_array($check);
if ($uvalue = "$username")
{
$result = mysqli_query($con,"SELECT * FROM employee");
echo "Connected to Employee Database";
echo "<table border='1', align='center'><tr> <th><font color='red'>Employee ID</font></th> <th>Employee Name</th> <th>Address</th> <th>Email</th> <th>Salary</th></tr>";
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
 mysqli_close($con);
}
?>
