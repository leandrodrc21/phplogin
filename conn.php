<?php
// Connection variables
/*$dbhost	= "mysqld";	   // localhost or IP
$dbuser	= "php";		  // database username
$dbpass	= "12345678";		     // database password
$dbname	= "miphp";    // database name*/

 
$dbhost = getenv("MYSQL_SERVICE_HOST");
$port = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpass = getenv("databasepassword");
$dbname	= "miphp"; 

print $dbuser;
print $port;
print $dbuser;
print $dbname;

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$con)
{
	print("Not Connected<br>".mysql_error());
}
else
{
	echo("Connected");
}








?>
