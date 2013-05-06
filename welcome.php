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
   echo "Login Incorrect! Please try again";
   echo "<br><br><a href='index.php'>Go Back</a>";
   }
else
{
$check = mysqli_query($con,"SELECT user_name FROM user where user_name='$username'") or die(mysql_error());   
$uvalue =mysqli_fetch_array($check); 
echo $check;
echo $uvalue;
if ($uvalue == $username)  
{
echo "<html><head><body align='center'><h1>Welcome to Employee Database System</h1>";
echo "<table border='1', align='center'><tr> <th><font color='red'>Quick Tasks</font></th></tr>";
echo "<tr><th><a href='showemployees.php'>show Employee Records</a><th></tr>";
echo "<tr><th><a href='empform.php'>Create Employee Record</a></th></tr></table></body></html>";
}
else
{
echo "Login Incorrect! Please try again";
echo "<br><br><a href='index.php'>Go Back</a>";
}
}
?>
