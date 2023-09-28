<?php
define('DB_HOST','localhost');
define('DB_USER','u623942019_KSMBBVSite');
define('DB_PASS','WebSite@KSMBBV2022');
define('DB_NAME','u623942019_KSMBBV_Website');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>