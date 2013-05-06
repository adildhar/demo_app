<?php
$emp_name = $_POST['emp_name'];
$emp_address = $_POST['emp_address'];
$emp_email = $_POST['emp_email'];
$emp_salary = $_POST['emp_salary'];
$config = require 'config/local.config.php';
$dbconfig = $config['db_master'];
$hostname = $dbconfig['host'];
$db = $dbconfig['dbname'];
$user = $dbconfig['user'];
$pass = $dbconfig['pass'];

$db_handle = mysql_connect($hostname, $user, $pass);
$db_found = mysql_select_db($db, $db_handle);
if ($db_found) {
$sql = "INSERT INTO employee(emp_id, emp_name, emp_address, emp_email, emp_salary) VALUES (' ','$emp_name','$emp_address','$emp_email','$emp_salary')";
$result = mysql_query($sql);
mysql_close($db_handle);
print "Records added to the database";
}
 else {
print "Database NOT Found ";
echo "Login Incorrect! Please try again";
echo "<br><br><a href='index.php'>Go Back</a>";
 mysql_close($db_handle);
}
?>
