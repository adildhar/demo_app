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
   echo "<a href="index.php">Login Again</a>;
   }
else
{






}
?>

