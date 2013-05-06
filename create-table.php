<?php
echo '<h1>Welcome to Demo...</h1>';
echo '<h1>Running a little test...</h1>';
// Read the config and set up the database connection
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
   echo "<a href='index.php'>Login Again</a>;
   }
else
{
echo "<form action='createrecord.php' method='post'><table border='1' align='center'><tr><td>Employee Name: </td><td><input type='text' name='emp_name'></td></tr><tr><td>Employee Address: </td><td><input type='text' name='emp_address'></td></tr><tr><td>Employee Email: </td><td><input type='text' name='emp_email'</td></tr><tr><td>Employee Salary: </td><td><input type='text' name='emp_salary'</td>/tr><tr><td colspan = "2" align="right"> <input type="submit" value="Login"></td></tr></table></form>";
}
?>

