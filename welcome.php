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
echo "<h1> Welcome to Employee Records Database</h1>";
echo "<a href='showemployees.php'>show Employee Records</a><br>";
echo "<a href='createrecord.php'>Create Employee Record</a><br>";
}
else
{
echo "Login Incorrect! Please try again";
echo "<br><br><a href='index.php'>Go Back</a>";
}
?>
