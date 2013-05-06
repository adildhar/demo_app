
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
$con=mysqli_connect("$hostname","$user","$pass","$db");
if (mysqli_connect_errno())
   {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
   echo "Login Incorrect! Please try again";
   echo "<br><br><a href='index.php'>Go Back</a>";
   }
else
{




}
?>

