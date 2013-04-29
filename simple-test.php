<?php
$config = require 'config/local.config.php';
$dbconfig = $config['db_master'];
$hostname = $dbconfig['host'];
$dbname = $dbconfig['dbname'];
$user = $dbconfig['user'];
$pass = $dbconfig['pass'];
mysql_connect("$hostname","$user","$pass") or die(mysql_error());
echo "Connected to MySQL<br />";
mysql_select_db("$dbname") or die(mysql_error());
echo "Connected to Database";
?>

