<?php
echo '<h1>Welcome to Demo...</h1>';
echo '<h1>Running a little test...</h1>';
// Read the config and set up the database connection
$config = require 'config/local.config.php';
$dbconfig = $config['db_master'];
$hostname = $dbconfig['host'];
$dbname = $dbconfig['dbname'];
$user = $dbconfig['user'];
$pass = $dbconfig['pass'];
$conn = mysql_connect("$hostname","$user",$pass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
  echo '<div style="color:red; font-size: xx-large;">Whoops!</div> I can\'t see the application database';
}
print ("Connected successfully\n");
echo '<div style="color:darkgreen; font-size: xx-large;">OK!</div>';
print ("I can see the application database.\n");
$sql ='CREATE TABLE employee(emp_id INT NOT NULL AUTO_INCREMENT,emp_name VARCHAR(20) NOT NULL, emp_address  VARCHAR(20) NOT NULL,emp_salary INT NOT NULL, primary key ( emp_id ))';
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table employee created successfully\n";
mysql_close($conn);
?>

